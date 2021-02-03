<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('view_registro');
	}

	public function registrar(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('cep','CEP','required');
		$this->form_validation->set_rules('endereco','Endereco','required');
		$this->form_validation->set_rules('numero','Numero','required');
		$this->form_validation->set_rules('bairro','Bairro','required');
		$this->form_validation->set_rules('uf','UF','required');
		$this->form_validation->set_rules('bairro','Bairro','required');


		if($this->form_validation->run() == FALSE){
			//$this->load->view('view_registro');
			redirect('registro');
		}else{

			$this->load->model('enderecos_model','enderecos');
			$query = $this->enderecos->registrar();
			echo "<h1>Registrado com Sucesso!!</h1>";
			echo '<a href="'.base_url().'">Logar</a>';
		}
	}

	public function registrando($id = 0){
		//$dados['endereco'] = $id;
		$dados = array
		(
			'endereco'=>$id,
			'alterar'=>false
		);

		if($id > 0 ){
			$this->load->model('enderecos_model','enderecos');
			$end = $this->enderecos->get_endereco($id);
			$dados['endereco'] = $end;
			$dados['alterar'] = true;
		}

		$this->load->view('view_registro',$dados);
	}

	public function alterar($id){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('cep','CEP','required');
		$this->form_validation->set_rules('endereco','Endereco','required');
		$this->form_validation->set_rules('numero','Numero','required');
		$this->form_validation->set_rules('bairro','Bairro','required');
		$this->form_validation->set_rules('uf','UF','required');
		$this->form_validation->set_rules('bairro','Bairro','required');


		if($this->form_validation->run() == FALSE){
			//$this->load->view('view_registro');
			redirect('registro');
		}else{

			$this->load->model('enderecos_model','enderecos');
			$query = $this->enderecos->alterar($id);
			var_dump($query);
			echo "<h1>Registrado com Sucesso!!</h1>";
			echo '<a href="'.base_url().'">Logar</a>';
		}
	}
}
