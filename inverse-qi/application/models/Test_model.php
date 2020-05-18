<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model
{

	protected $table = 'quizz';

	public function get_liste()
	{
		$data = $this->db->select('*')
			->from($this->table)
			->get()
			->result();
		return $data;
	}

	public function test_valid($codeTest)
	{
		$data = $this->db->select('*')
			->from($this->table)
			->where('codeTest', $codeTest)
			->get()
			->result();
		return $data;
	}

	public function insert_data($data)
	{
		$this->db->insert("quizz", $data);
	}

	public function insert_questions_quizz($data)
	{
		$this->db->insert("questions_quizz", $data);
	}

	public function add_test($intitule, $image1, $image2, $image3, $image4, $image5, $image6, $image7, $image8, $image9)
	{
		$this->db->set('intitule', $intitule);
		$this->db->set('image1', $image1);
		$this->db->set('image2', $image2);
		$this->db->set('image3', $image3);

		return $this->db->insert($this->table);
	}

	public function delete($id)
	{
		$this->db->where('idQuestion', $id);
		return $this->db->delete($this->table);
	}
}
