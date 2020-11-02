<?php
session_start();
if(isset($_SESSION['id']))
{
  if(!empty($_SESSION['id']))
  {
    require '../config/config.php';
    require CLASS_PATH.'/user.php';
    $user->update_login_activity($_SESSION['user_id']);
    session_unset();
    header('Location:sign-in');
  }
}
?>