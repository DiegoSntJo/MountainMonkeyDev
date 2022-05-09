<?php

require_once 'classe/usuarios.php';
session_start();
$u = new Usuario();


$nome = $_GET["senha"];
$data = $_GET["email"];
$telefone = $_GET["telefone"];

$codigo = $_GET["id_usuario"];

?>
<script>
function aviso(){
resu = alert(msg);
    window.location = "agendar.php";
}
function alerta(){
resu = alert(msg);
    window.location = "menu.php";
}
</script>
<?php

$sql= "SELECT email FROM usuarios WHERE email ='$data'";
$resultado= mysqli_query($db_conec,$sql);

if(mysqli_num_rows($resultado) > 0){
        $msg = "ERRO: Já existe um compromisso nesse dia";
        ?><script>msg= "ERRO: Já existe um compromisso neste dia, tente agendar em outro dia.";
        onLoad=aviso();</script><?php
}else{
    if(empty($_GET["id_usuario"])){
        $query = "INSERT INTO usuarios (senha, email, telefone) values ('" . $nome . "', '" . $data . "','". $telefone ."')";
        $msg = "Falha ao inserir os dados.";
        ?><script>msg= "Seu compromisso foi agendado com sucesso !";
        onload=alerta();</script><?php
    }else{
        $query = "UPDATE usuarios SET senha = '". $nome . "', email = '". $data . "', telefone = '". $telefone ."'
        WHERE id_usuario= " . $codigo;
        $msg = "Falha ao alterar os dados.";
        ?><script>msg= "Seu compromisso foi editado com sucesso !";
        onload=alerta();</script><?php
    }
}

echo $query;
$res = mysqli_query($db_conec, $query);

if(!$res){
     echo $msg;
}else{
    ?><script>onload=alerta();</script><?php
}