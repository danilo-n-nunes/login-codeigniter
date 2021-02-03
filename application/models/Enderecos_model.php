<?php 
/**
 * 
 */
class Enderecos_model extends CI_Model
{
	
	function registrar(){
		$id = $this->session->userdata('id');
		$this->db->set('id_endereco',$id);
		$this->db->set('cep',$this->input->post('cep'));
		$this->db->set('endereco',$this->input->post('endereco'));
		$this->db->set('numero',$this->input->post('numero'));
		$this->db->set('bairro',$this->input->post('bairro'));
		$this->db->set('uf',$this->input->post('uf'));
		$this->db->insert('enderecos');
	}

	function verificaEndereco($end){

		$this->db->where('id_endereco',$end);
		$query = $this->db->get('enderecos');

		if($query->num_rows() == 1){
			return true;
		}

	}

	function get_endereco($end){

		$this->db->where('id_endereco',$end);
		$query = $this->db->get('enderecos');

		if($query->num_rows() == 1){
			$endereco = $query->result_array();
			return $endereco;
		}
	}

	function deletar($id){

		$this->db->where('id_endereco',$id);
		$this->db->delete('enderecos');
		return true;
	}

	function alterar($id){

		$data = array(
			'cep'=> $this->input->post('cep'),
			'endereco'=> $this->input->post('endereco'),
			'numero'=> $this->input->post('numero'),
			'bairro'=> $this->input->post('bairro'),
			'uf'=> $this->input->post('uf')
		);

		$this->db->where('id_endereco',$id);
		$this->db->update('enderecos',$data);
	}
	
}