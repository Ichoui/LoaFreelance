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

  public function getProjectByUserId($id)
  {
    $query = $this->db->get_where('project',array('le_porteur_du_projet'=>$id));
    return $query->result();
  }
  public function getProjectBystatut()
  {
  	$query = $this->db->get_where('project',array('statut'=>"IN_SEARCH"));
  	return $query->result();
  }

  public function getProjectBystatutOrderByASC()
  {
    $query = $this->db->order_by('date_creation', 'ASC')->get_where('project',array('statut'=>"IN_SEARCH"));
    return $query->result();
  }

  public function getProjectById($id)
  {
    return $this->db->get_where('project',array('id'=>$id));
  }

  public function updateStatutProject($idProjet)
  {
    $data = array(
        'statut' => 'RUNNING'
    );
    $this->db->where('id', $idProjet);
    $this->db->update('project',$data);

  }

  public function updateStatutProjectClose($idProjet)
  {
    $data = array(
        'statut' => 'CLOSED'
    );
    $this->db->where('id', $idProjet);
    $this->db->update('project',$data);

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

  public function getPorteurDuProjet($idProjet)
  {
      $this->db->select('first_name');
      $this->db->select('last_name');
      $this->db->select('intern_email');
      $this->db->from('users as us');
      $this->db->join('project as p', 'us.id = p.le_porteur_du_projet');
      return $this->db->get_where('project',array('p.id'=>$idProjet));
  }

  public function addProjet($name, $description, $skills)
  {
    
    $data = array(
      'name' => $name,
      'description' => $description,
      'date_creation' => date("Y-m-d H:i:s"),
      'path_cdcf' => '',
      'statut' => 'IN_SEARCH',
      'contrainte_tech' => $skills,
      'le_porteur_du_projet' => '1'
    );
    $this->db->insert('project',$data);
  }
}
