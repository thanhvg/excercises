<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- validate form in da10.php then insert in sql table -->
<?php
include("functions.php");
include("agent.class");

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
  $values = array_values($_REQUEST);
  $agent = new Agent($values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6]);
    if (addAgentI($agent))  {
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
