<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- JS confirm message -->
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-2.2.3.min.js"></script>
  <script src="script.js"> </script>
  <link type="text/css" rel="stylesheet" href="styles.css">
  <style media="screen">

  input, select {
    width: 200px;
    height: 25px;
    //padding: 1px,0px;
  }
  .col-5 {
    text-align: right;
  }

  </style>

</head>
<title>Thanh's Assignments</title>
<body>

  <div class="header">
    <h1> <img src="img/travel.png" alt="logo" /> Travel Experts </h1>
  </div>

  <div class="row">

    <div class="col-3 menu">
      <?php include("menu.inc.php"); ?>
    </div>

    <div class="col-9">
        <h1>Day 4</h1>
      <form action="bouncer.php" id="userForm" method="post">
        <div class="row">
          <div class="col-5">
            <label class="labelForm">First name</label>

          </div>
          <div class="col-7">
            <input name="firstName" type="text" id="inputFirstName">
          </div>
        </div>
        <div class="row">

          <div class="col-5" >
            <label class="labelForm">  Last name</label>

          </div>
          <div class="col-7" >
            <input name="lastName" type="text" id="inputLastName">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">Street</label>
          </div>
          <div class="col-7">
            <input name="street" type="text" id="inputStreet">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">City</label>
          </div>
          <div class="col-7">
            <input name="city" type="text" id="inputCity">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">Province</label>
          </div>
          <div class="col-7">
            <input name="province" type="text" id="inputProvince">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm" >Postal code</label>
          </div>
          <div class="col-7">
            <input name="province" type="text" id="inputPostalCode">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <input type="submit" value="Submit" onclick="return confirm('Are you sure?');" style="display:block; float:right;">
          </div>
          <div class="col-7">
            <input type="reset" value="Reset" onclick="return confirm('Are you sure?');">
          </div>
        </div>
      </form>

    </div>

  </div>

  <div class="footer">
    <p align="center"> &copy2016 Travel Experts </p

    </div>


  </body>
  </html>
