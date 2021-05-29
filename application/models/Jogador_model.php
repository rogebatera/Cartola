<?php

class Jogador_model extends CI_Model{

    public function listar_jogador(){ 
        //realização do select do cliente
        return $this->db->query("SELECT * FROM jogador WHERE status = 'A' ORDER BY nome ASC")->result();   
    }

    public function validar_jogador($nome_jogador, $nome_time){

        $cont = 0;

        $cont += $this->db->query("SELECT * FROM jogador
        WHERE nome = '$nome_jogador' OR nome_time = '$nome_time'")->num_rows(); 
        
        if($cont > 0){
            return true;
        }else{
            return false;
        }

    }

    public function inserir_jogador($dados_jogador){
        //realização do select do cliente
        return $this->db->insert('jogador', $dados_jogador);

    }

}