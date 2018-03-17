<?php
$mysqli = new mysqli("localhost","root","","projeto");

$nome = $_POST['txtNome'];
$autor = $_POST['txtAutor'];
$edit = $_POST['txtEdit'];
$quant = $_POST['txtQuant'];
$valor = $_POST['txtValor'];

$query = "INSERT INTO produtos (prod_nome, prod_autor, prod_edit, prod_quant, prod_valor) VALUES
 ('$nome', '$autor', '$edit', '$quant', '$valor')";
 
$sql = mysqli_query($mysqli, $query);
header("Location:cadastro.html");