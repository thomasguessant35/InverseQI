<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Raisonnement extends CI_Controller
{

	public function index()
	{
        $this->load->view("raisonnementView");
	}

}