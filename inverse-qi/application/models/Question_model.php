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
	
	public function add_question($intitule, $image1, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9)
	{
		$this->db->set('intitule', $intitule);
		$this->db->set('image1', $image1);
		$this->db->set('image2', $image2);
		$this->db->set('image3', $image3);
		$this->db->set('image4', $image4);
		$this->db->set('image5', $image5);
		$this->db->set('image6', $image6);
		$this->db->set('image7', $image7);
		$this->db->set('image8', $image8);
		$this->db->set('image9', $image9);
		
		return $this->db->insert($this->table);
	}
	
		public function delete($id)
	{
		$this->db->where('idQuestion', $id);
		return $this->db->delete($this->table);
	}
}