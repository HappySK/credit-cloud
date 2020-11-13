<?php
  require '../../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  session_start();
  class company_profile extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function add_company_profile()
    {
      try
      {
        $sql = "";
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
  }
?>