<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultfreelancer extends CI_Controller
{
	public function __construct(){
		 parent::__construct();
		 $this->load->helper('url');
		$this->load->model('user');

	}

	public function index()
	{

		$data = [
			'test' => ["popo","plplp"]
			//'project' => $this->project->getProjectBystatut()
		];
		//var_dump($data);
		$this->load->view('consultfreelancer', $data);
	}


	public function fetch()
	{
		$output = '';
		$query = '';
		if($this->input->post('query')){
			$query = $this->input->post('query');
		}
		$freelancer = $this->user->fetch_data($query);
		//var_dump($freelancer);

		if($freelancer->num_rows() > 0)
		{
			foreach ($freelancer->result() as $row) {
				$output .= '
				<div id ="'.$row->id.'"class="projet">
				<h2 class="nom-projet">'.$row->first_name.' '.$row->last_name.'</h2>
				<p style="text-overflow: ellipsis; overflow: hidden; font-size: .8em; text-align: center">'.$row->intern_email.'</p>
				<p><b>Location :</b> '.$row->locale.'</p>
				<a href="'.base_url('profile/getProfil/'.$row->id.'').'" class="btn btn-outline-primary" target="_blank">Profil</a>
				</div>
				';
			}
		}
		else
		{
			$output .= '<p> Pas de freelancer trouvé</p>';
		}
		echo $output;
	}
}
