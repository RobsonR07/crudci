$("#CEP").blur(function(){
	// REMOVE PONTOS E HIFEN
	var cep = $('#CEP').val().replace(/[^0-9]/g, '').toString();
	
	// CASO NÃO TENHA 8 CARACTERES ELE NÃO RETORNA
	if(cep.length != 8){
		return false;
	}
	
	//URL DE PESQUISA
	var url = "http://viacep.com.br/ws/"+cep+"/json/";
	
	//RETORNA DADOS DA PESQUISA NOS CAMPOS 
	$.getJSON(url, function(dadosRetorno){
		try{
			$("#log").val(dadosRetorno.logradouro);
			$("#bairro").val(dadosRetorno.bairro);
			$("#city").val(dadosRetorno.localidade);
		}catch(ex){}
	});
});