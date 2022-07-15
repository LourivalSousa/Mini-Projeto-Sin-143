<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Evento</title>
</head>
<body>
<div class="d-flex align-items-center flex-column">
  <?php
  include('connect.inc.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM tb_eventos WHERE id = $id";
  $data = $conn->query($sql);
  if($data->num_rows > 0) {
    $row = $data->fetch_assoc();
    $id=$row["id"];
    $nome=$row["nome_evento"];
    echo("<h2 class='mb-5 mt-2'>Informações do evento: $nome</h2>");
    $descricao=$row["descricao"];
    $dataInicio=$row["data_inicio"];
    $dataEncerramento = $row["data_encerramento"];
    $tipo = $row["tipo"];
    $wifi = $row["wifi"];
    $estacionamento_gratis = $row["estacionamento_gratis"];
    $bebida_gratis = $row["bebida_gratis"];
    echo("<div class='d-flex p-4 flex-column border mb-4' style='width: 600px;color: white;'>");
    echo("<h3> $nome </h3>");
    echo("<p>Descrição:  $descricao</p>");
    echo("<p> Data Inicio: $dataInicio </p>");
    echo("<p> Data Inicio: $dataEncerramento </p>");
    if($wifi == 1) echo("<p> Wifi disponivel </p>");
    if($estacionamento_gratis == 1) echo("<p> Estacionamento gratis </p>"); 
    if($bebida_gratis == 1) echo("<p> Bebida gratis</p>");
    echo("<a href='paginaEventos.php'><button class='btn btn-outline-primary mb-2'>Voltar</button></a>");
    echo("</div>");
  }
  ?>
  </div>
</body>
</html>