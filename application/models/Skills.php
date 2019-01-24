<?php
/**
 * Model Addprojet
 * )
 */
class Skills extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function getSkills()
  {
    $query = $this->db->get('skills');
    return $query->result();
  }

}
