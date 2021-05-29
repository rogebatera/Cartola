function inserirControleRodada(){

    $("#carregamento").empty().html();

    let formulario = document.getElementById('form_cadastro_pontuacao_rodada');  

    // Instância o FormData passando como parâmetro o formulário
    let formData = new FormData(formulario);

    //salvo o numero da corretiva para utilizar
    //let id_equipamento  = formData.get('id_equipamento');

    $("#carregamento").empty().html("<img src='"+base_url+"assets/img/proloader.gif' id='proloader' width='100px' height='100px'/>");
    
    // Envia O FormData através da requisição AJAX
    $.ajax({
        url: base_url+'controle_rodada/inserir_pontuacao_rodada',
        type: "POST",
        data: formData,
        dataType: 'html',
        processData: false,  
        contentType: false,
        success: function(retorno){
            //carregarLogEquipamento(id_equipamento);
            //window.location.assign(base_url+"equipamento/editar_equipamento/3/"+id_equipamento);
            $('#carregamento').empty().html(retorno);
        },
        error: function(retorno){
            $('#carregamento').empty().html(retorno);
        }               
    });

}

function inserirJogador(){

    $("#carregamento").empty().html();

    let formulario = document.getElementById('form_cadastro_jogador');  

    // Instância o FormData passando como parâmetro o formulário
    let formData = new FormData(formulario);

    //salvo o numero da corretiva para utilizar
    //let id_equipamento  = formData.get('id_equipamento');

    $("#carregamento").empty().html("<img src='"+base_url+"assets/img/proloader.gif' id='proloader' width='100px' height='100px'/>");
    
    // Envia O FormData através da requisição AJAX
    $.ajax({
        url: base_url+'jogador/inserir_jogador',
        type: "POST",
        data: formData,
        dataType: 'html',
        processData: false,  
        contentType: false,
        success: function(retorno){
            //carregarLogEquipamento(id_equipamento);
            //window.location.assign(base_url+"equipamento/editar_equipamento/3/"+id_equipamento);
            $('#carregamento').empty().html(retorno);
            location.reload();

        },
        error: function(retorno){
            $('#carregamento').empty().html(retorno);
        }               
    });

}