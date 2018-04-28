<?php

require_once("config.php");
//Carrega um usuário
// $eddy = new Usuario();
// $eddy->loadByid(6);
// echo $eddy;

//Carrega uma lista de usuáradios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("ad");
// echo json_encode($search);


// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("eddy","123456");

echo $usuario;



/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
 ?>
