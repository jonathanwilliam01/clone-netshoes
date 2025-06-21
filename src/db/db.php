<?php

include_once('./conexao.php');

$cria_tab_produtos = 
"CREATE TABLE IF NOT EXISTS produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  descricao VARCHAR(255),
  preco DOUBLE,
  categoria INT,
  quantidade INT,
  url_imagem text
);";

$sql_cria_tab_produtos = mysqli_query($mysqli, $cria_tab_produtos);
echo 'Tabela Produtos criada';

$insere_prod = "INSERT INTO netshoes.produtos (descricao,preco,categoria,quantidade,url_imagem) VALUES
	 ('Bicicleta Aro 29 KSW 24 Marchas',929.29,1,1,'https://static.netshoes.com.br/produtos/bicicleta-aro-29-ksw-24-marchas-freios-a-disco-e-suspensao/80/CGY-0237-180/CGY-0237-180_zoom1.jpg?ts=1719420224&ims=1088x'),
	 ('Tênis Nike Downshifter 13 Masculino - Marrom+Amarelo',340.09,2,2,'https://static.netshoes.com.br/produtos/tenis-nike-downshifter-13-masculino/03/JD8-6466-503/JD8-6466-503_zoom1.jpg?ts=1747221741&ims=1088x');";
$sql_insere_prod = mysqli_query($mysqli, $insere_prod);
?>