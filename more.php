<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}

include'config/connect.php';

?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="style/style1.php" >
<link rel="shortcut icon" href="style/icon.png" />

<script src="js/b.js" ></script>

<script src="js/chart.js" ></script>
<script src="js/datalabels.js" ></script>

<script src="js/index.js" ></script>

<style>



.drop{
	position: relative;
    display: inline-block;
    float: right;
    margin-right: 13px;
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
			
			<img class="left1" src="style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="config/logout.php" title="Log Out">
			</map>
			
			<img class="left1" src="style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="config/password.php" title="Setting">
			</map>
			<a href="config/redirect_page.php" title="home" > <img src="style/home.png" class="left1" width="25px" style="margin-top:11px;margin-right: 21px;" ></a>


			<a href="search.php" title="Search" > <img src="style/search1.png" class="left1" width="29px" style="margin-top:11px;margin-right: 25px;" ></a>

			
			

				<div class="drop" >
					<a href="monthly/august/score/performance.php" title="Score OverView" class="drop"> <img src="style/all.png" class="left1" width="25px" style="margin-top:11px;" ></a>

					<?php 

			if($_SESSION['id'] != 111 and $_SESSION['id'] != 222 and $_SESSION['id'] != 333 and $_SESSION['id'] != 444 and $_SESSION['id'] != 555  ){
	
			?>

					<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="monthly/august/score/performance.php" title="Score OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 90px;">	
							<a href="manger/hv.php" title=" Nps OverView"> <img src="style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

						</div>
					</div>	
					
				
				<?php
			} else {
				?>

				<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="monthly/august/score/achiever.php" title="Achiever OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Achiever</span> </a>
						</div>

						<div class="drop_content" style="margin-top: 90px">
							<a href="monthly/august/score/performance.php" title="Score OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 125px;">	
							<a href="manger/hv.php" title=" Nps OverView"> <img src="style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

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
				<img src="style/ii.png" style="width: 25px;position: absolute;left: 15px;"> <a href="dash_board/report.php" class="report" id="report"  > Dashboard </a>
				<img src="style/aa.png" style="width: 25px;position: absolute;left: 13px;" ><a href="config/score_redirect_page.php" class="performance" id="performance" > Score   </a> 
				<img src="style/nps.png" style="width: 40px;position: absolute;left: 5px;"> <a href="config/redirect_page.php" class="nps" id="npss"> Nps  </a>
		</div>
		<script>

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
	
<a class="back" href="javascript:void(0)" onclick ="back()" > <img src="style/backlogo.png" width="80px" title="Back" ></a>	


<?php
include'config/connect.php';
$oracle = $_GET['id'];

if($_GET['name'] == 'jan'){
	$sql="select * from jan where login_id = '$oracle'";
	$result=$cont->query($sql);
$row = $result->fetch_assoc();

} else if($_GET['name'] == 'feb'){
	$sql="select * from feb where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

} else if($_GET['name'] == 'mar'){
	$sql="select * from mar where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

} else if($_GET['name'] == 'april'){
	$sql="select * from april where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

} else  if($_GET['name'] == 'may'){
	$sql="select * from may where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();
} else if($_GET['name'] == 'jun'){
	$sql="select * from jun where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

} else if($_GET['name'] == 'july'){
	$sql="select * from july where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();
} else if($_GET['name'] == 'aug'){
	$sql="select * from august where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

} else if($_GET['name'] == 'sep'){
	$sql="select * from sep where login_id = '$oracle'";
	$result=$cont->query($sql);
	$row = $result->fetch_assoc();

}


?>

<style>
.font{
    font-size: 17px;
    position: absolute;
   
    color: white;
}

.content{
	position: absolute;
	color: white;
	font-size: 25px;
	font-weight: bolder;

}


div{
	border-radius: 5px;
}


.black{
	color:#000000cf;

}

</style>
<?php


//$id = $_GET['id']; 






/*
$aht = ($row['acd_time'] + $row['hold_time'] + $row['acw_time']) / $row['acd_calls']; // aht (acd time + hold time + acw time) / acd calls
$acw = ($row['acw_time']) / ($row['hold_time'] + $row['acw_time'] + $row['acd_time']) * 100; // (acw time ) / (hold time + acw time + acd time)
$hold = ($row['hold_time']) / ($row['hold_time'] + $row['acw_time'] + $row['acd_time']) * 100 ; // (hold time) / (hold time + acw time + acd time)
$outbound_aht = ($row['aux_out_time'] + $row['acw_out_time']) / ($row['acw_out_time'] + $row['aux_out_calls']) ; // (auxout of time + acw out of time ) / (acw out of calls + aux out of calls)

$nps = $row['nps'];
$fcr = $row['fcr'];
$agent_ttb = $row['agent_target'];
$absent = $row['absent'];
$adherence = $row['adh'] * 100 ;


$zero_aht = is_nan($aht);
		$zero_hold= is_nan($hold);
		$zero_acw = is_nan($acw);
		$zero_outboundaht = is_nan($outbound_aht);
		$zero_outbound = is_nan($outbound);

		if($zero_aht === true ){
			$aht = 0;
		}
		if($zero_hold === true){
			$hold = 0;
		}

		if($zero_acw === true){
			$acw = 0;
		}

		if($zero_outboundaht === true){
			$outbound_aht = 0;
		}

		if($zero_outbound === true){
			$outbound = 0;
		}

*/


$aht = round($row['aht'],2);
$acw = round($row['acw'],2) ;
$hold = round($row['hold'],2);
$outbound_aht = round($row['outbound'],2);

$absent = $row['absent'] ;
$adherence = $row['adherance'];
$nps = $row['nps'] ;
$ctc = $row['ctc'] ;
$ctb = $row['ctb'];
$nc = $row['nc'];
$compliance = $row['compliance'];
$quality_score = round($row['quality_score']);
$attiude = $row['attiude'];
$over_promising = $row['over_promising'];
$wrong_info = $row['wrong_info'];
$wron_transaction = $row['wron_transaction'];
$complaint_score = round($row['complaint_score']);
$final_score = round($row['final_score'],2);
$agent_ttb = $row['agent_ttb'];
$fcr = round($row['fcr'],0);
$rejection = $row['rejection'];
$sick = $row['sick'];
$leave_early = $row['leave_early'];
$Over_Promising = $row['over_promising'];
$attitude = $row['attiude'];


if($leave_early == '' or $leave_early == 0){
	$leave = 0;
}
else if($leave_early <= 7200 and $leave_early > 0 ){
	$leave = 1 ;
} else if ($leave_early > 7200 ){
	$leave = 2;
}

////////////////////////////////////////////////////// Punctuality  score /////////////////////////////////////
if($sick > 0){
	$sick_score = 0;
}else{
	$sick_score = 1;
}


if($leave == 2  ){
	$leav_score = -1;
}else if ($leave > 2){
	$leav_score = -2;
}


if($absent < 1){
	$absnt_score = 5;
}else{
	$absent_score= 0;
}


if($adherence > 92 ){
	$adherence_score = 10;
}else{
	$adherence_score = 0;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////// Productivity score ///////////////////////////////
if($aht > 260){
	$aht_score = 0;

}else{
	$aht_score = 10;
}

if($acw > 5){
	$acw_score = 0;
}else{
	$acw_score = 5;
}

if($hold > 3){
	$hold_score = 0;
}else{
	$hold_score = 5;
}

if($outbound_aht > 300 ){
	$outbound_score = 0;
}else{
	$outbound_score = 5;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////////////// nps Score //////////////////////////////////////////

if($fcr > 60 or $fcr == '' ){
	$fcr_score = 2;
}else{
	$fcr_score = 0;
}



if($nps > 45 or $nps == ''){
	$nps_score = 10;
}else{
	$nps_score = 0;
}


if($agent_ttb > 80 or $agent_ttb == ''){
	$agent_t = 8;

}else{
	$agent_t = 0;
};
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////// quality & complaint score //////////////////////////////////////


if($ctc > 0 or $compliance > 0 ){
	$ctc_score = 0;
}else{
	$ctc_score = 2.5;
}


if($ctb > 0){
	$ctb_score = 0; 
} else{
	$ctb_score = 2.5;
}



if($nc > 0){
	$nc_score = 0;
}else{
	$nc_score = 1.5;
}

//////////////////////////////////////////////// complaint

if($attiude > 0)  {
	$attitude_score = 0;
} else{
	$attitude_score = 5;
}


if($over_promising > 0) {
	$over_promise_score = 0;
} else{
	$over_promise_score = 3;
}


if($wrong_info > 0 ){
	$wrong_score = 0;
} else{
	$wrong_score = 3;
}


if($wron_transaction > 0){
	$wron_transaction_score = 0;
} else{
	$wron_transaction_score = 3;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//$final_score = $aht_score + $acw_score +$hold_score + $outbound_score + $adherence_score + $nps_score + $fcr_score + $agent_t + $absent_score ;
//$saeed = "update august set final_score = $final_socre ";
//$cont->query($saeed);





?>
<div style=" margin:0 auto ; margin-top: 100px ;width: 35%; height:70px;background-color: #1b1b1b38; text-align: center;position: relative;">
	<span class="content" style="left: 160px;font-size: 19px;top:10px; color: black"><?php echo $row['name']; ?> </span>
	
	<div style="position: absolute; background-color: #01c5ed; width: 30%;height: 100%">
		<span class="content" style="left:29px;top: 5px;"><?php echo $_GET['id'] ; ?>  </span>
		<span class="content" style="left: 30px;font-size: 17px;top:40px;">Login Id </span>

	</div>	
</div>


<div class="s" style="max-width:1080px;min-width:1080px; margin: 0 auto;  height:595px ; display: flex; margin-top: 40px;flex-wrap: wrap; margin-left: 175px;">
	
		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 35%">
				<img src="style/aht.png" height="90px" width="90px" style="position: absolute; left: 140; top: 10;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($aht) ;?> </span>
				<span class="font" style="top : 45; left: 10">AHT </span>
				<span class="content black" style="left: 100; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black" style="left: 100; top: 10 ;color: black;" ><?php echo $aht_score; ?> %</span>
			</div>
		</div>
		

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 40%">
				<img src="style/acw.png" height="40px" width="40px" style="position: absolute; left: 160; top: 35;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($acw) ?> % </span>
				<span class="font" style="top : 50; left: 10 ;">ACW </span>
				<span class="content black" style="left: 108; top: 49; font-size: 18px">Score</span>
				<span class="content black" style="left: 108; top: 10;" > <?php echo $acw_score; ?> %</span>
			</div>
		</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 35%">
				<img src="style/hold.png" height="50px" width="50px" style="position: absolute; left: 160; top: 30;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top : 50; left: 10">Hold </span>
				<span class="content black" style="left: 108; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black " style="left: 108; top: 10; color: black;" > <?php echo $hold_score; ?> %</span>
			</div>
		</div>	


	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 63%">
				<span class="content" style="top: 10; left: 40"> <?php echo round($outbound_aht) ?>  </span>
				<span class="font" style="top : 50; left: 10">Outbound AHT </span>
				<span class="content black" style="left: 145; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black" style="left: 145; top: 10; color: black;" > <?php echo $outbound_score; ?> %</span>
			</div>
		</div>
		
<!---------------------------------------------------------------------------------------------------------------------- -->
	
	<div clas="aht" style="background-color: #01c5ed; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #009bbb; width: 45%">
				<img src="style/call.png" style="position: absolute; width: 50px;height: 50px; left: 20; top: 25 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo $fcr ?> % </span>
				<span class="font" style="top:5; left: 130">FCR</span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $fcr_score ; ?> %</span>
			</div>
	</div>	


	<div clas="aht" style="background-color: #09a55c96; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 45%">
				<img src="style/absent.png" style="position: absolute; width: 70px;height: 70px; left: 15; top: 10 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo $agent_ttb ?> % </span>
				<span class="font" style="top:5; left: 110">Agent TTB </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $agent_t ; ?> %</span>
				

				
			</div>
	</div>



	<div clas="aht" style="background-color: #f39817ab; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<img src="style/Adherence.png" style="position: absolute; width: 80px;height: 80px; left: 10; top: 12 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($adherence) ?> % </span>
				<span class="font" style="top:5; left: 110">Adherence </span> 

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $adherence_score; ?> %</span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #dd4d33b8; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<img src="style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($nps) ?> % </span>
				<span class="font" style="top:5; left: 130">NPS </span> 

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" ><?php echo $nps_score; ?> %</span>
			</div>
	</div>			
	


<!------------------------------------------------------------------------------------------------------------------------->
	
	<div clas="aht" style="background-color: #01c5ed66; height:60px; width:87px; margin-right: 35px; position: relative; ">
				<div style="height: 40% ; background-color: #01c5ed; width: 100%">
					<span class="content black" style="top: 27; left: 37"> <?php echo $ctc + $compliance ;?> </span>
					<span class="font" style="top : 3; left: 24">CTC</span>
					
				</div>
	</div>




	<div clas="aht" style="background-color: #01c5ed66; height:60px; width:87px; margin-right: 49px; position: relative; ">
			<div style="height: 40% ; background-color: #01c5ed; width: 100%">
				<span class="content black" style="top: 27; left: 37"> <?php echo $ctb ?> </span>
				<span class="font" style="top : 3; left: 24 ;">CTB </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #09a55c96; height:127px; width:210px; margin-right: 50px; position: relative;margin-bottom: -70px;">
			<div style="height: 35% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 80px; left: 87px"> <?php echo $quality_score ?> %</span>
				<span class="font" style="top : 10px; left: 58px">Quality Score </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #f39817ab; height:60px; width:87px; margin-right: 35px; position: relative; ">
				<div style="height: 40% ; background-color: #f39817; width: 100%">
					<span class="content black" style="top: 27; left: 37"> <?php echo $sick  ;?> </span>
					<span class="font" style="top : 3; left: 28">Sick</span>
					
				</div>
	</div>




	<div clas="aht" style="background-color: #f39817ab; height:60px; width:87px; margin-right: 50px; position: relative; ">
			<div style="height: 40% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 27; left: 37"> <?php echo $absent; ?> </span>
				<span class="font" style="top : 3; left: 20 ;">Absent </span>
				
			</div>
	</div>



	<div clas="aht" style="background-color: #dd4d33a8; height:130px; width:210px; margin-right: 50px; position: relative;margin-bottom: -70px; ">
			<div style="height: 35% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 75px; left: 83"> <?php echo $row['absentscore']; ?> %</span>
				<span class="font" style="top : 10px; left: 40px">Absenteeism Score </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #01c5ed66; height:60px; width:87px; margin-right: 34px; position: relative;margin-top: -28px; ">
			<div style="height: 40% ; background-color: #01c5ed; width: 100%">
				<span class="content black" style="top: 30px; left:38px"> <?php echo $nc;?> </span>
				<span class="font" style="top : 3px; left: 32">NC </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: unset; height:60px; width:87px; margin-right: 50px; position: relative;margin-top: -28px; ">
			<div style="height: 40% ; background-color: unset; width: 100%">
				<span class="content black" style="top: 30px; left:38px"> <?php $rejection ?> </span>
				<span class="font" style="top : 3px; left: 12px">Rejection </span>
				
			</div>
	</div>


	

	



<!--------------------------------------------------------------------------------------------------------------->

<div clas="aht" style="/*background-color: #1b1b1b38;*/ height:80px; width:160px; margin-right: 100px; position: relative; ">
			<!--	<div style="height: 10% ; background-color: #01c5ed; width: 100%">
					<span class="content black" style="top: 45; left: 75"> <?php echo $attiude ;?> </span>
					<span class="font black" style="top : 15; left: 50">Attitude</span>
					
				</div>  -->
	</div>

	<div clas="aht" style="background-color: #f39817ab; height:60px; width:212px; margin-right: 50px; position: relative;margin-top: -28px ">
			<div style="height: 10% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 30px; left: 100px"> <?php echo $leave?> </span>
				<span class="font black" style="top : 9; left: 65 ;">Leave Early </span>
				
			</div>
	</div>






	<div clas="aht" style="/*background-color: #1b1b1b38; */height:80px; width:160px; margin-right: 50px; position: relative; ">
		<!--	<div style="height: 10% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 45; left: 75"> <?php echo $over_promising ;?> </span>
				<span class="font black" style="top : 15; left: 30 ;">Over Promising </span>
				
			</div>-->
	</div>

	<div clas="aht" style="background-color: #1b1b1b38; height:60px; width:210px; margin-right: 50px; position: relative;margin-top: -55px; ">
			<div style="height: 10% ; background-color: #01c5ed; width: 100%">
				<span class="content black" style="top: 30px; left:100px"> <?php ?> </span>
				<span class="font black" style="top : 8px; left: 53px">Over Promising </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #1b1b1b38; height:60px; width:210px; margin-right: 50px; position: relative;margin-top: -55px ">
			<div style="height: 10% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 30px; left: 100px"> <?php echo $wron_transaction ;?> </span>
				<span class="font black" style="top : 8; left: 40"> Wrong Transaction </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #1b1b1b38; height:60px; width:100px; margin-right: 10px; position: relative;margin-top: -55px ">
			<div style="height: 10% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 30px; left: 45px"> <?php echo $attitude ?> </span>
				<span class="font black" style="top : 8; left: 23px">Attitude </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #1b1b1b38; height:60px; width:100px; margin-right: 50px; position: relative;margin-top: -55px ">
			<div style="height: 10% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 30px; left: 45px"> <?php echo $wrong_info?> </span>
				<span class="font black" style="top : 8px; left: 10px">Wrong Info  </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #1b1b1b38; height:60px; width:210px; margin-right: 50px; position: relative;margin-top: -55px ">
			<div style="height: 10% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 30; left: 90"> <?php echo $complaint_score ;?> %</span>
				<span class="font black" style="top : 8; left: 48">Complaints Score </span>
				
			</div>
	</div>

	<!---------------------------------------------------------------------------------------------------->
	
	<?php 
	/*
	if($id < 111){
		?>
	<a href="sv_score_more.php" style="height: 83px; margin: 0 auto; " title="More details">
		<?php
	}else if($id >= 111 and $id <= 555 ){
		?>
		<a href="manger_score_more.php" style="height: 83px; margin: 0 auto; " title="More details">
			<?php
	}
*/
	?>

		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px;margin:0 auto;  position: relative;margin-left: 410px; ">
				<div style="height: 10% ; background-color: #dd4d33; width: 100%">
					<span class="content black" style="top: 45px; left: 75px"> <?php echo $final_score;?> %</span>
					<span class="font black" style="top : 13px; left: 70px">Final Score </span>
					
				</div>
		</div>
	</a>




</div>

->

<?php

//include'main_page.php';


