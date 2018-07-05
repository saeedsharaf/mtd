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
			$user = $row['user_name'];
			$pass = $row['password'];
			echo $row['user_name'];

			
			if(strcasecmp($username,$user) == 0 && strcasecmp($password,$pass) == 0 ){
				session_start();
				$_SESSION['username'] = $row['user_name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['login_id'] = $row['login_id'];
				
				?>
				<script> window.location.href='config/score_redirect_page.php' </script>
			
			<?php
			
			
			} else {
			
				$error= 'Wrong user Name or Paswword';
			
			}
		
	
		
		}
		$cont->close();
	}
}
?>