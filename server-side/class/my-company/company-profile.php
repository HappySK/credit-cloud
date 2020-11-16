<?php
  require '../../../config/config.php';
  require_once CLASS_PATH.'/dbconnect.php';
  session_start();
  class company_profile extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function add_company_profile($company_details)
    {
      try
      {
        $sql = "INSERT INTO `mycompany__my_company_profile`(`user_id`, `company_name`, `website_url`, `address`, `city`, `state`, `zip`, `country`, `timezone`, `phone`, `fax`, `sender_name`, `sender_email`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id'],$company_details['company_name'],$company_details['website_url'],$company_details['address'],$company_details['state'],$company_details['city'],$company_details['zip'],$company_details['country'],$company_details['time_zone'],$company_details['fax'],$company_details['sender_name'],$company_details['sender_email'],$company_details['web_url']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function is_company_profile_exists()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__my_company_profile` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return ($stmt->rowCount() == 1) ? true : false;
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function update_company_profile($company_details)
    {
      try
      {
        $sql = "UPDATE `mycompany__my_company_profile` SET `company_name` = ?,`website_url` = ? ,`address` = ?,`city` = ?,`state` = ? ,`zip` = ?,`country` = ?,`timezone` = ?,`phone` = ? ,`fax` = ? ,`sender_name` = ? ,`sender_email` = ?  WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$company_details['company_name'],$company_details['website_url'],$company_details['address'],$company_details['city'],$company_details['state'],$company_details['zip'],$company_details['country'],$company_details['time_zone'],$company_details['phone'],$company_details['fax'],$company_details['sender_name'],$company_details['sender_email'],$_SESSION['user_id']]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function get_company_profile()
    {
      try
      {
        $sql = "SELECT * FROM `mycompany__my_company_profile` WHERE `user_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchObject();
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }
  $company = new company_profile($config->DB_CREDENTIALS);
   if(isset($_POST['company_name']))
   {
     $company_details = $_POST;
     if($company->is_company_profile_exists())
     {
        $company->update_company_profile($company_details);
     } 
     else
     {
        $company->add_company_profile($company_details);
     }
     header('Location:../../../my-company/my-company-profile');    
   }

   if(isset($_GET['action']))
   {
     echo json_encode($company->get_company_profile());
   }
?>