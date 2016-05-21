<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016 -->
<!-- Menu, left side bar -->
<?php
// this determine if log in or log out will be the name for the login.php
$linkname = "Agent Login";
require_once("AgentStatus.class");
$agentStatus = new AgentStatus();
if ($agentStatus->isLoggedIn) {
  $linkname = "Agent Logout";
}
?>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="register.php">Register</a></li>
  <li><a href="form.php">Form</a></li>
  <li><a href="day4.php">Day 4 Javascript</a></li>
  <li><a href="day5.php">Day 5 Javascript</a></li>
  <li><a href="day6.php">Day 6 Javascript</a></li>
  <li><a href="day7.php">Day 7 Javascript</a></li>
  <li><a href="links.php">Links (day 8 and 9)</a></li>
  <li><a href="day10.php">Angent entry</a></li>
  <li><a href="login.php"><?php print($linkname); ?></a></li>
</ul>
