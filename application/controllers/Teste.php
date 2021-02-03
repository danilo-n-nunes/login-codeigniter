<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index($id)
	{
		$dados['id'] = $id;
		$this->load->view('view_teste',$dados);
	}

	public function testando($id){
		$dados['id'] = $id;
		$this->load->view('view_teste',$dados);
	}
}
