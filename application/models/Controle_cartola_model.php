<?php

class Controle_cartola_model extends CI_Model{

    public function listar_controle_cartola(){ 
        //realização do select do cliente
        return $this->db->query("SELECT * FROM controle_cartola WHERE status = 'A'")->result();   
    }

}