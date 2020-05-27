<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Statistique_model extends CI_Model
{

	protected $table = 'statistique';

	public function get_liste_statistique_licence3()
	{
		$query = $this->db->query('SELECT count(idStatistique) as nombreScore, score FROM statistique where idQUizz=30 group by score');
		return $query;
	}

	public function get_liste_statistique_master1()
	{
		$query = $this->db->query('SELECT count(idStatistique) as nombreScore, score FROM statistique where idQUizz=29 group by score');
		return $query;
	}

	public function get_liste_statistique_master2()
	{
		$query = $this->db->query('SELECT count(idStatistique) as nombreScore, score FROM statistique where idQUizz=28 group by score');
		return $query;
	}

	public function get_liste_statistique_licence3_moy()
	{
		$query = $this->db->query('SELECT avg(score) as moyenne FROM statistique where idQUizz=30');
		return $query;
	}

	public function get_liste_statistique_master1_moy()
	{
		$query = $this->db->query('SELECT avg(score) as moyenne FROM statistique where idQUizz=29');
		return $query;
	}

	public function get_liste_statistique_master2_moy()
	{
		$query = $this->db->query('SELECT avg(score) as moyenne FROM statistique where idQUizz=28 ');
		return $query;
	}

	public function get_id_quizz()
	{
		$data = $this->db->select('idQuizz')
			->from($this->table)
			->get()
			->result();
		return $data;
	}

	public function get_score()
	{
		$data = $this->db->select('score')
			->from($this->table)
			->get()
			->result();
		return $data;
	}

	public function get_score_master1()
	{
		$data = $this->db->select('score')
			->from($this->table)
			->where('idQuizz', '29')
			->get()
			->result();
		return $data;
	}

	public function add_statistique($score, $idQuizz)
	{
		$this->db->set('score', $score);
		$this->db->set('idQuizz', $idQuizz);

		return $this->db->insert($this->table);
	}

	public function delete($id)
	{
		$this->db->where('idStatistique', $id);
		return $this->db->delete($this->table);
	}
}
