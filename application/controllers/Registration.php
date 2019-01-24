<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$data['place'] = 'registration';
		$this->load->view('notlogged/registration', $data);
	}

	public function signup()
	{
		$user = $this->user->set_new_user();

		if(!empty($user)) {
			$this->session->set_userdata($user);
			redirect('profile');
		}

		redirect('notlogged/registration');
	}
}
