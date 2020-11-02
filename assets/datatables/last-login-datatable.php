<?php
session_start();
include '../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
class last_login_datatable extends dbconnect
{
 function __construct($db_config)
 {
   parent :: __construct($db_config);
 } 
 
 function get_data($user_id)
 {
   $sql = "SELECT users.email,`ip_address`,`access_type`,`date_login`,`date_logout`,`location` FROM `last_login`,`users` WHERE users.user_id = ? AND last_login.user_id = ?";
   $stmt = $this->conn->prepare($sql);
   if($stmt->execute([$user_id,$user_id]))
   {
      $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode(array('data' => $details));
   }   
   else
   {
     echo "Query Failed";
   }
 } 
}
$last_login = new last_login_datatable($db_config);
$last_login->get_data($_SESSION['user_id']);
?>