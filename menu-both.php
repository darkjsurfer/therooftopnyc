<?php 

include("dbCon.php");

?>


<html>
<head>

	<title>THEROOFTOPNYC - MENU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>

	 <nav class="navbar navbar-default nopadding">
  <div class="container-fluid">
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
       <li><a class="dropdown-toggle" data-toggle="dropdown" href="menu.php?view=red">Menu</a>
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
     <!--  <li><a href="contact.html">Contact</a></li> -->
      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></li> </a>
    </ul>
  </div>
</div>
</nav>

<div class="row">

  <div class="col-md-12">

    <div class="roofmenu">

      <?php



      echo "<div class='itemcategory'>" .$row["CategoryName"]. "</div>";

      ?>


      <?php

      if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

              echo "<br><div class='itemname'>" . $row["ProductName"] . " </div>

                        <div class='itemdescription'>" .$row["ProductDesc"] . "</div>

                              <div class='itemprice'> Glass $" .$row["PriceGlass"]. ".00 / Bottle $" . $row["BottlePrice"].".00 </div>";
   }
} else {
  
     echo "0 Results";


}

?>


    </div> <!-- roofmenu -->

  </div> <!-- col-md-12 -->

</div> <!-- row -->

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

              echo "<br><div class='itemname'>" . $row["ProductName"] . " </div>

                        <div class='itemdescription'>" .$row["ProductDesc"] . "</div>

                              <div class='itemprice'>$" .$row["Price"]. ".00 </div>";

   }
} else {
     echo "0 Results";

}

      ?>


</div>       

    </div>
  </div>
</div>

<div class="col-md-12 nopadding">

  <div class="footer">

  <p> THEROOFBARTOPNYC@2016</p>

  </div> <!-- footer -->

</div> <!-- row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

  <SCRIPT TYPE="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
  </script>



</body>
</html>