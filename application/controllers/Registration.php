<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$data['place'] = 'registration';
		$this->load->view('notlogged/registration', $data);
	}
}
