<!doctype html>
<html>
<head>
<title>form1</title>
<style>
body {background-color:thistle;}
</style>
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
<body background="tech3.jpg"  style="color:white;">
<h1 style="text-align:center;"><i><b>WELCOME TO HI-TECH TECHONOLOGY...!</b></i></h1>
<div class="center">
<form action="hi.php" method="post" >
<p> USER ID:</P>
<input type="text" name="uname"  id="uname">
<p>PASSWORD:</p>
<input type="password" name="password" id="password"><br><br>
<input type="text" name="rand1" value="<?php echo(rand(10,100)); ?>" size=10 readonly>
+
<input type="text" name="rand2" value="<?php echo(rand(10,100)); ?>" size=10 readonly>
=
<input type="text" name="rand3" id="rand3"><br><br>
<input type="submit" value="LOGIN" id="submit"><br>
</form>

<form action="sign1.htm" method="post">
<br>
<input type="submit" value="SIGN UP" id="sign">
</form>
</div>
</body>
</html>