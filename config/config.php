<?php 
  $config = json_decode(file_get_contents('config.json',true));
  defined('TITLE') || define('TITLE',$config->APPLICATION_CREDENTIALS->TITLE);
  defined('LINK') || define('LINK', $config->APPLICATION_CREDENTIALS->LINK);
  defined('MAIN_PATH') || define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT'].$config->APPLICATION_PATH->MAIN_PATH);
  defined('ASSETS_PATH') || define('ASSETS_PATH', $_SERVER['DOCUMENT_ROOT'].$config->APPLICATION_PATH->ASSETS_PATH);
  defined('CLASS_PATH') || define('CLASS_PATH', $_SERVER['DOCUMENT_ROOT'].$config->APPLICATION_PATH->CLASS_PATH);
?>