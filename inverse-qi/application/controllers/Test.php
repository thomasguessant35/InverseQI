<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('codeTest', 'Code', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('accueilTest');

        }else{
            $this->load->model('Test_model', 'TestManager');
            
            $data['idTest'] = $this->TestManager->test_valid($_POST['codeTest']);

            $idTest = json_decode(json_encode($data['idTest']),true);

            if ($data['idTest'] != null)
            {
                $data['codeTest'] = $_POST['codeTest'];
                $data["compteur"] = 0;

                $this->testform($idTest[0]['idQuizz'],$data["compteur"]);
            }else{
                $this->load->view('accueilTest');
            }
        }
    }
    
    public function testform($idTest, $compteur){
        $this->load->helper(array('form', 'url'));

        $data["compteur"] = $compteur;
        $data['idTest'] = $idTest;

        $this->load->model('Question_Test_model', 'QuestionTestManager');
        $data["idQuestion"] = $this->QuestionTestManager->get_questions_test($idTest);

        if($compteur < count($data["idQuestion"])){
            
            $this->load->model('Image_model', 'ImageManager');
            $this->load->model('Question_model', 'QuestionManager');

            $idQuestion = json_decode(json_encode($data["idQuestion"]),true);

            $data["question"] = $this->QuestionManager->get_question($idQuestion[$compteur]["Questions_idQuestion"]);
            $data["listeImage"] = $this->ImageManager->get_image($idQuestion[$compteur]["Questions_idQuestion"]);
            $data["compteur"]++;
            
            $this->load->view("welcome_message", $data);
        }else if($compteur == count($data["idQuestion"])){
            $this->load->view("congrats_message", $data);
        }else{
            redirect('/test', 'refresh');
        }
            
    }

	public function listQuizz()
	{
		/*if (isAuthenticated())*/ {
		$this->load->model("Test_model", 'TestManager');

		$data["listeTest"] = $this->TestManager->get_liste();
		$this->load->view("listQuizzView", $data);
	} /*else {
			redirect('/welcome', 'refresh');
		}*/

	}

	public function Quizz_Create()
	{
		$this->load->model("Test_model", 'TestManager');

		$data=array(
			"Nom"=> $this->input->post("Nom"),
			"codeTest"=> $this->getRandomString(11)
		);

		$this->TestManager->insert_data($data);

		$quizz_IdQuizz = $this->db->insert_id();

		foreach ($_POST as $key => $value ){
			if($key!="Nom"){

				$data2=array(
					"Questions_idQuestion"=> $this->input->post($key),
					"Quizz_idQuizz"=> $quizz_IdQuizz
				);
				$this->TestManager->insert_questions_quizz($data2);
			}
		}

		redirect(base_url() . "index.php/test/listQuizz", 'refresh');
	}

	function getRandomString($length = 8) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';

		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];
		}

		return $string;
	}

}
