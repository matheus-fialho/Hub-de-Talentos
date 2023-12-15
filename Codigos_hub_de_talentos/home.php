<?php
  require_once("validador_acesso.php");
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Hub de Talentos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Hub de Talentos
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <?php
                  if($_SESSION['perfil_id']==1){
                    echo '

                      <div class="col-6 d-flex flex-column align-items-center">
                        <h5>Cadastrar vaga</h5>
                        <a href="page_cadastrar_vaga.php">
                          <img src="formulario_abrir_vaga.png" width="70" height="70">
                        </a>
                      </div>
                      <div class="col-6 d-flex flex-column align-items-center">
                        <h5>Minhas vagas Cadastradas</h5>
                        <a href="page_consultar_vaga.php">
                          <img src="formulario_consultar_vaga.png" width="70" height="70">
                        </a>
                      </div>
                    ';
                  } else {
                    echo '
                      <div class="col-12 d-flex justify-content-center">
                        <h5>BUSCAR VAGAS</h5>
                      </div>
                      <div class="col-12 d-flex justify-content-center">
                        <a href="page_consultar_vaga.php">
                          <img src="formulario_consultar_vaga.png" width="70" height="70">
                        </a>
                      </div>
                    ';
                  }
                 ?>
                

              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>