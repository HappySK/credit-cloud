<?php 
class dbconnect
{
  private $conn = null;
  function __construct()
  {
    try
    {
      $this->conn = new pdo('mysql:host=localhost;dbname=credit;charset=utf8','root','');
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }
function insert_user_details($user)
{
  $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`,`password`, `address_line_1`, `address_line_2`, `state`, `country`) VALUES (?,?,?,?,?,?,?,?)";
  $stmt = $this->conn->prepare($sql);
  if($stmt->execute([$user['fname'],$user['lname'],$user['email'],md5($user['password']), $user['address1'],$user['address2'],$user['state'],$user['country']]))
  {
    $status = array(
      'mode' => 'register',
      'status' => 'success',
      'message' => 'Query Executed'
    );
    echo json_encode($status);
  }
  else
  {
    $status = array(
      'mode' => 'register',
      'status' => 'failure',
      'message' => 'Query Not Executed'
    );
    echo json_encode($status);
  }
}

function is_credentials_correct($user)
{
  $sql = "SELECT * FROM `users` WHERE `email` = ? AND `password` = ?";
  $stmt = $this->conn->prepare($sql);
  return ($stmt->execute([$user['email'],md5($user['password'])]) && $stmt->rowCount() == 1);
}

function assign_session_id($email)
{
 if($this->is_email_exists($email))
 {
    $user_details = $this->get_user_details($email);
    $_SESSION['id'] = $user_details->s_no;
 }
 else
 {
  $status = array(
    'mode' => 'login',
    'status' => 'failure'
  );
  echo json_encode($status);
 }
}

function get_user_details($email)
{
  $sql = "SELECT * FROM `users` WHERE `email` = ?";
  $stmt = $this->conn->prepare($sql);
  return ($stmt->execute([$email]) && $stmt->rowCount() == 1) ? $stmt->fetchObject() : null;
}

function get_data($id)
{
  $sql = "SELECT * FROM `users` WHERE `s_no` = ?";
  $stmt = $this->conn->prepare($sql);
  if($stmt->execute([$id]) && $stmt->rowCount() == 1)
  {
    return $stmt->fetchObject();
  }
}

function is_email_exists($email)
{
  $sql = "SELECT * FROM `users` WHERE `email` = ?";
  $stmt = $this->conn->prepare($sql);
  return ($stmt->execute([$email]) && $stmt->rowCount() == 1);
}

function login($user)
{
    if($this->is_credentials_correct($user))
    {
      $this->assign_session_id($user['email']);
      $status = array(
        'mode' => 'login',
        'status' => 'success'
      );
      echo json_encode($status);
    }
    else
    {
      if($this->is_email_exists($user['email']))
      {
        $status = array(
          'status' => 'failure',
          'message' => 'Invalid Password'
        );
        echo json_encode($status);
      }
    }
}

  function __destruct()
  {
    $conn = null;
  }
}
$dbconnect = new dbconnect();
?>