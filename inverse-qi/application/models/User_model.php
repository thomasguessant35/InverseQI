<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	
	protected $table = 'users';
	
	public function user_valid($mail, $pass_hashed)
	{
		$data = $this->db->select('Prenom','Nom')
		         ->from($this->table)
		         ->where(['Mail'=> $mail, 'MDP' => $pass_hashed])
		         ->get()
		         ->result();
		if ($data != null)
		{
			return true;
		}
		else 
		{
			return false; 
			
		}
	}
	
	public function get_liste()
	{
		$data = $this->db->select('*')
					     ->from($this->table)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function get_user($id)
	{
		$data = $this->db->select('*')
					     ->from($this->table)
					     ->where('id', $id)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function add_user($username, $password, $type)
	{
		$this->db->set('username', $username);
		$this->db->set('password', $password);
		$this->db->set('type', $type);
		
		return $this->db->insert($this->table);
	}
	
	public function edit_user($id, $username, $password ="", $type)
	{
		$this->db->set('username', $username);
		if ($password != "")
		{
			$this->db->set('password', $password);
		}
		$this->db->set('type', $type);
		
		$this->db->where('id', $id);
		
		return $this->db->update($this->table);
	}
	
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}
}