<?php 
    $nome = $_POST['txNome'];
    $sobrenome = $_POST['txSobrenome'];
    $email = $_POST['txEmail'];
    $telefone = $_POST['txTelefone'];
    $senhax = $_POST['txSenha'];

    echo "$senhax";
        
    include("conexao.php");

    $stmt = $pdo->prepare("insert into usuario values (null, '$nome','$sobrenome', '$email', '$telefone', '$senhax')");
	$stmt ->execute();    

    header("location:login.php");   


?>