<section class="produtos">
  <h2>Mais Vendidos</h2>
  <div class="grid-produtos">
    <?php while($prods = $sql_produtos->fetch_assoc()){ ?>
      <a href="nav/produto.php?id=<?php echo $prods['id']; ?>">
        <div class="produto">
          <img src="<?php echo $prods['url_imagem']; ?>" alt="Produto">
          <h3><?php echo $prods['descricao']; ?></h3>
          <p>R$ <?php echo $prods['preco']; ?></p>
        </div>
      </a>
     <?php } ?>

    <a href="../nav/cadastros/novo_produto.php">
      <div class="produto novo">
        <button type="button" style="width: 150px; height: 200px; cursor:pointer"">+ Novo produto</button>
      </div>
    </a>
  </div>
</section>

<style>
.produtos {
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.produto {
  padding: 15px;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.2s;
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.produto:hover {
  transform: scale(1.02);
}

.produto img {
  max-width: 100%;
  border-radius: 8px;
}

.grid-produtos {
  display: grid;
  align-items: center;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 20px;
}

h2 {
  margin-bottom: 20px;
  color: #5a2d82;
}

a{
    text-decoration: none;
    color: inherit;
}
</style>