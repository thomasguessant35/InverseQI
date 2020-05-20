<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Statistique_model extends CI_Model{
	
	protected $table = 'statistique';
	
	public function get_liste_statistique()
	{
		$data = $this->db->select('*')
					     ->from($this->table)
					     ->get()
					     ->result();
		return $data;
	}
		
	public function add_statistique($score)
	{
		$this->db->set('score', $score);
		
		return $this->db->insert($this->table);
	}
	
		public function delete($id)
	{
		$this->db->where('idStatistique', $id);
		return $this->db->delete($this->table);
	}
}