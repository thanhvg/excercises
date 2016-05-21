<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- Manages the loing for the login.php   -->

<?php
require_once("AgentStatus.class");

if (!isset($_POST["userid"])) {
  header("Location: login.php");
}

$agentStatus = new AgentStatus(); // this object manages the authenticattion
if ($agentStatus->isLoggedIn)
header("Location: index.php");

if ($agentStatus->authenticate($_POST['userid'], $_POST['password'])) { //verify and Logging and sesssion stuff
  header("Location: day10.php");
} else {
  $_SESSION['error'] = "Login failed. Please try again";
  header("Location: login.php");
}
?>
