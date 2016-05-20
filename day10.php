<?php
require_once("AgentStatus.class");
$agentStatus = new AgentStatus();
if (!$agentStatus->isLoggedIn)
header("Location: login.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<?php include("head.inc.php"); ?>
</head>

<body>

<div class="header">
  <?php include("header.inc.php"); ?>
</div>

<div class="row">

<div class="col-3 menu">
<?php include("menu.inc.php"); ?>
</div>

<div class="col-9">
<h1>Day 10</h1>
<?php
include("agententry.php");
 ?>
</div>
</div>

<div class="footer">
<?php include("footer.inc.php"); ?>
</div>


</body>
</html>
