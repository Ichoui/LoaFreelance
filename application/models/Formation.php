<?php
/**
 * Model Addprojet
 * )
 */
class Formation extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function getFormation()
  {
    $query = $this->db->get('formation');
    return $query->result();
  }

  public function getByUserId($userId) {

    $this->db->select('*');
    $this->db->from('formation');
    $this->db->join('users_formation', 'users_formation.formation_id = formation.id');
    $this->db->where('users_formation.user_id = ?', [$userId]);
    $query = $this->db->get();

    return $query->result();
  }
}
