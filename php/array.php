<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo</title>
</head>
<body>
	<h1>Loja de Informatica</h1>
	<hr>
	<h2>Conheça nossas categorias de produtos</h2>
	<?php
	//array numerico
	$categorias = array("Monitores", "Teclados", "Mouses", "Fones de ouvido");
	//var_dump($categorias);
	//print_r($categorias);
	echo "<ul>";
	for($i = 0; $i < count($categorias); $i++){
		echo "<li>".$categorias[$i]."</li>";
	}
	echo "</ul>";

	//array associativo
	$produto = array("nome" => "Fone de ouvido", "marca" => "Philips", "preco" => "59.90");
	//print_r($produto);
	echo "<h2>Produto em destaque:</h2>
			<h3>{$produto['nome']} ({$produto['marca']}) - Por apenas R$ {$produto['preco']}</h3>";

	//array multidimensional
	$opinioes = array(
		array("cliente" => "Maria", "opiniao" => "Gostei Muito", "nota" => 5), 
		array("cliente" => "João", "opiniao" => "Bom mas pode mehorar", "nota" => 4), 
		array("cliente" => "Luiza", "opiniao" => "Achei muito fraquinho", "nota" => 1), 
		array("cliente" => "Pedro", "opiniao" => "Excelente", "nota" => 5), 
	);
	foreach ($opinioes as $item) {
		echo "<div><p><strong>{$item['cliente']}</strong></p>
		<p>{$item['opiniao']}</p>
		<p>";
		for($i = 1;$i <= $item['nota']; $i++){
			echo "&circledast;";
		}
		echo "</p></div>";
	}
	?>

</body>
</html>