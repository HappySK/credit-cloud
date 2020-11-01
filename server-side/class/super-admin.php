<?php
include CLASS_PATH.'/dbconnect.php';
class super_admin extends dbconnect
{
  function __construct($db_config)
  {
    parent::__construct($db_config); 
  }

  function get_all_users()
  {
    try
    {
      $sql = "SELECT * FROM `users`";
      $stmt = $this->conn->prepare($sql);
      if($stmt->execute())
      {
        $data = array();
        while($users = $stmt->fetch())
        {
          array_push($data, $users);
        }
        return $data;
      }
    }
    catch(SQLExeption $e)
    {
      echo $e->getMessage();
    }
  }

  function get_roles()
  {
    try
    {
      $sql = "SELECT * FROM `roles`";
      $stmt = $this->conn->prepare($sql);
      if($stmt->execute())
      {
        $data = array();
        while($roles = $stmt->fetch())
        {
          array_push($data,$roles);
        }
        return $data;
      }
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_role($role_id,$user)
  {
    try
    {
      $sql = "UPDATE `users` SET `role_id` = ? WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$role_id,$user]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}
$admin = new super_admin($db_config);
// $roles = $admin->get_roles();
// print_r($admin->get_roles());
?>