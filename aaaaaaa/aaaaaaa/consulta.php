<?php
//include 'connection.php';

$mysqli = new mysqli("localhost","root","","projeto");

//$ins = "INSERT INTO pr_produtos (prod_nome, prod_autor, prod_edit, prod_valor, prod_quant) VALUES ('O Temor dos Sabios', 'Patric Rotfuss', 'Editora Arqueiro', '110', '50.55')";

//$result = mysqli_query($mysqli, $ins);

$sql = $mysqli->query("SELECT * FROM produtos");
//$resul = mysqli_fetch_assoc($sql);
//$resul = $sql->fetch_all(MYSQLI_ASSOC);


echo "<table border='1' width='100%'>";
	echo "<tr>";
		echo "<td>Nome</td>";
		echo "<td>Autor</td>";
		echo "<td>Editora</td>";
		echo "<td>Quantidade</td>";
		echo "<td>Valor</td>";
	echo "</tr>";
if(!mysqli_num_rows($sql)){
	return false;
}else{
	while($res = mysqli_fetch_assoc($sql)){
		$nome = $res["prod_nome"];
		$autor = $res["prod_autor"];
		$edit = $res["prod_edit"];
		$quant = $res["prod_quant"];
		$valor = $res["prod_valor"];			
			echo "<tr>";
				echo "<td>".$nome."</td>";
				echo "<td>".$autor."</td>";
				echo "<td>".$edit."</td>";
				echo "<td>".$quant."</td>";
				echo "<td>".$valor."</td>";
			echo "</tr>"; 
	}
	echo "</table>";
}