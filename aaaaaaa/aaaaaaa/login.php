<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<form name="form1" method="post" action="validaLogin.php">
			<input type="text" name="login" placeholder="Login">
			<input type="password" name="senha" placeholder="Senha">
			<input type="submit" value="Login">
		</form>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
	</body>
</html>