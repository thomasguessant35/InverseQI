<?php


class Statistique extends CI_Controller
{
	public function index()
	{
		$this->load->model("statistique_model", 'StatistiqueManager');

		$data["listeStatistique"] = $this->StatistiqueManager->get_liste_statistique();

		//$data["idQuizz"] = $this->StatistiqueManager->get_id_quizz();
		//$data["score"] = $this->StatistiqueManager->get_score();


		$this->load->view("pageStatistiqueView", $data);
	}
}
