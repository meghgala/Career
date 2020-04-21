<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$verbal_finalcount = 0;
$q1 = array();
$q1["c"] = $_POST['RadioGroup3'];
$q1["d"] = $_POST['RadioGroup4'];

if($q1["c"] == "c")
 {
    $verbal_finalcount = $verbal_finalcount+1;
    
 }
  if($q1["d"] == "d")
 {
    $verbal_finalcount = $verbal_finalcount+1;
 }
$verbal_finalcount2 = $_SESSION['verbal_counter'] + $verbal_finalcount;
$_SESSION['verbal_counter'] = $verbal_finalcount2;
echo $verbal_finalcount;
header("location:index2.html")
?>