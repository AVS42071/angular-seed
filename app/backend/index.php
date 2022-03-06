 <?php
  include_once 'dbconnect.php';
  include_once 'commands.php';
  $userid = $_GET["userid"];
  $position = $_GET["position"];
  $object = new User();
  echo $object->getUsersWithCountCheck($userid, $position);
?>