<?php

class Pagamento extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Pagamento_model', 'pm');
        $this->load->model('Jogador_model', 'jm');
        $this->load->model('Controle_cartola_model', 'ccm');
    }

    public function index(){

        $dados['pagamentos'] = $this->pm->listar_pagamentos();
        $dados['jogadores'] = $this->jm->listar_jogador();
        $dados['turnos'] = $this->ccm->listar_controle_cartola();

        $this->load->view('libraries/html_header_default');
        $this->load->view('menu/menu_default');  
        $this->load->view('pagamento/View_cadastro_pagamento', $dados);
        $this->load->view('libraries/html_footer_default'); 

    }

    public function inserir_pagamento(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('jogador', 'Nome Jogador', 'required');
        $this->form_validation->set_rules('controle_cartola', 'Turno', 'required');


        $this->form_validation->set_error_delimiters('<div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>', '</div>');     
        
        if($this->form_validation->run() == FALSE){

            $retorno = array(
                "message" => validation_errors(),
                "status" => "erro"
            );
            echo json_encode($retorno);

        }else{

            $id_jogador   = $this->input->post('jogador');
            $id_controle  = $this->input->post('controle_cartola');

            if($this->pm->validar_pagamento($id_jogador, $id_controle) == false){

                $dados_pagamento = array(
                    "id_controle"       => $id_controle,
                    "id_jogador"        => $id_jogador,
                    "data_pagamento"    => date('Y-m-d H:i'),
                    "status_pagamento"  => 'P',
                );
            
                $upt = $this->pm->inserir_pagamento($dados_pagamento);

                if($upt == TRUE){
                    
                    $retorno = array(
                        "message" => '<div class="alert alert-success text-center">
                                        Realizado Cadastro com Sucesso
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>',
                        "status" => "success"
                    );
                    echo json_encode($retorno);
                }else{

                    $retorno = array(
                        "message" => '<div class="alert alert-danger text-center">
                                        Houve um Erro ao Cadastrar Pagamento
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>',
                        "status" => "erro"
                    );
                    echo json_encode($retorno);

                }

            }else{

                $retorno = array(
                    "message" => '<div class="alert alert-danger text-center">
                                        Verificado que Ja Existe Pagamento desse Jogador/Time para o Turno, Favor Verificar.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>',
                    "status" => "erro"
                );
                echo json_encode($retorno); 

            }

        }

    }


}