<!DOCTYPE html>
<html>
<head>
<?php include("head.inc.php"); ?>
<style media="screen">
  body {
    background-image: url(img/background.jpg);
    background-size: cover;
  }
</style>
<title>Thanh's Assignments</title>
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
<h1>Welcome</h1>
<p>Some images</p>
<div class="row">
  <div class="col-4">
    <img src="img/comalcalco.png" alt="p1" style="width:100%" />
  </div>
  <div class="col-4">
<img src="img/palenque.png" alt="p1" style="width:100%;"/>
  </div>
  <div class="col-4">
<img src="img/tulum.png" alt="p1" style="width:100%" />
  </div>
</div>


<div class="row">
  <p>Links</p>
  <div class="col-6" align="center">
    <a href="contact.html" > <img class="linkHover" src="img/label_Contact_us.gif"/> </a>
  </div>
  <div class="col-6" align="center">
  <a href="register.html" > <img class="linkHover" src="img/label_customer_member_regis.gif"/> </a>
  </div>

</div>
</div>
</div>

<div class="footer">
  <?php include("footer.inc.php"); ?>

</div>


</body>
</html>