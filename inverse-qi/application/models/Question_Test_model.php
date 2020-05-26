<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Question_Test_model extends CI_Model{
	
	protected $table = 'questions_quizz';
	
	public function get_questions_test($idTest)
	{
		$data = $this->db->select('Questions_idQuestion')
                         ->from($this->table)
                         ->where('Quizz_idQuizz', $idTest)
					     ->get()
					     ->result();
		return $data;
	}
	
	public function add_question_test($intitule, $image1, $image2, $image3)
	{
		$this->db->set('intitule', $intitule);
		$this->db->set('image1', $image1);
		$this->db->set('image2', $image2);
		$this->db->set('image3', $image3);
		
		return $this->db->insert($this->table);
	}
	
	public function delete($id)
	{
		$this->db->where('Quizz_idQuizz', $id);
		return $this->db->delete($this->table);
	}
}