<?php 

$link = mysqli_connect("127.0.0.1", "root", "", "wd");
session_start();
if (isset($_SESSION['email']))
	{
   		$email1 = $_SESSION['email'];
	}
	$sql = "SELECT * FROM details where email='$email1'";
  	$result = mysqli_query($link,$sql);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verbal 1</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
body{
  margin:0;
  font: normal 16px Arial, Helvetica, sand-serif;
  color:#333;
  background: url(back.png) no-repeat fixed center;
  opacity:0.65;
  background-size: cover;

}

#particles-js{
  background-size:cover;
  background-color: #fff;
  height: 100%;
}

#login{
  background:#000;
  color: #fff;
  opacity:0.9;
  padding:3em;
  border:#000 2px solid;
  position:fixed;
  top:70px;
  left:60px;
}

.loginbox{
  width: 620px;
  height: 420px;
  background: #000;
  color: #fff;
  top: 50%;
  left:30%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
}


#login input[type="text"], #login input[type="password"]{
  padding:7px;
  margin-bottom:10px;
  border:6px #ccc solid;
}


   </style>   
</head>
<body>
  <div id="particles-js">
    <div id="login">
      <form name="form11" action="eval.php" method="POST" id="form11">
         <?php 
         while($rows=mysqli_fetch_assoc($result))
         {
         ?> 
        <h4>Hello <?php echo $rows['full_name']?></h4>
        <p>Your report is ready to download. <br>Your performance can be improved by having a quick look through our video lectures</p>
        <h4>Name : <?php echo $rows['full_name']?></h4>
        <h4>ID : <?php echo $rows['id']?></h4>
        <h4>College name : <?php echo $rows['college_name']?></h4>
        <h4>Email ID : <?php echo $rows['email']?></h4>
        <h4>IQ : <?php echo $rows['iq']?></h4>
        <h4>Logical Deduction : <?php echo $rows['logic']?></h4>
        <h4>Verbal Reasoning : <?php echo $rows['verbal']?></h4>
        <?php
         }
        ?>
      </form>
    </div>
  </div>


</body>
</html>
