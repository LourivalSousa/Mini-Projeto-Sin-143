<?php
include ("connect.inc.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Cadastro de Eventos</title>
</head>
<body>
  <script src="./javascript/script.js"></script>
  <div class="d-flex align-items-center flex-column mt-3" style="margin-left: 140px">
    <a href="paginaEventos.php"><button class='btn btn-info mb-2'>Eventos Cadastrados</button></a>
  </div>
  <div class="mainBox">
    <main class="formContainer">
      <form action="cadastroBd.php" method="post" id="eventForm">
        <h1>Cadastro de Eventos</h1>
        <label for="nome">Nome do Evento</label><br>
        <input class="form-control" type="text" id="nome" name="nome"><br>
        <label for="descricao">Descrição do Evento</label><br>
        <input class="form-control" type="text" id="descricao" name="descricao""><br> 
        <label for="dataInicio">Data Inicio</label><br>
        <input class="form-control form-control-sm" type="date" id="dataInicio" name="dataInicio"><br>
        <label for="dataEncerramento">Data Encerramento</label><br>
        <input class="form-control form-control-sm" type="date" id="dataEncerramento" name="dataEncerramento"><br>
        <label for="tipoEvento">Tipo do evento</label><br>
        <input class="form-control form-control" type="text" id="tipoEvento" name="tipoEvento"><br><br>
        <label onclick="enviaForm()" >Possui</label><br>
        <div class="form-check">
          <input class="form-check-input" name="wifi" type="checkbox">WIFI<br>
          <input class="form-check-input" name="estacionamento_gratis" type="checkbox">Estacionamento grátis<br>
          <input class="form-check-input" name="bebida_gratis" type="checkbox">Bebida grátis<br><br>
        </div>
        <label class="form-label" for="banner">Baner</label><br>
        <input class="form-control" type="file" id="img" name="img" accept="image/*"> <br>
        <input class="btn btn-primary" type="button" value="Enviar" onclick="enviaForm()">
      </form>
    </main>
  </div>
</body>
</html>