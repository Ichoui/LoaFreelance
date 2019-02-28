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

  public function getUserMessage($id)
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
    $this->db->join('users','users.id = interne_message.id_destinataire');
    $query = $this->db->order_by('date_send', 'DESC')->get_where('interne_message',array('id_destinataire' => $id));

    return $query->result();
  }

  public function getAMessage($id)
  {
    return $this->db->get_where('interne_message',array('id'=> $id));
  }

  public function sendAMessage($id_expediteur,$id_destinataire,$title,$object,$message)
  {
    $data = array(
      'id_expediteur' => $id_expediteur,
      'id_destinataire' => $id_destinataire,
      'date_send' => date('Y-m-d H:i:s'),
      'title' => $title,
      'object' => $object,
      'message' => $message
    );

    $this->db->insert('interne_message',$data);
  }

  public function getIdUserByEmail($email)
  {
    $this->db->select('id');
    $query = $this->db->get_where('users', array('intern_email' => $email));
    $ret = $query->row();
    return $ret->id;

  }

  
}
