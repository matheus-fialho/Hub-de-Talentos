<?php
    
    session_start();
    
    require 'candidatura.model.php';
    require 'candidatar.service.php';
    require 'conexao.php';

    $modo = isset($_GET['modo']) ?  $_GET['modo'] : $modo;
   
    if($modo=='candidatar'){

        $candidatura  = new Candidatura();
        $conexao = new Conexao();

        $candidatura->__set('id_vaga', $_GET['id_vaga']);
        $candidatura->__set('id_candidato', $_SESSION['id']);
        $candidatura->__set('id_cadastrou', $_GET['id_usuario']);

        $candidatarService = new CandidatarService($conexao, $candidatura);
        $candidatarService->inserir();

        //Falta dar um feedback visual de que a a candidatura foi realizada com sucesso
        header('Location:page_consultar_vaga.php');

    }else if($modo=='visualizar'){
        $candidatura  = new Candidatura();
        $conexao = new Conexao();

        $candidatarService = new CandidatarService($conexao, $candidatura);
        $candidaturas = $candidatarService->recuperar();

    }

?>