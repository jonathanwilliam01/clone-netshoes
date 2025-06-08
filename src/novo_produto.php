<?php

include_once('conexao.php');

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
  <header>
    <div class="logo">NETSHOES</div>
    <div class="pesquisa">
        <form method="post">
            <input class="pesquisa" type="text" name="pesquisar" placeholder="O que você está procurando?">
        </form>
    </div>
    <nav>
      <ul>
        <li>Fav</li>
        <li>Entrar</li>
        <li>Carr</li>
      </ul>
    </nav>
  </header>

  <section class="menu-bar">
    <div class="menu-bar-opcoes">
      <ul class="bar-ul">
        <li class="bar-li">Informe seu CEP</li>
        <li class="bar-li">Todas as categorias</li>
      </ul>
    </div>
    <div class="menu-bar-categ">
      <ul class="bar-ul">
        <li class="bar-li">CORRIDA</li>
        <li class="bar-li">FUTEBOL</li>
        <li class="bar-li">SPORTSYLE</li>
        <li class="bar-li">FEMININO</li>
        <li class="bar-li">BEM ESTAR</li>
        <li class="bar-li">CUPONS</li>
        <li class="bar-li">PARCEIRAS</li>
      </ul>
    </div>
  </section>

       <a href="index.php">
        <button name="voltar" style="width: 100px; height:50px; margin-bottom: 10px; margin-left: 10px;"> <-Voltar</button>
      </a>

  <section class="cad-produto">

    <form method="post">
        <input type="text" name="descricao" placeholder="Descrição do produto">
        <input type="number" name="valor" placeholder="Valor do produto">
        <input type="text" name="url" placeholder="url da imagem do produto">
        <input type="text" name="quantidade" placeholder="Quantidade do produto">
        
        <input type="submit" name="cadastrar" value="Cadastrar Produto">

        <?php
            if(isset($_POST['cadastrar'])){
                $descricao = $_POST['descricao'];
                $valor = $_POST['valor'];
                $url = $_POST['url'];
                $quantidade = $_POST['quantidade'];

                $insere_prod = "insert into produtos(descricao, preco, quantidade, url_imagem) values ('$descricao', $valor, '$quantidade','$url')";
                $sql_insere_prod = mysqli_query($mysqli,$insere_prod);
            }
        ?>
    </form>
  </section>

   <?php
      include_once('footer.php')
    ?>
</body>
</html>