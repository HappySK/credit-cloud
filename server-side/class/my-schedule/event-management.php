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
          'title' => $event['event_subject'],
          'start' => $event['start_date_and_time'],
          'end' => $event['end_date_and_time'],
          'description' => $event['remarks'] 
        );
      } 
      return $data;
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function insert_events($event)
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
}

$event_management = new event_management($config->DB_CREDENTIALS);
if(isset($_POST['action']))
{
  switch($_POST['action'])
  {
    case 'get_events' : $event_details = $_POST;
                        $event_management->insert_events($event_details);                     
  }
}

if(isset($_GET['action']))
{
  if($_GET['action'] == 'fetch_events')
  {
    echo json_encode($event_management->fetch_events());
  }
}
?>