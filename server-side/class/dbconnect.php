<?php 
class dbconnect
{
  public $conn = null;
  public function __construct()
  {
    try
    {
      $this->conn = new pdo('mysql:host=localhost;dbname=sowlyehg_credit;charset=utf8','sowlyehg_sravan','g4}[#V;9}G1s');
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