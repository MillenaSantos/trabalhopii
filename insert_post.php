<?php

require_once("./acesso_banco.php");

$id_tipo=$_POST['tipo'];
$id_nicho=$_POST['nicho'];
$tt_post=$_POST['titulo'];
$ds_post=$_POST['descricao'];
$id_usuario = $_COOKIE['id'];

db_insert_post($id_usuario, $id_tipo, $id_nicho, $tt_post, $ds_post);

?>