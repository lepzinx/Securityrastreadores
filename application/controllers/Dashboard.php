<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->model('geral_model');
    }

    public function index() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            // ADM

            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] =  $this->geral_model->pegarEntregadoresGeral();
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["qtdOffline"] = $this->geral_model->qtdOffline();
                $dados["qtdOnline"] = $this->geral_model->pegarQtdEquipamento() - $this->geral_model->qtdOffline();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados['total_usuarios'] = $this->geral_model->pegarQtdUsuariosCliente($this->session->userdata['cliente_id']);
                $dados['total_monitorado'] = $this->geral_model->pegarEquipsClientes24($this->session->userdata['cliente_id']);
                $dados['total_entregador'] = $this->geral_model->pegarEntregadoresGeralCliente($this->session->userdata['cliente_id']);
                $dados['total_equipamentos'] = $this->geral_model->pegarQtdEquipamentos($this->session->userdata['cliente_id']);
                $dados["qtdOffline"] = $this->geral_model->qtdOfflineCliente($this->session->userdata['cliente_id']);
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosCliente($this->session->userdata['cliente_id']);
                $dados["qtdOnline"] = $dados['total_equipamentos'] - $dados['qtdOffline'];
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] =  $this->geral_model->pegarEntregadoresGeral();
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["qtdOffline"] = $this->geral_model->qtdOffline();
                $dados["qtdOnline"] = $this->geral_model->pegarQtdEquipamento() - $this->geral_model->qtdOffline();
            }



            $this->load->view("inicio", $dados);
        }
    }

    public function detalhes($indice = null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }



            $dados["equipamento"] = $this->geral_model->pegarDados($indice);


            $this->load->view("includes/header");
            $this->load->view("detalhes", $dados);
            $this->load->view("includes/footer");
        }
    }

    public function cadastrousuario() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {



                if($this->session->userdata['usuario_tipo'] == "A"){
            $dados["clientes"] = $this->geral_model->pegarUsuarios();
            }else if($this->session->userdata['usuario_tipo'] == "C"){
            $dados["clientes"] = $this->geral_model-> pegarUsuariosClientes($this->session->userdata['cliente_id']);
            }
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-usuario", $dados);
        }
    }

    public function editarusuario($indice = null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            $dados["indice"] = $indice;
            $dados["cliente"] = $this->geral_model->infoCliente($indice);
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("editarusuario", $dados);
        }
    }

    public function cadastrarUsuario() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("novousuario", $dados);
        }
    }

    public function cadastroEquipamento() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["Equip"] = $this->geral_model->pegarEquipamentosADM();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-equipamento", $dados);
        }
    }
        public function novoEquipamento() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("novoequipamento", $dados);
        }
    }
            public function cadastroJornadas() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["jornadas_adm"] = $this->geral_model->pegarJornadas();
            $dados["jornadas_usu"] = $this->geral_model->pegarJornadasUsuario($this->session->userdata['cliente_id']);
         // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-jornada", $dados);
        }
    }
          public function novaJornada() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            if($this->session->userdata['usuario_tipo'] == "A"){
            $dados["equipamentos"] = $this->geral_model->pegarEquipamentosADM();
            }else if($this->session->userdata['usuario_tipo'] == "C"){
            $dados["equipamentos"] = $this->geral_model-> pegarEquipamentoClientes($this->session->userdata['cliente_id']);
            }
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("novajornada", $dados);
        }
    }
          public function configurarJornada($indice=null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["indice"] = $indice;
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            if($this->session->userdata['usuario_tipo'] == "A"){
            $dados["equipamentos"] = $this->geral_model->pegarEquipamentosADM();
            }else if($this->session->userdata['usuario_tipo'] == "C"){
            $dados["equipamentos"] = $this->geral_model-> pegarEquipamentoClientes($this->session->userdata['cliente_id']);
            }
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("finalizarjornada", $dados);
        }
    }

       public function cadastroEntregador() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["entregador_adm"] = $this->geral_model->pegarEntregadores();
            $dados["entregador_usu"] = $this->geral_model->pegarEntregadoresUsuario($this->session->userdata['cliente_id']);
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-entregador", $dados);
        }
    }

            public function novoEntregador() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }
            $this->load->view("novoentregador", $dados);
        }
    }


        public function editarEntregador($indice = null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["indice"] = $indice;
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            $dados["entregador"] = $this->geral_model->infoEntregador($indice);
              // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("editarentregador", $dados);
        }
    }

    public function cadastroGrupo() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["grupos_adm"] = $this->geral_model->pegarGrupos();
            $dados["grupos_usu"] = $this->geral_model->pegarGruposUsuario($this->session->userdata['cliente_id']);
           // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-grupo", $dados);
        }
    }
          public function novoGrupo() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();

            $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
            $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
            $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
            $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
            $dados["total_entregador"] = 0;
            $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();

            $this->load->view("novogrupo", $dados);
        }
    }
         public function editarGrupo($indice = null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {

            $dados["indice"] = $indice;
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            $dados["grupo"] = $this->geral_model->infoGrupo($indice);
              // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("editargrupo", $dados);
        }
         }

         public function cadastroCliente() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {



            $dados["clientes"] = $this->geral_model->pegarClientes();


           // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastro-cliente", $dados);
        }
    }

    public function editarCliente($indice = null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
             $dados["usuarios"] = $this->geral_model->pegarClientes();
            $dados["indice"] = $indice;
            $dados["cliente"] = $this->geral_model->infoCliente($indice);
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("editar_cliente", $dados);
        }
    }

    public function cadastrarCliente() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["usuarios"] = $this->geral_model->pegarClientes();
           // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("cadastrar_cliente", $dados);
        }
    }

    // FUNÇÕES CHAMADAS PELOS FORMULÁRIOS

    public function editarCli($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->editarCliente($indice)) {
                redirect("dashboard/cadastrousuario");
            }
        }
    }

    public function excluirCli($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->excluirCliente($indice)) {
                redirect("dashboard/cadastrousuario");
            }
        }
    }

    public function cadastrarCli() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarCliente($indice)) {
                redirect("dashboard/cadastrousuario");
            }
        }
    }
        public function cadastrarEquipamento() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarEquipamento()) {
                redirect("dashboard/cadastroequipamento");
            }
        }
    }
    public function cadastrarJornadas() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarJornada()) {
                redirect("dashboard/cadastrojornadas");
            }
        }
    }
     public function finalizarJornada($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->finalizarJornada($indice)) {
                redirect("dashboard/cadastrojornadas");
            }
        }
    }
         public function editarJornada($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->editarJornada($indice)) {
                redirect("dashboard/cadastrojornadas");
            }
        }
    }
       public function cadastrarEntregador() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarEntregador()) {
                redirect("dashboard/cadastroentregador");
            }
        }
    }
        public function alterarEntregador($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->editarEntregador($indice)) {
                redirect("dashboard/cadastroentregador");
            }
        }
    }

    public function excluirEntregador($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->excluirEntregador($indice)) {
                redirect("dashboard/cadastroentregador");
            }
        }
    }
       public function cadastrarGrupo() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarGrupo()) {
                redirect("dashboard/cadastrogrupo");
            }
        }
    }
           public function alterarGrupo($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->editarGrupo($indice)) {
                redirect("dashboard/cadastrogrupo");
            }
        }
    }

    public function excluirGrupo($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->excluirGrupo($indice)) {
                redirect("dashboard/cadastrogrupo");
            }
        }
    }
          public function cadastrarClienteGEral() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if ($this->geral_model->cadastrarClienteGeral()) {
                redirect("dashboard/cadastrocliente");
            }
        }
    }
           public function alterarClienteGeral($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->excluirClienteGeral($indice)) {
                redirect("dashboard/cadastrocliente");
            }
        }
    }

    public function excluirClienteGeral($indice = null) {
        if ($indice != null) {
            if ($this->geral_model->excluirClienteGeral($indice)) {
                redirect("dashboard/cadastrocliente");
            }
        }
    }
      public function relatoriotemperatura() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if($this->session->userdata["usuario_tipo"] == "A"){
            $dados["Equip"] = $this->geral_model->pegarEquipamentosADM();
            } else {
            $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata["cliente_id"]);
            }
            $dados["usuarios"] = $this->geral_model->pegarClientes();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("relatorio_temperatura", $dados);
        }
    }

          public function detalhestemperatura($indice=null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["indice"] = $indice;
            if($this->session->userdata["usuario_tipo"] == "A"){

            $dados["Equip"] = $this->geral_model->pegarEquipamentosADM();
            } else {
            $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata["cliente_id"]);
            }
            $dados["usuarios"] = $this->geral_model->pegarClientes();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("detalhes_temperatura", $dados);
        }
    }

     public function relatorioUmidade() {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            if($this->session->userdata["usuario_tipo"] == "A"){
            $dados["Equip"] = $this->geral_model->pegarEquipamentosADM();
            } else {
            $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata["cliente_id"]);
            }
            $dados["usuarios"] = $this->geral_model->pegarClientes();
            // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }
            $this->load->view("relatorio_umidade", $dados);
        }
    }




     public function relatorioJornadas(){
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
           $dados["jornadas_adm"] = $this->geral_model->pegarJornadas();
            $dados["jornadas_usu"] = $this->geral_model->pegarJornadasUsuario($this->session->userdata['cliente_id']);
            $dados["usuarios"] = $this->geral_model->pegarClientes();
       // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("relatorio_jornada", $dados);
        }
    }

             public function detalhesUmidade($indice=null) {
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
            $dados["indice"] = $indice;
            if($this->session->userdata["usuario_tipo"] == "A"){

            $dados["Equip"] = $this->geral_model->pegarEquipamentosADM();
            } else {
            $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata["cliente_id"]);
            }
            $dados["usuarios"] = $this->geral_model->pegarClientes();
          // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }
            $this->load->view("detalhes_temperatura", $dados);
        }
    }
public function relatorioAcessos(){
        if (!$this->usuario_model->checarSessao()) {
            redirect('usuarios');
        } else {
           //$dados["jornadas_adm"] = $this->geral_model->pegarJornadas();
            //$dados["jornadas_usu"] = $this->geral_model->pegarJornadasUsuario($this->session->userdata['cliente_id']);
            $dados["usuarios"] = $this->geral_model->pegarClientes();
             // ADM
            if ($this->session->userdata['usuario_tipo'] == "A") {
                $dados["clientes"] = $this->geral_model->pegarClientes();
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientes();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
            }


            // CLIENTE NIVEL 1
            if ($this->session->userdata['usuario_tipo'] == "C") {
                $dados["total_eventos"] = $this->geral_model->pegarQtdEventosClientes();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = 1;
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdEquipamento();
                $dados["Equip"] = $this->geral_model->pegarEquipamentos($this->session->userdata['usuario_cod']);
            }

            //MONITOR
            if ($this->session->userdata['usuario_tipo'] == "M") {

                $dados["total_eventos"] = $this->geral_model->pegarQtdEventos();
                $dados["total_monitorado"] = $this->geral_model->pegarQtdMonitorados();
                $dados["total_clientes"] = $this->geral_model->pegarQtdClientesMonitorados();
                $dados["total_usuarios"] = $this->geral_model->pegarQtdUsuarios();
                $dados["total_entregador"] = 0;
                $dados["total_equipamentos"] = $this->geral_model->pegarQtdMonitorados();
                $dados["cliente"] = $this->geral_model->pegarEquipsMonitorados();
            }

            $this->load->view("relatorio_acessos", $dados);
        }
    }
}
