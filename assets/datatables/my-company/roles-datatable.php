<?php
  session_start();
  require '../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  class roles_datatable extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function get_roles()
    {
      try
      {

      }
      catch(SQLException $e)
      { 
        echo $e->getMessage();
      }
    }
  }
?>