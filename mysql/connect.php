<?php
  try {
    $connect = mysqli_connect('localhost:3306', 'weslley', 'lelo2004', 'banco');
  } catch (\Exception $e) {
    echo "<span style='color: red;'>Erro ao se conectar com o banco: </span>" . $e;
  }
?>
