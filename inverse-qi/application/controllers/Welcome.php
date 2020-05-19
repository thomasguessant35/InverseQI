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

		$this->load->helper('cookie');

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('mail', 'Mail', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->session->userdata('Loggin'))
        {
        	$this->load->model('User_model', 'UserManager');
        	
			$data["listeUser"] = $this->UserManager->get_liste();
			$this->load->view("adminView", $data);
        }
        
        else if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('pageConnexionView');
        }
        
        else
        {
        	$this->load->model('User_model', 'UserManager');
        	$this->load->helper('security');
        	
			$data['qry'] = $this->UserManager->user_valid($_POST['mail'], $_POST['password']/*hash("sha512", $_POST['password'])*/);
        	
        	if ($data['qry'])
        	{
        		$data['mail'] = $_POST['mail'];
				
				$newdata = array( 
					'Loggin' => TRUE,
					'mail' => $_POST['mail']
                ); 
                $this->session->set_userdata($newdata);
        		
				redirect('/welcome/adminConnexion', 'refresh');
        	}
        }
	
	}

	public function disconnect()
	{
		if ($this->session->userdata('Loggin'))
		{
			$this->session->sess_destroy();
			
			redirect('/', 'refresh');
		}
		else
		{
			redirect('/', 'refresh');
		}
	}

}
