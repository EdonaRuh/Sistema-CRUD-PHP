<?php
$mysqli = new mysqli("localhost", "root", "", "projeto");

$id = $_GET["prod_id"];
$sql = $mysqli->query("SELECT * FROM produtos WHERE prod_id=$id");

echo "Todos os dados à seguir serão deletados permantemente do sistema. Deseja prosseguir?";
echo "<hr>";
while($res = mysqli_fetch_assoc($sql)){
		$id = $res["prod_id"];
		$nome = $res["prod_nome"];
		$autor = $res["prod_autor"];
		$edit = $res["prod_edit"];
		$quant = $res["prod_quant"];
		$valor = $res["prod_valor"];
		
		echo "
			<form name='form1' method='post' action='valida.php'>
				<input type='hidden' name='valId' value='{$id}'>
				<table border='1'>
					<tr>
						<td>Id:</td>				
						<td>Nome:</td>		
						<td>Autor:</td>				
						<td>Editora:</td>			
						<td>Quantidade:</td>					
						<td>Valor:</td>					
					</tr>
					<tr>
						<td>$id</td>
						<td>$nome</td>
						<td>$autor</td>
						<td>$edit</td>
						<td>$quant</td>
						<td>$valor</td>
					</tr>
				</table>				
		";			
}
echo "<hr>";
echo  "
		<a href='consultaADM.php'>Voltar</a>
		<input type='submit' value='Excluir'>
	</form>	
";