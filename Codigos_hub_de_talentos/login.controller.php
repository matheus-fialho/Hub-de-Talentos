<?php
    
    session_start();

    require 'login.model.php';
    require 'login.service.php';
    require 'conexao.php';

    //$usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $login  = new Login();

    $conexao = new Conexao();
    $loginService = new LoginService($conexao, $login);

    $usuarios = $loginService->recuperar_login($_POST['email'], $_POST['senha']);
    echo isset($usuarios);
    if(!empty($usuarios)){
        echo '<pre>';
        print_r($usuarios);
        echo '</pre>';

        //$usuario_autenticado = true;
        $usuario_id = $usuarios[0]->id;
        $usuario_perfil_id = $usuarios[0]->id_perfil;

        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        header('Location: index.php?login=erro1');
        $_SESSION['autenticado'] = 'NÃO';
    }
?>