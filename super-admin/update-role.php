<?php
  if(isset($_POST) && !empty($_POST))
  {
    require '../server-side/class/dbconnect.php';
    require '../server-side/class/super-admin.php';
    $admin->update_role($_POST['select-role'],$_POST['select-user']);
    header('Location:super-admin-dashboard');
  }
?>