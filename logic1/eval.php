<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["1"] = $_POST['RadioGroup1'];
$q1["2"] = $_POST['RadioGroup2'];
if($q1["1"] == "a")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["2"] == "b")
 {
    $logic_finalcount = $logic_finalcount+1;
 }
$_SESSION['logic_counter'] = $logic_finalcount;
echo $logic_finalcount;
header("location: index1.html")
?>