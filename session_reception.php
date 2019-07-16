<?php
include('connection.php');
session_start();
$userid_check = $_SESSION['sess_userid'];
//$userid_role_check = $_SESSION['sess_role'];
$userid_role_check = 'reception';
$query = mysql_query("SELECT userid FROM login WHERE userid = '$userid_check' AND role = '$userid_role_check'", $connection);
$rows = mysql_fetch_assoc($query);
$logged_userid = $rows['userid'];
if (!isset($logged_userid)) {
  mysql_close('connection.php');
  header('Location: index.php');
}
?>
