<div class="container-fluid">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Previsão de Consumo de M.P</div>
        <div class="panel-body">
            
            <div class="form-row">
                    
                <form>                        
                    <div class="form-group col-md-2">
                        <label for="calendario">De: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_de" id="calendario"/>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="calendario2">Ate: </label>
                        <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data_ate" id="calendario2">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="cliente">Cliente: </label>
                        <input type="text" class="form-control" placeholder="Ex: Mercedes" name="cliente" id="cliente">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="peca">Peça: </label>
                        <input type="text" class="form-control" placeholder="Ex: 13874" name="peca" id="peca">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <button type="button" class="btn btn-success" id="proces_input" onClick="return consultarPrevisaoConsumoMp()"> Filtrar </button>
                            <button type="button" class="btn btn-warning" onClick="limparFiltroPrevisaoConsumoMp()"> Limpar Filtro </button>
                        </div>
                    </div>
                    
                </form>
                      
            </div>
        </div>   
    </div>
    
    <div id="carregamento">
        

        
    <!--retorno do AJAX-->
            
    <!--<div class="col-md-12">
        <small> <b>Relatorio Gerado:</b> 14/06/2019 14:06 - <b>Usuario:</b> Rogério Lucio </small> 
        
        <h5 class="text-info"><b>Cod Peça: 11951 - Cliente: Eaton Divisoes e Transporte</b></h5>
        <table class="table table-condensed table-bordered">           
            <thead class="bg-success">
                <tr>
                    <th>Cod. M.P</th>
                    <th>Desc. M.P</th>
                    <th>Qtde. Atual.</th>
                    <th>Data</th>
                    <th>Peso</th>
                    <th>Peças</th>
                    <th>Estoque</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"> 47933 </td>
                    <td class="text-center"> Fundido 4300 </td>
                    <td class="text-center"> 0 </td>
                    <td class="text-center"> 03/06/2019 </td>
                    <td class="text-center"> 4 </td>
                    <td class="text-center"> 6 </td>
                    <td class="text-center"> 11 </td>
                </tr>                
            </tbody>       
        </table>
    </div>
        
    <div class="col-md-6"> 
        
            <table class="table table-condensed table-bordered">

                <thead class="bg-warning">
                    <tr>
                        <th class="text-center">Ordem Produção</th>
                        <th class="text-center">Qtd. Empenhada</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-center">
                        <td> 000461 </td>
                        <td> 12 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 000998 </td>
                        <td> 3 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001173 </td>
                        <td> 42 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001253 </td>
                        <td> 90 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001322 </td>
                        <td> 120 </td>
                    </tr>                
                </tbody>

            </table>
        
    </div> -->
        <!--
        <div class="col-md-12">
            
            <h5 class="text-info"><b>Cod. Peça 15425</b></h5>
            <table class="table table-condensed table-bordered">           
                <thead class="bg-success">
                    <tr class="text-center">
                        <th>Cod. M.P</th>
                        <th>Desc. M.P</th>
                        <th>Qtde. Atual.</th>
                        <th>Data</th>
                        <th>Peso</th>
                        <th>Peças</th>
                        <th>Estoque</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td> 47933 </td>
                        <td> Fundido 4300 </td>
                        <td> 0 </td>
                        <td> 03/06/2019 </td>
                        <td> 4 </td>
                        <td> 6 </td>
                        <td> 11 </td>
                    </tr>                
                </tbody>       
            </table>
        
        </div>
        
        <div class="col-md-6">
            
            <table class="table table-condensed table-bordered">

                <thead class="bg-warning">
                    <tr>
                        <th class="text-center">Ordem Produção</th>
                        <th class="text-center">Qtd. Empenhada</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-center">
                        <td> 000461 </td>
                        <td> 12 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 000998 </td>
                        <td> 3 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001173 </td>
                        <td> 42 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001253 </td>
                        <td> 90 </td>
                    </tr>
                    <tr class="text-center">
                        <td> 001322 </td>
                        <td> 120 </td>
                    </tr>                
                </tbody>

            </table>
            
        </div>
            
    </div>
    -->    
    <!--<div id="retorno_datatable">  
        
        <table class="table table-bordered" id="dt_110x_complex">
            <thead class="bg-primary text-white">
                <!--retorno AJAX-->
            <!--</thead>
            <tbody>
                <!--retorno AJAX-->
            <!--</tbody>
            
            <tfoot class="bg-primary text-white">
                <!--retorno AJAX-->
            <!--</tfoot>
        </table>
        
    </div> -->
            
</div>            
    

