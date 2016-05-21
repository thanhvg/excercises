<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- Login and logout agent -->

<?php
require_once("AgentStatus.class");
$agentStatus = new AgentStatus();

if ($agentStatus->isLoggedIn) { // if agent already logged in, this will log him out
  $agentStatus->logout();}

  if (isset($_SESSION['error'])) { // check if there was error from the previous attempt
    $error = $_SESSION['error'];  // if yess print it out
  } else {
    $error = "";
  }
  $_SESSION['error'] =""; // reset error
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
        <form method="post" action="loginchecker.php" method="post" class="formclass">
          <div class="row">
            <div class="col-5">
              <label >Agent Management Username</label>
            </div>
            <div class="col-7">
              <input type="text" name="userid" />
            </div>
          </div>

          <div class="row">
            <div class="col-5">
              <label>Password</label>
            </div>
            <div class="col-7">
              <input type="password" name="password"/>
            </div>
          </div>

          <div class="row">
            <div class="col-5">
            </div>
            <div class="col-7">
              <input type="submit" value="Log In" />
            </div>
          </div>
          
        </form>
        <p style="color:red;">
          <?php print($error); ?>
          <!-- this shows error -->
        </p>

        <p>
          Try the following usernames and passwords:
        </p>
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



      </div>
    </div>

    <div class="footer">
      <?php include("footer.inc.php"); ?>
    </div>


  </body>
  </html>
