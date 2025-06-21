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

<style>
    .menu-bar{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 5px;
  height: 80px;
}

.menu-bar-opcoes{
  display: flex;
  justify-content: flex-start;
  align-items: center;
  height: 100%;
  width: 25%;
}

.menu-bar-categ{
  height: 100%;
  width: 75%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  height: 100%;
  margin-left: 50px;
}

.bar-ul{
  display: inline-flex;
  justify-content: space-around;
  align-items: center;
  list-style: none;
  height: 100%;
  width: 100%;
}

.bar-li{
  padding: 15px;
  margin-left: 15px;
  height: 100%;
  width: 100%;
}

.bar-li:hover{
  font-weight: bold;
  cursor: pointer;
}

nav ul {
  list-style: none;
  display: flex;
  cursor: pointer;
  gap: 20px;
}

nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}
</style>