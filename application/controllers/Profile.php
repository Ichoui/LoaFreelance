<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

public function __construct(){
		 parent::__construct();
		 $this->load->helper('url');
     $this->load->model('formation');
		$this->load->model('project');
	}
	public function index()
	{
		$currentUser = $this->session->userdata();

		if(!isset($currentUser['id']))
			redirect('login');

		$data = [
			'currentUser' => $this->session->userdata(),
			'allProject' => $this->project->getProjectByUserId($currentUser['id']),
			'formations' => $this->formation->getByUserId($currentUser['id']),
		];

		$this->load->view('profile',$data);

	}
}
