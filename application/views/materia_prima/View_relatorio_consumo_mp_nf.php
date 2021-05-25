<div class="container-fluid">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Consumo de Materia Prima por NF</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form>                        
                    <div class="form-group col-md-4">
                        <label for="calendario">De: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_de" id="calendario"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="calendario2">Ate: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_ate" id="calendario2">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="cod_cliente">Cliente: </label>
                        <input type="text" class="form-control" name="cod_cliente" id="cod_cliente">
                    </div>
                                      
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return consultarPrevisaoConsumoMPporNF()"> Filtrar </button>
                            <button type="button" class="btn btn-warning" onClick="limparFiltroPrevisaoConsumoMP()"> Limpar Filtro </button>
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


<!-- Token para Clientes -->
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
</script>


