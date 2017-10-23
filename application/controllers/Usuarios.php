<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

function __construct(){
    parent::__construct();
   $this->load->model('usuario_model');
   
}
    public function index() {
                $dados["indice"] = "";   
        if(!$this->usuario_model->checarSessao()){
       
    
        $this->load->view('login', $dados);
        
         }else{
             redirect('dashboard');
         }

    }
     public function login($indice = null) {
         $dados["indice"] = $indice;      
        if(!$this->usuario_model->checarSessao()){
        
    
        $this->load->view('login', $dados);
        
         }else{
             redirect('dashboard');
         }

    }
         
    public function sair(){
            $this->session->sess_destroy();
            redirect("usuarios");
 
    }
    public function entrar() {
        $erro = md5('1');
         $login = $this->input->post('login');
        $senha = $this->input->post('senha');
      
        
        if ($this->usuario_model->entrar($login, $senha) == true) {
            redirect("dashboard");
        } else {
            redirect("usuarios/login/$erro");   
        }
    }


}

