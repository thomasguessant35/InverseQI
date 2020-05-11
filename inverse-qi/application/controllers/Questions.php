<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Questions extends CI_Controller
{
	public function index()
	{
		$this->load->view("listeQuestionsView");
	}

	public function listesQuestions()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->view('listeQuestionsView');
	}
}
