<?php

class Controle_rodada_model extends CI_Model{

    public function inserir_pontuacao_rodada($dados_pontuacao_rodada){
        //realização do select do cliente
        return $this->db->insert('controle_rodada', $dados_pontuacao_rodada);

    }

    public function validar_controle_rodada($controle_cartola, $numero_rodada, $id_jogador, $colocacao_rodada){

        $cont = 0;

        $cont += $this->db->query("SELECT * FROM controle_rodada 
        WHERE id_jogador = $id_jogador 
        AND numero_rodada = $numero_rodada 
        AND id_controle = $controle_cartola")->num_rows(); 
        
        $cont += $this->db->query("SELECT * FROM controle_rodada 
        WHERE colocacao_rodada = $colocacao_rodada
        AND numero_rodada = $numero_rodada 
        AND id_controle = $controle_cartola")->num_rows(); 
        
        if($cont > 0){
            return true;
        }else{
            return false;
        }

    }

}