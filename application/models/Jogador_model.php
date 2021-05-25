<?php

class Jogador_model extends CI_Model{

    public function listar_jogador(){ 
        //realização do select do cliente
        return $this->db->query("SELECT * FROM jogador WHERE status = 'A' ORDER BY nome ASC")->result();   
    }

}