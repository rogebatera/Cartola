<?php

class Controle_rodada extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Controle_cartola_model', 'ccm');
        $this->load->model('Jogador_model', 'jm');
        $this->load->model('Controle_rodada_model', 'crm');
    }

    public function index(){

        $dados['controle_rodada'] = $this->ccm->listar_controle_cartola();
        $dados['jogador'] = $this->jm->listar_jogador();

        $this->load->view('libraries/html_header_default');
        $this->load->view('menu/menu_default');  
        $this->load->view('controle_rodada/View_cadastro_controle_rodada', $dados);
        $this->load->view('libraries/html_footer_default'); 

    }

    public function inserir_pontuacao_rodada(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('controle_cartola', 'Controle de Cartola', 'required');
        $this->form_validation->set_rules('rodada', 'Rodada', 'required');
        $this->form_validation->set_rules('jogador', 'Jogador', 'required');
        $this->form_validation->set_rules('pontuacao_rodada_cartola', 'Pontuacao da Rodada Cartola', 'required|numeric');
        $this->form_validation->set_rules('colocacao_rodada', 'Colocacao Rodada', 'required');
        $this->form_validation->set_rules('pontuacao_por_colocacao', 'Pontuacao por Colocacao', 'required|numeric');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>', '</div>');     
        
        if($this->form_validation->run() == FALSE){

            echo validation_errors();

        }else{

            $controle_cartola = $this->input->post('controle_cartola');
            $numero_rodada = $this->input->post('rodada');
            $id_jogador = $this->input->post('jogador');
            $colocacao_rodada = $this->input->post('colocacao_rodada');

            if($this->crm->validar_controle_rodada($controle_cartola, $numero_rodada, $id_jogador, $colocacao_rodada) == FALSE){

                $dados_pontuacao_rodada = array(
                    "id_controle"               => $this->input->post('controle_cartola'),
                    "numero_rodada"             => $this->input->post('rodada'),
                    "id_jogador"                => $this->input->post('jogador'),
                    "pontuacao_rodada_cartola"  => $this->input->post('pontuacao_rodada_cartola'),
                    "colocacao_rodada"          => $this->input->post('colocacao_rodada'),
                    "pontuacao_por_colocacao"   => $this->input->post('pontuacao_por_colocacao'),
                    "data_cadastro"             => date('Y-m-d H:i'),
                );
            
                $upt = $this->crm->inserir_pontuacao_rodada($dados_pontuacao_rodada);

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
                    Verificado que Ja Existe Cadastro desse Jogador para essa Rodada ou Ja Tem Jogador Nessa Posicao nessa Rodada
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';  
            }

        }

    }


}