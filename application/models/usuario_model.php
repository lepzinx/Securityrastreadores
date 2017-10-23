<?php

class Usuario_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    public function checarSessao(){
        if($this->session->userdata('logado')==false){
            return false;
        } else {
            return true;
        }
    }

        public function entrar($login, $senha){

        $this->db->where('usuario_email', $login);
        $this->db->where('usuario_senha', $senha);

        $usuario = $this->db->get('usuarios', 1);

        if ($usuario->num_rows() > 0){
            $dados['usuario_id'] = $usuario->row()->usuario_id;
            $dados['usuario_nome'] = $usuario->row()->usuario_nome;
            $dados['usuario_cpf'] = $usuario->row()->usuario_cpf;
            $dados['usuario_email'] = $usuario->row()->usuario_email;
            $dados['usuario_senha'] = $usuario->row()->usuario_senha;
            $dados['usuario_endereco'] = $usuario->row()->usuario_endereco;
            $dados['usuario_bairro'] = $usuario->row()->usuario_bairro;
            $dados['usuario_cidade'] = $usuario->row()->usuario_cidade;
            $dados['usuario_estado'] = $usuario->row()->usuario_estado;
            $dados['usuario_estado'] = $usuario->row()->usuario_estado;
            $dados['usuario_pais'] = $usuario->row()->usuario_pais;
            $dados['usuario_celular'] = $usuario->row()->usuario_celular;
            $dados['usuario_fixo'] = $usuario->row()->usuario_fixo;
            $dados['usuario_atualiza'] = $usuario->row()->usuario_atualiza;
            $dados['usuario_data'] = $usuario->row()->usuario_data;
            $dados['usuario_acesso'] = $usuario->row()->cadastroConfirmado;
            $dados['usuario_tipo'] = $usuario->row()->usuario_tipo;
            $dados['cliente_id'] = $usuario->row()->cliente_id;
            $dados['logado'] = true;

            $this->session->set_userdata($dados);
            return true;
    }else{
      return false;
    }
    }

   public function pegarQtdEventos(){
        return $this->db->count_all('eventos');
    }
       public function pegarQtdEquipamentos(){
        return $this->db->count_all('equipamentos');
    }
       public function pegarQtdClientes(){
        return $this->db->count_all('usuarios');
    }
       public function pegarQtdPortadores(){
        return $this->db->count_all('portadores');
    }
    /*   public function pegarQtdMonitorado24(){
        return $this->db->count_all('eventos');
    }*/



}
