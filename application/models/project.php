<?php
/**
 * Model Addprojet
 * )
 */
class Project extends CI_Model
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

  public function fetch_data($query)
  {
  	$this->db->select("*");
  	$this->db->from("project");
  	if($query != '')
  	{
	   $this->db->like('name', $query);
	   $this->db->or_like('description', $query);
	   $this->db->or_like('date_creation', $query);
  	}
  	//$this->db->order_by('date_creation','DESC');
  	return $this->db->get();
  }

}
