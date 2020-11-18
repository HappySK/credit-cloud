<?php
  // require CLASS_PATH.'/dbconnect.php';
  $connection = new dbconnect($config->DB_CREDENTIALS);
  // session_start();
  function get_client($id,$connection)
  {
    try
    {
      $sql = "SELECT * FROM `clients_list` WHERE `client_id` = ?";
      $stmt = $connection->conn->prepare($sql);
      $stmt->execute([$id]);
      return $stmt->fetchObject();
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  // Included in my-company/team-member.php
  function get_team_members($connection)
  {
    try
    {
      $sql = "SELECT * FROM `mycompany__team_members` WHERE `user_id` = ?";
      $stmt = $connection->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id']]);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
?>