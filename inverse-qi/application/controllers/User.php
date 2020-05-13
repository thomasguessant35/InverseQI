<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		if (isAuthenticated()) {
			$this->load->model("user_model", 'UserManager');

			$data["listeUser"] = $this->UserManager->get_liste();
			$this->load->view("adminView", $data);
		} else {
			redirect('/welcome/adminConnexion', 'refresh');
		}

	}

}
