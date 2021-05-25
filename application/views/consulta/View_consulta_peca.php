<div class="container">
    
    <div class="panel panel-primary">
    <div class="panel-heading">Consultar Operação</div>
        <div class="panel-body">
            <div class="row">
            <form style="margin-left: 10px;"> 
                <div class="form-group">
                    <label>Consultar Operação: </label>
                    <input type="text" class="form-control" placeholder="CODIGO PEÇA" name="cod_peca" id="cod_peca">
                </div>
                <button type="button" class="btn btn-success" onClick="return consultarPeca()"> Consultar </button>
            </form>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top:10px;" align="center">
        <div id="imagem"></div>
    </div>
    
    <div class="panel panel-primary">
            <div class="panel-heading">Consultar Máquina</div>
            <div class="panel-body">
                
                <div class="row">
                <form style="margin-left: 10px;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CODIGO MAQUINA" name="cod_maquina" id="cod_maquina">
                    </div>
                    <button type="button" class="btn btn-success" onClick="return consultarMaquina()"> Consultar </button>
                </form>
                </div>
                
            </div>
    </div>
    
    <div class="row" style="margin-top:10px;" align="center">
        <div id="imagem2"></div>
    </div>
    
</div>




