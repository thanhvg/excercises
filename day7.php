<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-2.2.3.min.js"></script>
  <script src="script.js"> </script>
  <script type="text/javascript">
  var imgArray = new Array();
  imgArray[0] = new Image();
  imgArray[0].src = "img/google.png";
  imgArray[1] = new Image();
  imgArray[1].src = "img/nyt.png";
  imgArray[2] = new Image();
  imgArray[2].src = "img/cbc.png";

  var urlArray = ["http://goolge.com", "http://nyt.com","http://cbc.ca"];

  var mywin;
  function showPage(idx)
  {
    mywin = window.open(urlArray[idx]);
    setTimeout(function (){ mywin.close(); }, 5000);
  }

  </script>
  <link type="text/css" rel="stylesheet" href="styles.css">
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
      <h1>Day 7</h1>
      <script>

      for (i=0; i<imgArray.length; i++)
      {

        document.write("<img src='" + imgArray[i].src + "' onclick='showPage(" + i + ")'/><br />");
      }
      </script>
    </div>
  </div>

  <div class="footer">
    <p align="center"> &copy2016 Travel Experts </p
    </div>
  </body>
  </html>
