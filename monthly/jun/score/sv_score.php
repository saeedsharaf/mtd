<?php
error_reporting(0);
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
	font-size: 21px;
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

$id = $_SESSION['id'];


if($id < 111){
$sql="select * from jun where sv_id = '$id'";
$result=$cont->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	$acd_time += $row['acd_time'];
	$hold_time += $row['hold_time'];
	$acw_time +=  $row['acw_time'];
	$acd_calls += $row['acd_calls'];
	$aux_out_time += $row['aux_out_time'];
	$acw_out_time += $row['acw_out_time'];
	$aux_out_calls += $row['aux_out_calls'];

	}
}
	$aht = ($acd_time + $hold_time + $acw_time) / $acd_calls;
	$acw = ($acw_time) / ($hold_time + $acw_time + $acd_time) * 100;
	$hold = ($hold_time) / ($hold_time + $acw_time + $acd_time) * 100 ;
	$outbound_aht = ($aux_out_time + $acw_out_time) / ($acw_out_time + $aux_out_calls) ;

}else if($id > 555){ // for agent
	$idd = $_SESSION['login_id'];

	$sql="select * from jun where login_id = '$idd'";
$result=$cont->query($sql);
$row = $result->fetch_assoc();


$aht = round($row['aht'],2);
$acw = round($row['acw'],1) ;
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
$sick = $row['sick'];
$over_promising = $row['over_promising'];
$leave_early = $row['leave_early'] ;
$attitude = $row['attiude'];



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




if($fcr > 60 or $fcr == ''){
	$fcr_score = 2;
}else{
	$fcr_score = 0;
}



if($nps > 45 or $nps == '' ){
	$nps_score = 10;
}else{
	$nps_score = 0;
}


if($agent_ttb > 80 or $agent_ttb == ''){
	$agent_t = 8;

}else{
	$agent_t = 0;
};

if($absent < 1){
	$absnt_score = 5;
}else{
	$absent_score= 0;
}


if($row['sick'] < 1){
	$sick_score = 5 ;
}else{
	$sick_score = 0;
}

if($leave_early <= 7200 and $leave_early > 0 ){
	$leave = 1 ;
} else if ($leave_early > 7200 ){
	$leave = 2;
}

/*
$aht = $row['aht'] * 24 * 3600 ;
$acw = $row['acw'] * 100 ;
$hold = $row['hold'] *100;
$outbound_aht = $row['outbound'] *24 * 3600;
$calls_sr = $row['calls_vs_sr'];
$absent = $row['absent'] * 100;
$adherence = $row['adherance'] * 100;
$nps = $row['nps'] * 100;
$ctc = $row['ctc'] ;
$ctb = $row['ctb'];
$nc = $row['nc'];
$compliance = $row['compliance'];
$quality_score = round($row['quality_score']*100);
$attiude = $row['attiude'];
$over_promising = $row['over_promising'];
$wrong_info = $row['wrong_info'];
$wron_transaction = $row['wron_transaction'];
$complaint_score = round($row['complaint_score']*100);
$final_score = round($row['final_score']*100);

*/

}else if($id >= 111 and $id <= 555){
	$idd = $_GET['id'];

	$sql="select * from jun where manger_id = '$id'";
$result=$cont->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	$acd_time += $row['acd_time'];
	$hold_time += $row['hold_time'];
	$acw_time +=  $row['acw_time'];
	$acd_calls += $row['acd_calls'];
	$aux_out_time += $row['aux_out_time'];
	$acw_out_time += $row['acw_out_time'];
	$aux_out_calls += $row['aux_out_calls'];

	}
}



$aht = ($acd_time + $hold_time + $acw_time) / $acd_calls;
$acw = ($acw_time) / ($hold_time + $acw_time + $acd_time) * 100;
$hold = ($hold_time) / ($hold_time + $acw_time + $acd_time) * 100 ;
$outbound_aht = ($aux_out_time + $acw_out_time) / ($acw_out_time + $aux_out_calls) ;

}







if($result->num_rows > 0){

?>
<div style=" margin:0 auto ; margin-top: 100px ;width: 35%; height:70px;background-color: #1b1b1b38; text-align: center;position: relative;">
	<span class="content" style="left: 160px;font-size: 19px;top:10px; color: black"><?php echo $row['name']; ?> </span>
	
	<div style="position: absolute; background-color: #01c5ed; width: 30%;height: 100%">
		<span class="content" style="left:29px;top: 5px;"><?php echo $idd ; ?>  </span>
		<span class="content" style="left: 30px;font-size: 17px;top:40px;">Login Id </span>

	</div>	
</div>


<div class="s" style="max-width:1080px;min-width:1080px; margin: 0 auto;  height:595px ; display: flex; margin-top: 40px;flex-wrap: wrap; margin-left: 175px;">
	
		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 35%">
				<img src="../../../style/aht.png" height="90px" width="90px" style="position: absolute; left: 140; top: 10;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($aht) ;?> </span>
				<span class="font" style="top : 45; left: 10">AHT </span>
				<span class="content black" style="left: 100; top: 49; color: black; font-size: 18px">Score</span>
				<span class="content black" style="left: 100; top: 10 ;color: black;" ><?php echo $aht_score; ?> %</span>
			</div>
		</div>
		

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 40%">
				<img src="../../../style/acw.png" height="40px" width="40px" style="position: absolute; left: 160; top: 35;" >
				<span class="content" style="top: 10; left: 10"> <?php echo round($acw) ?> % </span>
				<span class="font" style="top : 50; left: 10 ;">ACW </span>
				<span class="content black" style="left: 108; top: 49; font-size: 18px">Score</span>
				<span class="content black" style="left: 108; top: 10;" > <?php echo $acw_score; ?> %</span>
			</div>
		</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 35%">
				<img src="../../../style/hold.png" height="50px" width="50px" style="position: absolute; left: 160; top: 30;" >
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
				<img src="../../../style/call.png" style="position: absolute; width: 50px;height: 50px; left: 20; top: 25 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo $fcr ?> % </span>
				<span class="font" style="top:5; left: 130">FCR</span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $fcr_score ; ?> %</span>
			</div>
	</div>	


	<div clas="aht" style="background-color: #09a55c96; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 45%">
				<img src="../../../style/absent.png" style="position: absolute; width: 70px;height: 70px; left: 15; top: 10 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo $agent_ttb ?> % </span>
				<span class="font" style="top:5; left: 110">Agent TTB </span>

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $agent_t ; ?> %</span>
				

				
			</div>
	</div>



	<div clas="aht" style="background-color: #f39817ab; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<img src="../../../style/Adherence.png" style="position: absolute; width: 80px;height: 80px; left: 10; top: 12 ">
				<span class="content" style="top:30; left: 130 ; font-size: 20px;"> <?php echo round($adherence) ?> % </span>
				<span class="font" style="top:5; left: 110">Adherence </span> 

				<span class="content black" style="left: 130; top: 55;  font-size: 18px">Score</span>
				<span class="content black" style="left: 129; top:76; font-size: 20px;" > <?php echo $adherence_score; ?> %</span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #dd4d33b8; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 ">
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
				<span class="content black" style="top: 70px; left: 80"> <?php echo $row['absentscore']?> % </span>
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
				<span class="content black" style="top: 30px; left:38px">  </span>
				<span class="font" style="top : 3px; left: 12px"> </span>
				
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
				<span class="content black" style="top: 30px; left:100px"> <?php echo $over_promising ;?> </span>
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
	if($id < 111){
		?>
	<a href="sv_score_more.php" style="height: 83px; margin: 0 auto; " title="More details">
		<?php
	}else if($id >= 111 and $id <= 555 ){
		?>
		<a href="manger_score_more.php" style="height: 83px; margin: 0 auto; " title="More details">
			<?php
	}

	?>

		<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:210px;margin:0 auto;  position: relative;margin-left: 410px; ">
				<div style="height: 10% ; background-color: #dd4d33; width: 100%">
					<span class="content black" style="top: 45px; left: 75px"> <?php echo $final_score;?> %</span>
					<span class="font black" style="top : 13px; left: 70px">Final Score </span>
					
				</div>
		</div>
	</a>




</div>


<?php
} else{
	?>
	<div style="margin:0 auto ; height:100px; width: 200px; margin-top: 100px;"> No Result Found
	</div>
	<?php
}

include'../main_page.php';


?>
<style>

	.container{
		width: 0px;
		height: 0px;
	}

	body{

	}