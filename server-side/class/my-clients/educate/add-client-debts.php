<?php
  require '../../../../config/config.php';
  require CLASS_PATH.'/dbconnect.php';
  session_start();
  class add_client_debts extends dbconnect
  {
    function __construct($config)
    {
      parent :: __construct($config);
    }

    function insert_client_debts($month,$year,$credit_ac,$total_limit,$total_balance,$total_ratio)
    {
      try
      {
        $sql = "INSERT INTO `educate__clients_outstanding_debts`(`client_id`, `month`, `year`, `clients_credit_accounts`, `total_limit`, `total_balance`, `total_ratio`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['c_id'],$month,$year,json_encode($credit_ac),$total_limit,$total_balance,$total_ratio]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

    function is_data_exists($month,$year)
    {
      try
      {
        $sql = "SELECT * FROM `educate__clients_outstanding_debts` WHERE `client_id` = ? AND `month` = ? AND `year` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$_SESSION['c_id'],$month,$year]);
        return ($stmt->rowCount() == 1);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }
    
    function update_client_debts($month,$year,$credit_ac,$total_limit,$total_balance,$total_ratio)
    {
      try
      {
        $sql = "UPDATE `educate__clients_outstanding_debts` SET `clients_credit_accounts`= ? ,`total_limit`= ? ,`total_balance`= ? ,`total_ratio`= ?  WHERE `client_id` = ? AND `month` = ? AND `year` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$credit_ac,$total_limit,$total_balance,$total_ratio,$_SESSION['c_id'],$month,$year]);
      }
      catch(SQLException $e)
      {
        echo $e->getMessage();
      }
    }

  }
  
  $client_debts = new add_client_debts($config->DB_CREDENTIALS);
  if(isset($_POST))
  {
    if($client_debts->is_data_exists($_POST['month'],$_POST['year']))
    {
      $client_debts->update_client_debts($_POST['month'],$_POST['year'],json_encode($_POST['credit_ac']),$_POST['total_limit'],$_POST['total_balance'],$_POST['total_ratio']);
    }
    else
    {
      $client_debts->insert_client_debts($_POST['month'],$_POST['year'],$_POST['credit_ac'],$_POST['total_limit'],$_POST['total_balance'],$_POST['total_ratio']);
    }
  }
?>