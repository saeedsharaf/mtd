<?php
include 'config/login.php';

?>

<!doctype html>
<html>
<head>

<link rel="stylesheet" href="style/loginstyle.css">
<link rel="shortcut icon" href="style/icon.png" />

</head>


<body>
<div class="login"> 
	<form action=""  method="post">
		<label>User Name</label><input type="text" name="username" class="user" placeholder="User name"> <br>
		<label>Password</label><input type="password" name="pass" class="pass" placeholder="Password"> <br>
		<input type="submit" name="submit" class="submit" value="Login">
	</form>
	<span> <?php echo $error; ?> </span>
</div>
<div class="footer" >
<span >For any inquiries or support (Don’t hesitate to <a style="text-decoration:none;" href='mailto:XCC-Tamer  Kassem; XCC.Mostafa.Magdy@te.eg?cc=XCC-Saeed Sharaf; XCC-Adel Abdelaziz&subject=TelecomEgypt  WE-eye "Application Support"'>Contact Developers</a> )</span>
</div>




</body>
</html>

