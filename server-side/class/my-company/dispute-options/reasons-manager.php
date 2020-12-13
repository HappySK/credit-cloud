<?php
  require '../../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class reasons_manager extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function add_reason($reason)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__reasons_management`(`user_id`, `reasons`) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$reason]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_reasons()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__reasons_management` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        $data = array();
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $record)
        {
          $row['reason'] = $record['reasons'];
          $row['action'] = '<div class="d-flex justify-content-around">
                              <button class="btn btn-sm edit-btn" reason_id="'.$record['s_no'].'"><i class="fa fa-edit text-primary" aria-hidden="true"></i></button>
                              <button class="btn btn-sm delete-btn" reason_id="'.$record['s_no'].'"><i class="fa fa-trash text-primary" aria-hidden="true"></i></button>
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

    function delete_reason($reason_id)
    {
      try
      {
        $sql = "DELETE FROM `mycompany__reasons_management` WHERE `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$reason_id]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $reasons_manager = new reasons_manager($config->DB_CREDENTIALS);
  switch(isset($_POST['action']) ? $_POST['action'] : null)
  {
    case 'add_reason' : $reasons_manager->add_reason($_POST['reason']);
                        break;                   
    case 'update_reason' : $reasons_manager->update_reason($_POST['id']);
                            break;
    case 'delete_reason'  : $reasons_manager->delete_reason($_POST['reason_id']);
                            break;
    // default: echo 'Inside Default Case';
  }

  switch(isset($_GET['action']) ? $_GET['action'] : null)
  {
    case 'get_reasons' : echo json_encode($reasons_manager->get_reasons());
                          break;
    // default : echo "Inside Default get case";
  }
?>