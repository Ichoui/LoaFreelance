<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
  {
  	parent::__construct();
    $this->load->model('user');
		$this->load->helper('form');

  }

	public function index()
	{
		$data = [
			'place' => 'login',
		];
		$this->load->view('notlogged/login', $data);
	}

	public function connexion() {

		$login = $this->user->get_connected_user();
		if(!empty($login)) {
			$this->session->set_userdata($login);
			redirect('profile');
		}


		redirect('login');
	}
}
