<?php
$servername = "localhost";
$username = "natsugtr_Roofbar";
$password = "roofbar123";
$dbname  = 'natsugtr_therestaurant';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$selection = $_GET['view'];

//$sql = "SELECT * FROM roofbarmenu";

$sql = "SELECT * FROM roofbarmenu WHERE categoryName = '".$selection."'";

$result = $conn->query($sql); 

/*if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["CatergoryName"]. " " . $row["ProductName"] . " " .$row["ProductDesc"] . " " .$row["Price"]. " " .$row["DateCreated"]. "<br>";
     }
} else {
     echo "0 Results";
}

menu.php?view=red




*/

?>


