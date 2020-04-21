


<?php

 
  //Start the Session
session_start();
$link = mysqli_connect("localhost", "root", "", "wd");	
if (isset($_POST['email']) )
{

	$email1 = $_POST['email'];
	$password1 = $_POST['pass'];
	//3.1.2 Checking the values are existing in the database or not
	$query = "SELECT * FROM details WHERE email='$email1' and password='$password1'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$count = mysqli_num_rows($result);
	//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
	if ($count == 1)
	{
		$_SESSION['email'] = $email1;
	}
	else
	{
		//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
		$fmsg = "Invalid Login Credentials.";
	}
}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['email']))
	{
		$email1 = $_SESSION['email'];
		echo "Hi " . $email1 . "";
		echo "This is the Members Area";
	}
	else
	{
		echo "ERROR";
	}
//3.2 When the user visits the page first time, simple login form will be displayed.
header('location:quiz.html')
?>
