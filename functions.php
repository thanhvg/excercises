<?php

function greeting()
{
  $hour = date("G");
  if (($hour>=0) && ($hour<12))
  {
    return "Good Morning";
  }
  elseif ($hour < 18)
  {
    return "Good Afternoon";
  }
  else
  {
    return "Good Evening";
  }
}

function csswriter() {
  $hour = date("G");
  if (($hour>=0) && ($hour<12))
  {
    return "bodystyle-day.css";
  }
  elseif ($hour < 18)
  {
    return "bodystyle-night.css";
  }
  else
  {
    return "bodystyle-day.css";
  }

}

function connectdb()
{
  $conn = mysqli_connect("localhost", "root", "", "travelexperts");
  if (mysqli_connect_errno())
  {
    print(mysqli_connect_error());
    exit;
  }
  return $conn;
}

function addAgent($agent)
{
  $values = array_values($agent);
  //connect to db
  $myconn = connectdb();

  //transfer data to sql string

  $sql = "INSERT INTO `agents` (`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?, ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_prepare($myconn, $sql);
  mysqli_stmt_bind_param($stmt, "sssissi", $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6]);

  //send query to db
  $result = mysqli_stmt_execute($stmt);

  //close connection
  mysqli_close($myconn);

  //check results
  if ($result)  {
    $msg ="SUCCESSED: ".$sql;
    writelog("log.txt",$msg);
    return true;
  }  else  {
    $msg ="FAILED: ".$sql;
    writelog($file,$msg);
    return false;
  }

}

function writelog($file, $msg) {
  $fh = fopen($file, "a");
  $msg = date("F j, Y, g:i a")." ".$msg."\n";
  fwrite($fh, $msg);
  fclose($fh);

}

?>
