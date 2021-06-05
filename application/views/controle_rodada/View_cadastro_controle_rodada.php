<div class="container-fluid">
    
    <div class="panel panel-primary" style="margin-top:10px;">
    <div class="panel-heading">Cadastro da Pontuação da Rodada</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form id="form_cadastro_pontuacao_rodada">

                    <div class="form-group col-md-4">
                        <label for="controle_cartola">Controle Cartola: </label>
                        <select class="form-control" id="controle_cartola" name="controle_cartola">
                            <option value="">Selecionar</option>
                            <?php
                                foreach($controle_rodada as $cr){
                                   echo '<option value="'.$cr->id_controle_cartola.'">Ano: '.$cr->ano.' - Turno: '.$cr->turno.'°</option>';
                                }
                            ?>
                        </select>    
                    </div>

                    <div class="form-group col-md-4">
                        <label for="rodada">Rodada: </label>
                        <select class="form-control" id="rodada" name="rodada">
                            <option value="">Selecionar</option>
                            <option value="1">1ª</option>
                            <option value="2">2ª</option>
                            <option value="3">3ª</option>
                            <option value="4">4ª</option>
                            <option value="5">5ª</option>
                            <option value="6">6ª</option>
                            <option value="7">7ª</option>
                            <option value="8">8ª</option>
                            <option value="9">9ª</option>
                            <option value="10">10ª</option>
                            <option value="11">11ª</option>
                            <option value="12">12ª</option>
                            <option value="13">13ª</option>
                            <option value="14">14ª</option>
                            <option value="15">15ª</option>
                            <option value="16">16ª</option>
                            <option value="17">17ª</option>
                            <option value="18">18ª</option>
                            <option value="19">19ª</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="jogador">Jogador: </label>
                        <select class="form-control" id="jogador" name="jogador">
                            <option value="">Selecionar</option>
                            <?php
                                foreach($jogador as $j){
                                   echo '<option value="'.$j->id_jogador.'">'.$j->nome.' - '.$j->nome_time.'</option>';
                                }
                            ?>
                        </select>    
                    </div>

                    <div class="form-group col-md-4">
                        <label for="pontuacao_rodada_cartola">Pontuação Rodada Cartola: </label>
                        <input type="text" class="form-control" placeholder="87.5" 
                        name="pontuacao_rodada_cartola" id="pontuacao_rodada_cartola"/>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="colocacao_rodada">Colocação da Rodada: </label>
                        <select class="form-control" id="colocacao_rodada" name="colocacao_rodada">
                            <option value="">Selecionar</option>
                            <?php
                                $colocacao = 1;
                                foreach($jogador as $j){
                                    echo '<option value="'.$colocacao.'">'.$colocacao.'ª</option>';
                                    $colocacao++;     
                                }      
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="pontuacao_por_colocacao">Pontuação por Colocação: </label>
                        <input type="text" class="form-control" placeholder="3,2,1,0" 
                        name="pontuacao_por_colocacao" id="pontuacao_por_colocacao"/>
                    </div>                   
                                      
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <input  type="hidden" id="envio_cod_setor" name="envio_cod_setor" value="">
                            <input  type="hidden" id="envio_cod_prod" name="envio_cod_prod" value="">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return inserirControleRodada()"> Gravar </button>
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


