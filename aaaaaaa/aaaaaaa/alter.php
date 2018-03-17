<?php

$mysqli = new mysqli("localhost","root","","projeto");
$id = $_POST["txtId"];
$nome = $_POST["txtNome"];
$autor = $_POST["txtAutor"];
$edit = $_POST["txtEdit"];
$quant = $_POST["txtQuant"];
$valor = $_POST["txtValor"];

echo $id;

$sql = $mysqli->query("UPDATE produtos SET prod_nome='$nome', prod_autor='$autor', prod_edit='$edit',
 prod_quant='$quant', prod_valor='$valor' WHERE prod_id = $id");
mysqli_close();
header("Location: consultaADM.php");