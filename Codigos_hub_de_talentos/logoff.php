<?php
    session_start();
    //remover inidces de arrays de sessão
    //unset()

    //destruir a variavel de sessão
    session_destroy();
    header('Location: index.php');

?>