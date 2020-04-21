<<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$finalcount = 0;
$q1 = array();
$q1["1"] = $_POST['RadioGroup1'];
$q1["2"] = $_POST['RadioGroup2'];
if($q1["1"] == "a")
 {
    $finalcount = $finalcount+1;
    
 }
  if($q1["2"] == "b")
 {
    $finalcount = $finalcount+1;
 }
$_SESSION['counter'] = $finalcount;
echo $finalcount;
header("location: index1.html")
?>