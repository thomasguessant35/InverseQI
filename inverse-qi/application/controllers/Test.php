<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('codeTest', 'Code', 'required');
       
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('accueilTest');
            
        }else{
            $this->load->model('Test_model', 'TestManager');
            $data['qry'] = $this->TestManager->test_valid($_POST['codeTest']);
        	
            if ($data['qry'])
            {
                $data['codeTest'] = $_POST['codeTest'];
                                                
                $data["listeTest"] = $this->TestManager->get_liste();
                $this->load->view("welcome_message", $data);
            }
        }
        
	}
}