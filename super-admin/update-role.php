<?php
  if(isset($_POST) && !empty($_POST))
  {
    require '../config/constants.php';
    require CLASS_PATH.'/super-admin.php';
    $admin->update_role($_POST['select-role'],$_POST['select-user']);
    header('Location:super-admin-dashboard');
  }
?>