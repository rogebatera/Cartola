<div class="container-fluid">
    
    <div class="panel panel-primary" style="margin-top:10px;">
    <div class="panel-heading">Cadastro da Pagamentos</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form id="form_cadastro_pagamento">

                    <div class="form-group col-md-4">
                        <label for="jogador">Nome do Jogador: </label>
                        <select name="jogador" id="jogador" class="form-control">
                            <option value="">Selecionar Jogador</option>
                            <?php
                            foreach($jogadores as $jogador):
                                echo "<option value='$jogador->id_jogador'>$jogador->nome - $jogador->nome_time </option>";
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="controle_cartola">Controle Cartola: </label>
                        <select name="controle_cartola" id="controle_cartola" class="form-control">
                            <option value="">Selecionar Turno</option>
                            <?php
                            foreach($turnos as $turno):
                                echo "<option value='$turno->id_controle_cartola'>$turno->turno ° Turno - $turno->ano</option>";
                            endforeach;
                            ?>
                        </select>
                    </div>                   
                                      
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return inserirPagamento()"> Gravar </button>
                            <button type="button" class="btn btn-warning" onClick="limpar()"> Limpar Tela </button>
                        </div>
                    </div>

                </form>
                      
            </div>
            
        </div>   
    </div>

    <div id="carregamento" align="center">
        <!--retorno ajax-->
    </div> 

    <table class="table table-hover table-condensad">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Time</th>
                <th>Data Cadastro</th>
                <th>Ano</th>
                <th>Turno</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pagamentos as $pagamento):
            ?>
                <tr>
                    <td><?= $pagamento->nome ?></td>
                    <td><?= $pagamento->nome_time ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($pagamento->data_pagamento))?></td>
                    <td><?= $pagamento->ano ?></td>
                    <td><?= $pagamento->turno ?></td>
                </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
     
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
        $a("#cod_cliente").tokenInput("<?php //echo base_url("cliente/listar_cliente")?>",{
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


