<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller
{
	public function __construct(){
		 parent::__construct();
		
		$this->load->model('project');
		$this->load->helper('url');		
	}

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'last_project' => $this->project->getProjectBystatutOrderByASC()
		);

		$this->load->view('accueil',$data);
	}
}
