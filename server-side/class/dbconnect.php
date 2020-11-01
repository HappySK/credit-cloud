<?php 
$db_config = json_decode(file_get_contents(MAIN_PATH.'/config/db_config.json'));
class dbconnect
{
  private $db_host; 
  private $db_name;
  private $db_user;
  private $db_password;
  public $conn = null;
  
  public function __construct($db_config)
  {
    try
    {
      $db_host = $db_config->DB_HOST;
      $db_user = $db_config->DB_USER;
      $db_password = $db_config->DB_PASSWORD;
      $db_name = $db_config->DB_NAME;
      $this->conn = new pdo('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',$db_user,$db_password);
      // echo "DB Connected";
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function __destruct()
  {
    $conn = null;
  }
}
?>