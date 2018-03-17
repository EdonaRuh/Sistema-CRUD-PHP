<?php
$mysqli = new mysqli("localhost","root","","projeto");

$sql = $mysqli->query("SELECT * FROM produtos");

echo "<table border='1' width='100%'>";
	echo "<tr>";
		echo "<td>Nome</td>";
		echo "<td>Autor</td>";
		echo "<td>Editora</td>";
		echo "<td>Quantidade</td>";
		echo "<td>Valor</td>";
	echo "</tr>";

while($res = mysqli_fetch_assoc($sql)){
		$id = $res["prod_id"];
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
				echo "<td width='10%'><a href='alterAdm.php?prod_id=$id'><input type='submit' value='Alterar'></a>";
				echo "<a href='excluirADM.php?prod_id=$id'><input type='submit' value='Excluir'></a></td>";
			echo "</tr>"; 
}
echo "</table>";
echo "<a href='index.html'>Voltar</a><br>";