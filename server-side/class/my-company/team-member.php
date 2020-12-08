<?php
  require '../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  session_start();
  class team_member extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function get_random_user_id()
    {
      $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      return substr(str_shuffle($permitted_chars), 0, 5);
    }

    function is_team_member_exists($user_name)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__team_members` WHERE `user_name` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$user_name]);
        return ($stmt->rowCount() == 1) ? true : false;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_team_member($member,$img_content)
    {
      try
      {
        $sql = "UPDATE `mycompany__team_members` SET `first_name` = ?,`user_name` = ?,`last_name`= ? ,`password` = ?,`gender` = ?,`send_login_information` = ?,`email` = ?,`system_generated_password` = ?,`phone` = ?,`ext` = ?,`mobile` = ?,`fax` = ?,`title` = ?,`address` = ?,`role`= ? ,`photo_file`= ?  WHERE `user_name` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$member['first_name'],$member['user_name'],$member['last_name'],md5($member['password']),$member['gender'],$member['login_info'],$member['member_email'],$member['system_generated_password'],$member['phone'],$member['ext'],$member['mobile'],$member['fax'],$member['title'],$member['member_address'],$member['select_role'],$img_content,$member['user_name']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
    
    function add_team_member($member,$img_content)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__team_members`(`user_id`,`team_member_id`,`first_name`, `user_name`, `last_name`, `password`, `gender`, `send_login_information`, `email`, `system_generated_password`, `phone`, `ext`, `mobile`, `fax`, `title`, `address`, `role`, `photo_file`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],'MBR-'.$this->get_random_user_id(),$member['first_name'],$member['user_name'],$member['last_name'],md5($member['password']),$member['gender'],$member['login_info'],$member['member_email'],$member['system_generated_password'],$member['phone'],$member['ext'],$member['mobile'],$member['fax'],$member['title'],$member['member_address'],$member['select_role'],$img_content]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_team_member($team_member_id)
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__team_members` WHERE `user_id` = ? AND `team_member_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$team_member_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function delete_team_member($team_member_id)
    {
      try
      {
        $sql = "DELETE FROM `mycompany__team_members` WHERE `team_member_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$team_member_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_team_members()
    {
      try
      {
        $sql = "SELECT `team_member_id`, CONCAT(`first_name`,' ',`last_name`) as team_member_name FROM `mycompany__team_members` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }
  
  $team_member = new team_member($config->DB_CREDENTIALS);
  // For Inserting and Updating the team_member details
  if(isset($_POST['user_name']))
  {
    $member = $_POST;
    $image = addslashes($_FILES['photo_file']['tmp_name']);
    $name = addslashes($_FILES['photo_file']['name']);
    $image = file_get_contents($image);
    $image = base64_encode($image);
    if($team_member->is_team_member_exists($_POST['user_name']))
    {
      $team_member->update_team_member($member,$image);
    }
    else
    {
      $team_member->add_team_member($member,$image);     
    }
    header('Location:../../../my-company/my-team-members');
  }

  // For getting the team_member details using team_member_id
  if(isset($_GET['action']) && isset($_GET['team_member_id']))
  {
    if($_GET['action'] == 'get_team_member')
    {
      echo json_encode($team_member->get_team_member($_GET['team_member_id']));
    }
  }

  // For getting team-members of the particular user for my-schedule page
  if(isset($_GET['action']))
  {
    if($_GET['action'] == 'get_team_members')
    {
      echo json_encode($team_member->get_team_members());
    }
  }

  // For deleting the team_member
  if(isset($_POST['action']))
  {
    if($_POST['action'] == 'delete_team_member')
    {
      $team_member->delete_team_member($_POST['team_member_id']);
    }
  }
?>