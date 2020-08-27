<?php

require_once("config.php");

//Carraga somente um usuario 
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carreag uma lista de usuários buscando pelo login
//$search = Usuario::search("Claudio");
//echo json_encode($search);

//Carrega usando login e senha
//$usuario = new Usuario();
//$usuario->login("jane","j222");
//echo $usuario;


//Criando um novo usuario
/**$aluno = new Usuario("marcio", "@alu111");
$aluno->insert();
echo $aluno;
**/

/** Alterar um usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "@12235");
echo $usuario;
**/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;



?>