<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Exemplo</title>
 </head>
 <body>
 	<p>
 		<?php

 		if(isset($_GET['nome']))
	 		$nome = $_GET['nome'];

	 	else
	 		 $nome = "visitante";


 			 echo "Olá $nome!<br>Eu sou um script PHP yeah!!";?>
 			 


 	 </p>
 	<p>Hoje é dia <?php echo date('j/m/Y'); ?></p>
 	<p>E agora são <?php echo date('G:i:s'); ?></p>
 </body>
</html>