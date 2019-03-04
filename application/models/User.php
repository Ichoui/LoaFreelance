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

  public function get_user_by_id($id)
  {
    $query = $this->db->get_where('users', [
      'id' => $id
    ]);

    return $query->row_array();
  }

  public function getPorteurProjetById($id)
  {
    return $this->db->get_where('users',array('id'=>$id));
  }

  public function set_new_user()
  {
    $query = $this->db->insert('users', [
      'first_name' => $this->input->post('first_name'),
      'last_name'  => $this->input->post('last_name'),
      'email'      => $this->input->post('email'),
      'password'   => $this->input->post('password')
    ]);

    $id = $this->db->insert_id();

    return $this->get_user_by_id($id);

  }

  public function fetch_data($query)
  {
    $this->db->select("*");
    //$this->db->from("users");
    if($query != '')
    {
     $this->db->like('first_name', $query);
     $this->db->or_like('last_name', $query);
     $this->db->or_like('email', $query);
     $this->db->or_like('intern_email', $query);
     $this->db->or_like('locale', $query);
     $this->db->or_like('skills', $query);
    }
    //$this->db->order_by('date_creation','DESC');
    return $this->db->get_where('users',array('users.isPorteurProjet' => 0));
  }

  public function getAllFree()
  {
	  $query = $this->db->get_where('users',array('users.isPorteurProjet' => 0));
	  return $query->result();

  }

	public function update($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('users', $data);
  }
}
