<html>
<head>
<style type="text/css">
h1 {
	font-size: 60px;
	color: #0099ff;
	margin-top:5%;
}
.help {
	position: absolute;
	left:33%;
	top: 30%;
	border: 1px solid;
	border-color: #0099ff;
	width: 270px;
	padding: 5px;
}

.submitBut {
	position: absolute;
	border: 1px solid #0099ff;
	width: 150px;
	height: 27px;
	border-radius: 5%;
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	left: 55%;
	top: 66.3%;
}
textarea {
	position: absolute;
	width: 450px;
	height: 200px;
	padding: 40px;
	white-space: pre-line;
	font-size: 16px;
	left: 33%;
	top: 35%;
	border-color:#0099ff;
}
</style>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '', 'university');
if(isset($_POST["submitBut"])) {
    $sql = mysqli_query($link, "INSERT INTO `tablica` (`course`, `description`) VALUES ('{$_POST['course']}', '{$_POST['description']}')");
}
$sql = mysqli_query($link, 'SELECT `id`, `course`, `description` FROM `tablica`');
?>
<center><h1>HELP US GET BETTER</h1></center>
<form method="post">
<input type="text" class="help" name="course" placeholder="COURSE" required>
<textarea name="description" cols="30" rows="50" placeholder="DESCRIPTION"></textarea>
<input type="submit" name="submitBut" value="SUBMIT" class="submitBut">
</form>
</body>
</html>