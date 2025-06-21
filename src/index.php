<?php

include_once('conexao.php');

$produtos = "select * from produtos";
$sql_produtos = mysqli_query($mysqli,$produtos);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clone Netshoes</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <main>
      <?php
        include_once('./components/header.php')
      ?>

      <?php
        include_once('./components/menu-bar.php')
      ?>

      <?php
        include_once('./components/banner.php')
      ?>

      <?php
        include_once('./components/categorias.php')
      ?>

      <?php
        include_once('./components/produtos.php')
      ?>
  </main>

      <?php
        include_once('./components/footer.php')
      ?>
</body>
</html>
