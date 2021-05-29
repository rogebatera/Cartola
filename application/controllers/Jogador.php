<?php

class Jogador extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Jogador_model', 'jm');
    }

    public function index(){

        $dados['jogadores'] = $this->jm->listar_jogador();

        $this->load->view('libraries/html_header_default');
        $this->load->view('menu/menu_default');  
        $this->load->view('jogador/View_cadastro_jogador', $dados);
        $this->load->view('libraries/html_footer_default'); 

    }

    public function inserir_jogador(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome_jogador', 'Nome Jogador', 'required');
        $this->form_validation->set_rules('nome_time', 'Nome Time', 'required');


        $this->form_validation->set_error_delimiters('<div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>', '</div>');     
        
        if($this->form_validation->run() == FALSE){

            echo validation_errors();

        }else{

            $nome_jogador   = $this->input->post('nome_jogador');
            $nome_time      = $this->input->post('nome_time');

            if($this->jm->validar_jogador($nome_jogador, $nome_time) == false){

                $dados_jogador = array(
                    "nome"              => $nome_jogador,
                    "nome_time"         => $nome_time,
                    "status"            => 'A',
                    "data_cadastro"     => date('Y-m-d H:i'),
                );
            
                $upt = $this->jm->inserir_jogador($dados_jogador);

                if($upt == TRUE){
            
                    echo    '<div class="alert alert-success text-center">
                                Realizado Cadastro com Sucesso
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';

                }else{

                    echo    '<div class="alert alert-danger text-center">
                                Houve um Erro ao Cadastrar Rodada
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';

                }

            }else{

                echo    
                '<div class="alert alert-danger text-center">
                    Verificado que Ja Existe Cadastro desse Jogador ou Time, Favor Verificar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';  

            }

        }

    }


}