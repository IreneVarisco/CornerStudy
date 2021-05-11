<?php
	require '../assets/config.php';

	$username = $_POST['usernamel'];
	$password = $_POST['passwordl'];

	if(isset($username) && isset($password)){
		$sqlForUsrname = "SELECT COUNT(Username) as total FROM User WHERE Username = '$username'"; //Counting Rows with Username
		$sqlForPass = "SELECT Password FROM User WHERE Username = '$username'";										//Selecting password using username

		$retUsrname =  mysqli_query($conn, $sqlForUsrname);
		$rowUsrname = mysqli_fetch_assoc($retUsrname);

		$retPass = mysqli_query($conn, $sqlForPass);
		$rowPass = mysqli_fetch_assoc($retPass);

		if ($rowUsrname['total'] > 0) {
			if ($rowPass['Password'] == $password) {
				echo "<script>alert('Successfull')</script>";
			}
		}
		else{
			echo "User doesn't exist";
		}


	}
?>
