<?php
	$firstName = $_POST['name'];
	$Surname = $_POST['Surname'];
	
	$email = $_POST['emailid'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $PhoneNo = $_POST['phoneno'];
    $pin = $_POST['pincode'];
    $text = $_POST['area'];
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register_form(FirstName, Surname, Emailid, DOB, Gender, PhoneNo, Pin, About) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiis", $firstName, $Surname, $email, $dob, $gender, $PhoneNo, $pin, $text);
		$execval = $stmt->execute();
		
		echo "Registration Done";
		$stmt->close();
		$conn->close();
	}
?>
