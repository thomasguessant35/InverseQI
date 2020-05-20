<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Reponse_model extends CI_Model{
	
	protected $table = 'images_reponses';
	
	public function get_image($idQuestion)
	{
		$data = $this->db->select('*')
                         ->from($this->table)
                         ->where('idQuestion', $idQuestion)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function add_image_reponse($intitule, $image1, $image2, $image3)
	{
		$this->db->set('intitule', $intitule);
		$this->db->set('image1', $image1);
		$this->db->set('image2', $image2);
		$this->db->set('image3', $image3);
		
		return $this->db->insert($this->table);
	}
	
	public function delete($id)
	{
		$this->db->where('idQuizz', $id);
		return $this->db->delete($this->table);
	}
}