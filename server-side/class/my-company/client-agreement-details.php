<?php
  require '../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class client_agreement extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function is_agreement_exists($agreement_id)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__client_agreement` WHERE  `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$agreement_id]);
        return ($stmt->rowCount() == 1) ? true : false;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_agreement($client_agreement)
    {
      try
      {
        $sql = "UPDATE `mycompany__client_agreement` SET `agreement_name` = ?,`agreement_content` = ? ,`default_agreement` = ? ,`online_agreement_option` = ? WHERE `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$client_agreement['agreement_name'], base64_encode($client_agreement['agreement_content']), $client_agreement['default_agreement'], $client_agreement['online_agreement'], $client_agreement['agreement_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function insert_agreement($client_agreement)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__client_agreement`(`user_id`, `agreement_name`, `agreement_content`, `default_agreement`, `online_agreement_option`) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'], $client_agreement['agreement_name'], base64_encode($client_agreement['agreement_content']), $client_agreement['default_agreement'], $client_agreement['online_agreement']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_agreement($agreement_id)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__client_agreement` WHERE `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$agreement_id]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        $row['agreement_name'] = $record['agreement_name'];
        $row['agreement_content'] = base64_decode($record['agreement_content']);
        $row['default_agreement'] = $record['default_agreement'];
        return $row ;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function delete_agreement($agreement_id)
    { 
      try
      {
        $sql = "DELETE FROM `mycompany__client_agreement` WHERE `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$agreement_id]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_status($agreement_id)
    {
      try
      {
        $sql1 = "UPDATE `mycompany__client_agreement` SET `default_agreement` = ?  WHERE `s_no` = ?";
        $sql2 = "UPDATE `mycompany__client_agreement` SET `default_agreement` = ?  WHERE `s_no` != ?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt2 = $this->conn->prepare($sql2);
        $stmt1->execute(['Yes',$agreement_id]);
        $stmt2->execute(['No',$agreement_id]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_online_agreement($option)
    {
      try
      {
        $sql = "UPDATE `mycompany__client_agreement` SET `online_agreement_option` = ?  WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$option,$_SESSION['user_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_online_agreement()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__client_agreement` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $client_agreement = new client_agreement($config->DB_CREDENTIALS);
  if(isset($_POST['action']))
  {
    $agreement_id = (isset($_POST['agreement_id'])) ? $_POST['agreement_id'] : '';
    if($_POST['action'] == 'put_data')
    {
      if($client_agreement->is_agreement_exists($agreement_id))
      {
        $client_agreement->update_agreement($_POST);
      }
      else  
      {
        $client_agreement->insert_agreement($_POST);
      }
    }
    else if($_POST['action'] == 'delete_agreement')
    {
      $client_agreement->delete_agreement($_POST['agreement_id']);  
    }
    else if($_POST['action'] == 'update_status')
    {
      $client_agreement->update_status($_POST['agreement_id']);
    }
    else if ($_POST['action'] == 'update_online_agreement')
    {
      $client_agreement->update_online_agreement($_POST['option']);
    }
  }

  if(isset($_GET['action']))
  {
    if($_GET['action'] == 'get_agreement')
    {
      echo json_encode($client_agreement->get_agreement($_GET['agreement_id']));
    }
    else if($_GET['action'] == 'get_online_agreement')
    {
      echo json_encode($client_agreement->get_online_agreement());
    }
  }
?>