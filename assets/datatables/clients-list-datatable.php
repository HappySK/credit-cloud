<?php
session_start();
require '../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
class clients_list_datatable extends dbconnect
{
  function __construct($config)
  {
    parent::__construct($config);
  }
  function get_clients_list()
  {
    try
    {
      $sql = "SELECT DISTINCT (ROW_NUMBER() OVER (ORDER BY clients_list.status)) AS s_no,clients_list.`client_id`, concat(clients_list.first_name,' ',clients_list.last_name) as name, clients_list.assigned_to, clients_list.referred_by,clients_list.date_created, clients_list.date_of_start, clients_list.date_login, clients_list.status from clients_list WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      if($stmt->execute([$_SESSION['user_id']]))
      { 
        $data = array();
        while($record = $stmt->fetchObject())
        {
          $row['s_no'] = $record->s_no;
          $row['name'] = $record->name;
          $row['assigned_to'] = $record->assigned_to;
          $row['referred_by'] = $record->referred_by;
          $row['date_created'] = $record->date_created;
          $row['date_of_start'] = $record->date_of_start;
          $row['date_login'] = $record->date_login;
          $row['status'] = $record->status;
          $row['action'] = "<div class='d-flex justify-content-between'><a href='my-clients-edit-client-details'><i class='fa fa-check' aria-hidden='true'></i></a> | <a href='my-clients-edit-client-details'><i class='fa fa-sticky-note' aria-hidden='true'></i></a> | <a href='my-clients-edit-client-details'><i class='fa fa-user' aria-hidden='true'></i></a> | <a href='my-clients/edit-client-details?client-id=".$record->client_id."'><i class='fa fa-edit' aria-hidden='true'></i></a> | <a href='my-clients/edit-client-details'><i class='fa fa-trash' aria-hidden='true'></i></a></div>";
          array_push($data,$row);
        }
        echo json_encode(array('data' => $data));
      }
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}
$clients_datatable = new clients_list_datatable($config->DB_CREDENTIALS);
$clients_datatable->get_clients_list();
?>