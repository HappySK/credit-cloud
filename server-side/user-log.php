<?php 
session_start();
require '../config/config.php';
require CLASS_PATH.'/user.php';
switch($_GET['action'])
{
    case 'register' : if(isset($_POST))
                        {                   
                            $user_data = $_POST;
                            if(!empty($user_data))
                            {
                                if(!($user->is_email_exists($user_data['email'])))
                                {
                                  $user->insert_user_details($user_data);
                                  $user->assign_session($user_data['email']);
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
                          $user_data = $_POST;
                          if(!empty($user_data))
                          {
                            if($user->is_email_exists($user_data['email']))
                            {
                              $user->login($user_data);
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