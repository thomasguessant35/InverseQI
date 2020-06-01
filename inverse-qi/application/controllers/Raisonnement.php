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
        var_dump("carre :".$carre);
        var_dump("triangle :".$triangle);
        var_dump("rond :".$rond);
     
        $value = "";
        $value = shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\Users\Thomas\Desktop\InversQI\inverse-qi\application\script\test.r '.$carre);

        $matches = array();
        preg_match_all('#[0-1]\s#', $value, $matches, PREG_PATTERN_ORDER);

        var_dump($value);
        var_dump($matches);

        //redirect('/raisonnement/reponse', 'refresh');

	}

}