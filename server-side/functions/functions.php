<?php
  require CLASS_PATH.'/dbconnect.php';
  $connection = new dbconnect($config->DB_CREDENTIALS);
  session_start();
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
?>