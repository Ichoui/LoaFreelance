<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

<<<<<<< HEAD
	public function __construct()
  {
  	parent::__construct();
    $this->load->model('formation');

  }

=======
public function __construct(){
		 parent::__construct();
		 $this->load->helper('url');
		$this->load->model('project');
	}
>>>>>>> 6ffc51d5d69949d2ef8bb1bbe89b53006db0ff02
	public function index()
	{
		$currentUser = $this->session->userdata();

		if(!isset($currentUser['id']))
			redirect('login');

<<<<<<< HEAD
		$this->load->view('profile', [
			'currentUser' => $currentUser,
		]);
=======
		$data = [
			'currentUser' => $this->session->userdata(),
			'allProject' => $this->project->getProjectByUserId($currentUser['id'])
		];

		$this->load->view('profile',$data);
>>>>>>> 6ffc51d5d69949d2ef8bb1bbe89b53006db0ff02

	}
}
