<?php 
session_start();
unset($_SESSION['logId'], $_SESSION['logNome'], $_SESSION['logUser'], $_SESSION['logSenha']);
$_SESSION['msg'] = "Deslogado com Sucesso.";
header("Location: login.php");