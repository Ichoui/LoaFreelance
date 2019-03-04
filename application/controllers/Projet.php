<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projet extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('project');
		$this->load->model('user');
		$this->load->model('candidate_project');
		$this->load->model('jalon');
		$this->load->model('cloture_projet');
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
	public function addNewValidateCandidateFreelanceur()
	{
		$this->candidate_project->updateStatut($_POST['id_project'], $_POST['id_user']);
		$this->getProject($_POST['id_project']);
	}

	public function RunProjetValidateAddJalon()
	{
		$postData = $_POST['allJalons'];
		$jalons = explode(";", $postData);
		$jalons_1 = array_filter($jalons);


		$sizeJalons = count($jalons_1);
		$i = 1;
		for($i = 0; $i < $sizeJalons ; $i = $i+3)
		{
			$this->jalon->AddJalon($jalons_1[$i],$jalons_1[$i + 1],$jalons_1[$i + 2],"UNPAYED", $_POST['id_project']);
		}
		$this->project->updateStatutProject($_POST['id_project']);
	}


	public function ClotureProjet()
	{

		$postData = $_POST['allNotations'];
		$jalons = explode(";", $postData);
		$jalons_1 = array_filter($jalons);


		$sizeJalons = count($jalons_1);
		$i = 1;
		for($i = 0; $i < $sizeJalons ; $i = $i+3)
		{
			$this->cloture_projet->AddCloture($_POST['project_id'],$_POST['user_push'],$jalons_1[$i],$jalons_1[$i + 1],$jalons_1[$i + 2]);
		}
		$this->project->updateStatutProjectClose($_POST['project_id']);
		//$this->load->view('accueil');
	}
	public function SendCandidature()
	{
		$this->candidate_project->newCandidature($_POST['id_user'],$_POST['id_project'],$_POST['msg']);
		$this->getProject($_POST['id_project']);
	}

	public function getProject($id){

			$data = array();
			$currentUser = $this->session->userdata();
			$project = $this->project->getProjectById($id);

			if($project->num_rows() > 0)
			{
				foreach ($project->result() as $a_project) {
					$data['id_project'] = $a_project->id;
					$data['title'] = $a_project->name;
					$data['description'] = $a_project->description;
					$data['date_creation'] = $a_project->date_creation;
					$data['lePorteurDuProjet'] = $a_project->le_porteur_du_projet;
					$data['statut'] = $a_project->statut;
					$data['contrainte_tech'] = $a_project->contrainte_tech;
				}

				$porteur_projet = $this->project->getPorteurDuProjet($data['id_project']);


				foreach($porteur_projet->result() as $a_porteur_projet)
//				die($data['id_project']);
				{
					$data['first_name'] = $a_porteur_projet->first_name;
					$data['last_name'] = $a_porteur_projet->last_name;
					$data['email'] = $a_porteur_projet->intern_email;

				}
					$data['freelancer_inscrit'] = $this->candidate_project->getFreelancersInscritSurUnProjetByIdProjet($data['id_project']);

					$data['freelanceur_candidate'] = $this->candidate_project->getFreelancersCandidateSurUnProjetByIdProjet($data['id_project']);

					$data['lesJalonsDuProjet'] = $this->jalon->getAllJalonsFromProject($data['id_project']);
			}
			else
			{
				//a voir
			}

		$this->load->view('projet',$data);
	}
}
