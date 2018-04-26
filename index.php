<?php

require_once("config.php");

$slq = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios"); 

echo json_encode($usuarios);
 ?>
