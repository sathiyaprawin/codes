<html>
<head>
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
<body background="tech.jpg"  style="color:white;" >
<?php
$servername = "localhost";
$username = "root";
$password = "a";
$db="sathiya";
$conn = mysqli_connect($servername, $username, $password,$db);
$u=$_POST['uname'];
$pass=$_POST['password'];
$ran=$_POST['rand1'];
$rand=$_POST['rand2'];
$random=$_POST['rand3'];
$ans= $ran + $rand;
$error="wrong answer";
$result=mysqli_query($conn,"SELECT * FROM user WHERE uid='$u' AND password = '$pass'") ;
$check = mysqli_fetch_array($result);
if(isset($check) && ($ans == $random)){
$sql    = "SELECT * FROM user WHERE uid='$u'";
           	 $result = mysqli_query($conn,$sql) or die(mysqli_error());
            	while ($row    = mysqli_fetch_array($result)) {

?>
		<h1 style="text-align:center;"><i><b>HERE YOUR DETAILS ARE...!</b></i></h1>
		<div class="center">
        	<form >
          	<b><i>USER ID:</i></b>
            	<input type="text" name="Namex" value="<?php echo $row ['uid']; ?> " size=10><br><br>
            	<b><i>FIRST NAME:</i></b>
            	<input type="text" name="fname" value="<?php echo $row ['first']; ?> " size=10><br><br>
            	<b><i>LAST NAME:</i></b>
            	<input type="text" name="lname" value="<?php echo $row ['last']; ?>" size=17><br><br>
             	<b><i>DEPARTMENT:</i></b>
            	<input type="text" name="department" value="<?php echo $row ['department']; ?>" size=17><br><br>
            	<b><i>CITY:</i></b>
           	 <input type="text" name="city" value="<?php echo $row ['city']; ?>" size=17><br><br>
             	<b><i>PHONE NUMBER:</i></b>
           	 <input type="text" name="phone" value="<?php echo $row ['phone']; ?>" size=17><br><br>
             	<b><i>EMAIL ID:</i></b>
            	<input type="text" name="email" value="<?php echo $row ['emailid']; ?>" size=17><br><br>
            
       		 </form>
		</div>
<?php
        	}
}else{
?>
<h1 style="text-align:center;"><i><b>SORRY...!</b></i></h1>
<div class="center">
<h2 style="text-align:center;"><i><b>YOUR ENTERED DETAILS ARE WRONG...!</b></i></h2>
<h3 style="text-align:center;"><i><b>please check your details...!</b></i></h3>
</div>
<?php
}
?>

</body>
</html>