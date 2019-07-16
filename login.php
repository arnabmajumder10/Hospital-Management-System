<?php
include('connection.php');
session_start();
if (isset($_POST['submit'])) {
  if (!empty($_POST['role']) && !empty($_POST['userid']) && !empty($_POST['password'])) {
    $role = $_POST['role'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $role = stripslashes($role);
    $userid = stripslashes($userid);
    $password = stripslashes($password);
    $role = mysql_real_escape_string($role);
    $userid = mysql_real_escape_string($userid);
    $password = mysql_real_escape_string($password);
    $query = mysql_query("SELECT * FROM login WHERE role = '$role' AND userid = '$userid' AND password = '$password'", $connection);
    $rows = mysql_num_rows($query);
    if ($rows == 1) {
      $_SESSION['sess_userid'] = $userid;
      $_SESSION['sess_role'] = $role;
    }
    else {
      header("Location: index.php");
    }
    mysql_close($connection);
  }
}
?>
