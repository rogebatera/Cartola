<?php

class Pagamento_model extends CI_Model{

    public function listar_pagamentos(){ 
        return $this->db->query("SELECT p.id_pagamento,
        p.id_controle,
        p.id_jogador,
        p.data_pagamento,
        p.status_pagamento,
        cc.ano,
        cc.turno,
        j.nome,
        j.nome_time,
        j.status AS status_time
        FROM pagamento p
        JOIN controle_cartola cc ON p.id_controle = cc.id_controle_cartola
        JOIN jogador j ON p.id_jogador = j.id_jogador")->result();   
    }

    public function validar_pagamento($id_jogador, $id_controle){

        $cont = 0;

        $cont += $this->db->query("SELECT * FROM pagamento
        WHERE id_controle = '$id_controle' AND id_jogador = '$id_jogador'")->num_rows(); 
        
        if($cont > 0){
            return true;
        }else{
            return false;
        }

    }

    public function inserir_pagamento($dados_pagamento){
        //realização do select do cliente
        return $this->db->insert('pagamento', $dados_pagamento);

    }

}