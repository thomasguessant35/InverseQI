<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model{
	
	protected $table = 'images_question';
	
	public function get_image($idQuestion)
	{
		$data = $this->db->select('*')
                         ->from($this->table)
                         ->where('idQuestion', $idQuestion)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function add_image_question($dossier, $id_question)
	{
		$this->db->set('dossier_image', $dossier);
		$this->db->set('IdQuestion', $id_question);

		
		return $this->db->insert($this->table);
	}
	
	public function delete($id)
	{
		$this->db->where('idQuizz', $id);
		return $this->db->delete($this->table);
	}
}
