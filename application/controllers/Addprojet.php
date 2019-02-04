<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addprojet extends CI_Controller
{
	var $data = array();
	public function __construct(){
		 parent::__construct();
		$this->load->model('skills');
		$this->load->model('project');
		$this->load->helper('url');
		$this->data['skills'] = $this->skills->getSkills();
	}

	public function index()
	{
		//var_dump($data);		
		$this->load->view('addprojet',$this->data);
	}
	

	public function data_submitted()
	{		
			$title_proj = $this->input->post('title_proj');
			$tarif_horaire = $this->input->post('tarif_horaire');
			$description = $this->input->post('description');
			$skills = $this->input->post('skills');

			$str_skills = '';
		    foreach($skills as $a_skill)
		    {
		      $str_skills .= $a_skill.' ';
		    }
			//push into DB
			$this->project->addProjet($title_proj,$description,$str_skills);

			$this->data['title_proj'] = $title_proj;
			$this->data['tarif_horaire'] = $tarif_horaire;
			$this->data['description'] = $description;
			$this->data['competences'] = $str_skills;
			$this->load->view('addprojet',$this->data);	
	}
}
