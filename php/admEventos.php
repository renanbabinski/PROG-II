<?php header("Content-type: text/html; charset=utf-8");
include_once "includes/conexao.php";
$sql = "select nome, tipo, date_format(data, '%d/%m/%y') as data, ((totalVendidos/totalIngressos) * 100) as Vendidos, vendaAberta from evento order by data desc";
$resultado = mysqli_query($conexao, $sql);
 ?>



<h1>Administração de eventos</h1>

<?php
if(mysqli_num_rows($resultado) == 0){
	echo "<p>Nenhum evento cadastrado</p>";
}else{
 ?>




<table border="1">
	<tr>
		<th>Nome</th>
		<th>Tipo</th>
		<th>Data</th>
		<th>Vendidos</th>
		<th>Venda Aberta</th>
	</tr>

	<?php
	while($evento = mysqli_fetch_array($resultado)){
	?>

	<tr>
		<td><?=$evento['nome']?></td>
		<td><?=$evento['tipo']?></td>
		<td><?=$evento['data']?></td>
		<td><?=$evento['Vendidos']?></td>
		<td><?=$evento['vendaAberta']?></td>
	</tr>




	<?php
	}	
	  ?>
</table>

<?php
} //fecha else
  ?>