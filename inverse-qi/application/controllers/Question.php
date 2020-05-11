<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

	public function index()
	{
        $this->load->view("listeQuestionsView" /*$data*/);
	}

}