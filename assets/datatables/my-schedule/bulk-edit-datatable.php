<?php
  session_start();
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  class bulk_edit_datatable extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }
    
    function get_task_details()
    {
      try
      {
        $sql = "SELECT * FROM `myschedule__task_manager` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        $data = array();
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $record)
        {
          $row['status'] = '<div class="checkbox-inline">
                              <label class="checkbox checkboxes-list">
                                <input type="checkbox" class="status-checkbox" name="complete-incomplete-checkbox" task_id="'.$record['task_id'].'">
                                <span></span>
                                '.$record['status'].'
                              </label>
                            </div>';
          $row['task_type'] = $record['task_type'];
          $row['subject'] = $record['subject'];
          $row['due_date_and_time'] = $record['due_date_and_time'];
          $row['client_name'] = $record['client_name'];
          $row['team_member'] = $record['team_member'];
          array_push($data, $row);
        }
        return array('data' => $data);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $bulk_edit_datatable =  new bulk_edit_datatable($config->DB_CREDENTIALS);
  echo json_encode($bulk_edit_datatable->get_task_details());
?>