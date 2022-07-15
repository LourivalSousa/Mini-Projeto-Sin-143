<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Eventos Cadastrados</title>
</head>
<body>
  <header class="d-flex align-items-center flex-column mt-3"><a href="cadastroEventos.php"><button class='btn btn-outline-primary mb-2'>Cadastrar</button></a></header>
  <div class="d-flex align-items-center flex-column">
    <h2 class="mb-5 mt-2">Eventos Cadastrados</h2>
  <?php
  include('connect.inc.php');
  
  $sql = "SELECT * FROM tb_eventos";
  
  $data = $conn->query($sql);
  if($data->num_rows > 0) {
    while($row = $data->fetch_assoc()){
      $id=$row["id"];
      $nome=$row["nome_evento"];
      $descricao=$row["descricao"];
      $dataInicio=$row["data_inicio"];
      $dataEncerramento = $row["data_encerramento"];
      $tipo = $row["tipo"];
      $wifi = $row["wifi"];
      $estacionamento_gratis = $row["estacionamento_gratis"];
      $bebida_gratis = $row["bebida_gratis"];
      echo("<div class='d-flex p-4 flex-column border mb-4' style='width: 600px;'>");
      echo("<h3> $nome </h3>");
      echo("<p>Descrição:  $descricao</p>");
      echo("<p> Data Inicio: $dataInicio </p>");
      echo("<p> Data Inicio: $dataEncerramento </p>");
      if($wifi == 1) echo("<p> Wifi disponivel </p>");
      if($estacionamento_gratis == 1) echo("<p> Estacionamento gratis </p>"); 
      if($bebida_gratis == 1) echo("<p> Bebida gratis</p>");
      echo("<a href='evento.php?id=$id'><button class='btn btn-dark'> Vizualizar </button></a>");
      echo("</div>");
    }
  }
  ?>
  </div>
</body>
</html>