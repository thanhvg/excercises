<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- JS stuff -->
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-2.2.3.min.js"></script>
  <script src="script.js"> </script>
  <link type="text/css" rel="stylesheet" href="styles.css">


  <script>
     var imgArray = ["img/tulum.png","img/spongebob.png","img/sangervasio.png"];
   var descArray = ["Main palace at Tulum","SpongeBob at Universal Studios","Pyramid at San Gervasio"];

   function fungus(index)
   {
      var myimg = document.getElementById("mainimage");
    myimg.src = imgArray[index];
   }

  </script>

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
        <h1>Day 5</h1>
        <table>
  	  <script>

  		 for (i=0; i<imgArray.length; i++)
  		 {
  		    document.write("<tr>");
  			document.write("<td><img src='" + imgArray[i] + "' /></td>");
  			document.write("<td>" + descArray[i] + "</td>");
  		    document.write("</tr>");
  		 }
  	  </script>
  	  </table>

  	  <div>
  	     <script>
  		    for (i=0; i<descArray.length; i++)
  			{
  			   document.write("<p onmouseover='fungus(" + i + ")'>");
  			   document.write(descArray[i]);
  			   document.write("</p>");
  			}
  		 </script>
  	  </div>
  	  <img id="mainimage" src="" />

    </div>

  </div>

  <div class="footer">
    <p align="center"> &copy2016 Travel Experts </p

    </div>


  </body>
  </html>
