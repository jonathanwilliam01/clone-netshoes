<?php

include_once '../conexao.php';

$produtos = "select * from produtos where id = $_GET[id]";
$sql_produtos = mysqli_query($mysqli,$produtos);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clone Netshoes</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
   <main>
    <?php
        include_once('../components/header.php')
    ?>
    <?php
        include_once('../components/menu-bar.php')
    ?>

<section class="produtos">
  <?php while($prods = $sql_produtos->fetch_assoc()){ ?>
    <div class="infos">
        <h2><?php echo $prods['descricao']; ?></h2>
        <p>Ref: 00.000.000.00.00000</p>
        <h3>Classificação: </h3>
        <p><b>Composição: </b></p>
        <p>Indicado para:</p>
        <p>Material:</p>
        <p>Pisada:</p>
        <p>Importante:</p>
        <p>Garantia do Fabricante:</p>
    </div>

    <div class="imagens">
        <img src="<?php echo $prods['url_imagem']; ?>" alt="Produto">
    </div>

    <div class="valores">
        <p>R$ <?php echo $prods['preco']; ?></p>
    </div>
  <?php } ?>
</section>

   </main>
   
    <?php
        include_once('../components/footer.php')
    ?>

<style>
.produtos{
  display: flex; 
  padding: 20px;
  height: 90%;
}

.infos,
.imagens,
.valores {
  flex: 1;          
}

img{
    width:500px;
    height: 500px;
}

.infos{
    width: 10%;
    height: 100%;
}

.imagens{
    width: 58%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.valores{
    width: 22%;
    height: 100%;
}
</style>

</body>
</html>