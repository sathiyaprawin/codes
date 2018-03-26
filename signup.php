<html>
<head>
<title>sign up</title>
<style>
.center {
    align:center;
    margin:auto;	    
    width: 40%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
</head>
<body background="tech.jpg"  style="color:white;">
<?php
$servername = "localhost";
$username = "root";
$password = "a";
$db="sathiya";
$conn = mysqli_connect($servername, $username, $password,$db);
$u=$_POST['uid'];
$first=$_POST['fname'];
$last=$_POST['lname'];
$dept=$_POST['department'];
$cit=$_POST['city'];
$num=$_POST['phone'];
$email=$_POST['emailid'];
$pass=$_POST['password'];
$result=mysqli_query($conn,"INSERT INTO user VALUES('$u','$first','$last','$dept','$cit','$num','$email','$pass')")  ;
if($result)
{
?>
<h1 style="text-align:center;"><i><b>THANK YOU...!</b></i></h1>
<div class="center">
<h2 style="text-align:center;"><i><b>YOUR DETAILS ARE REGISTERED...!</b></i></h2>
<h3 style="text-align:center;"><i><b>you will get details about techonoly...!</b></i></h3>
</div>
<?php
}
else
{
?>
<h1 style="text-align:center;"><i><b>SORRY...!</b></i></h1>
<div class="center">
<h2 style="text-align:center;"><i><b>YOUR DETAILS ARE NOT REGISTERED...!</b></i></h2>
<h3 style="text-align:center;"><i><b>please enter your details correctly...!</b></i></h3>
</div>
<?php
}
?>
</body>
</html>