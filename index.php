<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>aaaaa</title>
  </head>
  <body>

    <?php
      if (isset($_COOKIE['user'])) {
        echo "Ok, você pode ficar";
      }else{
        header('Location: ../contas/login.html');
      }
    ?>

  </body>
</html>
