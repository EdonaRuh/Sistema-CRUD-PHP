<?php
$mysqli = new mysqli("localhost","root","","projeto");
$id = $_GET["prod_id"];
$sql = $mysqli->query("SELECT * FROM produtos WHERE prod_id ={$id}");

echo "<form name='form1' method='post' action='alter.php'>";
echo "<table>";
while($res = mysqli_fetch_assoc($sql)){
	$id = $res["prod_id"];
	$nome = $res["prod_nome"];
	$autor = $res["prod_autor"];
	$edit = $res["prod_edit"];
	$quant = $res["prod_quant"];
	$valor = $res["prod_valor"];	

	echo "<input type='hidden' name='txtId' value='{$id}'>";
	echo "<tr>";		
		echo "<td>Nome: </td>";
		echo "<td><input  type='text' name='txtNome' value='{$nome}'></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>Autor:</td>";
		echo "<td><input type='text' name='txtAutor' value='{$autor}'></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>Editora: </td>";
		echo"<td><input type='text' name='txtEdit' value='{$edit}'></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>Quantidade: </td>";
		echo "<td><input type='text' name='txtQuant' value='{$quant}'></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>Valor: </td>";
		echo "<td><input type='text' name='txtValor' value='{$valor}'></td>";
	echo "</tr>";
	echo "<tr>";	

		echo "<td colspan='2' align='right'><input type='submit' value='Alterar'>";
}
echo "</table>";
?>
