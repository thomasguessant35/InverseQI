<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Questions extends CI_Controller
{
	public function index()
	{
		$this->load->view("/");
	}

	public function listeQuestions()
	{
		if ($this->session->userdata('Loggin')) {
            $this->load->model("Question_model", 'QuestionManager');

            $data["listeQuestion"] = $this->QuestionManager->get_liste_Question();
            $this->load->view("listeQuestionsView", $data);
	    }else {
			redirect('/', 'refresh');
		}
	}
}
