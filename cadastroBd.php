<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Cadastro</title>
</head>
<body>
  <div class="d-flex align-items-center flex-column">
  <?php
  include('connect.inc.php');
  $nome=$_POST["nome"];
  $descricao=$_POST['descricao'];
  $dataInicio=$_POST['dataInicio'];
  $dataEncerramento=$_POST['dataEncerramento'];
  $tipoEvento=$_POST['tipoEvento'];

  $wifi = isset($_POST['wifi']) ? 1 : 0; 
  $estacionamento_gratis= isset($_POST['estacionamento_gratis']) ? 1 : 0;
  $bebida_gratis= isset($_POST['bebida_gratis']) ? 1 : 0;

  $sql="INSERT INTO tb_eventos (nome_evento, descricao, data_inicio, data_encerramento, tipo, wifi, estacionamento_gratis, bebida_gratis) VALUES ('$nome','$descricao','$dataInicio','$dataEncerramento','$tipoEvento','$wifi','$estacionamento_gratis','$bebida_gratis')";

    if($conn->query($sql) === TRUE){
      echo "Novo registro criado com sucesso!";
    }else{
      echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
  ?>
  <br>  
  <a href="cadastroEventos.php"><button class='btn btn-outline-primary mb-2'>Voltar</button></a>
  <a href="paginaEventos.php"><button class='btn btn-outline-info mb-2'>Eventos Cadastrados</button></a>
  </div>
</body>
</html>
