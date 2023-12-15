<?php

  require_once("validador_acesso.php");

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Hub de Talentos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-vaga {
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
        HUB de talentos
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
    <!-- Checa  se a vaga esta sendo inserida ou não -->
    <?php
      if(isset($_GET['inclusao']) && $_GET['inclusao']==1){
    ?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5>Vaga cadastrada com sucesso!</h5>
    </div>
    <?php
    }
    ?>

    <div class="container">    
      <div class="row">
      
        <div class="card-abrir-vaga">
          <div class="card">
            <div class="card-header">
              Cadastrar Vaga
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="vaga.controller.php?acao=cadastrar">
                    <div class="form-group">
                      <label>Título da vaga</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Ex.: Desenvolvedor Full-Stack">
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label>Modalidade</label>
                        <select name="modalidade" class="form-control">
                          <option value="1">Home Office</option>
                          <option value="2">Presencial</option>
                        </select>
                      </div>
                    
                      <div class="form-group col-6">
                        <label>Salário</label>
                        <input name="salario" type="number" class="form-control">
                        <!--<div class="form-text">Informe o salário.</div>-->
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                    

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>