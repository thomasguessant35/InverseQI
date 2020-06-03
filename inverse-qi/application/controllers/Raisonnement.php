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
        set_time_limit(1000);
        var_dump("carre :".$carre);
        var_dump("triangle :".$triangle);
        var_dump("rond :".$rond);

        $pythonpath = getenv('PYTHONPATH'); // see if there is current setting
    $additional = '/anaconda3/bin/python'; // the location where the Tensorflow library is installed.
    if($pythonpath === false){
    putenv("PYTHONPATH=$additional");
    }
     
        $value = "";
        shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\InverseQI-master\inverse-qi\application\script\test333.R >> C:\wamp64\www\application\y.txt');

        print_r("Coin :" .$value);

       /* echo shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\application\script\test.r 100000000000000000000000000000000000000000000000000000000000000000000000 000000000000000000000000000000000000000000000000000000000000000000000000 000000000000000000000000000000000000000000000000000000000000000000000000');*/

    /*    $value = shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\application\script\test.r '.$carre.' '.$triangle.' '.$rond);

        $matches = array();
        preg_match_all('#[0-1]\s#', $value, $matches, PREG_PATTERN_ORDER);

        var_dump($value);
        var_dump($matches);*/

        //redirect('/raisonnement/reponse', 'refresh');

	}

}