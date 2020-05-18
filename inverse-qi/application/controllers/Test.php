<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('codeTest', 'Code', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('accueilTest');

		} else {
			$this->load->model('Test_model', 'TestManager');
			$data['qry'] = $this->TestManager->test_valid($_POST['codeTest']);

			if ($data['qry']) {
				$data['codeTest'] = $_POST['codeTest'];

				$data["listeTest"] = $this->TestManager->get_liste();
				$this->load->view("welcome_message", $data);
			} else {
				$this->load->view('accueilTest');
			}
		}
	}

	public function listQuizz()
	{
		/*if (isAuthenticated())*/ {
		$this->load->model("Test_model", 'TestManager');

		$data["listeTest"] = $this->TestManager->get_liste();
		$this->load->view("listQuizzView", $data);
	} /*else {
			redirect('/welcome', 'refresh');
		}*/

	}

	public function Quizz_Create()
	{
		$this->load->model("Test_model", 'TestManager');

		$data=array(
			"Nom"=> $this->input->post("Nom"),
			"codeTest"=> $this->getRandomString(11)
		);

		$this->TestManager->insert_data($data);

		$quizz_IdQuizz = $this->db->insert_id();

		foreach ($_POST as $key => $value ){
			if($key!="Nom"){

				$data2=array(
					"Questions_idQuestion"=> $this->input->post($key),
					"Quizz_idQuizz"=> $quizz_IdQuizz
				);
				$this->TestManager->insert_questions_quizz($data2);
			}
		}

		redirect(base_url() . "index.php/test/listQuizz", 'refresh');
	}

	function getRandomString($length = 8) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';

		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];
		}

		return $string;
	}

}
