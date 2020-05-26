<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model{

	protected $table = 'questions';
	protected $table1 = 'questions_quizz';

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

	public function get_dossier_question($id)
	{
		$data = $this->db->select('rep_image')
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

	public function getQuestionInQuizz($id){
		$query = $this->db->select('q.idQuestion, q.Intitule, qt.Quizz_idQuizz')
			->from("questions as q")
			->join('questions_quizz as qt', 'q.idQuestion = qt.Questions_idQuestion', 'inner')
			->where('qt.Quizz_idQuizz', $id)
			->get();
		return $query->result();

	}
	public function getQuizzName($id){
		$sql='SELECT * FROM `quizz` WHERE `idQuizz`='.$id.' LIMIT 1' ;
		return $results = $this->db->query( $sql )->result();

	}


	public function getQuestionNotInQuizz($id){
		$sql='SELECT `idQuestion`,`Intitule`,`rep_image` FROM `questions` WHERE `idQuestion` not IN (SELECT `Questions_idQuestion` FROM `questions_quizz` WHERE `Quizz_idQuizz`='.$id.')';
		return $results = $this->db->query( $sql )->result();
	}
}
