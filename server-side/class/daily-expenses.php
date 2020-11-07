<?php
session_start();
require '../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
class daily_expenses extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }

  function is_data_exists($date)
  {
    try
    {
      $sql = "SELECT * FROM `educate__daily_expenses` WHERE `date` = ? AND `client_id` = ?";
      $stmt = $this->conn->prepare($sql);
      return ($stmt->execute([$date,$_SESSION['c_id']]) && $stmt->rowCount() == 1);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_daily_expenses($details,$date)
  {
    try
    {
      $sql = "UPDATE `educate__daily_expenses` SET `daily_expenses` = ?, `total` = ? WHERE `client_id` = ? AND `date` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$details['daily_expenses'],$details['total'],$_SESSION['c_id'], $date]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
  
  function insert_daily_expenses($details)
  {
    try
    {
      $sql = "INSERT INTO `educate__daily_expenses`(`client_id`, `date`, `daily_expenses`,`total`) VALUES (?,?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'], $details['date'], $details['daily_expenses'], $details['total']]); 
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_daily_expenses($date)
  {
    try
    {
      $sql = "SELECT `daily_expenses`, `total` FROM `educate__daily_expenses` WHERE `client_id` = ? AND `date` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'], $date]);
      if($stmt->rowCount() == 1)
      {
        // echo "working";
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      else
      {
        // echo "Working";
      }
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}
$daily_expenses = new daily_expenses($config->DB_CREDENTIALS);
if(isset($_POST) && !empty($_POST))
{
  $details = $_POST;
  if($daily_expenses->is_data_exists($details['date']))
  {
    $daily_expenses->update_daily_expenses($details,$details['date']);
  }
  else
  {
    $daily_expenses->insert_daily_expenses($details);    
  }
}
if(isset($_GET['date']))
{
  $data = $daily_expenses->get_daily_expenses($_GET['date']);
  echo json_encode($data);
}

?>