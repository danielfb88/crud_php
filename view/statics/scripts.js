function buscar_cidades(){
	// codigo do estado escolhido
	var id_estado = $('#cb_estados').val();  
	
	if(id_estado != 0){
		//caminho do arquivo php que irá buscar as cidades no BD
		var url = 'view/ajax.php?action=buscar_cidades&id_estado='+id_estado;
		$.get(url, function(dataReturn) {
			//coloco na div o retorno da requisicao
			$('#cidade_load').html(dataReturn);
		});
	}
}
