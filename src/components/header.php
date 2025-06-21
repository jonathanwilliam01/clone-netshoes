<header>
    <div class="logo"><a href="../index.php">NETSHOES</a></div>
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

<style>
header {
  background-color: #5a2d82;
  color: white;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.logo {
  font-size: 24px;
  font-weight: bold;
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

a{
    text-decoration: none;
    color: inherit;
}
</style>