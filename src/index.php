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

  <section class="banner">
    <img src="https://static.netshoes.com.br/bnn/l_netshoes/2025-06-03/1886_full1_desk_descontou_banner.png" style="width: 100%; height: 350px;">
  </section>

  <section class="categorias">
    <h2>Categorias</h2>
    <div class="grid-categorias">
      <div class="categoria">Tênis</div>
      <div class="categoria">Roupas</div>
      <div class="categoria">Acessórios</div>
      <div class="categoria">Esportes</div>
    </div>
  </section>

  <section class="produtos">
    <h2>Mais Vendidos</h2>
    <div class="grid-produtos">

      <?php
      while($prods = $sql_produtos->fetch_assoc()){
      ?>
      <div class="produto">
        <img src="<?php echo $prods['url_imagem'];?>" alt="Produto 1">
        <h3>
          <?php echo $prods['descricao'];?>
        </h3>
        <p>R$ <?php echo $prods['preco'];?></p>
      </div>
        <?php
      }
        ?>

      <a href="novo_produto.php">
        <button type="submit" name="novo_produto" style="width: 150px; height: 200px; cursor:pointer"> + Novo produto</button>
      </a>

    </div>
  </section>

      <?php
      include_once('footer.php')
      ?>
</body>
</html>
