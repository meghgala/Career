<<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$finalcount = 0;
$q1 = array();
$q1["e"] = $_POST['RadioGroup5'];
$q1["f"] = $_POST['RadioGroup6'];

if($q1["e"] == "e")
 {
    $finalcount = $finalcount+1;
    
 }
  if($q1["f"] == "f")
 {
    $finalcount = $finalcount+1;
 }

$finalcount2 = $_SESSION['counter'] + $finalcount;
$_SESSION['counter'] = $finalcount2;
echo $_SESSION['counter'];
echo "string";
echo $finalcount;
header('location:index3.html')
?>