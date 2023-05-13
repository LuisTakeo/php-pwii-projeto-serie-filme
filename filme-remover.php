<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from filmes where id = $id");	    
	$stmt ->execute();    

    header("location:filme-cadastro.php"); 



?>