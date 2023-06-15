<?php
  include('../mysql/connect.php');

  $cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
  $nome = mysqli_real_escape_string($connect, $_POST['nome']);
  $nome_completo = mysqli_real_escape_string($connect, $_POST['nome_completo']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);
  $confirm_senha = mysqli_real_escape_string($connect, $_POST['confirm_senha']);
  $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);

  echo "$cpf <br/> $nome <br/> $nome_completo <br/> $nascimento";

  if ($senha == $confirm_senha) {
    $comando = "INSERT INTO users VALUES ('$cpf', '$nome', '$nome_completo', '$email', '$senha', '$nascimento', 0)";
    $query = mysqli_query($connect, $comando);
    if ($query) {
      echo "<br/>Usuário criado com sucesso";
    }else{
      echo "<br/>Erro ao criar o usuário!!!";
    }
  }else{
    echo "<br/>Senhas não coincidem";
  }




?>
