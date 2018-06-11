<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}

?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="../style/style1.php" >
<link rel="shortcut icon" href="../style/icon.png" />
<script src="../js/chart.js" ></script>
<script src="../js/datalabels.js" ></script>
<script src="../js/index.js" ></script>


</head>

<body>


	<div class="container">
		<div class="head">
			
			<span id="te" style="color:white;font-size: 20px;font-family: cursive;">telcom<b>egypt </b> </span>
			<span id="we" style="font-size: 15px; font-family: sans-serif;font-weight: bolder; color:white;margin-top: 25px;">We Eye</span>
			
			<div class="bbb">
			
			<img class="left1" src="../style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="../config/logout.php" title="Log Out">
			</map>
			
			<img class="left1" src="../style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="../config/password.php" title="Setting">
			</map>
			<a href="../config/redirect_page.php" title="home" > <img src="../style/home.png" class="left1" width="25px" style="margin-top:11px;margin-right: 21px;" ></a>

			<span style="margin-right: 20px; color: white; margin-top: 15px;float:right;"> <?php echo $_SESSION['username']; ?> </span>
			</div>
			<!--
			<div class="page">
			<div class="f" id=""><ul style="list-style-type:none"><li><a href="daily.php"> Daily Dashboard </a></li></div>
			<div class="f" id="active"><ul style="list-style-type:none"><li><a href="daily.php"> Monthly Dashboard </a></li> </ul></div>
			</div>
			-->
		</div>
		
		
		
		
		<div id="mySidenav" class="sidenave" > <span id="close"><a href="javascript:void(0)" style="float:right;color:white;margin-left:-5;position: absolute;top: 45%;left: 65%;" onclick="openNav()"> <img src="../style/right.png" style="width:25px;"> </a></span>
			
			
				<a href="report.php" class="report" id="active"> Report </a>
				<a href="performance.php" class="performance"> Performance  </a>
				<a href="../config/redirect_page.php" class="nps"> Nps  </a>
			</div>
		
				<script>
	
	function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    
	
	document.getElementById("close").innerHTML = '<a href="javascript:void(0)" style="float:right;color:white;margin-left:-5;position: absolute;top: 45%;left: 65%;" onclick="closeNav()"><img src="../style/left.png" style="width:25px;">';
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.left = "-125px";
    document.getElementById("main").style.margin = "0 auto";
	
	document.getElementById("close").innerHTML = "<a href='javascript:void(0)' style='float:right;color:white;margin-left:-5;position: absolute;top: 45%;left: 65%;' onclick='openNav()'><img src='../style/right.png' style='width:25px;'></span>";
}
	
	</script>
	
<a class="back" href="javascript:void(0)" onclick ="back()" > <img onclick="back" src="../style/backlogo.png" width="40px" ></a>	

<script>
	function back(){
		window.history.back();
	}
</script>	
			
	