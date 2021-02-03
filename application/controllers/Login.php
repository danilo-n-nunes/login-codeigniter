<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('view_login');
	}

	function erro(){
		$dados['mensagem'] = "Usuario/Senha incorretos";
		$this->load->view('view_login',$dados);
	}

	public function logar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario','Email','required');
		$this->form_validation->set_rules('senha','Password','required');
		$this->form_validation->set_error_delimiters('<p class="error">','</p>');

		$this->load->model('usuarios_model','usuarios');
		$query = $this->usuarios->validar();

		if($this->form_validation->run() == FALSE){
			$this->load->view('view_login');
		}else{

			if($query != 0){
				$data = array('usuario'=>$this->input->post('usuario'), 'logado'=>true, 'id'=>$query);
				$this->session->set_userdata($data);
				$this->load->model('enderecos_model','enderecos');

				if($this->enderecos->verificaEndereco($query)){
					$end = $this->enderecos->get_endereco($query);
					//$dados['mensagem'] = "dados"; //array("enderecos"=>$end);
					$this->load->view('view_home',$end[0]);
				}else{
					$dados['mensagem'] = "voce não possui endereço";
					$this->load->view('view_registro',$dados);
				}

			}else{
				//redirect($this->erro());
				$dados['mensagem'] = "Usuario/Senha incorretos";
				$this->load->view('view_login',$dados);
			}
		}
	}

	public function registro(){
		$this->load->view('view_registro_user');
	}

	public function registrar(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario','Email','required');
		$this->form_validation->set_rules('senha','Password','required');
		$this->form_validation->set_error_delimiters('<p class="error">','</p>');

		if($this->form_validation->run() == FALSE){
			$this->load->view('view_registro_user');
			echo "string";
		}else{

			$this->load->model('usuarios_model','usuarios');
			$query = $this->usuarios->registrar();
			echo "<h1>Registrado com Sucesso!!</h1>";
			echo '<a href="'.base_url().'registro">Registrar Endereço</a>';
		}
	}

	public function logout(){
		$this->session->unset_userdata("logado");
		redirect(base_url());
	}
}
