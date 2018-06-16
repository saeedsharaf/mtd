<?php
//error_reporting(0);

$error="";

if(isset($_POST['submit'])){
	if(empty($_POST['username'])){
		$error = 'Please write your username';
	} else if(empty($_POST['pass'])){
		$error = 'Please write your Password';
	} else {
		include 'connect.php';
		if(isset($_POST['username']) && isset($_POST['pass'])){
			$username = $_POST['username'];
			$password = $_POST['pass'];
			
			$saeed = $cont->query("SELECT * FROM member WHERE user_name = '$username' AND password = '$password'");
			$row = $saeed->fetch_assoc();
			
			
			if(strcasecmp($username,$row['user_name']) == 0 && strcasecmp($password,$row['password']) == 0 ) {
				session_start();
				$_SESSION['username'] = $row['user_name'];
				$_SESSION['id'] = $row['id'];
				?>
				<script> window.location.href='config/redirect_page.php' </script>
			
			<?php
			
			
			} else {
			
				$error= 'Wrong user Name or Paswword';
			
			}
		
	
		
		}

		$cont->close();
	}
}







?>
