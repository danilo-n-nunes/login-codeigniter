<?php 
/**
 * 
 */
class Usuarios_model extends CI_Model
{
	
	function validar(){
		$this->db->where('usuario',$this->input->post('usuario'));
		$this->db->where('senha',sha1($this->input->post('senha')));
		$this->db->where('status',1);

		$query = $this->db->get('usuarios');

		$id = $query->result_array();

		if($query->num_rows() == 1){
			$id = $id[0]['id_usuario'];
			return $id;
		}

		return 0;
	}

	function registrar(){
		$this->db->set('usuario',$this->input->post('usuario'));
		$this->db->set('senha',sha1($this->input->post('senha')));
		$this->db->set('status',1);
		$this->db->insert('usuarios');
	}

	function logado(){
		$logged = $this->session->userdata('logged');

		if(!isset($logged) || $logged != true){
			echo "Usuario sem permiçoes de acesso";
			die();
		}
	}

	function deletar($id){

		$this->db->where('id_usuario',$id);
		$this->db->delete('usuarios');
		return true;
	}
	
}