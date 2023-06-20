<?php
  include('../mysql/connect.php');

  $cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);
  echo "$cpf <br/> $senha";
  $comando = "SELECT * FROM users WHERE cpf='$cpf' AND senha='$senha'";
  try{
    $query = mysqli_query($connect, $comando);
  }catch(\Exception $e){
    echo "<br/><span style='color: red;'>Erro ao buscar usuário no banco</span>";
  }
  $num_rows = mysqli_num_rows($query);
  if ($num_rows == 1) {
    echo "<br/>Usuário existe, realizar login";
    $user = mysqli_fetch_assoc($query);
    echo "<br/>";
    unset($user['senha']);
    $user_cookie = serialize($user);
    setcookie('user', $user_cookie, time() + 3600, '/');
    header('Location: ../index.php');
  }else{
    header('Location: login.html');
  }
?>
