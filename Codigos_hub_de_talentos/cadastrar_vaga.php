<?php
    session_start();
    //montagem do texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $modalidade = str_replace('#','-',$_POST['modalidade']);
    $salario = str_replace('#','-',$_POST['salario']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id'].'#'.$titulo .'#'. $modalidade.'#'. $salario.'#'.$descricao.PHP_EOL;

    //abrindo e fechando o arquivo
    $arquivo = fopen('arquivo.txt','a');
    fwrite($arquivo,$texto);
    fclose($arquivo);

    header('Location: page_cadastrar_vaga.php');

?><?php
    session_start();
    //montagem do texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $modalidade = str_replace('#','-',$_POST['modalidade']);
    $salario = str_replace('#','-',$_POST['salario']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id'].'#'.$titulo .'#'. $modalidade.'#'. $salario.'#'.$descricao.PHP_EOL;

    //abrindo e fechando o arquivo
    $arquivo = fopen('arquivo.txt','a');
    fwrite($arquivo,$texto);
    fclose($arquivo);

    header('Location: page_cadastrar_vaga.php');

?>