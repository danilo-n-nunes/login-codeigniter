<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$id = $this->session->userdata('id');
		$this->load->model('enderecos_model','enderecos');
		if($this->enderecos->verificaEndereco($id)){
			$end = $this->enderecos->get_endereco($id);
			$this->load->view('view_home',$end[0]);
		}else{
			$dados['mensagem'] = "voce não possui endereço";
			$this->load->view('view_registro',$dados);
		}

		//$this->load->view('view_home');
	}

}
