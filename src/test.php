<form action="test.php" method="POST">
  <ul name="assignedBy">
    <li>
      <input type="checkbox" name="list" id="1" value="Veronica">
    </li>
    <li>
      <input type="checkbox" name="list" id="1" value="Hermione">
    </li>
    <li>
      <input type="checkbox" name="list" id="1" value="Hermosa">
    </li>
    <li>
      <input type="checkbox" name="list" id="1" value="Hiram">
    </li>
  </ul>
  <button type="submit">Submit</button>
</form>
<?php
if(isset($_POST['assignedBy']))
{
  echo $_POST['list'];
}
?>