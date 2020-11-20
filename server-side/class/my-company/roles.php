<?php
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  session_start();
  class roles extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function get_roles()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__roles`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $role = new roles($config->DB_CREDENTIALS);

  if(isset($_GET))
  {
    echo json_encode($role->get_roles());
  }
?>