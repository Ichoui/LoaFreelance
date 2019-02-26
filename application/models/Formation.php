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
    $query = $this->db->get_where('')
  }
}
