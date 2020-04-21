<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["c"] = $_POST['RadioGroup3'];
$q1["d"] = $_POST['RadioGroup4'];

if($q1["c"] == "c")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["d"] == "d")
 {
    $logic_finalcount = $logic_finalcount+1;
 }
$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $logic_finalcount;
header("location:index2.html")
?>