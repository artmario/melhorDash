<?php
class Usuario_model extends CI_Model {
	private $id;
	private $email;
	private $fone;
	private $pwd;
	private $user;

	private $cnpjs;


	public function login ($credentials, $json = false) {
		
	
		$sql = "SELECT * FROM usuario WHERE email ='".$credentials[0]."' AND pwd = '".$credentials[1]."'";
                $sqlTelefone = "SELECT * FROM usuario WHERE fone ='".$credentials[0]."' AND pwd = '".$credentials[1]."'";
//echo ($sql);
		

		$result = $this->db->query ($sql);
		
		$row = $result->row ();

		if (isset($row)) {
			if (! $json) {
				$user = array ('id' => $row->id,
								'nome' => $row->nome,
								'fone' => $row->fone,
								'email' => $row->email,
								'pwd' => $row->pwd);
			
				if ($credentials[0] === $user['email'] && $credentials[1] === $user['pwd']) {
					return $user;
				}
				else {
					return '';
				}
			}
			else {
				return json_encode($row);
			}
                }else{
                    $result = $this->db->query($sqlTelefone);
                    $row = $result-row();
                        if (isset ($row)){
                            return json_encode($row);
                        }else{
                            return "";
                        }
                } 
		return '';
	}


	public function getUsers () {
		$sql = "SELECT * FROM usuario ORDER BY id";

		$result = $this->db->query ($sql);

		$row = $result->row ();

		if (isset ($row)) {
			return json_encode($row);
		}
		else return '';

	}

        
        public function newUser($novoUsuario){
            $sql = "insert into usuario (";
            $result = $this->db->query($sql);
            
        }
        
        public function alterTelefone($email, $fone){
            $sql = "UPDATE u259296810_preco.usuario SET fone = '".$fone."' WHERE usuario.email = '".$email."'";
            
        }
        
	public function addEmpresaAdministrada($CNPJ,$Email){

		$sql = "INSERT INTO u259296810_preco.usuario_empresa (email, cnpj_fk) VALUES ('".$email."','".$CNPJ."')";

		$result = $this->db->query($sql);

		
	}

	public function getEmpresaAdministradas($email){

		
			$sql = "Select usuario_empresa.ID_EMPRESA_FK from usuario_empresa where usuario_empresa.email = '".$email."' ";

			//echo $sql;
			$query = $this->db->query($sql);

			
			// echo json_encode(value)$result->result_array();
                        if (isset($query))
                            return ($query->result_array()[0]); 
                        else{
                            return "";
                        }
	}


	private function genHash ($size = 32) {
		$alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUWXYZ,.;/~´`[]-_+=)(*&¨%$#@!'?";

		$seed = srand (time (NULL));
		$output = "";

		for ($i = 0; $i < $size; $i++) {
			$output .= $alphabet [rand() % $alphabet.length];
		}

		return $output;
	}
}