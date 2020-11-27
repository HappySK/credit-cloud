<?php
require '../../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
session_start();
class simple_audit extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }
  
  function insert_data($template,$page_numbering)
  {
    try
    {
      $sql = "INSERT INTO `mycompany__simple_audit_template`(`user_id`, `audit_name`, `audit_text_area`, `default_template`, `page_numbering`) VALUES (?,?,?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id'],$template['audit-name'], base64_encode($template['audit-text-area']), $template['default-template'], $page_numbering]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_template_details()
  {
    try
    {
      $sql = "SELECT * FROM `mycompany__simple_audit_template` WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id']]);
      $data = array();
      $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($records as $record)
      {
        $row['audit_name'] = $record['audit_name'];
        $row['status'] = '<label class="radio">
                            <input type="radio" id="default-template-"'.$record['user_id'].' name="default-template">
                            <span></span>
                             Default
                          </label>';
        $row['actions'] = '<button data-toggle="modal" class="btn btn-link template-preview" content="'.base64_decode($record['audit_text_area']).'" >Preview</button> | <button data-toggle="collapse" data-target=".add-simple-audit-template" class="btn btn-link">Edit</button> | <button class="btn btn-link delete-btn" template_id="'.$record['s_no'].'">Delete</button>';
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

$simple_audit = new simple_audit($config->DB_CREDENTIALS);
if(isset($_POST['audit-name'])&&isset($_POST['audit-text-area'])&&isset($_POST['default-template']))
{
  $page_numbering = isset($_POST['page-numbering']) ? 'Yes' : 'No';
  $simple_audit->insert_data($_POST,$page_numbering);
  header('Location:../../../my-company/simple-audit');
}
else if(isset($_GET))
{
  echo json_encode($simple_audit->get_template_details());
}
?>