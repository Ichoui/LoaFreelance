<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
  {
  	parent::__construct();
    $this->load->model('formation');

  }

	public function index()
	{
		$currentUser = $this->session->userdata();

		if(!isset($currentUser['id']))
			redirect('login');

		$this->load->view('profile', [
			'currentUser' => $currentUser,
		]);

	}
}
