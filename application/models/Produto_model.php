<?php 
class Produto_model Extends CI_Model{
		private $id_empresa;
		private $numeroDeProdutos;

	public function __construct (){
		parent::__construct();
	}
        

	public function all_products($id_empresa){
			$sql = "select * from produto where ID_EMPRESA_FK= '".$id_empresa."'";

			$result = $this->db->query ($sql);
			$this->numeroDeProdutos = $result->num_rows();
			
			if (isset($result)) {
				return json_encode($result->result_array());
			}
			else{
				return 'erro';
			}
	}

	public function numeroDeProdutos($id_empresa){
		$sql = "select produto.ID_PRODUTO from produto where ID_EMPRESA_FK = '".$id_empresa."'";

		$result = $this->db->query($sql);

		if (isset ($result)){
			return $result->num_rows();
		}
		else{
			return 'erro';
		}
	}

	public function addProduto($produto, $id_empresa){
                $produto['preco'] = str_replace(",",".",$produto['preco']);
		 $sql = "insert into produto (ID_EMPRESA_FK,DESCRICAO,PRECO) values ('".$id_empresa."','".$produto['descricao']."','".$produto['preco']."')";
		 $result = $this->db->query($sql);
                 
	}

        
        public function delProduto($idProduto){
            $sql = "delete * from produto where produto.ID_PRODUTO = '".$idProduto."'";
            $result = $this->db->query($sql);
            return $result;
        }
        
        public function alterProduto(){
            $sql = "";
            $result = $this->db->query($sql);
        }
        
        public function getAllInfoProduto(){
            $sql = "";
            $result = $this->db->query($sql);
        }

        public function validaListaProdutos($content_file,$CNPJs){

		///echo $CNPJs;
		//print_r($content_file);
		$dados = array();
		$dadosNormalizados = [];
		$indice = 0;
		foreach ($content_file as $linha){

			$produto = str_getcsv($linha,";");
		
			$dadosNormalizados['descricao'] = $produto[0];
			$dadosNormalizados['preco'] = $produto[1];
			array_push($dados,$dadosNormalizados);
		}

		$jsonDados = json_encode ($dados);
		
		print_r ($jsonDados);
		
		

	}



	public function setEmpresa($idEmpresa){
		$this->$id_empresa = $idEmpresa;
	}

	public function getEmpresa(){
		return $id_empresa;
	}
}

?>