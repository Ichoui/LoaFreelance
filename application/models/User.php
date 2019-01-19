<?php
/**
 * Model d'un utilisateur
 * )
 */
class User extends CI_Model
{
  public $first_name;
  public $last_name;
  public $email;
  public $password;
  public $gender;
  public $locale;
  public $picture;
  public $job;
  public $hourly_rate;
  public $cv;
  public $description;

  function __construct()
  {
    $this->load->database();
  }

  public function get_connected_user()
  {
      var_dump($this->input->post('email') . ' ' . $this->input->post('password'));
      die;
      $query = $this->db->get_where('users', [
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      ]);

      return $query->row_array();
  }



  public function getPorteurProjetById($id)
  {
    return $this->db->get_where('users',array('id'=>$id));
  }

}
