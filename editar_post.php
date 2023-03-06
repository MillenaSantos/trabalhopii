<?php

require_once("./acesso_banco.php");

$id_tipo=$_POST['tipo'];
$id_nicho=$_POST['nicho'];
$tt_post=$_POST['titulo'];
$ds_post=$_POST['descricao'];

editar_post($_GET['id'], $tt_post, $id_tipo, $id_nicho, $ds_post);

?>