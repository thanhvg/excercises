<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-2.2.3.min.js"></script>
  <script src="script.js"> </script>
  <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<title>Thanh's Assignments</title>
<body>

  <div class="header">
    <h1> <img src="img/travel.png" alt="logo" /> Travel Experts </h1>
  </div>

  <div class="row">

    <div class="col-3 menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="links.php">Links (day 8)</a></li>
        <li><a href="day4.html">Day 4 Javascript</a></li>

        <li>The Food</li>
      </ul>
    </div>

    <div class="col-9">
      <h1>Day 8</h1>
      <table border="1">
        <?php
        for ($i=1; $i<=6; $i++) {
          print("<tr>");
          print("<td>$i</td>");
          print("<td><a href='page$i.php'>Page $i</a></td>");
          print("</tr>");
        }
        ?>
      </table>
      <h1>Day 9 version</h1>
      <table border="1">
        <?php
        include("linkvars.php");
        $index = 1;
        foreach ($linksarray as $url=>$text)
        {
          print("<tr>");
          print("<td>$index</td>");
          $index++;
          print("<td><a href='$url' target='_blank'>$text</a></td>");
          print("</tr>");
        }
        ?>

      </table>
    </div>
  </div>

  <div class="footer">
    <p align="center"> &copy2016 Travel Experts </p

    </div>


  </body>
  </html>
