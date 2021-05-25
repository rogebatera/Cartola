<?php

class Home extends MY_Controller{

    public function index(){

        /*if($_SESSION['nivel_crp'] != 'I'){
            $this->load->view('libraries/html_header_default');
            $this->load->view('menu/menu_default');
        }else{
            $this->load->view('libraries/html_header_inventario');
            $this->load->view('menu/menu_inventario');           
        } */ 
        $this->load->view('libraries/html_header_default');
        $this->load->view('menu/menu_default');  
        $this->load->view('home/View_home');
        $this->load->view('libraries/html_footer_default');  
    }
    
}
