<?php
    $modo = 'visualizar';
    require 'candidatar.controller.php';
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Hub de Talentos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-vaga {
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
        <div class="card-consultar-vaga">
          <div class="card">
                <div class="card-header">
                    Candidatos
                </div>

                <div class="card-body">

                    <?php foreach($candidaturas as $indice => $candidatura) { 
                        if($_SESSION['perfil_id']==1){
                            if($candidatura->id_cadastrou != $_SESSION['id'] || $candidatura->id_vaga != $_GET['id_vaga']){
                              continue;
                            }
                          }  
                    ?>
                    
                    <div class="card mb-3 bg-light">
                        <p class="card-text"><?php echo $candidatura->email;?></p>
                    </div>

                    <?php } ?>

                </div>
                <div class="row mt-5">
                    <div class="col-6">
                            <a href="page_consultar_vaga.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>