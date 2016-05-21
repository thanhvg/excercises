<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- Modular design, includes header.inc.php , menu.inc.php and footer.inc.php -->

<?php
include('functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<?php include("head.inc.php"); ?>
<link type="text/css" rel="stylesheet" href="<?php print(csswriter()); ?>">
<title>Thanh's Assignments</title>

</head>
<body>

<div class="header">
<?php include("header.inc.php"); ?>
<h2 align="center"><?php print(greeting()); ?></h2>
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
