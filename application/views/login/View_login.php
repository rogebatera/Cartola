<!-- Modal -->  
<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        
        <div class="modal-body" id="bodyForm">
            <form role="form" class="col-lg-">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Login </label>
                <input type="text" class="form-control" id="usrname" placeholder="Insira seu usuario">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha </label>
                <input type="password" class="form-control" id="psw" placeholder="Insira sua senha">
              </div>
              <div>
                <p id="proLoaderLogin" style="text-align: center;"></p>
              </div>
              <button type="button" id="login" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Login </button>
            </form>
        </div>
        
        <div class="modal-content">
            <div class="modal-footer">
               <!-- <small class="text-danger"> Quer Acessar o Sistema Antigo? <a href="http://extranet.ibratecbrasil.com.br:8080/cms/engineName/login">Clique Aqui.</a></small> -->
            </div>
        </div>
    </div>
    
</div>
</div> 
<!-- Fim Modal -->

<div class="container-fluid">
    
    <div id="fundo-externo">
        <div id="fundo">

            <div class="row">      
                <img src="<?php echo base_url('assets/img/cartola2.png'); ?>" id="fundo"/>              
            </div>

        </div>
    </div>
        
    <br/>

    <!--<div id="site">
        <div class="row">   
            <div class="text-center">

                <button type="button" class="btn btn-default btn-lg" id="myBtn">SysMW</button>
                <button type="button" class="btn btn-default btn-lg" id="myHelpDesk">Help Desk</button>

            </div>        
        </div>
    </div>-->
   
</div>
