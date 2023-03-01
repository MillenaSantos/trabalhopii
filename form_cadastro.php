<?php

function db_insert($nome, $usuario, $senha) {
	global $conn;
	$sql = "INSERT INTO trabalhopi.tb_usuario (nm_pessoa, nm_usuario, sn_usuario) VALUES ('$nome', '$usuario', '$senha')";
	echo $sql;
    $conn->query($sql);
	header("location: home.html");
	return null;
}

require_once("./banco.php");

$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

db_insert($nome, $usuario, $senha);

?>