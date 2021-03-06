<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- JS validation using pure js and jquerry  -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-2.2.3.min.js"></script>
  <script src="script.js"> </script>
  <script type="text/javascript">
  function show(id) {
    document.getElementById(id).style.visibility = 'visible';
  }
  function hide(id) {
    document.getElementById(id).style.visibility='hidden';
  }

  function validate(field) {
   field.value = field.value.toUpperCase();
 var regex = new RegExp(/(^[A-Z]\d[A-Z] ?\d[A-Z]\d$)|(^\d{5}$)/);
 if (!regex.test(field.value))
 {
    alert("Invalid postalcode or zip code format");
    field.focus();

 }
 }

 $(document).ready(function(){
   $('#userForm').keyup(function() {
     validateForm();
   });
   $('#userForm').submit(function(event){
     if (validateForm() == 0)
     $('#userForm').submit();
     else {
       alert("Please correct. Your form is not complete yet");
       event.preventDefault();
     }
   });
 });
 function validateForm() {
   var flag = 0; //error code if other than 0
   var nameReg = /^[A-Za-z]+$/;
   //var numberReg =  /^[0-9]+$/;
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   var postalcodeReg = /(^[A-Z]\d[A-Z] ?\d[A-Z]\d$)|(^\d{5}$)/;

   var firstName = $('#inputFirstName').val();
   var lastName = $('#inputLastName').val();
   var street = $('#inputStreet').val();
   var city = $('#inputCity').val();
   var province = $('#inputProvince').val();
   var postalcode = $('#inputPostalCode').val();
   $('.error').hide();

   var values = new Array(firstName,          lastName,               street,        city,            province,               postalcode);
   var fieds = new Array ('#inputFirstName', '#inputLastName',    '#inputStreet',   '#inputCity',   '#inputProvince',    '#inputPostalCode');
   var msgs = new Array ('first name',         'last name',       'street address',      'city',     'province',      'postal code');

   for (i = 0; i < values.length-1; i++) {
     if (values[i] == "") {
       $(fieds[i]).after('<span class="error"> Please enter your ' + msgs[i] + '</span>');
       flag = 1;
     }

   }

  //  var regex = new RegExp(postalcodeReg);
  //  if (!regex.test(postalcode.toUpperCase()))


   if(!postalcodeReg.test(postalcode.toUpperCase())) {
     $('#inputPostalCode').after('<span class="error"> Please enter a valid postal code </span>');
     flag = 2;
   }
   return flag;


 }

  </script>
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

  p.tooltip {
    position:absolute;
    top:0px;
    left:10px;
    //display:block;
    visibility:hidden;
  }
  .error {
    font-size: xx-small;
    color: green;
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

      <h1>Day 6</h1>

      <div class="row">
        <div class="col-5">

        </div>
        <div class="col-7" style="position:relative">
          <p class="tooltip" id="tFirstName">Enter your first name.</p>
          <p class="tooltip" id="tLastName">Enter your last name.</p>
          <p class="tooltip" id="tStreet">Enter your street address</p>
          <p class="tooltip" id="tCity">Enter your city </p>
          <p class="tooltip" id="tProvince">Enter your province</p>
          <p class="tooltip" id="tPostal">Enter your code postal</p>
        </div>

      </div>



      <form action="bouncer.php" id="userForm" method="post">
        <div class="row">
          <div class="col-5">
            <label class="labelForm">First name</label>
          </div>
          <div class="col-7">
            <input name="firstName" type="text" id="inputFirstName"
            onfocus="show('tFirstName');"
            onblur="hide('tFirstName');"
            >
          </div>
        </div>
        <div class="row">

          <div class="col-5" >
            <label class="labelForm">Last name</label>

          </div>
          <div class="col-7" >
            <input name="lastName" type="text" id="inputLastName"
            onfocus="show('tLastName');"
            onblur="hide('tLastName');">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">Street</label>
          </div>
          <div class="col-7">
            <input name="street" type="text" id="inputStreet"
            onfocus="show('tStreet');"
            onblur="hide('tStreet');">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">City</label>
          </div>
          <div class="col-7">
            <input name="city" type="text" id="inputCity"
            onfocus="show('tCity');" onblur="hide('tCity');">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm">Province</label>
          </div>
          <div class="col-7">
            <input name="province" type="text" id="inputProvince" onfocus="show('tProvince');" onblur="hide('tProvince');">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <label class="labelForm" >Postal code</label>
          </div>
          <div class="col-7">
            <input name="province" type="text" id="inputPostalCode"
            onfocus="show('tPostal');"
            onblur="hide('tPostal');"
            onchange="validate(this);">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <input type="submit" value="Submit"  onclick="return confirm('Are you sure?');" style="display:block; float:right;">
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
