
	<?php

	if(isset($_POST['login-submit'])){

		require'dbh.inc.php';

		$mailid = $_POST['mailid'];
		//$username = $_POST['userid'];
		$pwd = $_POST['pwd'];

		if(empty($mailid) || empty($pwd)) {
			header("Location:../login/login.php?error=emptyfields");
			exit();
	}
		else {
			$sql = "SELECT * FROM usuarios WHERE userid=? OR mail=?;";
			$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location:../login/login.php?error=sqlerror");
				exit();
			}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $mailid, $mailid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)){

			$pwdcheck = password_verify($pwd, $row['pwd']);

		if ($pwdcheck == false){
			header("Location:../login/login.php?error=wrongpassword2");
			exit();
				}
		else if ($pwdcheck == true){
			session_start();
			$_SESSION['idusuarios']	= $row['idusuarios'];
			$_SESSION['userid'] = $row['userid'];
			$_SESSION['mail'] = $row['mail'];
			$_SESSION['fn'] = $row['firstname'];
			$_SESSION['ln'] = $row['lastname'];





			header("Location:../index.php?login=success");
			exit();
			}
		else{
			header("Location:../login/login.php?error=wrongpassword");
			exit();
			}
		}
		else{
			header("Location:../login/login.php?error=nouser");
			exit();
				}		
			}
		}
	}

	else{
		header("Location../index.php");
		exit();
	}

	session_start();