<?php

include("conexao.php");

$nome = $_POST['txNome'];
$ano = $_POST['txAno'];
$duracao = $_POST['txDuracao'];
$descricao = $_POST['txDescricao'];
$genero = $_POST['txGenero'];

echo "$nome $ano";




// $stmt = $pdo->prepare("insert into genero (nome) values ('$genero')");
// $stmt->execute();

$stmt = $pdo->prepare("insert into filmes (nome, ano, duracao, descricao) values ('$nome',$ano, $duracao, '$descricao')");
$stmt->execute();



header("location:filme-cadastro.php");
?>