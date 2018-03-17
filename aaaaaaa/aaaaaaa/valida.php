<?php
	$mysqli = new mysqli("localhost", "root", "", "projeto");

	$id = $_POST["valId"];

	$sql = $mysqli->query("DELETE FROM produtos WHERE prod_id= $id") or die(mysqli_connect_error($mysqli));
	header("Location: consultaADM.php");
