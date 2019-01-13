<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultprojet extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('consultprojet');
	}
}
