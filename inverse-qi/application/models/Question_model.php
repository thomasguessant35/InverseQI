<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model{
	
	protected $table = 'questions';
	
	public function get_liste_Question()
	{
		$data = $this->db->select('*')
					     ->from($this->table)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function get_question($id)
	{
		$data = $this->db->select('*')
					     ->from($this->table)
					     ->where('idQuestion', $id)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function add_question($intitule, $rep_image)
	{
		$this->db->set('intitule', $intitule);
		$this->db->set('rep_image', $rep_image);
		
		return $this->db->insert($this->table);
	}
	
	public function delete($id)
	{
		$this->db->where('idQuestion', $id);
		return $this->db->delete($this->table);
	}

	public function saveImage(){

	}
}
