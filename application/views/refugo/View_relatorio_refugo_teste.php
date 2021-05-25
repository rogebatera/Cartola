<div class="container-fluid">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Refugos Valorizados</div>
        <div class="panel-body">
            
            <form>
                 
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="calendario">De: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_de" id="calendario"/>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="calendario2">Ate: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_ate" id="calendario2">
                    </div>
                    
                    <!--<div class="form-group col-md-2">
                        <label for="peca_d">Peça D: </label>
                        <select class="form-control" id="peca_d" name="peca_d">
                            <option value="S">SIM</option>
                            <option value="F">NÃO</option>
                        </select>
                    </div>-->
                    
                    <div class="form-group col-md-2">
                        <label for="teste_destrutivo">Teste Destrutivo: </label>
                        <select class="form-control" id="teste_destrutivo" name="teste_destrutivo">
                            <option value="S">SIM</option>
                            <option value="N">NÃO</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="tipo_relatorio">Tipo Relatorio: </label>
                        <select class="form-control" id="tipo_relatorio" name="tipo_relatorio">
                            <option value="grupo">Grupo</option>
                            <option value="detalhado">Detalhado</option>
                            <option value="dll">Detalhado Linha a Linha</option>
                            <option value="grafico">Gráfico</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <button type="button" class="btn btn-success" id="proces_input" onClick="return consultarRefugoValorizado2()"> Filtrar </button>
                        <button type="button" class="btn btn-warning" onClick="limparFiltroRefugoValorizado()"> Limpar Filtro </button>
                    </div>
                </div>
				
            </form>
                      
        </div>
    </div>
    
    <div id="carregamento">
        <!--retorno do AJAX-->   
        
        <table class="table table-bordered" id="dt_110x_complex">
            <thead class="bg-primary text-white">
                <!--retorno AJAX-->
            </thead>
            <tbody>
                <!--retorno AJAX-->
            </tbody>
        </table>
       
        
    </div> 
    