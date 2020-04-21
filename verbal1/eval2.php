<<?php 

$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
$verbal_finalcount = 0;
$q1 = array();
$q1["e"] = $_POST['RadioGroup5'];
$q1["f"] = $_POST['RadioGroup6'];

if($q1["e"] == "e")
 {
    $verbal_finalcount = $verbal_finalcount+1;
    
 }
  if($q1["f"] == "f")
 {
    $verbal_finalcount = $verbal_finalcount+1;
 }

$verbal_finalcount2 = $_SESSION['verbal_counter'] + $verbal_finalcount;
$_SESSION['verbal_counter'] = $verbal_finalcount2;
echo $_SESSION['verbal_counter'];
echo "string";
echo $verbal_finalcount;
header('location:index3.html')
?>