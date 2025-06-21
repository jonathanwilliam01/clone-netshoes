<section class="categorias">
    <h2>Categorias</h2>
    <div class="grid-categorias">
      <div class="categoria">Tênis</div>
      <div class="categoria">Roupas</div>
      <div class="categoria">Acessórios</div>
      <div class="categoria">Esportes</div>
    </div>
</section>

<style>
.categorias{
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.grid-categorias {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.categoria {
  background-color: #eee;
  padding: 20px;
  flex: 1;
  min-width: 150px;
  text-align: center;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
}

.categoria:hover {
  background-color: #ddd;
}
</style>