<?php
    class Apprequest extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            $this->load->model('usuario_model');
		$this->load->model('produto_model');
             
        }
        
        function index(){
            
        }
        
        function produto($query){
            $sql = "SELECT empresa.ID_EMPRESA, empresa.FANTASIA, produto.DESCRICAO, produto.PRECO, empresa.LATITUDE, empresa.LONGITUDE FROM produto Inner join empresa on produto.ID_EMPRESA_FK = empresa.ID_EMPRESA where descricao like '%".$query."%' order by produto.PRECO";
            //print_r($sql);
            $result= $this->db->query($sql);
            //print_r($result->result_array());
            echo(json_encode($result->result_array()));
        }
    }

?>