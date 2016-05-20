<?php
include("functions.php");

function validate()
{
  foreach ($_REQUEST as $key => $value) {
    if (trim($value) =='') {
      print($key);
      return false;
    }
    # code...
  }
  //TODO emmail check
  return true;
}

if (isset($_REQUEST["AgtFirstName"])) {
  if (validate())  {
    if (addAgent($_REQUEST))  {
      header("Location: day10.php");
    } else  {
      //pass a fail message and reload form page
      print("fail");

    }
  }  else  {
    //pass an invalid form data message and reload form page
  print("invalid data");

  }
} else {
  print("no data or invalid data");
}

?>
