<?php
	$servidor="localhost";
	$banco="dbpipoca";
	$usuario="root";
	$senha="leandro";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>