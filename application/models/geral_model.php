<?php

class Geral_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }

// GERAL
    public function pegarQtdEventos() {
        return $this->db->count_all('eventos');
    }

    public function pegarQtdEventosClientes() {
        $this->db->select('*');
        $eventosID = $this->db->get('eventos')->result();
        $id = $this->session->userdata['cliente_id'];
        foreach ($eventosID as $ev) {
            $this->db->where("equipamento_id='$ev->idEquipamento' AND cliente_id='$id'");
            $resultado = $this->db->get('equipamentos');
        }

        return $resultado->num_rows();
    }

    public function pegarQtdMonitorados() {
        if ($this->db->where('ativa_monitoramento', 1)) {
            $resultado = $this->db->get('equipamento')->num_rows();
            return $resultado;
        }
    }

    public function pegarQtdClientes() {
            $this->db->select('*');
            $resultado = $this->db->get('clientes')->num_rows();
            return $resultado;

    }

    public function pegarQtdClientesMonitorados() {
        $this->db->select("usuario_cod")->distinct();
        $this->db->where('ativa_monitoramento', 1);
        $resultado = $this->db->get('equipamento')->num_rows();

        return $resultado;
    }

    public function pegarQtdUsuarios() {
        return $this->db->count_all('usuarios');
    }

    public function pegarQtdEquipamento() {
        return $this->db->count_all('equipamento');
    }
    public function pegarQtdUsuariosCliente($cliente_id){
        $this->db->where('cliente_id', $cliente_id);
        return $this->db->get('usuarios')->num_rows();

    }

    // TABELAS

    public function pegarEventos($limit, $offset) {
        $this->db->select('*');
        $this->db->limit($limit, $offset);
        $this->db->order_by("codigo", "desc");
        return $this->db->get('eventos')->result();
    }
    public function pegarQtdEventosCliente($cliente_id) {
        $this->db->join('equipamentos', 'eventos.equipamento_id = equipamentos.equipamento_id');
        $this->db->where('cliente_id', $cliente_id);
        $this->db->where('baixado', 0);

        return $this->db->get('eventos')->num_rows();

    }

    /* ADM */

    public function pegarClientes() {
        $this->db->select('*');
        return $this->db->get('clientes')->result();
    }

    public function pegarEquipsClientes($cliente_id) {
        $this->db->select('*');
        $this->db->where('cliente_id', $cliente_id);
        return $this->db->get('equipamentos')->num_rows();
    }

    public function pegarEquipsClientes24($cliente_id) {
        $this->db->select('*');
        $this->db->where('cliente_id', $cliente_id);
        $this->db->where('ativa_monitoramento', 1);
        return $this->db->get('equipamentos')->num_rows();
    }

    public function pegarEquipsWIFI($cliente_id) {
        $wifi = 0;
        $this->db->select('*');
        $this->db->where('cliente_id', $cliente_id);
        $res = $this->db->get('equipamentos')->result();

        foreach ($res as $re) {
            $this->db->where('equip_id', $re->equip_id);
            $resultado = $this->db->get('equip_dados_ultimo');
            if ($resultado->row()->temp_status == 1) {
                $wifi += 1;
            }
        }
        return $wifi;
    }

    public function pegarEquipsGPRS($cliente_id) {
        $gprs = 0;
        $this->db->select('*');
        $this->db->where('cliente_id', $cliente_id);
        $res = $this->db->get('equipamentos')->result();

        foreach ($res as $re) {
            $this->db->where('equip_id', $re->equip_id);
            $resultado = $this->db->get('equip_dados_ultimo');
            if ($resultado->row()->temp_status == 2) {
                $gprs += 1;
            }
        }
        return $gprs;
    }

    /* MONITOR */

    public function pegarEquipsMonitorados() {
        $this->db->where('ativa_monitoramento', 1);
        return $this->db->get('equipamento')->result();
    }

    public function pegarDataHoraEquip($equip_id) {
        $this->db->where('equip_id', $equip_id);
        return $this->db->get('equip_dados_ultimo')->row()->data_hora;
    }

    public function pegarNomeCodigo($usuario_cod) {
        $this->db->where('usuario_cod', $usuario_cod);
        return $this->db->get('usuarios')->row()->usuario_nome;
    }

    /* CLIENTES */

    public function pegarEquipamentos($cliente_id) {
        $this->db->where('cliente_id', $cliente_id);
        return $this->db->get('equipamentos')->result();
    }
    public function pegarQtdEquipamentos($cliente_id) {
        $this->db->where('cliente_id', $cliente_id);
        return $this->db->get('equipamentos')->num_rows();
    }

    public function pegarUltimosDados($equip_id) {
        $this->db->where('equip_id', $equip_id);
        return $this->db->get('equip_dados_ultimo')->result();
    }

    public function pegarDados($equip_id) {
        $this->db->where('equip_id', $equip_id);


        return $this->db->get('equip_dados',20)->result();
    }

    public function pegarQtdDados($equip_id) {
        $this->db->where('equip_id', $equip_id);
        return $this->db->get('equip_dados')->num_rows();
    }

    /* CADASTROS */

    public function verificaCliente($usuario_cod) {
        $this->db->where('usuario_cod', $usuario_cod);
        $ret = $this->db->get('usuarios')->num_rows();
        if ($ret > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function infoCliente($usuario_cod) {
        $this->db->where('usuario_cod', $usuario_cod);
        return $this->db->get('usuarios')->result();
    }

    public function editarCliente($usuario_cod) {

        $data["usuario_nome"] = $this->input->post('nome');
        $data["usuario_cpf"] = $this->input->post('cpf');
        $data["usuario_email"] = $this->input->post('email');
        $data["usuario_cep"] = $this->input->post('cep');
        $data["usuario_fixo"] = $this->input->post('fixo');
        $data["usuario_celular"] = $this->input->post('celular');
        $data["usuario_endereco"] = $this->input->post('endereco');
        $data["usuario_cidade"] = $this->input->post('cidade');
        $data["usuario_bairro"] = $this->input->post('bairro');
        $data["usuario_uf"] = $this->input->post('uf');
        $data["usuario_tipo"] = $this->input->post('tipo');
          if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
            $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }

        $this->db->where("usuario_cod", $usuario_cod);

        if ($this->db->update('usuarios', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function excluirCliente($usuario_cod) {
        $this->db->where('usuario_cod', $usuario_cod);
        if ($this->db->delete('usuarios')) {
            return true;
        }
    }

    public function cadastrarCliente() {
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        $data["usuario_nome"] = $this->input->post('nome');
        $data["usuario_cpf"] = $this->input->post('cpf');
        $data["usuario_email"] = $this->input->post('email');
        $data["usuario_senha"] = $this->input->post('senha');
        $data["usuario_cep"] = $this->input->post('cep');
        $data["usuario_fixo"] = $this->input->post('fixo');
        $data["usuario_celular"] = $this->input->post('celular');
        $data["usuario_endereco"] = $this->input->post('endereco');
        $data["usuario_cidade"] = $this->input->post('cidade');
        $data["usuario_bairro"] = $this->input->post('bairro');
        $data["usuario_uf"] = $this->input->post('uf');
        $data["usuario_tipo"] = $this->input->post('tipo');
        if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
            $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }

        $data["dataCadastro"] = $date;

        return $this->db->insert("usuarios", $data);
    }

        public function pegarEquipamentosADM() {
        $this->db->select("*");
        return $this->db->get('equipamento')->result();
    }
      public function cadastrarEquipamento() {

        $data["equip_id"] = $this->input->post('id');
        $data["equip_desc"] = $this->input->post('descricao');
        $data["usuario_cod"] = $this->input->post('selector1');
        if($this->input->post('temp')){
            $data["ativa_dados_temp"] = 1;
        }else{
             $data["ativa_dados_temp"] = 0;
        }
         if($this->input->post('umid')){
            $data["ativa_dados_umid"] = 1;
        }else{
             $data["ativa_dados_umid"] = 0;
        }
        return $this->db->insert("equipamento", $data);
    }

    public function pegarJornadas(){
        $this->db->select("*");
        return $this->db->get("jornadas")->result();

    }
      public function pegarJornadasUsuario($cliente_id){
          $this->db->where("cliente_id", $cliente_id);
          return $this->db->get("jornadas")->result();

    }
    public function cadastrarJornada(){
        $equip_id = $this->input->post('equip_id');
        $this->db->where('equip_id', $equip_id);
        $equip =  $this->db->get('equipamento');
          date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        $data["equip_id"] = $equip_id;
        $data["usuario_codi"] = $this->session->userdata['usuario_cod'];
        $data["entrega_id"] = $this->input->post('entrega_id');
        $data["jornada_inicio"] = $date;
        $data["cliente_id"] = $equip->row()->usuario_cod;


        return $this->db->insert("jornadas", $data);

    }
     public function editarJornada($jornada_id){
        $equip_id = $this->input->post('equip_id');
        $this->db->where('equip_id', $equip_id);
        $equip =  $this->db->get('equipamento');
        $data["equip_id"] = $equip_id;
        $data["entrega_id"] = $this->input->post('entrega_id');
        $data["cliente_id"] = $equip->row()->usuario_cod;
$this->db->where("jornada_id", $jornada_id);
        if ($this->db->update('jornadas', $data)) {
            return true;
        } else {
            return false;
        }

    }
       public function finalizarJornada($jornada_id){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        $data["usuario_codf"] = $this->session->userdata['usuario_cod'];
        $data["jornada_fim"] = $date;
        $this->db->where("jornada_id", $jornada_id);

        if ($this->db->update('jornadas', $data)) {
            return true;
        } else {
            return false;
        }
    }

     public function pegarEquipamentoClientes($cliente_id) {
        $this->db->select('*');
        $this->db->where('cliente_id', $cliente_id);
        return $this->db->get('equipamentos')->num_rows();
    }

    // entregadores

        public function pegarEntregadores(){
        $this->db->select("*");
        return $this->db->get("entregadores")->result();

    }
        public function pegarEntregadoresGeral(){
            $this->db->select("*");
            return $this->db->get("entregadores")->num_rows();

        }
        public function pegarEntregadoresGeralCliente($cliente_id){
            $this->db->where('cliente_id', $cliente_id);
            return $this->db->get("entregadores")->num_rows();

        }
      public function pegarEntregadoresUsuario($cliente_id){
          $this->db->where("cliente_id", $cliente_id);
          return $this->db->get("entregadores")->result();

    }
    public function cadastrarEntregador(){

        $data["entrega_nome"] = $this->input->post('entrega_nome');
        $data["entrega_cpf"] = $this->input->post('entrega_cpf');
        $data["entrega_endereco"] = $this->input->post('entrega_endereco');
        $data["entrega_fixo"] = $this->input->post('entrega_fixo');
        $data["entrega_cel"] = $this->input->post('entrega_cel');

        $novoid = $this->db->insert_id();
        $curriculo = $_FILES['foto']; // <input  type="file" name="curriculo">
        $configuracao = array(
            'upload_path' => 'uploads/entregadores/',
            'allowed_types' => 'jpg|png',
            'file_name' => $novoid.'.jpg',
            'max_size' => '2048',
            'max_width' => '1920',
            'max_height' => '1080'
        );
        $data['entrega_foto']= $configuracao['upload_path'].$configuracao['file_name'];
        $this->load->library('upload');
        $this->upload->initialize($configuracao);


        $data["entrega_marca"] = $this->input->post('entrega_marca');
        $data["entrega_modelo"] = $this->input->post('entrega_modelo');
        $data["entrega_cor"] = $this->input->post('entrega_cor');
        $data["entrega_ano"] = $this->input->post('entrega_ano');
        $data["entrega_cnh"] = $this->input->post('entrega_cnh');
        $data["entrega_validade"] = $this->input->post('entrega_validade');
        if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente_id');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
         $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }

          if ($this->upload->do_upload('foto')) {
            return $this->db->insert('entregadores', $data);
        } else {
            echo $this->upload->display_errors();
        }


    }
    public function infoEntregador($usuario_cod) {
        $this->db->where('entrega_id', $usuario_cod);
        return $this->db->get('entregadores')->result();
    }

      public function excluirEntregador($entrega_id) {
        $this->db->where('entrega_id', $entrega_id);
        if ($this->db->delete('entregadores')) {
            return true;
        }
    }

     public function editarEntregador($entrega_id){

        $data["entrega_nome"] = $this->input->post('entrega_nome');
        $data["entrega_cpf"] = $this->input->post('entrega_cpf');
        $data["entrega_endereco"] = $this->input->post('entrega_endereco');
        $data["entrega_fixo"] = $this->input->post('entrega_fixo');
        $data["entrega_cel"] = $this->input->post('entrega_cel');
        $data["entrega_marca"] = $this->input->post('entrega_marca');
        $data["entrega_modelo"] = $this->input->post('entrega_modelo');
        $data["entrega_cor"] = $this->input->post('entrega_cor');
        $data["entrega_ano"] = $this->input->post('entrega_ano');
        $data["entrega_cnh"] = $this->input->post('entrega_cnh');
        $data["entrega_validade"] = $this->input->post('entrega_validade');
        if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente_id');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
         $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }

           $this->db->where("entrega_id",$entrega_id);
            return $this->db->update('entregadores', $data);

    }
    // GRUPOS

      public function pegarGrupos(){
        $this->db->select("*");
        return $this->db->get("grupo")->result();

    }
      public function pegarGruposUsuario($cliente_id){
          $this->db->where("cliente_id", $cliente_id);
          return $this->db->get("grupo")->result();

    }
    public function cadastrarGrupo(){
        $data["grupo_nome"] = $this->input->post("grupo_nome");
         $data["grupo_tempmax"] = $this->input->post("grupo_tempmax");
         $data["grupo_tempmin"] = $this->input->post("grupo_tempmin");
         if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente_id');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
         $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }
        return $this->db->insert("grupo", $data);

    }
     public function editarGrupo($grupo_id){

         $data["grupo_nome"] = $this->input->post("grupo_nome");
         $data["grupo_tempmax"] = $this->input->post("grupo_tempmax");
         $data["grupo_tempmin"] = $this->input->post("grupo_tempmin");
           if($this->session->userdata["usuario_tipo"] == "A"){
        $data["cliente_id"] = $this->input->post('cliente_id');
        } else if($this->session->userdata["usuario_tipo"] == "C"){
         $data["cliente_id"] = $this->session->userdata["cliente_id"];
        }
        $this->db->where("grupo_id",$grupo_id);
        if ($this->db->update('grupo', $data)) {
            return true;
        } else {
            return false;
        }

    }
        public function infoGrupo($grupo_id) {
        $this->db->where('grupo_id', $grupo_id);
        return $this->db->get('grupo')->result();
    }
    public function excluirGrupo($grupo_id) {
        $this->db->where('grupo_id', $grupo_id);
        if ($this->db->delete('grupo')) {
            return true;
        }
    }

     public function pegarUsuarios() {
        $this->db->select('*');
        return $this->db->get('usuarios')->result();
    }
     public function pegarUsuariosCliente($cliente_id) {
        $this->db->where("cliente_id", $cliente_id);
        return $this->db->get('usuarios')->result();
    }
    public function pegarNomeCliente($cliente_id){
        $this->db->where("cliente_id", $cliente_id);
        return $this->db->get('cliente')->row()->cliente_nome;

    }

    public function editarClienteGeral($cliente_id) {

        $data["cliente_nome"] = $this->input->post('nome');
        $data["cliente_cpf"] = $this->input->post('cpf');

        $this->db->where("cliente_id", $cliente_id);

        if ($this->db->update('cliente', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function excluirClienteGeral($cliente_id) {
        $this->db->where('cliente_id', $cliente_id);
        if ($this->db->delete('cliente')) {
            return true;
        }
    }

    public function cadastrarClienteGeral() {

        $data["cliente_nome"] = $this->input->post('nome');
        $data["cliente_cpf"] = $this->input->post('cpf');



        return $this->db->insert("cliente_id", $data);
    }



    public function temperaturaMedia($equip_id){
        $total = 0;
        $linhas = 0;
        $media = 0;
        $this->db->where("equip_id", $equip_id);
        $resultado = $this->db->get("equip_dados")->result();
        foreach($resultado as $re){
            $total += $re->temp_dados;
            $linhas += 1;
        }
        $media = $total/$linhas;
        return $media;
    }
      public function umidadeMedia($equip_id){
        $total = 0;
        $linhas = 0;
        $media = 0;
        $this->db->where("equip_id", $equip_id);
        $resultado = $this->db->get("equip_dados")->result();
        foreach($resultado as $re){
            $total += $re->umid_dados;
            $linhas += 1;
        }
        $media = $total/$linhas;
        return $media;
    }

  public function qtdOffline(){
      $this->db->select('*');
     $resultado =  $this->db->get('equip_dados_ultimo')->result();

     $atual = date('Y-m-d H:i:s');
     $d_start    = new DateTime($atual);

     $qtdOff = 0;
     foreach($resultado as $re){
         $d_final = new DateTime($re->data_hora);
        $intervalo =  date_diff($d_start, $d_final);
        $ano = $intervalo->format('%y');
        $mes = $intervalo->format('%m');
        $dia = $intervalo->format('%d');
        $hora=$intervalo->format('%h');
        $minutos = $intervalo->format('%i');
        if($ano == 0 && $mes == 0 && $dia == 0 && $hora == 0 &&  $minutos > 20){
            $qtdOff++;
        }

     }
     return  $qtdOff;

  }

  public function qtdOfflineCliente($cliente_id){
      $this->db->join('equipamentos', 'equip_dados_ultimo.equip_id = equipamentos.equip_id');
      $this->db->where('cliente_id', $cliente_id);

      $resultado =  $this->db->get('equip_dados_ultimo')->result();

      $atual = date('Y-m-d H:i:s');
      $d_start    = new DateTime($atual);

      $qtdOff = 0;
      foreach($resultado as $re){
          $d_final = new DateTime($re->data_hora);
          $intervalo =  date_diff($d_start, $d_final);
          $ano = $intervalo->format('%y');
          $mes = $intervalo->format('%m');
          $dia = $intervalo->format('%d');
          $hora=$intervalo->format('%h');
          $minutos = $intervalo->format('%i');
          if($ano == 0 && $mes == 0 && $dia == 0 && $hora == 0 &&  $minutos > 20){
              $qtdOff++;
          }

      }
      return  $qtdOff;

  }




}
