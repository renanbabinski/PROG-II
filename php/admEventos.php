<?php header("Content-type: text/html; charset=utf-8");
include_once "includes/conexao.php";
include_once "includes/functions.php";
$sql = "select nome, tipo, local, date_format(data, '%d/%m/%y') as data, ((totalVendidos/totalIngressos) * 100) as Vendidos, vendaAberta from evento order by data desc";
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
		<th>Local</th>
		<th>Vendidos</th>
		<th>Venda Aberta</th>
	</tr>

	<?php
	while($evento = mysqli_fetch_array($resultado)){
	?>

	<tr>
		<td><?=$evento['nome']?></td>
		<td><?=exibeTipo($evento['tipo'])?></td>
		<td><?=$evento['data']?></td>
		<td><?=$evento['local']?></td>
		<td><?=exibePorcentagem($evento['Vendidos'])?></td>
		<td><?=exibeVendaAberta($evento['vendaAberta'])?></td>
	</tr>




	<?php
	}	
	  ?>
</table>

<?php
} //fecha else
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="cadastro.php">Cadastrar um evento</a>
 
 </body>
 </html>