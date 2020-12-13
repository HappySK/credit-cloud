<?php
  require '../../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class instructions_manager extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function add_instruction($instruction)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__instructions_management`(`user_id`, `instruction`) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'], $instruction]);
      }
      catch(SQLException $e)
      {
        $e->getMessage();  
      }
    }

    function get_instructions()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__instructions_management` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        $data = array();
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $record)
        {
          $row['instructions'] = $record['instruction'];
          $row['actions'] = '<div class="d-flex justify-content-around">
                              <button class="btn btn-sm instruction-edit-btn" instruction_id="'.$record['s_no'].'"><i class="fa fa-edit text-primary" aria-hidden="true"></i></button>
                              <button class="btn btn-sm instruction-delete-btn" instruction_id="'.$record['s_no'].'"><i class="fa fa-trash text-primary" aria-hidden="true"></i></button>
                            </div>';
          array_push($data,$row);
        }
        return array('data'=> $data);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function delete_instruction($instruction_id)
    {
      try
      {
        $sql = "DELETE FROM `mycompany__instructions_management` WHERE `s_no` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$instruction_id]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $instruction_manager = new instructions_manager($config->DB_CREDENTIALS);
  
  switch(isset($_POST['action']) ? $_POST['action'] : null)
  {
    case 'add_instruction' : $instruction_manager->add_instruction($_POST['instruction']);
                            break;
    case 'delete-instruction' : $instruction_manager->delete_instruction($_POST['instruction_id']);
                                break;  
  }

  switch(isset($_GET['action']) ? $_GET['action'] : null)
  {
    case 'get_instructions': echo json_encode($instruction_manager->get_instructions());
                              break;    
  }
?>