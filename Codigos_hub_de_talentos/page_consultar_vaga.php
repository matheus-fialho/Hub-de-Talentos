<?php
  $acao = 'recuperar';
  require 'vaga.controller.php';
  /*
  echo '<pre>';
  print_r($vagas);
  echo '</pre>';
  */
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
              Consulta de vagas
            </div>
            
            <div class="card-body">
              
              <?php foreach($vagas as $indice => $vaga) { 
                if($_SESSION['perfil_id']==1){
                  if($vaga->id_usuario != $_SESSION['id']){
                    continue;
                  }
                }
                
                ?>
                
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $vaga->titulo?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $vaga->modalidade?></h6>
                    <p class="card-text"><?php echo $vaga->descricao?></p>
                    <p class="fw-bold"><?php echo 'R$ '.$vaga->salario?></p>
                  </div>
                  
                  <?php
                    if($_SESSION['perfil_id']==1){
                      echo '<a href="page_lista_candidaturas.php?id_vaga=' .$vaga->id. '" class="btn btn-secondary btn-lg btn-block">Visualizar quem teve interesse</a>';
                    }else{
                      echo '<a href="candidatar.controller.php?modo=candidatar'.'&id_usuario='. $vaga->id_usuario .'&id_vaga=' . $vaga->id . '" class="btn btn-primary btn-lg btn-block">Quero me candidatar</a>';
                    }
                  ?>

                </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>