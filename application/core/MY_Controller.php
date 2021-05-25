<?php

class MY_Controller extends CI_Controller{
    
    public function __construct(){
        
        parent::__construct();
        $logado = $this->session->userdata("logado_cartola");
        if($logado != 1){

            $dados_usuario = array(
                'id_usuario_cartola',
                'logado_cartola',
                'email_cartola',
                'nome_cartola',
            );        
            $this->session->unset_userdata($dados_usuario);
                        
            redirect(base_url('login'));
        }
        
   }
   
   
}
