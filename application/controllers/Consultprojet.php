<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultprojet extends CI_Controller
{
	public function __construct(){
		 parent::__construct();
		 $this->load->helper('url');
		$this->load->model('project');
	}

	public function index()
	{
		
		$data = [
			'test' => ["popo","plplp"],
			'project' => $this->project->getProjectBystatut()
		];
		//var_dump($data);
		$this->load->view('consultprojet', $data);
	}


	public function fetch()
	{
		$output = '';
		$query = '';
		if($this->input->post('query')){
			$query = $this->input->post('query');
		}
		$project_result = $this->project->fetch_data($query);
		//var_dump($project_result);
		
		if($project_result->num_rows() > 0)
		{
			foreach ($project_result->result() as $row) {
				$output .= '
				<div id ="'.$row->id.'" class="projet '. strtolower($row->statut).' ">
				<h2 class="nom-projet">'.$row->name.'</h2>
				<p>'.$row->description.'</p>
				<p class="etat"></p>	
				<a href="'.base_url('projet/getProject/'.$row->id.'').'" class="btn btn-outline-primary" target="_blank">Accéder</a>
				</div>
				';			
			}
		}
		else
		{
			$output .= '<p> Pas de projet trouvé</p>';
		}
		echo $output;
	}
}
