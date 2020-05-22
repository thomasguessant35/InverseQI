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

            if(!empty($_POST['answer'])){
                $newdata = array( 
                    'Rep'.$compteur => $_POST['answer']
                ); 
                $this->session->set_userdata($newdata);
            }

            $this->load->model('Question_model', 'QuestionManager');

            $idQuestion = json_decode(json_encode($data["idQuestion"]),true);
            $data["idQuestion"] = $idQuestion[$compteur]["Questions_idQuestion"];

            $data["question"] = $this->QuestionManager->get_question($data["idQuestion"]);

            $dossierQuestion = json_decode(json_encode($data["question"]),true);
            $data["dossierQuestion"] =  $dossierQuestion[0]["rep_image"];
            
            $data["reponses"] = $this->reponseAleat();

            $data["compteur"]++;
            
            $this->load->view("welcome_message", $data);
        }else if($compteur == count($data["idQuestion"])){

            if(!empty($_POST['answer'])){
                $newdata = array( 
                    'Rep'.$compteur => $_POST['answer']
                ); 
                $this->session->set_userdata($newdata);
            }
            
            $data["score"] = 0;
            
            for($i = 1; $i <= $compteur; $i++){
                if($this->session->userdata('Rep'.$i) == 'true'){
                    $data["score"]++;
                }
            }

            $data["score"] = ($data["score"]/($compteur))*160;
            $this->load->model('Statistique_model', 'StatistiqueManager');
            $this->StatistiqueManager->add_statistique($data["score"]);

            if($data["score"] >= 130){
                $data["imageFin"] = 'einstein.jpg';
                $data["messageFin"] = 'Votre QI s\'approche de celui d\'Albert Einstein, vous êtes un vrai génie !';
            }elseif ($data["score"] < 130 && $data["score"] >= 110) {
                $data["imageFin"] = 'bach.jpg';
                $data["messageFin"] = 'Votre QI s\'approche de celui Jean Sébastien Bach, vous êtes un vrai virtuose !';
            }elseif ($data["score"] < 110 && $data["score"] >= 90) {
                $data["imageFin"] = 'charlie.jpg';
                $data["messageFin"] = 'Votre QI est dans la moyenne, vous êtes comme tout le monde !';
            }elseif ($data["score"] < 90) {
                $data["imageFin"] = 'pinocchio.jpg';
                $data["messageFin"] = 'Votre QI est inférieur à la moyenne, c\'est forcément une erreur !';
            }

            $this->session->sess_destroy();
            $this->load->view("congrats_message", $data);
        }else{
            redirect('/test', 'refresh');
        }
            
    }

    public function reponseAleat()
	{
		$reponse = range(9, 14);
        shuffle($reponse);
        return $reponse;
	}

    public function resultatQuizz($idTest)
	{
		//$this->load->model("Test_model", 'TestManager');

		//$data["listeTest"] = $this->TestManager->get_liste();
		$this->load->view("resultatView");
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
