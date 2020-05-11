<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if (isAuthenticated())
		{
			$this->load->model("user_model", 'UserManager');
			
			//$data["listeUser"] = $this->UserManager->get_liste();
			$this->load->view("adminView");
		}
		else
		{
			redirect('/welcome/adminConnexion', 'refresh');
		}
		
	}

	public function disconnect()
	{
		if (isAuthenticated())
		{
			$this->load->helper('cookie');
			
			delete_cookie("Connexion");
			delete_cookie("mail");
			
			redirect('/', 'refresh');
		}
		else
		{
			redirect('/', 'refresh');
		}
	}
}
