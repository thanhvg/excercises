<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- this page manage isset new agent -->
<!-- This page is authentication protected. User/agent must log in to access this page -->
<!-- the sql command will be logged in file log.txt -->

<?php
require_once("AgentStatus.class");
$agentStatus = new AgentStatus();
if (!$agentStatus->isLoggedIn) // is user logged in
header("Location: login.php"); // if no redirect to login.php
?>
<!DOCTYPE html>
<html>
<head>
  <?php include("head.inc.php"); ?>
  <script>
  function validate()  {
    var regex = new RegExp(/^[a-z0-9_.-]+@([a-z0-9_-]+\.)+[a-z]{2,6}$/i);
    var email = document.getElementById("email");
    if (!regex.test(email.value))    {
      alert("Email address is not formatted properly");
      email.focus();
      return false;
    }
    return true;
  }
  </script>
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
      <h1>Enter Agent Information</h1>
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
