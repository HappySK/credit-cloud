<?php 
session_start();
require 'dbconnect.php';
switch($_GET['action'])
{
    case 'register' : if(isset($_POST))
                        {                   
                            $user = $_POST;
                            if(!empty($user))
                            {
                                if(!($dbconnect->is_email_exists($user['email'])))
                                {
                                  $dbconnect->insert_user_details($user);
                                  $dbconnect->assign_session_id($user['email']);
                                }
                                else
                                {
                                  $status = array(
                                    'mode' => 'register',
                                    'status' => 'failure',
                                    'message' => 'Email Exists'
                                  );
                                  echo json_encode($status);
                                }   
                            }
                            else
                            {
                              echo "Empty";
                            }
                        }
                        else
                        {
                          echo "not set";
                        }
                      break;
    case 'login' : if(isset($_POST))
                        {
                          $user = $_POST;
                          if(!empty($user))
                          {
                            if($dbconnect->is_email_exists($user['email']))
                            {
                              $dbconnect->login($user);
                            }
                            else
                            {
                              $status = array(
                                'mode' => 'login',
                                'message' => 'Email ID doesnot exist'
                              );
                              echo json_encode($status);
                            }
                          }
                        }
                      break;
    default:echo "Invalid Request"; 
}
?>