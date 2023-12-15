<?php 
    session_start();
    require 'vaga.model.php';
    require 'vaga.service.php';
    require 'conexao.php';

    $acao = isset($_GET['acao']) ?  $_GET['acao'] : $acao;

    if($acao=='cadastrar'){

        $vaga = new Vaga();
        $vaga->__set('titulo', $_POST['titulo']);
        $vaga->__set('modalidade', $_POST['modalidade']);
        $vaga->__set('salario', $_POST['salario']);
        $vaga->__set('descricao', $_POST['descricao']);
        $vaga->__set('id_perfil', $_SESSION['perfil_id']);
        $vaga->__set('id_usuario', $_SESSION['id']);
        

        $conexão = new Conexao();

        $vagaService = new VagaService($conexão, $vaga);
        $vagaService->inserir();
        
        header('Location: page_cadastrar_vaga.php?inclusao=1');
    } else if ($acao=='recuperar'){

        
        $vaga = new Vaga();
        $conexão =new Conexao();

        $vagaService = new VagaService($conexão, $vaga);
        $vagas = $vagaService->recuperar($_SESSION['perfil_id'], $_SESSION['id']);

    }

    

?>