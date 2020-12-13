<?php
  require '../../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class affiliate_sign_up_form extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function is_user_exists()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__websitetools___affiliate_sign_up` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return ($stmt->rowCount() == 1);
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
        $sql = "SELECT * FROM `mycompany__websitetools___affiliate_sign_up` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        if($stmt->rowCount() == 1)
        {
          $record = $stmt->fetch(PDO::FETCH_ASSOC);
          $row['affiliate_language'] = $record['language'];
          $row['affiliate_custom_title'] = $record['custom_file_title'];
          $row['affiliate_frame_height'] = $record['frame_height'];
          $row['affiliate_frame_width'] = $record['frame_width'];
          $row['affiliate_background'] = $record['background'];
          $row['web_form_code'] = base64_decode($record['web_form_code']); 
        }
        return $row;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function add_data($affiliate_sign_up)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__websitetools___affiliate_sign_up`(`user_id`, `language`, `custom_file_title`, `frame_height`, `frame_width`, `background`, `web_form_code`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$affiliate_sign_up['affiliate_language'],$affiliate_sign_up['affiliate_custom_title'],$affiliate_sign_up['affiliate_frame_height'],$affiliate_sign_up['affiliate_frame_width'],$affiliate_sign_up['affiliate_background'],base64_encode($affiliate_sign_up['affiliate_web_form_code'])]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_data($affiliate_sign_up)
    {
      try
      {
        $sql = "UPDATE `mycompany__websitetools___affiliate_sign_up` SET `language` = ?,`custom_file_title` = ?,`frame_height` = ?,`frame_width` = ?,`background` = ?,`web_form_code` = ?  WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$affiliate_sign_up['affiliate_language'],$affiliate_sign_up['affiliate_custom_title'],$affiliate_sign_up['affiliate_frame_height'],$affiliate_sign_up['affiliate_frame_width'],$affiliate_sign_up['affiliate_background'],base64_encode($affiliate_sign_up['affiliate_web_form_code']),$_SESSION['user_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }

  $affiliate_sign_up_form = new affiliate_sign_up_form($config->DB_CREDENTIALS);
  if(isset($_POST['actions']))
  {
    if($_POST['actions'] == 'put_data')
    {
      if($affiliate_sign_up_form->is_user_exists())
      {
      //  echo "Inside Update Statement";
        $affiliate_sign_up_form->update_data($_POST); 
      }
      else
      {
        // echo "Inside Add Statement";
        $affiliate_sign_up_form->add_data($_POST);
      }
    }
    else
    {
      echo "Inside False POST Request";
    }
  }

  if(isset($_GET['action']))
  {
    if($_GET['action'] == 'get_data')
    {
      echo json_encode($affiliate_sign_up_form->get_data());
    }
  }
?>