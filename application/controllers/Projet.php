<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projet extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('project');
		$this->load->model('user');
		//chargement de la librairie pour la validation du formulaire
  		$this->load->library('form_validation');
  		//chargement du helper form
  		$this->load->helper('form');
	}
/*
	public function index()
	{
		$this->load->helper('url');
		
	}
	*/


	public function getProject($id){

			$data = array();

			$project = $this->project->getProjectById($id);
			if($project->num_rows() > 0)
			{
				foreach ($project->result() as $a_project) {
					$data['id'] = $a_project->id;
					$data['title'] = $a_project->name;
					$data['description'] = $a_project->description;
					$data['date_creation'] = $a_project->date_creation;
				}

				$porteur_projet = $this->user->getPorteurProjetById($data['id']);

				foreach($porteur_projet->result() as $a_porteur_projet)
				{
					$data['first_name'] = $a_porteur_projet->first_name;
					$data['last_name'] = $a_porteur_projet->last_name;
					$data['email'] = $a_porteur_projet->intern_email;
				}
			}
			else
			{
				//a voir
			}
			
		$this->load->view('projet',$data);
	}
}
