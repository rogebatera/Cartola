<div class="container-fluid">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Ordem de Produção</div>
        <div class="panel-body">
            
            <form>
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cod_peca">Codigo Peça: </label>
                        <input type="text" class="form-control" placeholder="CODIGO PEÇA" name="cod_peca" id="cod_peca">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="calendario">De: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_de" id="calendario"/>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="calendario2">Ate: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_ate" id="calendario2">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="status">Status: </label>
                        <select class="form-control" id="status">
                            <option value="">Todos</option>
                            <option value="F">Firme</option>
                            <option value="P">Previsto</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <button type="button" class="btn btn-success" onClick="return consultarOrdemProducao()"> Filtrar </button>
                        <button type="button" class="btn btn-warning" onClick="return limparFiltroOrdemProducao()"> Limpar Filtro </button>
                    </div>
                </div>
				
            </form>
            
            
        </div>
    </div>
    
   <!--<small class="text-danger">Ultimos 20 Registros</small> -->
    <div class="row" style="margin-top:10px;" align="center">
        <div id="dados">
            
            
            <div class="panel panel-primary">
            <div class="table-responsive"> 
                
            <table class="table table-striped table-condensed table-hover table-bordered">
                <thead>                    
                    <tr class="bg-primary">
                        <th>Status</th>
                        <th>Oper.</th>
                        <?php
                            if(!empty($_SESSION['nivel_crp'] == 1)){
                                echo '<th>Excluir</th>';
                            }
                        ?>
                        <th>Lote Ibratec</th>
                        <th>OP</th>
                        <th>Produto</th>
                        <th>Desc.</th>        
                        <th>Qtde</th>
                        <th>Qtde Entr.</th>
                        <th>UM</th>
                        <th>Qtde Max.</th>
                        <th>Peso Un.</th>
                        <th>Peso Tot.</th>
                        <th>NF Entrada</th>
                        <th>Cod. Forn.</th>
                        <th>LJ Forn.</th>
                        <th>Série</th>
                        <th>Obs</th>
                        <th>Emissão</th>
                        <th>Prev. Inicio</th>
                        <th>Prev. Entrega</th>                       
                    </tr>
                </thead>
                <tbody>
                <?php

                    foreach($op as $op){
                        
                        switch($op->TIPO){
                            
                            case 'P':
                                $status = 'assets/img/status_aguardando.png';
                                break;
                            case 'F':
                                $status = 'assets/img/status_ok.png';
                                break;                            
                        }
                                                
                        echo '<tr>';
                            echo '<td class="text-center"><img src="'.base_url($status).'"></td>';
                            ?>
                            <td class="text-center"><a href='javascript:;' onClick='consultar_operacoes("<?php echo $op->LOTEIBRATEC; ?>", "<?php echo $op->PRODUTO; ?>", "<?php echo str_replace('º', '', $op->B1_DESC); ?>")'><i class='glyphicon glyphicon-info-sign'></i></a></td>
                            <?php
                            if(!empty($_SESSION['nivel_crp'] == 1)){
                            ?>    
                            <td class="text-center"><a href='javascript:;' onClick='excluir_op_crp("<?php echo $op->LOTEIBRATEC; ?>", "<?php echo str_replace('º', '', $op->B1_DESC); ?>")'><i class='glyphicon glyphicon-remove'></i></a></td>
                            <?php
                            }
                            ?>
                            <?php                           
                            echo '<td class="text-center">'.$op->LOTEIBRATEC.'</td>'; 
                            echo '<td class="text-center">'.$op->OP.'</td>';
                            echo '<td class="text-center">'.$op->PRODUTO.'</td>';
                            echo '<td class="text-center">'.$op->B1_DESC.'</td>';                            
                            echo '<td class="text-center">'.$op->QTDE.'</td>';
                            echo '<td class="text-center">'.$op->QTDEENTREGUE.'</td>';
                            echo '<td class="text-center">'.$op->UM.'</td>';
                            echo '<td class="text-center">'.$op->QTDEMAX.'</td>';
                            echo '<td class="text-center">'.$op->PESOUN.'</td>';
                            echo '<td class="text-center">'.$op->PESOTOT.'</td>';
                            echo '<td class="text-center">'.$op->NFENTRADA.'</td>';
                            echo '<td class="text-center">'.$op->CODFORN.'</td>';
                            echo '<td class="text-center">'.$op->LJFORN.'</td>';
                            echo '<td class="text-center">'.$op->SERIE.'</td>';
                            echo '<td class="text-center">'.$op->OBS.'</td>';
                            echo '<td class="text-center">'.date("d/m/Y", strtotime($op->EMISSAO)).'</td>';
                            echo '<td class="text-center">'.date("d/m/Y", strtotime($op->PREVINICIO)).'</td>';
                            echo '<td class="text-center">'.date("d/m/Y", strtotime($op->PREVENTREGA)).'</td>';
                 
                        echo '</tr>';

                    }

                ?> 
                </tbody>
                
                <tfoot>                
                    <tr class="bg-primary">
                        <th>Status</th>
                        <th>Oper.</th>
                        <?php
                            if(!empty($_SESSION['nivel_crp'] == 1)){
                                echo '<th>Excluir</th>';
                            }
                        ?>
                        <th>Lote Ibratec</th>
                        <th>OP</th>
                        <th>Produto</th>
                        <th>Desc.</th>        
                        <th>Qtde</th>
                        <th>Qtde Entr.</th>
                        <th>UM</th>
                        <th>Qtde Max.</th>
                        <th>Peso Un.</th>
                        <th>Peso Tot.</th>
                        <th>NF Entrada</th>
                        <th>Cod. Forn.</th>
                        <th>LJ Forn.</th>
                        <th>Série</th>
                        <th>Obs</th>
                        <th>Emissão</th>
                        <th>Prev. Inicio</th>
                        <th>Prev. Entrega</th>                       
                    </tr>
                </tfoot>
                
            </table>
            </div> 
            </div>    
            
        </div>
        <div id="imagem"></div>
    </div>
    
</div>


<!-- modal -->     
<div class="modal fade bs-example-modal-lg modal-success" id="modalEditarCliente" >
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
          <h4 class="modal-title text-gray-dark">Operações - <span id="cod_prod"></span>/<span id="nome_prod"></span></h4>
        </div>
        <div class="modal-body" id="tab_operacoes" align='center'>
        
            
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal"> Fechar </button>
          <button type="button" class="btn btn-primary" onclick="pegaValor()"> Adicionar </button>-->
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- modal -->     
<div class="modal fade bs-example-modal-lg modal-success" id="modalExcluirOpCRP">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
          <h4 class="modal-title text-gray-dark">Excluir Ordem Produção - <span id="cod_prod2"></span>/<span id="nome_prod2"></span></h4>
        </div>
        <div class="modal-body" id="carregamento" align='center'>
            <h4 class="text-gray-dark">Você Tem Certeza que Deseja Excluir a Ordem Produção <span id="cod_lote"></span> do CRP?</h4>
            <p class="text-danger"><b>Atenção!!!</b> essa exclusão é algo irreversível.</p>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"> Sair </button>
          <span id="botao"><button type="button" class="btn btn-danger" onclick="excluirOpCrpFinal()"> Excluir </button></span>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">    
    var $a = jQuery.noConflict();
    $a(document).ready(function(){
        $a("#cod_peca").tokenInput("<?php echo base_url("produto/listar_produto")?>",{
             theme:"facebook",
             tokenLimit: 20,
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