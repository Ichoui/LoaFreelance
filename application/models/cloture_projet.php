<?php
/**
 * Model Addprojet
 * )
 */
class cloture_projet extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function AddCloture($projectID,$UserPush,$UserGet,$comment,$note)
  {
    $data = array(
        'project_id' => $projectID,
        'user_push' => $UserPush,
        'user_get' => $UserGet,
        'comment' => $comment,
        'note' => $note
    );

    $this->db->insert('cloture_projet',$data);
  }

  public function CommentPosted($user_id,$project)
  {
    
  }


}
