<div class="container-fluid">
    


    <div class="panel panel-primary" style="margin-top:10px;">
    <div class="panel-heading">Inventario de Materia Prima</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form id="form_cadastro_inventario">

                    <div class="form-group col-md-4">
                        <label for="contagem1">Contagem: </label>

                            <input class="form-check-input" type="radio" name="contagem" id="contagem1" value="1">
                            <label class="form-check-label" for="contagem1">1º</label>

                            <input class="form-check-input" type="radio" name="contagem" id="contagem2" value="2">
                            <label class="form-check-label" for="contagem2">2º</label>

                            <input class="form-check-input" type="radio" name="contagem" id="contagem3" value="3">
                            <label class="form-check-label" for="contagem3">3º</label>

                            <input class="form-check-input" type="radio" name="contagem" id="contagem4" value="4">
                            <label class="form-check-label" for="contagem4">4º</label>

                    </div>

                    <div class="form-group col-md-4">
                        <label for="cod_prod">Cod. Produto: </label>
                        <input type="text" class="form-control" placeholder="" name="cod_prod" id="cod_prod"/>
                        <button type="button" class="btn btn-primary" id="proces_input" onClick="return buscarMPInventario()" style="margin-top:10px;"> Buscar </button>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="desc_prod">Desc. Produto </label>
                        <!--<input type="text" class="form-control" placeholder="" name="desc_prod" id="desc_prod" disabled="disabled">-->
                        <textarea class="form-control" name="desc_prod" id="desc_prod" disabled="disabled" row="10"></textarea>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="quantidade">Quantidade: </label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Ex: 12 ou 0.20">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="un_medida">Unidade de Medida: </label>
                        <input type="text" class="form-control" name="un_medida" id="un_medida" disabled="disabled">
                    </div>
                                      
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <input type="hidden" id="envio_cod_prod" name="envio_cod_prod" value="">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return inserirFormInventarioMateriaPrima()"> Inserir </button>
                            <button type="button" class="btn btn-warning" onClick="limparFormInventarioMateriaPrima()"> Limpar Tela </button>
                        </div>
                    </div>

                </form>
                      
            </div>
            
        </div>   
    </div>

    <div id="carregamento">
        <!--retorno ajax-->
    </div> 
     
 </div>

 <!--<script type="text/javascript">
    $(document).ready(function(){
        $('#quantidade').mask('00/00/0000');
    });
 </script> -->

<!-- Token para Clientes 
<script type="text/javascript">    
    var $a = jQuery.noConflict();
    $a(document).ready(function(){
        $a("#cod_cliente").tokenInput("<?php echo base_url("cliente/listar_cliente")?>",{
             //theme:"facebook",
             resultsLimit:3,
             minChars:3,
             propertyToSearch: "first_name",
             resultsFormatter: function(item){             
                return "<li>" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" 
                + item.id + " - " + item.first_name +"</div></div></li>"
             },                                            
             tokenFormatter: function(item){                 
                 return "<li><p>" + item.id + " - " + item.first_name + "</p></li>" 
             },
        });
    });   
</script> -->


