<?php
/**
 * Model Addprojet
 * )
 */
class Message extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function getProject()
  {
  	$query = $this->db->get_where('project',array('statut'=>"IN_SEARCH"));
  	return $query->result();
  }

  public function getUserMessage()
  {
    //$query = $this->db->order_by('date_send', 'ASC')->get_where('interne_message',array('id_destinataire' => 2));
    //$query = $this->db->get_where('interne_message',array('date_send' => 2));

    $this->db->select('date_send');
    $this->db->select('interne_message.id');
    $this->db->select('title');
    $this->db->select('message');
    $this->db->select('isRead');
    $this->db->select('first_name');
    $this->db->select('last_name');
    $this->db->join('users','users.id = interne_message.id_expediteur');
    $query = $this->db->order_by('date_send', 'DESC')->get_where('interne_message',array('id_destinataire' => 2));

    return $query->result();
  }

  public function getAMessage($id)
  {
    return $this->db->get_where('interne_message',array('id'=> $id));
  }

  
}
