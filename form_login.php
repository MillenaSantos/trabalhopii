<?php

function db_verifica($usuario, $senha) {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM trabalhopi.tb_usuario where nm_usuario = '$usuario' and sn_usuario = '$senha'");
	$sth->execute(); 
    if($sth -> rowCount() > 0){
        header("location: pag1.php");
        setcookie('login', $usuario);
        $result = $sth->fetchAll();
        setcookie('id', $result[0][0]);
        session_start();
    }else{
        header("location: home.php?errado=true;");
    }
    return $sth -> rowCount();
}

require_once("./banco.php");

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

db_verifica($usuario, $senha);

// $verifica = db_verifica($usuario, $senha);
// echo $verifica;

?>