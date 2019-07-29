<?php
	
	session_start();

	if(isset($_POST['registro-submit'])) {
		  require "dbh.inc.php";

		  $username = $_POST['uid'];
		  $mail = $_POST['mail'];
		  $ln = $_POST['ln'];
		  $fn = $_POST['fn'];
		  $pwd = $_POST['pwd'];
		  $pwd_repeat = $_POST['rpwd'];


	  if(empty($username)|| empty($mail) || empty($pwd) || empty($mail) || empty($pwd_repeat) || empty($ln) || empty($fn)){
	    header("Location:../login/register.php?error=emptyfields&user=".$username."&email=".$mail);
	    exit();
	  
	  }
		  elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		    header("Location:../login/register.php?error=invalidmailuid");
		    exit();
		  }

		  elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		    header("Location:../login/register.php?error=invalidmail&uid=".$username);
		    exit();
		  }

		  elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		    header("Location:../login/register.php?error=invaliduid&uid=".$mail);
		    exit();
		  }
		  elseif($pwd !== $pwd_repeat) {
		  header("Location:../login/register.php?error=passwordcheck&uid=*".$username."&mail=".$email);
		  exit();
		  }
	  else {
	    $sql = "SELECT userid FROM usuarios WHERE idusuarios=? AND mail=?";
	    $stmt = mysqli_stmt_init($conn);
	   
		  if(!mysqli_stmt_prepare($stmt, $sql)){
		      header("Location:../login/register.php?error=sqlerror");

		    exit();
		    }
		  else{
		    mysqli_stmt_bind_param($stmt, "ss", $username, $mail);

		    mysqli_stmt_execute($stmt);

		    mysqli_stmt_store_result($stmt);

		    $resultCheck = mysqli_stmt_num_rows($stmt);

		  if($resultCheck > 0){

		      header("Location:../login/register.php?error=usertaken&mail=".$mail);
		    exit();
		    }
		  else {
		    
		    $sql = "INSERT INTO usuarios (userid,firstname,lastname,pwd,mail) VALUES (?, ?, ?, ?, ?)";
		    $stmt = mysqli_stmt_init($conn);

		  if(!mysqli_stmt_prepare($stmt, $sql)){
		      header("Location:../login/register.php?error=sqlerror");
		    exit();
		    }
		    else {
		      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

		    mysqli_stmt_bind_param($stmt, "sssss", $username, $fn, $ln, $hashedPwd, $mail);
		    mysqli_stmt_execute($stmt);
		    header("Location:../login/login.php?register=success");
		    exit(); 

	        }
	      }
	    }
	  }
	  mysqli_stmt_close($stmt);
	  mysqli_close($conn);
	}
	  else{
	    header("Location:../login/register.php");
	    exit();
	}


	
?>