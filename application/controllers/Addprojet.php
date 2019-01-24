<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addprojet extends CI_Controller
{

	public function __construct(){
		 parent::__construct();
		$this->load->model('skills');
	}

	public function index()
	{
		$this->load->helper('url');
		$data = [
			'test' => ["popo","plplp"],
			'skills' => $this->skills->getSkills()
		];

	//var_dump($data);		
		$this->load->view('addprojet',$data);
	}
}
