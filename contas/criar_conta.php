<?php
  try {
    $connect = mysqli_connect('localhost:3306', 'root', '', 'banco');
  } catch (\Exception $e) {
    echo "<span style='color: red;'>Erro ao se conectar com o banco: </span>" . $e;
  }

  $cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
  $nome = mysqli_real_escape_string($connect, $_POST['nome']);
  $nome_completo = mysqli_real_escape_string($connect, $_POST['nome_completo']);
  $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);

  echo "$cpf <br/> $nome <br/> $nome_completo <br/> $nascimento";

  $comando = "INSERT INTO users VALUES ('$cpf', '$nome', '$nome_completo', '$nascimento', 0)";
  $query = mysqli_query($connect, $comando);
  if ($query) {
    echo "<br/>Usuário criado com sucesso";
  }else{
    echo "<br/>Erro ao criar o usuário!!!";
  }


?>
