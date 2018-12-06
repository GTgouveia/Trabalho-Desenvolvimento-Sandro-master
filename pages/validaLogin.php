<?php 
	session_start();
	$login = $_GET['login'];
	$senha = $_GET['senha'];

	$conexao = mysqli_connect("localhost","root","","BDMFDS") or die (mysql_error());
	$query = "SELECT 'usr_Descricao','usr_Senha' FROM usuarios WHERE usr_Descricao ='$login' AND usr_Senha='$senha'";
	$result = mysqli_query($conexao, $query);

	if(mysqli_num_rows($result) > 0) {
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:../index.php');
	} else {
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:/login.php');
	}
?>