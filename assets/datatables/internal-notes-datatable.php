<?php
session_start();
require '../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
class get_internal_notes extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }

  function get_notes()
  {
    try
    {
      $sql = "SELECT DISTINCT add_internal_notes.`date_created`, `internal_notes_content`, concat(clients_list.first_name,' ',clients_list.last_name) as name, `internal_notes_files` FROM `add_internal_notes` INNER JOIN `clients_list` ON add_internal_notes.client_id = clients_list.client_id AND add_internal_notes.client_id = ?";
      $stmt = $this->conn->prepare($sql);
      if($stmt->execute([$_SESSION['c_id']]))      
      {
        $data = array();
        while($record = $stmt->fetchObject())
        {
          $row['date'] = $record->date_created;
          $row['note'] = $record->internal_notes_content;
          $row['name'] = $record->name;
          $row['attachment'] = "<a href='assets/internal-notes/".$record->internal_notes_files."' target='_blank'>".$record->internal_notes_files."</a>";
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

$get_internal_notes = new get_internal_notes($config->DB_CREDENTIALS);
$get_internal_notes->get_notes();
?>