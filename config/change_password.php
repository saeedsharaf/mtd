<?php

error_reporting();

$error="";

 if(isset($_POST['cancel'])){ // if user press cancel
	
		 ?>
                               <script>window.location.href='redirect_page.php'</script>
                               <?php
		}

    if(isset($_POST['submit'])){ // if user press submit 
        if(empty($_POST['password'])){ // is password area empty
			$error = 'Please write your Old Password';
			
		} else if (empty($_POST['new_password'])){ // is new password are empty
			$error = 'Please write your New Password';
		}else {
		
		
					include'connect.php';
					
					$user = $_SESSION['username']; 
					$password = $_POST['new_password'];
					

					$sql = "select * from member where user_name = '$user' ";
					$result = $cont->query($sql);
					$row = $result->fetch_assoc();
					
					$id = $row['id'];
					$super = $row['super'];

					if ($_POST['password'] == $row['password']){

					$sql = "UPDATE member SET password ='$password' where id = '$id' " ;
					
					if ($cont->query($sql) === true ){
					$error = 'Password changed' ;
			
					header( "refresh:1;url=redirect_page.php" );

						} 
			
			
		} else {
		$error = 'Invalid Old Password';
		}
		
	

		
 }
 }
 

 
 
?>

