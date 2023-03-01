<?php

require_once("./banco.php");

function select_tipos() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM trabalhopi.tb_tipo");
	$sth->execute();
	return $sth->fetchAll();
}

function select_nichos() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM trabalhopi.tb_nicho");
	$sth->execute();
	return $sth->fetchAll();
}

function db_insert_post($id_usuario, $id_tipo, $id_nicho, $tt_post, $ds_post) {
	global $conn;
	$sql = "INSERT INTO trabalhopi.tb_post (id_usuario, id_tipo, id_nicho, tt_post, ds_post) VALUES ($id_usuario, $id_tipo, $id_nicho, '$tt_post', '$ds_post')";
    $conn->query($sql);
	header("location: pag1.php");

	return null;
}

function select_post() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM trabalhopi.tb_post");
	$sth->execute();
	return $sth->fetchAll();
}

function excluir_post($id_post) {
	global $conn;
	$sql = "DELETE FROM trabalhopi.tb_post where id_post=$id_post";
    $conn->query($sql);
	header("location: pag1.php");

	return null;
}

function select_post_id($id_post) {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM trabalhopi.tb_post where id_post=$id_post");
	$sth->execute();
	return $sth->fetchAll();
}

function editar_post($id_post, $tt_post, $id_tipo, $id_nicho, $ds_post) {
	global $conn;
	$sql = "UPDATE trabalhopi.tb_post set tt_post='$tt_post' and id_tipo=$id_tipo and id_nicho=$id_nicho and ds_post='$ds_post' where id_post=$id_post";
    $conn->query($sql);
	console.log("entrei");
	//header("location: pag1.php");

	return null;
}




?>