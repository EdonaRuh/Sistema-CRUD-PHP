<?php
	session_start();
	$mysqli = new mysqli("localhost","root","","projeto");
	$login = $_POST["login"];
	$senha = $_POST["senha"];	
	if(!$login){
		$_SESSION['msg'] = "Preencha todos os campos.";
		header("Location: login.php");
	}elseif(!$senha){
		$_SESSION['msg'] = "Preencha todos os campos.";
		header("Location: login.php");
	}else{
		$sql = $mysqli->query("SELECT * FROM usuario WHERE user_login = '$login'");
		
		while($res = mysqli_fetch_assoc($sql)){
			$id = $res['user_id'];
			$nome = $res['user_nome'];
			$user = $res['user_login'];
			$pass = $res['user_senha'];			
		}
		if($senha == $pass){
			$_SESSION['logId'] = $id;
			$_SESSION['logNome'] = $nome;
			$_SESSION['logUser'] = $user;
			$_SESSION['logSenha'] = $pass;
			header("Location: logado.php");
		}else{
			$_SESSION['msg'] = "Usuario ou senha invalidos.";
			header("Location: login.php");
		}
	}