<?php

class Login extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_model', 'um');
    }
    
    public function index(){
        $this->load->view('libraries/html_header_login');
        //$this->load->view('menu/menu_default');      
        $this->load->view('login/View_login');
        $this->load->view('libraries/html_footer_login');  
    }
    
    public function valida_login(){
        
        try{
            
            extract($_POST);            
            $dados = $this->um->valida_usuario($login, $senha);
                      
            if($dados == 1){
                
               // $verificar_login = is_numeric($login);

                /*if($verificar_login == TRUE){

                    $dados_user = $this->um->listar_dados_usuario_protheus($login, $senha);
                    $dados_usuario = array(
                        'id_usuario_crp' => $dados_user[0]->RA_MAT,
                        'logado_crp'     => 1,
                        'email_crp'      => $dados_user[0]->RA_EMAIL,
                        'nome_crp'       => $dados_user[0]->RA_NOME,
                        'nivel_crp'      => 'I'
                    );

                    $this->session->set_userdata($dados_usuario);
                    echo $dados;

                }else{*/

                    $dados_user = $this->um->listar_dados_usuario($login, $senha);
                    $dados_usuario = array(
                        'id_usuario_cartola' => $dados_user[0]->id_usuario,
                        'logado_cartola'     => 1,
                        'email_cartola'      => $dados_user[0]->email,
                        'nome_cartola'       => $dados_user[0]->nome,
                    );
                    
                    $this->session->set_userdata($dados_usuario);
                    echo $dados;
               // }

            }
                      
        }catch(Exception $e){                    
            echo $e->getMessage();                   
        }

    } 
    
    public function logout(){
        
        $dados_usuario = array(
            'id_usuario_cartola',
            'logado_cartola',
            'email_cartola',
            'nome_cartola',
        );        
        $this->session->unset_userdata($dados_usuario);
        redirect(base_url());
        
    }
    
    
}
