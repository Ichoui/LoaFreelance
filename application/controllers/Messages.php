<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('message');
	}

	public function index()
	{
		$data = [
			'messages' => $this->message->getUserMessage()
		];
		//var_dump($data);
		$this->load->view('messages',$data);
	}


	public function fetch()
	{
		$output = '';
		$query = '';
		if($this->input->post('id')){
			$query = $this->input->post('id');
		}
		$message_result = $this->message->getAMessage($query);
		
		
		if($message_result->num_rows() > 0)
		{
			foreach ($message_result->result() as $row) {
			
			$output .= '
			<div class="header">
				<div id="title" class="expediteur">'.$row->id_expediteur.'</div>
				<div id="object" class="title">Objet : '.$row->title.'</div>
				<div class="repondre">Répondre</div>
			</div>
			<div id="message" class="message">'.$row->message.'</div>
			<div class="reponse">
				<div class="close-reponse">Retourner au message</div>
				<form action="" type="POST">
					<textarea id="" placeholder="Votre réponse.."></textarea>
					<input type="file" multiple="multiple">
					<button class="btn btn-outline-primary">Envoyer</button>
				</form>
			</div>';
			}
		}
		else
		{
			$output .= '<p> Pas de message trouvé</p>';
		}
		echo $output;
	}
	


}
