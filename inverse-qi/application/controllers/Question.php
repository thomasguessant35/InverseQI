<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
{

	public function index()
	{
		$this->load->view("listeQuestionsView" /*, $data*/);
	}

	public function ajouter(){
		$this->load->view("AjoutQuestionView");
	}


	public function create()
	{
		//if (isAuthenticated())
		//{
		//$this->output->enable_profiler(true);
		$this->load->model('Question_model', 'QuestionManager');
		$data = [];


		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$rules = [
			['field' => 'intitule',
				'label' => 'Intitulé',
				'rules' => 'required',
				'errors' => [
					'required' => 'Vous devez définir un intitulé.']
			],
			['field' => 'image1',
				'label' => 'Image 1',
				'rules' => 'required',
				'errors' => [
					'required' => 'Vous devez définir au moins 3 images.']
			],
			['field' => 'image2',
				'label' => 'Image2',
				'rules' => 'required|min_length[4]|max_length[32]',
				'errors' => [
					'required' => 'Vous devez définir au moins 3 images.']
			],
			['field' => 'image3',
				'label' => 'Image 3',
				'rules' => 'required',
				'errors' => [
					'required' => 'Vous devez définir au moins 3 images.']
			]
		];
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('question_create');
		} else {

			$config['upload_path'] = 'Image/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '1024';
			$config['file_name'] = $_FILES['file']['name'];
			$this->load->library('upload', $config);
			//inclure ici les requetes
			$this->QuestionManager->add_question($_POST['intitule'], $_POST['image1'], $_POST['image2'], $_POST['image3'], $_POST['image4'], $_POST['image5'], $_POST['image6'], $_POST['image7'], $_POST['image8'], $_POST['image9']);

			redirect('question', 'refresh');
		}

		/*} else {
			redirect('/', 'refresh');
		}*/


	}


	public function Quizz_Create()
	{
		$this->load->model("question_model", 'QuestionManager');

		$data["listeQuestion"] = $this->QuestionManager->get_liste_Question();

		$this->load->view("quizz_create", $data);
	}

}
