<?php  

function exibeTipo($tipo){
	if($tipo == "1"){
		return "Show";
	}elseif($tipo == "2"){
		return "Balada";
	}elseif($tipo == "3"){
		return "Teatro";
	}elseif($tipo == "4"){
		return "Esporte";
	}elseif($tipo == "5"){
		return "Festival";
	}elseif($tipo == "6"){
		return "Palestra";
	}elseif($tipo == "7"){
		return "Exposição";
	}
}

function exibePorcentagem($porcentagem){
	$string = number_format ( $porcentagem , 1 );
	return $string."%";
}

function exibeVendaAberta($aberta){
	if($aberta == 1){
		return "Sim";
	}else{
		return "Não";
	}
}




?>