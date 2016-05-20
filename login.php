
<?php
require_once("AgentStatus.class");
$agentStatus = new AgentStatus();
if ($agentStatus->isLoggedIn)
// header("Location: index.php");
$agentStatus->logout();
//header("Location: index.php");

if (isset($_SESSION['error']))
$error = $_SESSION['error'];
else
$error = "";
$_SESSION['error'] ="";
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
<h1>Agent Login</h1>
<form method="post" action="loginchecker.php" method="post">
      UserId:<input type="text" name="userid" /><br />
	  Password:<input type="password" name="password" /><br />
	  <input type="submit" value="Log In" />
</form>
<p style="color:red;">
  <?php print($error); ?>
</p>

<p>
  try the following
  <table border="1">
    <tr>
      <td>
        user1
      </td>
      <td>
        pass1
      </td>
    </tr>
    <tr>
      <td>
        user2
      </td>
      <td>
        pass2
      </td>
    </tr>
    <tr>
      <td>
        user3
      </td>
      <td>
        pass3
      </td>
    </tr>
  </table>
</p>


</div>
</div>

<div class="footer">
<?php include("footer.inc.php"); ?>
</div>


</body>
</html>
