<?php
  session_start();
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  class roles_datatable extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function add_roles($role)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__roles`(`roles`) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($role);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_roles()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__roles`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = array();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($records as $record)
        {
          $row['roles'] = $record['roles'];
          $row['actions'] = '<a href="my-company/roles-and-permissions/manage-permissions?action=view&role_id='.$record['s_no'].'">View Permissions</a> | <a href="my-company/roles-and-permissions/manage-permissions?action=manage&role_id='.$record['s_no'].'">Manage Permissions</a>';
          array_push($data,$row);
        }
      echo json_encode(array('data' => $data));
      }
      catch(SQLException $e)
      { 
        echo $e->getMessage();
      }
    }
  }

  $role = new roles_datatable($config->DB_CREDENTIALS);
  $role->get_roles();

?>