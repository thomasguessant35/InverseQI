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

	public function delete($id)
	{
		if ($this->session->userdata('Loggin'))
		{
            $this->load->model('User_model', 'UserManager');
            $this->UserManager->delete($id);
            redirect('/welcome/adminConnexion', 'refresh');
        }else{
            redirect('/', 'refresh');
        }
	}

}
