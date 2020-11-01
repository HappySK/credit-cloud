<?php 
  defined('TITLE') || define('TITLE',$_SERVER['SERVER_NAME']);
  defined('LINK') || define('LINK', $_SERVER['DOCUMENT_ROOT']);
  defined('MAIN_PATH') || define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT'].'/credit');
  defined('ASSETS_PATH') || define('ASSETS_PATH', MAIN_PATH.'/assets');
  defined('MY_CLIENTS_PATH') || define('MY_CLIENTS_PATH', MAIN_PATH.'/my-clients');
  defined('SERVER_SIDE_PATH') || define('SERVER_SIDE_PATH', MAIN_PATH.'/server-side');
  defined('CLASS_PATH') || define('CLASS_PATH', SERVER_SIDE_PATH.'/class');
?>