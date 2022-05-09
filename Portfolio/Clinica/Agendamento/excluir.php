<?php
session_start();
include ("classe/usuarios.php");
 $u = new Usuario();

$codigo = $_GET["id_usuario"];

$query = "DELETE FROM usuarios WHERE id_usuario =". $codigo;
$res = mysqli_query($db_conec, $query);

if(!$res){
    echo "Falha ao Excluir.";
}else{
    header('Location: menu.php');
}