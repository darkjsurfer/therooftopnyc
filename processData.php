<?php
	include("dbCon2.php");

	$visitorName 	= $_POST['visitor_Name'];
	$visitorLname 	= $_POST['visitor_Lname'];
	$visitorPnumber = $_POST['visitor_Pnumber'];
	$visitorEmail 	= $_POST['visitor_Email'];
	$visitorMsg 	= $_POST['visitor_Message'];

	echo $visitorName;
	echo $visitorLname;
	echo $visitorPnumber;
	echo $visitorEmail;
	echo $visitorMsg;

	$sql = "INSERT INTO contacts (visitorName, visitorLname, visitorEmail, visitorMessage ) VALUES('".$visitorName."','".$visitorLname."' '".$visitorEmail."', '".$visitorMsg."')";

	echo "<hr>";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	// $to      = 'alvaro.olsen@gmail.com';
	// $subject = 'Mail from Website';
	// $message = $visitorMsg;
	// $headers = 'From: '. $visitorEmail . "\r\n" .
 	//    'Reply-To: webmaster@example.com' . "\r\n" .
 	//    'X-Mailer: PHP/' . phpversion();
 
 	// mail( $to, $subject, $message, $headers );
 
 
 ?> 