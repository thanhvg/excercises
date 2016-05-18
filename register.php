<!DOCTYPE html>
<html>
<head>
  <?php include("head.inc.php"); ?>
  <style media="screen">
  label {
    padding: 5px;
    margin-top: 10px;
    width: 20%;
    display: inline-block;
  }
  </style>
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
      <h1>Register</h1>
      <form action="bouncer.php">
    <fieldset>
      <legend> This one use GET </legend>
      <label> First name: </label> <input type="text" name="firstName" /> <br />
        <label> Last name: </label> <input type="text" name="lastName" /> <br />
    <label>   Age: </label> <input type="number" name="age" />
      <br />
      <input type="radio" name="gender" value="male" class="male" checked> Male<br>
      <input type="radio" name="gender" value="female" id="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other <br/>
      <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
      <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car
      <br />
      <br />

      Country: <br />
      <select name="country">
        <option value="" selected> Country </option>
        <option value="CA"> Canada </option>
        <option value="US"> America </option>
        <option value="Mexico"> Mexico </option>
      </select>

      <br/>
      <br/>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset" />
    </fieldset>
  </form>
  <br />
  <br />
  <form method="post" action="bouncer.php">
    <fieldset>
      <legend> This one use POST </legend>
      <label> Username: </label>  <input type="text" name="userName" /> <br />
    <label>   Password: </label>       <input type="password" name="password" /> <br/>
      <br />
      <br />
      <input type="submit" value="Submit" />
      <input type="reset" value="Reset" />
    </fieldset>
  </form>

    </div>
  </div>

  <div class="footer">
    <?php include("footer.inc.php"); ?>

    </div>


  </body>
  </html>
