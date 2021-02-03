<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends MY_Controller {

	public function index()
	{
		$id = $this->session->userdata('id');
		$this->load->model('enderecos_model','enderecos');
		$this->enderecos->deletar($id);
		$this->load->model('usuarios_model','usuarios');
		$this->usuarios->deletar($id);
		redirect(base_url('index.php/login/logout'));

		//$this->load->view('view_home');
	}

}
