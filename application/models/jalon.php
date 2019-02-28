<?php
/**
 * Model Addprojet
 * )
 */
class Jalon extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function AddJalon($libelle,$deadline,$cout,$statut,$id_projet)
  {
    $data = array(
        'libelle' => $libelle,
        'deadline' => $deadline,
        'cout' => $cout,
        'statut' => $statut,
        'id_projet' => $id_projet
    );

    $this->db->insert('jalon',$data);
  }

  public function getAllJalonsFromProject($idProject)
  {
    $query = $this->db->get_where('jalon',array('id_projet'=>$idProject)); 
    return $query->result();
  }

}
