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
                            <input type="radio" id="default-template-'.$record['user_id'].'" name="default-template" '.$this->is_checked($record['default_template']).' template_id="'.$record['s_no'].'">
                            <span></span>
                             Default
                          </label>';
        $row['actions'] = '<button data-toggle="modal" class="btn btn-link template-preview" content="'.base64_decode($record['audit_text_area']).'" template_id="'.$record['s_no'].'" >Preview</button> | <button data-toggle="collapse" data-target=".add-simple-audit-template" class="btn btn-link edit-btn" template_id="'.$record['s_no'].'">Edit</button> | <button class="btn btn-link delete-btn" template_id="'.$record['s_no'].'">Delete</button>';
        array_push($data,$row);
      }

      return array('data' => $data);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function is_checked($val)
  {
    if($val == 'Yes')
    {
      return 'checked';
    }
    else
    {
     return ''; 
    }
  }

  function delete_data($id)
  {
    try
    {
      $sql = "DELETE FROM `mycompany__simple_audit_template` WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_template($id)
  {
    try
    {
      $sql = "SELECT * FROM `mycompany__simple_audit_template` WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
      if($stmt->rowCount() == 1)
      {
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        $row['template_id'] = $record['s_no'];
        $row['template_title'] = $record['audit_name'];
        $row['template_content'] = base64_decode($record['audit_text_area']);
        $row['default_template'] = $record['default_template'];
        $row['page_numbering'] = $record['page_numbering'];
      }
      return $row;
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function is_template_exists($id)
  {
    try
    {
      $sql = "SELECT * FROM `mycompany__simple_audit_template` WHERE `s_no` = ?";  
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
      return ($stmt->rowCount() == 1);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage(); 
    }
  }

  function update_template_details($template,$page_numbering,$id)
  {
    try
    {
      $sql = "UPDATE `mycompany__simple_audit_template` SET `user_id` = ?, `audit_name` = ?, `audit_text_area` = ?, `default_template` = ?, `page_numbering` = ? WHERE `s_no` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id'],$template['audit-name'], base64_encode($template['audit-text-area']), $template['default-template'], $page_numbering, $id]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_image($image)
  {
    try
    {
      $sql = "UPDATE `mycompany__simple_audit_template` SET `company_logo` = ? WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([base64_encode($image),$_SESSION['user_id']]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function delete_image()
  {
    try
    {
      $sql = "UPDATE `mycompany__simple_audit_template` SET `company_logo` = NULL WHERE `user_id` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id']]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_image()
  {
    try
    {
      $sql = "SELECT * FROM `mycompany__simple_audit_template` WHERE `user_id` = ? LIMIT 1";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['user_id']]);
      $record = $stmt->fetch(PDO::FETCH_ASSOC);
      $row['company_logo'] = base64_decode($record['company_logo']);
      return $row;
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_status($id)
  {
    try
    {
      $sql1 = "UPDATE `mycompany__simple_audit_template` SET `default_template` = 'Yes' WHERE `s_no` = ?";
      $sql2 = "UPDATE `mycompany__simple_audit_template` SET `default_template` = 'No' WHERE `s_no` != ?";
      $stmt1 = $this->conn->prepare($sql1);
      $stmt2 = $this->conn->prepare($sql2);
      $stmt1->execute([$id]);
      $stmt2->execute([$id]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}

$simple_audit = new simple_audit($config->DB_CREDENTIALS);
if(isset($_POST['audit-name'])&&isset($_POST['audit-text-area']))
{
  $page_numbering = isset($_POST['page-numbering']) ? 'Yes' : 'No';
  if($simple_audit->is_template_exists($_POST['template-id']))
  {
    // echo "Inside Update Statement";
    $simple_audit->update_template_details($_POST,$page_numbering,$_POST['template-id']); 
  }
  else
  {
    // echo "Inside Insert Statement";
    $simple_audit->insert_data($_POST,$page_numbering);   
  }
  header('Location:../../../my-company/simple-audit');
}
else if(isset($_GET['action']))
{
  if($_GET['action'] == 'get_template_details')
  {
    echo json_encode($simple_audit->get_template_details());
  }
}

if(isset($_POST['action']))
{
  if($_POST['action'] == 'delete_template')
  {
    $simple_audit->delete_data($_POST['id']);
  }
  else if($_POST['action'] == 'update_image')
  {
     $simple_audit->update_image($_POST['img_content']);
  }
  else if($_POST['action'] == 'delete_image')
  {
    $simple_audit->delete_image();
  }
  else if($_POST['action'] = 'update_status')
  {
    $simple_audit->update_status($_POST['id']);
  }
  
}

if(isset($_GET['action']))
{
  if($_GET['action'] == 'get_template')
  {
    echo json_encode($simple_audit->get_template($_GET['id']));
  }
  else if($_GET['action'] == 'get_image')
  {
    echo json_encode($simple_audit->get_image());
  }
}
?>