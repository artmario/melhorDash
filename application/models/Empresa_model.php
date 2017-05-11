<?php

class Empresa_Model Extends CI_Model{


	public function construct(){
		parent::__construct();
	}

	public function getInfo($idEmpresa){
                if (isset($idEmpresa['ID_EMPRESA_FK'])){
                    $sql = "select * from empresa where ID_EMPRESA = '".$idEmpresa['ID_EMPRESA_FK']."'";
                }
                else{
                    $sql = "select * from empresa where ID_EMPRESA = '".$idEmpresa."'";
                }
                
		
                
		$result = $this->db->query($sql);
                if (isset($result))   
                    return ($result->result_array()[0]);
                else{
                    return "";
                }
	}

}

 ?>