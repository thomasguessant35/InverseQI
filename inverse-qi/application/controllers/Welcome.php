<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function adminConnexion()
	{
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->load->view('pageConnexionView');
	}

}
