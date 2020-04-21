<?php 

$link = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$finalcount = 0;
$q1 = array();
$q1["i"] = $_POST['RadioGroup9'];
$q1["j"] = $_POST['RadioGroup10'];

if($q1["i"] == "i")
 {
    $finalcount = $finalcount+1;
    
 }
  if($q1["j"] == "j")
 {
    $finalcount = $finalcount+1;
 }

$finalcount2 = $_SESSION['counter'] + $finalcount;
$_SESSION['counter'] = $finalcount2;
echo $_SESSION['counter'];
	if (isset($_SESSION['email']))
	{
   		$email1 = $_SESSION['email'];
	}
	$sql = "UPDATE details SET iq = '$finalcount2' WHERE email = '$email1'";
   	if(mysqli_query($link, $sql))
	{
    	echo "Records added successfully.";
	} 
	else
	{
    	echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
	}
	header('location:next.html')
?>