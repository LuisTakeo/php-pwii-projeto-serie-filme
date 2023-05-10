<?php 
    $nome = $_POST['txNome'];
    $sobrenome = $_POST['txSobrenome'];
    $email = $_POST['txEmail'];
    $telefone = $_POST['txTelefone'];
    


        
    include("conexao.php");

    $stmt = $pdo->prepare("insert into usuario (nome, sobrenome, email, telefone) values ('$nome','$sobrenome', '$email', '$telefone')");
	$stmt ->execute();    

    header("location:usuario-cadastro.php");   


?>