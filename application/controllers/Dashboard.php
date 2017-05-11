<?php

class Dashboard extends CI_Controller {

	private $EmpresaID;
	private $email;

	function __construct (){
		parent::__construct();
		$this->load->model('usuario_model');
		$this->load->model('produto_model');
	}


	private function security () {
		if (session_status () !== PHP_SESSION_ACTIVE) {
			session_start ();
			$this->email = $_SESSION['user_data']['email'];
		}
		
		session_regenerate_id();
		// catch (Exception $e){
		// 	session_regenerate_id();	
		// }
		
		//print_r($_SESSION);

		if (!isset ($_SESSION ['user_data'])) {
			//print_r("redirecionando");
			$this->redirect_login ();
			return false;
		}
		else return true;
	}


	private function redirect_login () {
		$data["local"] = "/index.php/Login/index";
		//echo 'redirect';
		$this->load->view ('templates/header');
		$this->load->view ('pages/redirect', $data);
		$this->load->view ('templates/footer');
		//exit();
	}


	public function index ($page = 'dashboard'){
		// session_start ();
		// session_regenerate_id();
		$this->security ();

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
			//se nao for encontrado o arquivo..
			show_404();
		}

        //$this->load->library('session');
		$data['empresa'] = $this->getInfoEmpresa();        
		$data['numero_produtos'] = $this->produto_model->numeroDeProdutos($this->EmpresaID['ID_EMPRESA_FK']);
		// print_r($data['empresa']);

        $data['title'] = ucfirst($page); // Deixa em maisculo a primeira letra
        $this->load->view ('templates/header', $data);
        $this->load->view('pages/head',$data);
        //$this->load->view('pages/forms/form_new_')
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}







	public function table_produto(){
		//verifica seção
		////$this->security();

		$this->security();
		//carrega modelo
		
		$this->load->model('produto_model');

		//echo ($_SESSION['user_data']['email']);

		
		//$aux = json_decode($this->EmpresaID,true);
		$_SESSION['user_data']['empresa'] = $this->EmpresaID;
		//print_r ($this->EmpresaID);
		 //echo $this->EmpresaID;

		$data['empresa'] = $this->EmpresaID;
		//carrega todos os produtos
		
		//$data['produtos'] = $this->produto_model->all_products($this->EmpresaID);
		//print_r($data['produtos']) ;
		// //pega todos os eventos
		// $data['eventos'] = json_decode($this->_getAllNameEvents(),true);
		
		$this->load->view('pages/table-produtos.php',$data);

	}

	private function getInfoEmpresa(){
		$this->EmpresaID = $this->usuario_model->getEmpresaAdministradas($_SESSION['user_data']['email']);
		if ($this->EmpresaID == "")
                {
                    return "";
                }
                 //print_r($this->EmpresaID);  
		$this->load->model('empresa_model');

		return $this->empresa_model->getInfo($this->EmpresaID);
	}

	private function getCNPJEmpresa(){
		$this->security();
		$this->EmpresaID = $this->usuario_model->getEmpresaAdministradas($_SESSION['user_data']['email']);
		//print_r($this->EmpresaID);
                $this->EmpresaID = $this->EmpresaID['ID_EMPRESA_FK'];
		return $this->EmpresaID;		
	}

	public function allProducts(){
                $this->security();
                
                $this->EmpresaID = $this->usuario_model->getEmpresaAdministradas($_SESSION['user_data']['email']);
		
                $this->EmpresaID = $this->EmpresaID['ID_EMPRESA_FK'];
                
		echo($this->produto_model->all_products($this->EmpresaID));
	}

	public function sobeListaProdutos(){
		$this->security();
		//print_r("SOBE LISTA PRODUTOS");
		//$this->security();
		//print_r($_FILES['arquivo']);
		//print_r($_POST);
		//print_r(file($_FILES['arquivo']['tmp_name']));
		$arquivo = file(($_FILES['arquivo']['tmp_name']));
		if ($arquivo != null)
			$this->produto_model->validaListaProdutos(file(($_FILES['arquivo']['tmp_name'])),$this->getCNPJEmpresa());
		
	}

        public function confirmaListaProdutos(){
            $this->security();
            
            $lista  = (json_decode($this->input->raw_input_stream,true));
            
            foreach ($lista as $key =>$value ){
                //print_r($value);
                $this->produto_model->addProduto($value,$this->getCNPJEmpresa());
            }
           // $this->produto_model->addProduto()
            
            //print_r($lista);
            //print_r($this->input->raw_input_stream);
//vou receber em json
            ///json_decode(,true);
        }

	public function inserirItensTela(){

		$this->security();

		$this->load->view('pages/inserir-produtos.php');
	}
        
        public function novaOferta(){
            $this->security();
            
            $this->load->view('pages/nova-oferta.php');
        }
}
?>