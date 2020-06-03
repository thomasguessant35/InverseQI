<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Raisonnement extends CI_Controller
{

	public function index()
	{
        $this->load->view("raisonnementView");
    }

    public function reponse()
	{   
        $this->load->view("reponseInverseView");
    }
    
    public function testInverse($carre,$triangle,$rond)
	{
        //var_dump("carre :".$carre);
        //var_dump("triangle :".$triangle);
        //var_dump("rond :".$rond);
     
        $value = "";
        $value = "
            [,1] [,2] [,3] [,4] [,5] [,6] [,7] [,8] [,9]
        [1,]    0    1    0    0    0    0    1    0    0
             [,1] [,2] [,3] [,4] [,5] [,6] [,7] [,8] [,9]
        [1,]    0    0    0    1    0    1    0    0   1
             [,1] [,2] [,3] [,4] [,5] [,6] [,7] [,8] [,9]
        [1,]    0    0    1    0    0    0    0    1    0";
        //shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\Users\\"Thomas Guessant"\\Desktop\InversQI\inverse-qi\application\script\test.r '.$carre.' '.$triangle.' '.$rond);

        print_r("Coin :" .$value);

       /* echo shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\application\script\test.r 100000000000000000000000000000000000000000000000000000000000000000000000 000000000000000000000000000000000000000000000000000000000000000000000000 000000000000000000000000000000000000000000000000000000000000000000000000');*/

    /*    $value = shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\application\script\test.r '.$carre.' '.$triangle.' '.$rond);

        $matches = array();
        preg_match_all('#[0-1]\s#', $value, $matches, PREG_PATTERN_ORDER);

        //var_dump($matches);
        $data["resultat"] = $matches;

        $this->load->view("reponseInverseView", $data);

        //redirect('/raisonnement/reponse', 'refresh');

	}

}