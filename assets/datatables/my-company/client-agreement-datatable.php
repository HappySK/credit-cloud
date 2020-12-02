<?php
  session_start();
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  class client_agreement_datatable extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function get_agreements()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__client_agreement` WHERE `user_id` = ? ORDER BY `s_no`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        $data = array();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($records as $record)
        {
          $response = ($record['default_agreement'] == 'Yes') ? 'checked' : '';
          $row['agreement_name'] = $record['agreement_name'];
          $row['status'] = '<div class="radio-list">
                              <label class="radio">
                              <input type="radio" class="form-check-input" name="status" id="status"
                                value="'.$record['s_no'].'" '.$response.'/>
                                <span></span>
                                Default
                              </label>
                            </div>';
          $row['actions'] = '<button class="btn btn-sm btn-link show-agreement" data-toggle="modal" data-target=".agreement-modal" agreement_id="'.$record['s_no'].'">Preview</button> | <button class="btn btn-sm btn-link edit-btn" data-toggle="collapse" data-target=".show-hide-agreement" agreement_id="'.$record['s_no'].'">Edit</button> | <button class="btn btn-sm btn-link delete-btn" agreement_id="'.$record['s_no'].'">Delete</button>';
          array_push($data,$row);
        }
        return array('data'=>$data);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $client_agreement_datatable =  new client_agreement_datatable($config->DB_CREDENTIALS);

  echo json_encode($client_agreement_datatable->get_agreements());
?>