<?php
//error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='../../../index.php' </script>
<?php
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
include'../../../config/connect.php';

$id = $_GET['id'];
$id = $_SESSION['login_id'];


$sql="select * from feb where login_id = '$id'";
$result=$cont->query($sql);
$row = $result->fetch_assoc();


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
$complaint_score = round($row['complaint_score']*100);
$final_score = round($row['final_score'],2);
$agent_ttb = $row['agent_ttb'];
$fcr = round($row['fcr'],0);

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



if($adherence > 92 ){
	$adherence_score = 10;
}else{
	$adherence_score = 0;
}




if($fcr > 60 ){
	$fcr_score = 2;
}else{
	$fcr_score = 0;
}



if($nps > 45 ){
	$nps_score = 10;
}else{
	$nps_score = 0;
}


if($agent_ttb > 80){
	$agent_t = 8;

}else{
	$agent_t = 0;
};

if($absent == 1){
	$absnt_score = 5;
}else{
	$absent_score= 0;
}




?>

<div class="s" style="width:80%; margin: 0 auto;  height:90% ; display: flex; margin-top: 100px;flex-wrap: wrap; margin-left: 175px;">
	
		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 35%">
				<img src="../../../style/aht.png" height="90px" width="90px" style="position: absolute; left: 140; top: 10;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($aht) ;?> </span>
				<span class="font" style="top : 45; left: 10">AHT </span>
				<span class="content black" style="left: 100; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black" style="left: 100; top: 10 ;color: black;" >10 %</span>
			</div>
		</div>
		

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 35%">
				<img src="../../../style/acw.png" height="40px" width="40px" style="position: absolute; left: 160; top: 35;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($acw) ?> % </span>
				<span class="font" style="top : 50; left: 10 ;">ACW </span>
				<span class="content black" style="left: 108; top: 49; font-size: 18px">Score</span>
				<span class="content black" style="left: 108; top: 10;" > 10 %</span>
			</div>
		</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 35%">
				<img src="../../../style/hold.png" height="50px" width="50px" style="position: absolute; left: 160; top: 30;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top : 50; left: 10">Hold </span>
				<span class="content black" style="left: 108; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black " style="left: 108; top: 10; color: black;" > 10 %</span>
			</div>
		</div>	


	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 63%">
				<span class="content" style="top: 10; left: 40"> <?php echo round($outbound_aht) ?>  </span>
				<span class="font" style="top : 50; left: 10">Outbound AHT </span>
				<span class="content black" style="left: 145; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black" style="left: 145; top: 10; color: black;" > 10 %</span>
			</div>
		</div>	
<!---------------------------------------------------------------------------------------------------------------------- -->

	<div clas="aht" style="background-color: #01c5ed; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #009bbb; width: 45%">
				<img src="../../../style/call.png" style="position: absolute; width: 50px;height: 50px; left: 20; top: 25 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top:5; left: 110">Calls vs SR's </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > 10 %</span>
			</div>
	</div>	


	<div clas="aht" style="background-color: #01c5ed; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #009bbb; width: 45%">
				<img src="../../../style/absent.png" style="position: absolute; width: 70px;height: 70px; left: 15; top: 10 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top:5; left: 110">Absenteeism </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > 10 %</span>
			</div>
	</div>



	<div clas="aht" style="background-color: #f39817ab; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<img src="../../../style/Adherence.png" style="position: absolute; width: 80px;height: 80px; left: 10; top: 12 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top:5; left: 110">Adherence </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > 10 %</span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #dd4d33b8; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($hold) ?> % </span>
				<span class="font" style="top:5; left: 130">NPS </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > 10 %</span>
			</div>
	</div>			



<!------------------------------------------------------------------------------------------------------------------------->

	<div clas="aht" style="background-color: #01c5ed66; height:80px; width:160px; margin-right: 50px; position: relative; ">
				<div style="height: 40% ; background-color: #01c5ed; width: 100%">
					<span class="content black" style="top: 45; left: 75"> 1 </span>
					<span class="font" style="top : 7; left: 65">CTC</span>
					
				</div>
	</div>




	<div clas="aht" style="background-color: #09a55c96; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 40% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0 </span>
				<span class="font" style="top : 7; left: 65 ;">CTB </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #f39817a1; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 40% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 45; left:75"> 0 </span>
				<span class="font" style="top : 7; left: 68">NC </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #dd4d33a8; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 40% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0 </span>
				<span class="font" style="top : 7; left: 40">Compliance </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #dd4d33a8; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 40% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0</span>
				<span class="font" style="top : 7; left: 40">Quality Score </span>
				
			</div>
	</div>


<!--------------------------------------------------------------------------------------------------------------->
<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
				<div style="height: 10% ; background-color: #01c5ed; width: 100%">
					<span class="content black" style="top: 45; left: 75"> 1 </span>
					<span class="font black" style="top : 15; left: 50">Attitude</span>
					
				</div>
	</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0 </span>
				<span class="font black" style="top : 15; left: 30 ;">Over Promising </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 45; left:75"> 0 </span>
				<span class="font black" style="top : 15; left: 35">Wrong Info </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0 </span>
				<span class="font black" style="top : 15; left: 15">Wrong Transaction </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 75"> 0</span>
				<span class="font black" style="top : 15; left: 15">Complaints Score </span>
				
			</div>
	</div>
	<!---------------------------------------------------------------------------------------------------->
		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; margin: 0 auto; ">
			<div style="height: 10% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 60"> 88 %</span>
				<span class="font black" style="top : 15; left: 45">Final Score </span>
				
			</div>
	</div>




</div>


<?php

include'../main_page.php';


?>
<style>

	.container{
		width: 0px;
		height: 0px;
	}

	body{

	}