//tela login
$(document).ready(function(){
  
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
    
    $("#myHelpDesk").click(function(){        
       window.location.assign();     
    });
    
    $(document).keypress(function(e){
        
        if(e.which == 13){
        
            $("#proLoaderLogin").empty().html("<img src='"+base_url+"assets/img/proloader.gif' id='proloader' width='80px'/>");	
      
            var login = $("#usrname").val();
            var psenha = $("#psw").val();

            $.post(base_url+'login/valida_login', {login: login, senha: psenha}, function(data){

                if(data == "1"){

                    window.location.assign(base_url+"home");
                    //alert('Entra no Sistema');
                }else{

                    $("#proLoaderLogin").html('<div class="alert alert-danger"><h1 style="font-size: 15px;"><b>Usuário ou Senha Inválidos.</b></h1></div>');

                }

            });
            
        }
        
    });
    
    $("#login").click(function(){
          
        $("#proLoaderLogin").empty().html("<img src='"+base_url+"assets/img/proloader.gif' id='proloader' width='80px'/>");	
      
        var login = $("#usrname").val();
        var psenha = $("#psw").val();
        
        $.post(base_url+'login/valida_login', {login: login, senha: psenha}, function(data){
             
            if(data == "1"){
                
                window.location.assign(base_url+"home");
                //alert('Entra no Sistema');
            }else{
                
                $("#proLoaderLogin").html('<div class="alert alert-danger"><h1 style="font-size: 15px;"><b>Usuário ou Senha Inválidos.</b></h1></div>');
                
            }
  
        });

        
    });
    
    
});


