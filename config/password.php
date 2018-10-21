<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
include'change_password.php';
?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="../style/style1.php" >
<link rel="shortcut icon" href="../style/icon.png" />


<style>

.submit{
margin-left:110px;
width:100px;
height:30px;
margin-bottom:5px;
margin-top:20px;
background-color: #2979FF;
border: 6;
/* border: 0px; */
border-color: #fffefe;
border-radius: 5px;
color: white;
 outline: none;
 margin-bottom: 25px;
}


.submit:hover {
background-color: #4FC3F7; /* Green */
color: white;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}

.error{
margin-left: 130px;
color: white;
}

</style>


</head>

<body>


	<div class="container">
		<div class="head">
			
			<img src="../style/user.jpg" height="40px" style="margin-top: 4px; margin-left: 10px; border-radius: 25px;" />
			<span style="margin-left: 10px; color: white; margin-top: 15px;"> <?php echo $_SESSION['username']; ?> </span>
			
			<div class="bbb">
			<img class="left1" src="../style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="config/logout.php" >
			</map>
			
			<img class="left1" src="../style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="password.php">
			</map>
			</div>
			<!--
			<div class="page">
			<div class="f" id=""><ul style="list-style-type:none"><li><a href="daily.php"> Daily Dashboard </a></li></div>
			<div class="f" id="active"><ul style="list-style-type:none"><li><a href="daily.php"> Monthly Dashboard </a></li> </ul></div>
			</div>
			-->
		</div>	
		<div class="leftside">
		
			
		
		<form class="form" action="" method="post">
		<div class="username"> 
            
          
                <label class="white" style="margin-right: 35px;"> User name </label>
                <input type="text" name="user" autocomplete="off" placeholder="<?php echo $_SESSION['username'] ?>" id="name" readonly>
	</div>
    
	<div class="password">
            <label style="margin-right:15px; color: white;">Old Password </label>
            <input type="password" name="password" placeholder="Password" id="name" autocomplete="off" > 
			
            <!--
		<input type="checkbox" name="check" > <span class="whitecolor">Remember Me </span>
		-->
	</div>
    <div class="newpassword">
		<label class="white" style="margin-right: 10px;"> New password </label>
			<input type="password" name="new_password" placeholder="New Password" id="name" autocomplete="off"> 
	</div>
	<div class="login" >
		<input type="submit" name="submit" class="submit" value="Submit">
		<input type="submit" name="cancel" class="submit" value="Cancel" style="margin-left: 35px;">
		
	</div>
	<div ><span class="error"> <?php echo $error; ?> </span> </div>
    </form>
		
		</div>
			
		