<<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["g"] = $_POST['RadioGroup7'];
$q1["h"] = $_POST['RadioGroup8'];

if($q1["g"] == "g")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["h"] == "h")
 {
    $logic_finalcount = $logic_finalcount+1;
 }

$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $_SESSION['logic_counter'];
echo "string";
echo $logic_finalcount;
header('location:index4.html')
?>