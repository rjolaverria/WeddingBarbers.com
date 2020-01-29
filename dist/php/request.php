<?php
require_once 'config.php';

// Defind variables
$json =		array();
$name =		  isset( $_POST['full-name'] ) ? $_POST['full-name'] : '';
$email =	  isset( $_POST['email'] ) ? $_POST['email'] : '';
$phone =	  isset( $_POST['phone-number'] ) ? $_POST['phone-number'] : '';
$date =		  isset( $_POST['date'] ) ? $_POST['date'] : '';
$location = isset( $_POST['location'] ) ? $_POST['location'] : '';

// Form validation
if( !$name ) {
	$json['error']['name'] = 'Please enter your name.';
}
if( !$email ) {
	$json['error']['email'] = 'Please enter your email address.';
}
if( !$phone ) {
	$json['error']['phone'] = 'Please enter your phone number.';
}
if( !$date ) {
	$json['error']['date'] = 'Please enter request date.';
}
if( !$location ) {
	$json['error']['location'] = 'Please enter request location.';
}


// Proceed if no erros found
if( !isset( $json['error'] ) ) {

	$yourName = $conn->real_escape_string($name);
	$yourEmail = $conn->real_escape_string($email);
	$yourPhone = $conn->real_escape_string($phone);
	$yourDate = $conn->real_escape_string($date);
	$yourLocation = $conn->real_escape_string($location);

	$sql="INSERT INTO Requests (name,email,phone,date,location) VALUES ('$yourName','$yourEmail','$yourPhone','$yourDate','$yourLocation')";


	if(!$result = $conn->query($sql)){
	die('There was an error running the query [' . $conn->error . ']');
	}
	else
	{
	echo "Thank you! We will contact you soon.";
	}
}
?>