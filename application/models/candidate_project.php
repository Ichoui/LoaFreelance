<?php
/**
 * Model Addprojet
 * )
 */
class Candidate_project extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function getProjectBystatut()
  {
  	$query = $this->db->get_where('project',array('statut'=>"IN_SEARCH"));
  	return $query->result();
  }

  public function getFreelancersInscritSurUnProjetByIdProjet($id)
  {
      $this->db->select('*');
      $this->db->from('users as us');
      $this->db->join('candidate_project as cp', 'us.id = cp.id_user');
      return $this->db->get_where('candidate_project',array('cp.id_projet'=>$id));      
  }

  public function fetch_data($query)
  {

    $this->db->select('id')->from('users')->where("isPorteurProjet",0);
    $subquery = $this->db->get_compiled_select();

    $this->db->select("*");
    $this->db->from("users");
    if($query != '')
    {
     $this->db->like('first_name', $query);
     $this->db->or_like('last_name', $query);
     $this->db->or_like('email', $query);
     $this->db->or_like('intern_email', $query);
     $this->db->or_like('locale', $query);
    }
    //$this->db->order_by('date_creation','DESC');
    return $this->db->get_where('users',"id IN ($subquery)",NULL,FALSE);
  }
/*
  public function getProjectById($id)
  {
    return $this->db->get_where('project',array('id'=>$id));
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

  public function addProjet($name, $description, $skills)
  {
    $data = array(
      'name' => $name,
      'description' => $description,
      'date_creation' => date("Y-m-d H:i:s"),
      'path_cdcf' => '',
      'statut' => 'IN_SEARCH',
      'le_porteur_du_projet' => '1'
    );
    $this->db->insert('project',$data);
  }
  */

}
