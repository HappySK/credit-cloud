<?php
include CLASS_PATH.'/dbconnect.php';
class user extends dbconnect
{
  function __construct($db_config)
  {
    parent::__construct($db_config);
  }
  
  //generate a username from Full name
  function generate_username($string_name="Mike Tyson", $rand_no = 200){
  $username_parts = array_filter(explode(" ", strtolower($string_name))); //explode and lowercase name
  $username_parts = array_slice($username_parts, 0, 2); //return only first two arry part

  $part1 = (!empty($username_parts[0]))?substr($username_parts[0], 0,8):""; //cut first name to 8 letters
  $part2 = (!empty($username_parts[1]))?substr($username_parts[1], 0,5):""; //cut second name to 5 letters
  $part3 = ($rand_no)?rand(0, $rand_no):"";

  $username = $part1. str_shuffle($part2). $part3; //str_shuffle to randomly shuffle all characters
  return $username;
}

function get_random_user_id()
{
  $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  return substr(str_shuffle($permitted_chars), 0, 5);
}
//usage
// echo generate_username("Mike Tyson", 10);
function insert_user_details($user)
{
  $user_id = $this->get_random_user_id();
  $username = $this->generate_username($user['fname'].$user['lname'],10);
  $sql1 = "INSERT INTO `users`(`user_id`,`first_name`, `last_name`, `email`,`password`,`username`) VALUES (?,?,?,?,?,?)";
  $stmt1 = $this->conn->prepare($sql1);
  $sql2 = "INSERT INTO `user_details`(`user_id`, `address_line_1`, `address_line_2`, `state`, `country`) VALUES
  (?,?,?,?,?)";
  $stmt2 = $this->conn->prepare($sql2);
  if($stmt1->execute([$user_id,$user['fname'],$user['lname'],$user['email'],md5($user['password']),$username]) &&
  $stmt2->execute([$user_id,$user['address1'],$user['address2'],$user['state'],$user['country']]))
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
}

$user = new user($db_config);
?>