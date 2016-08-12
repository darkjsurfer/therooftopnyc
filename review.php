<?php 

include("dbCon2.php");

?>


<html>
<head>
	<title>The Roofbar NYC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>

	<nav class="navbar navbar-default nopadding">
  <div class="container-fluid">
<div id="top"></div> <!-- top -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<i class="fa fa-bars" aria-hidden="true"></i>
      </button>


      <a class="navbar-brand active logo" href="index.php">THEROOFTOPNYC</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php#locationmap">Location</a></li>
      <li><a href="index.php#about2">About</a></li>
       <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
       <ul class="dropdown-menu">
          <li><a href="menu.php?view=To%20Eat">To Eat</a></li>
          <li><a href="menu-glass.php?view=Classic%20Cocktails">Classic Cocktails</a></li>
          <li><a href="menu-glass.php?view=House%20Cocktails">House Cocktails</a></li> 
          <li><a href="menu-both.php?view=White">White</a></li> 
          <li><a href="menu-both.php?view=Rose">Rose</a></li> 
          <li><a href="menu-both.php?view=Red">Red</a></li> 
          <li><a href="menu-bottle.php?view=Rum">Rum</a></li> 
          <li><a href="menu-bottle.php?view=Cognac">Cognac</a></li>
          <!--  <li><a href="menu-glass.php?view=Aperestifs & Digestifs">Aperestifs & Digestifs</a></li>  -->
            <li><a href="menu-bottle.php?view=Vodka">Vodka</a></li>
             <li><a href="menu-bottle.php?view=Gin">Gin</a></li>
              <li><a href="menu-both.php?view=Sparkling">Sparkling</a></li>
               <li><a href="menu-bottle.php?view=Beer">Beer</a></li>
                <li><a href="menu-bottle.php?view=Bottle%20Water">Bottle Water</a></li>
                 <li><a href="menu-bottle.php?view=Tequila">Tequila</a></li>
                 <!--  <li><a href="menu-bottle.php?view=Bouron%20&%20Rye">Bouron & Rye</a></li>  -->
        </ul>
        </li>
      <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#">Order</a></li>
       <li><a href="review.php">Review</a></li>
      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></li> </a>
    </ul>
  </div>
</div>
</nav>

<div class="row">
  <div class="col-md-12">

    <div class="col-md-1"></div> <!-- col-md-2 -->

        <div class="col-md-5">
  
         <form class="contactform" id="contact_form" action="ProcessData.php" method="Post"enctype="multipart/form-data">
       <div class="row2">
             <label for="fname" class="nombre">First Name:</label><br/>
             <input id="fname" class="input" name="visitor_Name" type="text" value="" size="30"/><br/>
       </div>
              <div class="row2">
              <label for="lname" class="apellido">Last Name:</label><br/>
              <input id="lname" class="input" name="visitor_Lname" type="text" value="" size="30"/><br/>
       </div>
       <div class="row2">
              <label for="email" class="carta">Email:</label><br/>
              <input id="email" class="input" name="visitor_Email" type="text" value="" size="30"/><br/>
       </div>
              <div class="row2">
              <label for="pnumber" class="numero">Phone Number:</label><br/>
              <input id="pnumber" class="input" name="visitor_Pnumber" type="text" value="" size="30"/><br/>
       </div>
       <div class="row2">
              <label for="message" class="mensaje">Message:</label><br/>
              <textarea id="message" class="input2" name="visitor_Message" rows="7" cols="30"></textarea><br/>
        </div>

        <div class="row2">
        <input id="submit_button" type="submit" value="Send Email"/>
      </div>
  </form>

</div> <!-- col-md-2-->
    <div class="col-md-5">

      <div class="yelp">

      <div id="yelpwidget"></div>

    </div> <!-- yelp -->

    </div> <!-- col-md-3 -->
    <div class="col-md-1"></div> <!-- col-md-2 -->
  
        </div> <!-- col-md-12-->

   <!--          <div class="top">

    <a class="edie" href="#top">TOP</i></a>

  </div> <!-- top --> 

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="roofmenu">

        <h1> Work in Progress....</h1>

       <?php

       include("dbCon.php");

      if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

              echo "<br> <input type='checkbox'><div class='idname'>id: ". $row["id"]. "</div> Name: ". $row["CategoryName"]. " " . $row["ProductName"] . " " .$row["ProductDesc"] . " " .$row["Price"]. " " .$row["DateCreated"]. "<br>";

   }
} else {
     echo "0 Results";

}

      ?>


</div>       

    </div>
  </div>
</div>


<div class="row">

  <div class="col-md-12">

    <div class="footer">

        <p> THEROOFBARTOPNYC@2016</p>

    </div> <!-- footer -->

  </div> <!-- col-md-12 -->

</div> <!-- row -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script>(function() { var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("the-roof-new-york-2","100%","RED","y","y","3");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})();</script>


</body>
</html>