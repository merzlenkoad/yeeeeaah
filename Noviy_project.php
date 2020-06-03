<html>
<head>
<style type="text/css">
.my_table {
	position: absolute;
	border-spacing: 15px;
	left:40%;
	top: 15%;
}
input {
	height: 40px;
	width: 300px;
	border:none;
	border-bottom: 1px solid #0099ff;
}
.submitBut {
	border: none;
	width: 150px;
	border-radius: 5%;
	background-color: #0099ff;
	color: white;
	cursor: pointer;
}
a {
	position: absolute;
	margin-top: 41%;
	margin-left: 40%;
	font-size: 20px;
	color: grey;
}
</style>
</head>
<body>
<?php
require_once("config.php");
require_once("Account.php");

$account = new Account($con);
$link = mysqli_connect('localhost', 'root', '', 'university');
if (isset($_POST["submitBut"])){ 
$a=$_POST['email'];
$b=$_POST['confirm_email'];
$c=$_POST['password'];
$d=$_POST['confirm_password'];
if($a != $b){
	echo "DIFFERENT E-MAILS";
}
else if($c != $d) {
	echo "DIFFERENT PASSWORDS";
}
else{
	$sql = mysqli_query($link, "INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')");
}
}
?>
<form action="" method="POST">
  <table class="my_table">
	<tr>
		<td><input type="text" name="firstname" placeholder="firstname" required></td>
	</tr>
	<tr>
		<td><input type="text" name="lastname" placeholder="lastname" required></td>
	</tr>
	<tr>
		<td><input type="text" name="username" placeholder="username" required></td>
	</tr>
	<tr>
		<td><input type="text" name="email" placeholder="email" required></td>
	</tr>
	<tr>
		<td><input type="text" name="confirm_email" placeholder="confirm email" required></td>
	</tr>
	<tr>
		<td><input type="password" name="password" placeholder="password" required></td>
	</tr>
	<tr>
		<td><input type="password" name="confirm_password" placeholder="confirm password" required></td>
	</tr>
	<tr>
		<td><center><input type="submit" name="submitBut" value="SUBMIT" class="submitBut"></center></td>
	</tr>
  </table>
</form>
  <a href="http://localhost/university/vxod.php">Already have an account? Sign in here!</a>
</body>
</html>