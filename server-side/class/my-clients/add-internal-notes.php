<?php
require '../../../config/config.php';
require CLASS_PATH.'/dbconnect.php';
session_start();
class add_internal_notes extends dbconnect
{
  function __construct($config)
  {
    parent :: __construct($config);
  }

  function insert_internal_notes($internal_notes_content,$internal_notes_files)
  {
    try
    {
      $sql = "INSERT INTO `add_internal_notes`(`client_id`, `internal_notes_content`, `internal_notes_files`) VALUES (?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$_SESSION['c_id'],$internal_notes_content,$internal_notes_files]);
    }
    catch(SQLException $e)
    {
      echo $e->getMessage();
    }
  }
}

$add_internal_notes = new add_internal_notes($config->DB_CREDENTIALS);
if(isset($_POST))
{
  echo '<pre>';
  print_r($_FILES);
  echo '</pre>';
  $filename = rand(10000,100000).'-'.$_FILES['internal-notes-attachment']['name'];
  move_uploaded_file($_FILES['internal-notes-attachment']['tmp_name'],'../../../assets/internal-notes/'.$filename);
  $add_internal_notes->insert_internal_notes($_POST['internal-notes-editor'],$filename);
}
?>