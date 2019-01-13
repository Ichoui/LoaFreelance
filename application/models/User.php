<?php
/**
 * Model d'un utilisateur
 * )
 */
class User extends CI_Model
{
  public $oauth_provider;
  public $oauth_id;
  public $first_name;
  public $last_name;
  public $email;
  public $gender;
  public $locale;
  public $picture;
  public $link;

  function __construct()
  {
    $this->load->database();
  }

  public function get_connected_user($logs, $google = FALSE)
  {
      if(!isset($logs['oauth_id']))
      {
        $query = $this->db->get_where('users', [
          'email' => $logs['email'],
          'password' => $logs['password']
        ]);
        return $query->row_array();
      }

        $query = $this->db->get_where('users', [
          'oauth_id' => $logs['oauth_id'
        ]);
        return $query->row_array()
  }

}
