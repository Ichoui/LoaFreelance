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

  public function get_connected_user()
  {
    $query = $this->db->get_where('users', [
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')
    ]);

    return $query->row_array();
  }

}
