<?php
  include('mysql/connect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>aaaaa</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <?php
      if (isset($_COOKIE['user'])) {
        echo "Ok, você pode ficar";
        echo '<br/>'.$_COOKIE['user'];
      }else{
        header('Location: ../contas/login.html');
        echo "Cadê o biscoito???";
      }
    ?>
    <div class="deslogar_div">
      <a href="/contas/gerenciar_conta.php"><img class="icon_user" src="imgs/icon_user.png" alt=""></a>
      <a class="deslogar" href="?button=true">Deslogar</a>
    </div>
    <?php
      if (isset($_GET['button'])) {
        unset($_COOKIE['user']);
        //setcookie('user');
        header('Location: ../contas/login.html');
      }
    ?>

  </body>
</html>
