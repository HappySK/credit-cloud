<?php
require '../../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
session_start();
class event_management extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }

  function is_event_exists($id)
  {
    try
    {
      $sql = "SELECT * FROM `event_management` WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
      return ($stmt->rowCount() == 1) ? true : false;
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function fetch_events() 
  {
    try 
    {
      $sql = "SELECT * FROM `event_management` WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id']]);
      $events = $stmt->fetchAll();
      foreach($events as $event)
      {
        $data[] = array(
          'id' => $event['s_no'],
          'title' => $event['event_subject'],
          'start' => $event['start_date_and_time'],
          'end' => $event['end_date_and_time'],
          'description' => $event['remarks'],
          'className' => 'fc-event-success fc-event-solid-primary' 
        );
      } 
      return $data;
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function fetch_event($id)
  {
    try
    {
      $sql = "SELECT * FROM `event_management` WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);      
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
  

  function insert_event($event)
  {
    try
    {
      $sql = "INSERT INTO `event_management`(`user_id`, `event_type`, `event_subject`, `start_date_and_time`, `end_date_and_time`, `client_name`, `team_member_name`, `location`, `remarks`) VALUES (?,?,?,?,?,?,?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id'], $event['event_type'],$event['event_subject'],$event['start_date_and_time'],$event['end_date_and_time'],$event['client_name'],$event['team_member_name'],$event['location'],$event['remarks']]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_event($event)
  {
    try
    {
      $sql = "UPDATE `event_management` SET `start_date_and_time`= ? ,`end_date_and_time`= ?  WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$event['start_date_and_time'],$event['end_date_and_time'],$event['client_name'],$event['team_member_name'],$event['location'],$event['remarks'],$event['event_id']]);
    } 
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}

$event_management = new event_management($config->DB_CREDENTIALS);
if(isset($_POST['action']))
{
  $event_details = $_POST;
  switch($_POST['action'])
  {
    case 'insert_event'     : $event_management->insert_event($event_details);      
                              break;
    case 'update_event'     : $event_management->update_event($event_details);                  
                              break;
    default : echo "Invalid Option";
  }
}

if(isset($_GET['action']))
{
  if($_GET['action'] == 'fetch_events')
  {
    echo json_encode($event_management->fetch_events());
  }
  else if($_GET['action'] == 'fetch_event')
  {
    echo json_encode($event_management->fetch_event($_GET['event_id']));
  }
}
?>