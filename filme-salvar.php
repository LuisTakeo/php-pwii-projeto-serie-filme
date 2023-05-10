<?php 
    $nome = $_POST['txNome'];
    $ano = $_POST['txAno'];
    // $genero = $_POST['txGenero'];
    $duracao = $_POST['txDuracao'];
    $descricao = $_POST['txDescricao'];


        
    include("conexao.php");

    $stmt = $pdo->prepare("insert into filmes (nome, ano, duracao, descricao) values ('$nome','$ano', '$duracao', '$descricao')");
	$stmt ->execute();    

    header("location:contato.php");   


?>