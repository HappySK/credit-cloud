<?php
require '../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
session_start();
class monthly_expenses extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }

  function insert_monthly_expenses($expenses,$month,$year)
  {
    try
    {
      $sql = "INSERT INTO `educate__monthly_expenses`(`client_id`,`month`,`year`, `auto_fuel`, `auto_insurance`, `auto_maintainence_repairs`, `auto_payment`, `cabel_satellite`, `cell_phone`, `child_support_animoly`, `child_care`, `cigarettes_alcohol`, `clothing`, `credit_card_charge_card`, `dining`, `doctor_prescriptions`, `education_expenses`, `electric_bill`, `entertainment`, `gas_bill`, `gifts`, `groceries_suppliers`, `hobbies_clubs_sports`, `home_maintainence`, `insurance`, `internet_services`, `local_payment`, `newspapers_magazines`, `rent_mortgages_payments`, `taxes`, `telephone`, `work_expenses`, `total`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'],$month,$year,$expenses['auto_fuel'],$expenses['auto_insurance'],$expenses['auto_maintainence_repairs'],$expenses['auto_payment'],$expenses['cable_satellite'],$expenses['cell_phone'],$expenses['child_support_animoly'],$expenses['child_care'],$expenses['cigarettes_alcohol'],$expenses['clothing'],$expenses['credit_card_charge_card'],$expenses['dining'],$expenses['doctor_prescriptions'],$expenses['education_expenses'],$expenses['electric_bill'],$expenses['entertainment'],$expenses['gas_bill'],$expenses['gifts'],$expenses['groceries_suppliers'],$expenses['hobbies_clubs_sports'],$expenses['home_maintainence'],$expenses['insurance'],$expenses['internet_service'],$expenses['local_payment'],$expenses['newspapers_magazines'],$expenses['rent_mortgages_payment'],$expenses['taxes'],$expenses['telephone'],$expenses['work_expenses'],$expenses['total']]);
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
      $sql = "SELECT * FROM `educate__monthly_expenses` WHERE `client_id` = ? AND `month` = ? AND `year` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'], $month, $year]);
      return ($stmt->rowCount() == 1);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function update_monthly_expenses($expenses, $month, $year)
  {
    try
    {
      $sql = "UPDATE `educate__monthly_expenses` SET `auto_fuel`= ? ,`auto_insurance`= ? ,`auto_maintainence_repairs`= ? ,`auto_payment`= ? ,`cabel_satellite`= ? ,`cell_phone`= ? ,`child_support_animoly`= ? ,`child_care`= ? ,`cigarettes_alcohol`= ? ,`clothing`= ? ,`credit_card_charge_card`= ? ,`dining`= ? ,`doctor_prescriptions`= ? ,`education_expenses`= ? ,`electric_bill`= ? ,`entertainment`= ? ,`gas_bill`= ? ,`gifts`= ? ,`groceries_suppliers`= ? ,`hobbies_clubs_sports`= ? ,`home_maintainence`= ? ,`insurance`= ? ,`internet_services`= ? ,`local_payment`= ? ,`newspapers_magazines`= ? ,`rent_mortgages_payments`= ? ,`taxes`= ? ,`telephone`= ? ,`work_expenses`= ? ,`total`= ?  WHERE `client_id` = ? AND `month` = ? AND `year` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$expenses['auto_fuel'],$expenses['auto_insurance'],$expenses['auto_maintainence_repairs'],$expenses['auto_payment'],$expenses['cable_satellite'],$expenses['cell_phone'],$expenses['child_support_animoly'],$expenses['child_care'],$expenses['cigarettes_alcohol'],$expenses['clothing'],$expenses['credit_card_charge_card'],$expenses['dining'],$expenses['doctor_prescriptions'],$expenses['education_expenses'],$expenses['electric_bill'],$expenses['entertainment'],$expenses['gas_bill'],$expenses['gifts'],$expenses['groceries_suppliers'],$expenses['hobbies_clubs_sports'],$expenses['home_maintainence'],$expenses['insurance'],$expenses['internet_service'],$expenses['local_payment'],$expenses['newspapers_magazines'],$expenses['rent_mortgages_payment'],$expenses['taxes'],$expenses['telephone'],$expenses['work_expenses'],$expenses['total'], $_SESSION['c_id'], $month, $year]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }

  function get_monthly_expenses($month,$year)
  {
    try
    {
      $sql = "SELECT * FROM `educate__monthly_expenses` WHERE `client_id` = ? AND `month` = ? AND `year` = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'],$month,$year]);
      if($stmt->rowCount() == 1)
      {
        return $stmt->fetchObject();
      }
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}
$monthly_expenses = new monthly_expenses($config->DB_CREDENTIALS);
if(isset($_POST['monthly_ex']) && isset($_POST['month']) && $_POST['year'])
{
  $expenses = $_POST['monthly_ex'];
  if($monthly_expenses->is_data_exists($_POST['month'], $_POST['year']))
  {
    $monthly_expenses->update_monthly_expenses($expenses,$_POST['month'],$_POST['year']);
  }
  else
  {
    $monthly_expenses->insert_monthly_expenses($expenses,$_POST['month'],$_POST['year']);
  }
}

if(isset($_GET['month']) && isset($_GET['year']))
{
  echo json_encode($monthly_expenses->get_monthly_expenses($_GET['month'],$_GET['year']));
}
?>