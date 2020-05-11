<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if (isAuthenticated())
		{
			$this->load->model("user_model", 'UserManager');
			
			$data["listeUser"] = $this->UserManager->get_liste();
			$this->load->view("user_page", $data);
		}
		else
		{
			redirect('/', 'refresh');
		}
		
	}

	public function disconnect()
	{
		if (isAuthenticated())
		{
			$this->load->helper('cookie');
			
			delete_cookie("Connexion");
			delete_cookie("username");
			delete_cookie("level");
			
			redirect('/', 'refresh');
		}
		else
		{
			redirect('/', 'refresh');
		}
	}
}
