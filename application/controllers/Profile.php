<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('formation');
		$this->load->model('project');
		$this->load->model('user');
	}

	public function index()
	{
		$currentUser = $this->session->userdata();

		if (!isset($currentUser['id']))
			redirect('login');

		$data = [
			'currentUser' => $currentUser,
			'allProject' => $this->project->getProjectByUserId($currentUser['id']),
			'formations' => $this->formation->getByUserId($currentUser['id']),
		];

		$this->load->view('profile', $data);

	}

	public function update()
	{
		$currentUser = $this->session->userdata();

		$update = $this->user->update($currentUser['id'], $this->input->post(NULL, TRUE)); // returns all POST items with XSS filter
		$test = $this->input->post(NULL, TRUE);

		$this->session->set_userdata($this->user->get_user_by_id($currentUser['id']));
		redirect('profile');
	}
}
