<?php
  session_start();
  require '../../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  // require CLASS_PATH.'/logger.php';
  class web_lead_form extends dbconnect
  {
    function __construct($config)
    {
      // $log->lwrite('*******Web Lead Form Constructor******');
      parent :: __construct($config);
    }

    function is_user_exists()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__websitetools___web_lead_form` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return ($stmt->rowCount() == 1);
        // $log->lwrite('User Exists Check');
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function add_data($webform)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__websitetools___web_lead_form`(`user_id`, `language`, `form_type`, `frame_height`, `frame_width`, `background`, `chargebee_payment_plans`, `web_form_title`, `web_form_code`) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$webform['language'], $webform['form_type'], $webform['frame_height'], $webform['frame_width'], $webform['background'], $webform['chargebee_payment'], $webform['title'], base64_encode($webform['web_form_code'])]);
        // $log->lwrite('Add Web Form Data');
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_data($webform)
    {
      try
      {
        $sql = "UPDATE `mycompany__websitetools___web_lead_form` SET `language` = ? ,`form_type` = ?,`frame_height` = ? ,`frame_width` = ? ,`background` = ? ,`chargebee_payment_plans` = ? ,`web_form_title` = ?,`web_form_code`= ? WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$webform['language'], $webform['form_type'], $webform['frame_height'], $webform['frame_width'], $webform['background'], $webform['chargebee_payment'], $webform['title'], base64_encode($webform['web_form_code']),$_SESSION['user_id']]);
        // $log->lwrite('Update Web Form Data');
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_data()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__websitetools___web_lead_form` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        if($stmt->rowCount() == 1)
        {
          $record = $stmt->fetch(PDO::FETCH_ASSOC);
          $row['language'] = $record['language'];
          $row['form_type'] = $record['form_type'];
          $row['frame_height'] = $record['frame_height'];
          $row['frame_width'] = $record['frame_width'];
          $row['background'] = $record['background'];
          $row['chargebee_payment'] = $record['chargebee_payment_plans'];
          $row['web_form_title'] = $record['web_form_title'];
          $row['web_form_code'] = base64_decode($record['web_form_code']);
          // echo "Inside Row == 1";
        }
        else
        {
          // echo "Inside Row != 1";
          print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
        }
        return $row;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $web_lead_form = new web_lead_form($config->DB_CREDENTIALS);
  if(isset($_POST['action']))
  {
    if($_POST['action'] == 'put_data')
    {
      $web_form_details = $_POST;
      if($web_lead_form->is_user_exists())
      {
        $web_lead_form->update_data($web_form_details);
      }
      else
      {
        $web_lead_form->add_data($web_form_details);
      }
    }
  }

  if(isset($_GET['action']))
  {
    if($_GET['action'] == 'get_data')
    {
      echo json_encode($web_lead_form->get_data());
    }
  }
?>