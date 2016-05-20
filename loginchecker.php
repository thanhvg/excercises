<<?php
require_once("AgentStatus.class");

if (!isset($_POST["userid"])) {
  header("Location: login.php");
}

$agentStatus = new AgentStatus();
if ($agentStatus->isLoggedIn)
header("Location: index.php");

if ($agentStatus->authenticate($_POST['userid'], $_POST['password'])) {
  header("Location: day10.php");
} else {
  $_SESSION['error'] = "Login failed. Please try again";
  header("Location: login.php");
}
