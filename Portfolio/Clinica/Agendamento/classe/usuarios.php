<?php

$host="localhost";
$usuario="root";
$senha="";
$bd="projeto_tabela";

$db_conec= mysqli_connect($host,$usuario,$senha,$bd);

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

$mysqli=new mysqli($host,$usuario,$senha,$bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;


Class Usuario
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($email, $senha)
	{
		global $pdo;
		//verificar se já existe o email cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (:e, :s)");
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",($senha));
			$sql->execute();
			return true; //tudo ok
		}
	}


	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}
} 







?> 