<?php

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuários
//$lista = usuario::getLista();
//echo json_encode($lista);

//carrega uma lista usuário buscando pelo login
//$search = usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo json_encode($lista);

?>