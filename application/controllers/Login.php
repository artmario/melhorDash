<?php


class Login extends CI_Controller {

	private $uri_login_index 		= "/index.php/Login/index";
	private $uri_dashboard_index 	= "/index.php/Dashboard/index";

	public function __construct () {
		parent::__construct();
	}

	public function index () {
		session_start ();
		session_regenerate_id();
		$page = "login";
		
		//if (session_status () === PHP_SESSION_NONE || session_status () === PHP_SESSION_DISABLED) {
			//$page = 'login';
		//}
		//primeiro verificar o nome
		if ( ! file_exists(APPPATH.'views/pages/'. $page. '.php')) {
			// Ops, n�o tem arquivo para esse caminho
			show_404 ();
			//print_r ($page);
		}

		$data ['title'] = ucfirst($page); //Colocar em mai�scula primeiro

		// carregando as partes da p�gina
		$this->load->view ('templates/header', $data);

		if (isset ($_SESSION['user_data'])) {
			//usuario ja com a sessao aberta... redirecionar para o dashboard
			$data["local"] = "/index.php/Dashboard/index";
			$this->load->view ('pages/redirect', $data);
		}
		else {
			//se nao, manda para a pagina de autenticar
			$this->load->view ('pages/'.$page, $data);
		}
		$this->load->view ('templates/footer', $data);
	}




	public function login () {
		//$this->load->library ('session');
		if (session_status() === PHP_SESSION_ACTIVE) {
			session_destroy();
		}
		//$this->load->database("default");
		
		$email 		= $this->input->post("email");
		$password 	= md5($this->input->post("password"));
		
		//print_r($email);
		//print_r($password);
		//$email 		= $this->db->escape (stripcslashes($email));
		//$password 	= $this->db->escape (stripcslashes($password));

		$this->load->model("usuario_model");		
		
		$data_user = $this->usuario_model->login (array ($email, $password));

		// $this->usuario_model->setEmail($email);
		// $this->usuario_model->setPWD($password);
		
		$data ["local"] = "";
		
		//$this->load->helper('url');
		if ($data_user != '') {
			session_start();
			// session_regenerate_id();
			$_SESSION ['user_data'] = $data_user;

			//print_r($_SESSION);
			$data["local"] = "/index.php/Dashboard/index";
		}else {
			//session_destroy();
			$data["local"] = "/index.php/Login/index";
		}
		$this->load->view ('templates/header');
		$this->load->view ('pages/redirect', $data);
		$this->load->view ('templates/footer');
	}









	public function logout () {
		session_start();
		session_regenerate_id();
		if (isset($_SESSION['user_data'])) {
			$this->load->model ("usuario_model");
			//$this->usuario_model->logout(); // m�todo que grava no db quando o usuario saiu
			session_destroy();

			$data["local"] = "/index.php/login";
			$this->load->view ('templates/header');
			$this->load->view ('pages/redirect', $data);
			$this->load->view ('templates/footer');
		}else {
			show_404 ();
		}
	}
}