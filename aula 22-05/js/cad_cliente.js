function perfilPrestador(argument) {
	document.getElementById('empresa').disabled = false;
	document.getElementById('mensagem-empresa').innerHTML = "Entre em contato para estabelecer uma parceria";

}
function perfilConsumidor(argument) {
	document.getElementById('empresa').disabled = true;
	document.getElementById('mensagem-empresa').innerHTML = "";
}

function validaForm(argument) {
	var contErros = 0;

	//campo nome
	var nome = document.getElementById('nome');
	var erro_nome = document.getElementById("msg-nome");
	if(nome.value == "" || nome.value.IndexOf(" ") == -1){
		erro_nome.innerHTML = "Por favor, digite o nome completo";
		erro_nome.style.display = "block";
		contErros++;
	}else{
		erro_nome.style.display = "none";
	}

	//campo estou de acordo

	var concordo = document.getElementById('concordo');
	var erro_concordo = document.getElementById("msg-concordo");
	if(!concordo.checked){
		erro_concordo.innerHTML = "Voce precisa concordar com os termos de uso do site";
		erro_concordo.style.display = "block";
		contErros++;
	}else{
		erro_concordo.style.display = "none";
	}

	//outras validações...

	if(contErros > 0){
		return false;
	}else{
		alert("Cadastro realizado com sucesso!");  /// remover posteriormente
	}
}