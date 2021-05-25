<div class="container-fluid">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Refugos Valorizados</div>
        <div class="panel-body">
            
            <form>
                 
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="calendario">De: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_de" id="calendario"/>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="calendario2">Ate: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_ate" id="calendario2">
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="dev_forn"> Devolução ao Fornecedor: </label>
                        <select class="form-control" id="dev_forn" name="dev_forn">
                            <option value="S">SIM</option>
                            <option value="N" selected="selected">NÃO</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="desenvolvimento"> Desenvolvimento: </label>
                        <select class="form-control" id="desenvolvimento" name="desenvolvimento">
                            <option value="S">SIM</option>
                            <option value="N" selected="selected">NÃO</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="teste_destrutivo"> Teste Destrutivo: </label>
                        <select class="form-control" id="teste_destrutivo" name="teste_destrutivo">
                            <option value="S">SIM</option>
                            <option value="N" selected="selected">NÃO</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="tipo_relatorio">Tipo Relatorio: </label>
                        <select class="form-control" id="tipo_relatorio" name="tipo_relatorio">
                            <option value="grupo" selected="selected">Por Grupo / Valorizado</option>
                            <option value="peca">Por Peça / Valorizado</option>
                            <option value="detalhado">Detalhado</option>
                            <option value="dll">Detalhado Linha a Linha</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <button type="button" class="btn btn-success" id="proces_input" onClick="return consultarRefugoValorizado()"> Filtrar </button>
                        <button type="button" class="btn btn-warning" onClick="limparFiltroRefugoValorizado()"> Limpar Filtro </button>
                    </div>
                </div>
				
            </form>
                      
        </div>
    </div>
    
    <div id="carregamento">
        <div class="alert alert-info text-center"> <i class="glyphicon glyphicon-info-sign"></i> Informação: O Valor Aplicado na Valorização é 62,5% do Valor de Venda da Peça</div>
        <!--retorno do AJAX-->   
    </div>
    
    <div id="retorno_datatable">  
        
        <table class="table table-bordered" id="dt_110x_complex">
            <thead class="bg-primary text-white">
                <!--retorno AJAX-->
            </thead>
            <tbody>
                <!--retorno AJAX-->
            </tbody>         
            <tfoot class="bg-primary text-white">
                <!--retorno AJAX-->
            </tfoot>
        </table>
        
    </div>
    