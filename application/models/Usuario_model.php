<?php

class Usuario_model extends CI_Model{
    
    public function listar_dados_usuario($login = null, $senha = null){
               
        $query = $this->db->query("SELECT * FROM usuario WHERE email = '".$login."'
        AND senha = '".$senha."' AND status = 'A'");
        return $query->result();
        
    }

    
    public function valida_usuario($login = null, $senha = null){

        try{

            if($login == "" AND $senha == ""){

                return 0;    

            }else{
                
                $query = $this->db->query("SELECT * FROM usuario WHERE email = '".$login."'
                AND senha = '".$senha."' AND status = 'A'");                
                return $return = count($query->result());

                /*if($return > 0){

                    return $return; 

                }else{

                    $p12 = $this->load->database('p12', TRUE);

                    $query_p12 = $p12->query("SELECT * FROM P12..SRA010 WHERE RA_MAT = '".$login."'
                    AND RA_CIC = '".$senha."' AND RA_DEMISSA = '' AND D_E_L_E_T_ <> '*'");

                    $return = count($query_p12->result());

                    return $return;
           
                }*/
                
            }

        }catch(Exception $e){                       
            return $e->getMessage();                
        }

    }
    
}
