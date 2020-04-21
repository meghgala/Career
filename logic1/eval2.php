<<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["e"] = $_POST['RadioGroup5'];
$q1["f"] = $_POST['RadioGroup6'];

if($q1["e"] == "e")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["f"] == "f")
 {
    $logic_finalcount = $logic_finalcount+1;
 }

$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $_SESSION['logic_counter'];
echo "string";
echo $logic_finalcount;
header('location:index3.html')
?>