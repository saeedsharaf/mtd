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
<link rel="stylesheet" href="../../../style/style1.php" >
<link rel="shortcut icon" href="../../../style/icon.png" />

<script src="../../../js/b.js" ></script>

<script src="../../../js/chart.js" ></script>
<script src="../../../js/datalabels.js" ></script>

<script src="../../../js/index.js" ></script>

<style>



.drop{
	position: relative;
    display: inline-block;
    float: right;
    margin-right: 16px;
}

.drop_content{
    display: block;
    position: absolute;
    background-color: #0000009e;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
   
    border-radius: 5px;
    padding: 3px;
    color: white;
}

.drop_span{
	position: absolute;
    top: 9px;
    left: 35px;
    font-size: 14px;
}
.triangle-down {
	display: none;
	position: absolute;
    width: 0;
    height: 0;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-top: 14px solid #f3ff04;
    
    top: 36px;
    left: 2px;
}


.triangle{
	display: none;
 	height: 158px;
    width: 80px;
   
    position: absolute;
    z-index: 1;
    
    left: -22px;
}

.drop:hover .drop_content  {display: block;}
.drop:hover .triangle  {display: block;}

.month{
	position: absolute;
	top:10px;
	left:7px;
}


.monthly{
	right:-56px;
	border-radius: 5px;: 
}

.active{
	right:-35px;
}

</style>





</head>

<body  >


	<div class="container" >
		<div class="head" >
			
			<span id="te">telcom<b>egypt </b> </span>
			<span id="we" style="font-size: 15px; font-family: sans-serif;font-weight: bolder; color:white;margin-top: 25px;">We Eye</span>
			
			<div class="bbb">
			
			<img class="left1" src="../../../style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="../../../config/logout.php" title="Log Out">
			</map>
			
			<img class="left1" src="../../../style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="../../../config/password.php" title="Setting">
			</map>
			<a href="../../../config/redirect_page.php" title="home" > <img src="../../../style/home.png" class="left1" width="25px" style="margin-top:11px;margin-right: 21px;" ></a>


			<a href="../../../search.php" title="Search" > <img src="../../../style/search1.png" class="left1" width="29px" style="margin-top:11px;margin-right: 25px;" ></a>

			
			

				<div class="drop" >
					<a href="../../../monthly/may/score/performance.php" title="Score OverView" class="drop"> <img src="../../../style/all.png" class="left1" width="25px" style="margin-top:11px;" ></a>

					<?php 

			if($_SESSION['id'] != 111 and $_SESSION['id'] != 222 and $_SESSION['id'] != 333 and $_SESSION['id'] != 444 and $_SESSION['id'] != 555  ){
	
			?>

					<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="../../../monthly/may/score/performance.php" title="Score OverView" ><img src="../../../style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 90px;">	
							<a href="../../../manger/hv.php" title=" Nps OverView"> <img src="../../../style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

						</div>
					</div>	
					
				
				<?php
			} else {
				?>

				<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="../../../monthly/may/score/achiever.php" title="Achiever OverView" ><img src="../../../style/aa.png" style="width: 25px; "> <span class="drop_span">Achiever</span> </a>
						</div>

						<div class="drop_content" style="margin-top: 90px">
							<a href="../../../monthly/may/score/performance.php" title="Score OverView" ><img src="../../../style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 125px;">	
							<a href="../../../manger/hv.php" title=" Nps OverView"> <img src="../../../style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

						</div>
					</div>
					<?php

			}
			?>
			</div>
			<span style="margin-right: 20px; color: white; margin-top: 15px;float:right;"> <?php echo $_SESSION['username']; ?> </span>
			</div>
			<!--
			<div class="page">
			<div class="f" id=""><ul style="list-style-type:none"><li><a href="daily.php"> Daily Dashboard </a></li></div>
			<div class="f" id="active"><ul style="list-style-type:none"><li><a href="daily.php"> Monthly Dashboard </a></li> </ul></div>
			</div>
			-->
		</div>
		
		
		
		
		<div id="mySidenav" class="sidenave" onmouseover="mouseOver()" onmouseout="mouseOut()" > 

				<!--<span id="close"> <img src="../style/right.png" style="width:25px;"> </span> -->
				<img src="../../../style/ii.png" style="width: 25px;position: absolute;left: 15px;"> <a href="../../../dash_board/report.php" class="report" id="report"  > Dashboard </a>
				<img src="../../../style/aa.png" style="width: 25px;position: absolute;left: 13px;" ><a href="../../../config/score_redirect_page.php" class="performance" id="performance" > Score   </a> 
				<img src="../../../style/nps.png" style="width: 40px;position: absolute;left: 5px;"> <a href="../../../config/redirect_page.php" class="nps" id="npss"> Nps  </a>
		</div>





		<a href="../../jan/score/sv_score.php"><div class="monthly" style="position: fixed;height: 40px;width: 100px;background-color: #01c5ed ; top: 90px; text-align: center;">
			<span class="month" style="">Jan </span>
			
		</div> </a>	

		<a href="../../feb/score/sv_score.php"><div class="monthly" style="position: fixed;height: 40px;width: 100px;background-color: #09a55c ; top: 140px; text-align: center;">
			<span class="month" style="">Feb </span>
			
		</div> </a>

		<a href="../../mar/score/sv_score.php"><div class="monthly" style="position: fixed;height: 40px;width: 100px;background-color: #f39817 ; top: 190px; text-align: center;">
			<span class="month" style="">Mar</span>
			
		</div> </a>

		<a href="../../april/score/sv_score.php"><div class="monthly" style="position: fixed;height: 40px;width: 100px;background-color: #dd4d33 ; top: 240px; text-align: center;">
			<span class="month" style="">April </span>

			

		</div></a>

		<a href="../../may/score_redirect_page.php"" > <div class="monthly active" style="position: fixed;height: 40px;width: 100px;background-color: #1b1b1b38 ; top: 290px; text-align: center;">
			<span class="month" style="">May </span>
			
		</div></a>

		<a href="../../jun/score_redirect_page.php"><div class="monthly" style="position: fixed;height: 40px;width: 100px;background-color: #ff000087 ; top: 340px; text-align: center;">
			<span class="month" style="">Jun </span>
			
		</div> </a>

		<a href="../../july/score_redirect_page.php"><div class="monthly " style="position: fixed;height: 40px;width: 100px;background-color: #0d00ff87 ; top: 390px; text-align: center;">
			<span class="month" style="">July </span>
			
		</div> </a>

		<a href="../../august/score_redirect_page.php"><div class="monthly " style="position: fixed;height: 40px;width: 100px;background-color: #ff0055db ; top: 440px; text-align: center;">
			<span class="month" style="">Aug </span>
			
		</div> </a>

		
	<script>
	/*
		function openNav() {
	    	document.getElementById("mySidenav").style.left = "0px";
	    
		
			document.getElementById("close").innerHTML = '<a href="javascript:void(0)" style="float:right;color:white;margin-left:-5;position: absolute;top: 45%;left: 65%;" onclick="closeNav()" ><img src="../style/left.png" style="width:25px;">';
		}

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
		/*
		function closeNav() {
		    document.getElementById("mySidenav").style.left = "-125px";
		    document.getElementById("main").style.margin = "0 auto";
			
			document.getElementById("close").innerHTML = "<a href='javascript:void(0)' style='float:right;color:white;margin-left:-5;position: absolute;top: 45%;left: 65%;' onclick='openNav()'><img src='../style/right.png' style='width:25px;'></span>";
		}
			*/
		function back(){
			window.history.back();
		}
		

		function mouseOver(){
			document.getElementById('mySidenav').style.width = "150px";
			document.getElementById('mySidenav').style.filter = "grayscale(0%)";
			document.getElementById('report').style.marginLeft = "15px";
			document.getElementById('performance').style.marginLeft = "15px";
			document.getElementById('npss').style.marginLeft = "15px";
		}

		function mouseOut(){
			document.getElementById('mySidenav').style.width = "55px"
			document.getElementById('mySidenav').style.filter = "grayscale(100%)";
			document.getElementById('report').style.marginLeft = "-100px";
			document.getElementById('performance').style.marginLeft = "-150px";
			document.getElementById('npss').style.marginLeft = "-100px";

		}

		
	</script>
	
<a class="back" href="javascript:void(0)" onclick ="back()" > <img src="../../../style/backlogo.png" width="80px" title="Back" ></a>	


<div class="s" style="margin-top:60px;">
			
	