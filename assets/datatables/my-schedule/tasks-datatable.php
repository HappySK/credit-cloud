<?php
  session_start();
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  class tasks_datatable extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function get_tasks_details()
    {
      try
      {
        $sql = "SELECT * FROM `myschedule__task_manager` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        $data = array();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($records as $record)
        {
          $row['client_name'] = '<div>
                                  <div>
                                    <a href="my-clients/edit-client-details" class="btn btn-sm btn-link"><strong>'.$record['client_name'].'</strong></a>
                                    <p>'.$record['subject'].'<p>
                                  </div>
                                </div>';
          $row['actions'] = '<div class="d-flex justify-content-end">
                                <img src="assets/dist/assets/media/users/blank.png" class="img-fluid rounded-circle" style="max-width:5%" />
                                <div>
                                  <button class="btn agenda-tasks-edit-btn" data-toggle="collapse" data-target=".agenda-create-tasks-collapse" task_id="'.$record['task_id'].'"><i class="fa fa-edit text-primary" aria-hidden="true"></i></button>
                                  <button class="btn agenda-task-delete-btn" task_id="'.$record['task_id'].'"><i class="fa fa-trash text-primary" aria-hidden="true"></i></button>                            
                                </div>
                              </div>';
          array_push($data,$row);
        }
        return array('data' => $data);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $tasks_datatable = new tasks_datatable($config->DB_CREDENTIALS);
  echo json_encode($tasks_datatable->get_tasks_details());
?>