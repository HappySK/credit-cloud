<?php
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  session_start();
  class task_manager extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function is_task_exists($task_id)
    {
      try
      {
        $sql = "SELECT * FROM `myschedule__task_manager` WHERE `task_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$task_id]);
        return ($stmt->rowCount() == 1);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_task_id()
    {
      $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      return 'TSK-'.substr(str_shuffle($permitted_chars), 0, 5);
    }

    function add_tasks($task_details)
    {
      try
      {
        $sql = "INSERT INTO `myschedule__task_manager`(`user_id`, `task_id`, `team_member`, `client_name`, `task_type`, `subject`, `due_date_and_time`, `notes`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$this->get_task_id(), $task_details['team_member_name'], $task_details['client_name'], $task_details['task_type'], $task_details['subject'], $task_details['due_date_time'], $task_details['notes']]);
        // echo "Query Executed";
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_task_details($task_id)
    {
      try
      {
        $sql = "SELECT * FROM `myschedule__task_manager` WHERE `task_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$task_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      } 
    }

    function delete_task($task_id)
    {
      try
      {
        $sql = "DELETE FROM `myschedule__task_manager` WHERE `task_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$task_id]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      } 
    }

    function update_task_details($task_details)
    {
      try
      {
        $sql = "UPDATE `myschedule__task_manager` SET `user_id` = ?, `team_member` = ?,`client_name` = ?,`task_type` = ? ,`subject` = ?,`due_date_and_time` = ? ,`notes` = ?  WHERE `task_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'], $task_details['team_member_name'], $task_details['client_name'], $task_details['task_type'], $task_details['subject'], $task_details['due_date_time'], $task_details['notes'], $task_details['task_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function bulk_delete_tasks($task_ids)
    {
      $tasks = str_replace(' ',"','",$task_ids);
      // echo $tasks;
      try
      {
        $sql = "DELETE FROM `myschedule__task_manager` WHERE `task_id` IN ('$tasks')";
        $stmt = $this->conn->prepare($sql);
        var_dump($stmt);
        $stmt->execute();
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function bulk_completed_tasks($task_ids)
    {
      $tasks = str_replace(' ',"','",$task_ids);
      try
      {
        $sql = "UPDATE `myschedule__task_manager` SET `status` = ? WHERE `task_id` IN ('$tasks')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['Completed']);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      } 
    }

    function bulk_incompleted_tasks($task_ids)
    {
      $tasks = str_replace(' ',"','",$task_ids);
      try
      {
        $sql = "UPDATE `myschedule__task_manager` SET `status` = ? WHERE `task_id` IN ('$tasks')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['Incompleted']);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      } 
    }
  }

  $task_manager = new task_manager($config->DB_CREDENTIALS);
  if(isset($_POST['action']) && $_POST['action'] == 'add_task')
  {
    if(isset($_POST['task_id']) && $task_manager->is_task_exists($_POST['task_id']))
    {
      // echo "Inside Update Statement";
      $task_manager->update_task_details($_POST);
    }
    else
    {
      // echo "Inside Add Statement"; 
      $task_manager->add_tasks($_POST);
    }
  }
  else if(isset($_POST['action']) && $_POST['action'] == 'delete_task')
  {
    $task_manager->delete_task($_POST['task_id']);
  }
  else if(isset($_POST['action']) && $_POST['action'] == 'mark_as_deleted')
  {
    $task_manager->bulk_delete_tasks($_POST['task_id']);
  }
  else if(isset($_POST['action']) && $_POST['action'] == 'mark_as_completed')
  {
    $task_manager->bulk_completed_tasks($_POST['task_id']);
  }
  else if(isset($_POST['action']) && $_POST['action'] == 'mark_as_incompleted')
  {
    $task_manager->bulk_incompleted_tasks($_POST['task_id']);
  }
  else if(isset($_GET['action']) && $_GET['action'] == 'get_task_details')
  {
    echo json_encode($task_manager->get_task_details($_GET['task_id']));
  }
?>