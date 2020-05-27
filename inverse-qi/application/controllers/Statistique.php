<?php


class Statistique extends CI_Controller
{
	public function index()
	{
		$this->load->model("statistique_model", 'StatistiqueManager');

		$data["listeStatistique_l3"] = $this->StatistiqueManager->get_liste_statistique_licence3();
		$data["listeStatistique_m1"] = $this->StatistiqueManager->get_liste_statistique_master1();
		$data["listeStatistique_m2"] = $this->StatistiqueManager->get_liste_statistique_master2();

		$data["listeStatistique_l3_moy"] = $this->StatistiqueManager->get_liste_statistique_licence3_moy();
		$data["listeStatistique_m1_moy"] = $this->StatistiqueManager->get_liste_statistique_master1_moy();
		$data["listeStatistique_m2_moy"] = $this->StatistiqueManager->get_liste_statistique_master2_moy();

		$this->load->view("pageStatistiqueView", $data);
	}
}
