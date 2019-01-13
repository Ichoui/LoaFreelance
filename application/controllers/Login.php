<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$data['place'] = 'login';
		$this->load->view('notlogged/login', $data);
	}
}
