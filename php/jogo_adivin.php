<?php 
if(isset($_POST['envio'])){ //verifca que o form foi enviado
	$sorteio = rand(0, 99);
	if($_POST['palpite'] == $sorteio){
		$mensagem = "Você acertou";
	}else{
		$mensagem = "Você errou! Tente novamente!";
	}
}else{    //formulário ainda não foi enviado
	$mensagem = "";
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Jogo de adivinhação</h1>
	<form action="" method="post">
		<p>Adivinhe o numero que estou pensando:</p>
		<input type="text" name="palpite" autofocus="" value="<?php echo isset($_POST['palpite']) ? $_POST['palpite']: ""; ?>">
		<input type="submit" name="envio" value="tentar">
		<h2><?php echo $mensagem; ?></h2>
	</form>

</body>
</html>
