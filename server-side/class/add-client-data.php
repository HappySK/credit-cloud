<?php
require CLASS_PATH.'/dbconnect.php';
session_start();
class clients_list extends dbconnect
{
  function __construct($db_config)
  {
    parent::__construct($db_config);
  }
  
  function get_random_client_id()
  {
    return substr(rand(1,100000),0,5);
  }

  function insert_client($client, $assign)
  {
    if(isset($_client['previousMailingAddress']))
    {
      $previousMailingAddress = $_client['previousMailingAddress'];
    }
    else
    {
      $previousMailingAddress = 0;
    }
    if(isset($_client['billingAddressCheck']))
    {
      $billingAddressCheck = $_client['billingAddressCheck'];
    }
    else
    {
      $billingAddressCheck = 0;
    }
    $sql = "INSERT INTO `clients_list`(`user_id`, `client_id`, `first_name`, `middle_name`, `last_name`, `suffix`, `email`, `ssn`, `dob`, `phone_h`, `phone_w`, `ext`, `phone_m`, `fax`, `mailing_address`, `city`, `state`, `zip_code`, `country`, `previous_mail_address`, `prev_mail_address`, `prev_state`, `prev_city`, `prev_zip_code`, `prev_country`, `status`, `date_of_start`, `assigned_to`, `referred_by`, `portal_access`, `plan`, `card_number`, `cvv`, `expires_on`, `billing_address_check`, `billing_name`, `billing_city`, `billing_state`, `billing_zip`, `billing_address`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$_SESSION['user_id'],$_SESSION['client_id'],$client['firstName'],$client['middleName'],$client['lastName'],$client['suffix'],$client['clientEmail'],$client['ssn'],$client['dateOfBirth'],$client['phoneH'],$client['phoneW'],$client['ext'],$client['phoneM'],$client['fax'],$client['mailingAddress'],$client['clientCity'],$client['clientState'],$client['zipCode'],$client['clientCountry'],$previousMailingAddress,$client['prevMailingAddress'],$client['prevClientState'],$client['prevClientCity'],$client['prevZipCode'],$client['prevClientCountry'],$client['status'],$client['dateOfStart'],$assign,$client['referredBy'],$client['portalAccess'],$client['chargebeePlan'],$client['cardNumber'],$client['CVV'],$client['expiresOn'],$billingAddressCheck,$client['billingName'],$client['billingCity'],$client['billingState'],$client['billingZip'],$client['billingAddress']]);
  }

  function update_login_date()
  {
    try
    {
     $sql = "UPDATE `clients_list` SET `date_login` = ? WHERE `user_id` = ? " ;
     $stmt = $this->conn->prepare($sql);
     $stmt->execute([$this->get_latest_login(),$_SESSION['user_id']]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_latest_login()
  {
   try
   {
     $sql = "SELECT `date_login` FROM `last_login` WHERE `user_id` = ? ORDER BY `date_login` DESC LIMIT 1";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute([$_SESSION['user_id']]);
     $result = $stmt->fetchObject();
     return $result->date_login;
   } 
   catch(SQLException $e)
   {
     $e->getMessage();
   }
  }
}
$clients_list = new clients_list($config->DB_CREDENTIALS);
if(isset($_POST) && !empty($_POST))
{
  $client = $_POST;
  $_SESSION['client_id'] = $clients_list->get_random_client_id();
  if(isset($client['assignedToList']))
  {
    foreach($client['assignedToList'] as $assign){
      $clients_list->insert_client($client, $assign);
    }
  }
  else
  {
    $clients_list->insert_client($client, 0);
  }
  $clients_list->update_login_date();
}
header('Location:../../my-clients/clients-list')
?>