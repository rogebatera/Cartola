<div class="container-fluid">
    
    <div class="panel panel-primary" style="margin-top:10px;">
    <div class="panel-heading">Cadastro da Pontuação da Rodada</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form id="form_cadastro_jogador">

                    <div class="form-group col-md-4">
                        <label for="nome_jogador">Nome do Jogador: </label>
                        <input type="text" class="form-control" placeholder="Rogerio Lucio" name="nome_jogador" id="nome_jogador"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="nome_time">Nome do Time: </label>
                        <input type="text" class="form-control" placeholder="BarcelonaDeAraucaria" name="nome_time" id="nome_time"/>
                    </div>                   
                                      
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return inserirJogador()"> Gravar </button>
                            <button type="button" class="btn btn-warning" onClick="limparJogador()"> Limpar Tela </button>
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
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($jogadores as $jogador):
            ?>
                <tr>
                <td><?= $jogador->nome ?></td>
                <td><?= $jogador->nome_time ?></td>
                <td><?= date('d/m/Y H:i', strtotime($jogador->data_cadastro))?></td>
                <td><?= $jogador->status ?></td>
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


