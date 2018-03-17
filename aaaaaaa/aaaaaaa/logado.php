<?php 
	session_start();
	if(empty($_SESSION['logId'])){
		$_SESSION['msg'] = "Faça login antes.";
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>logado</title>
</head>
<body>
	<?php	
		echo "Bem vindo ". $_SESSION['logNome']. " Bom Dia!";
		echo "<a href='sair.php'><input type='submit' value='sair'></a>";
	?>
</body>
</html>