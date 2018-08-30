<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
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



$sql="select * from august where manger_id >= 111 and manger_id < 444 ";
$result=$cont->query($sql);
$aht_achiever = 0;
$aht_notachiever = 0;
$acw_notachiever = 0;
$acw_achiever = 0;
$hold_notachiever = 0;
$hold_achiever = 0;
$outbound_aht_notachiever = 0;
$outbound_aht_achiever = 0;
$adherence_notachiever = 0;
$adherence_achiever = 0;
$nps_notachiever = 0;
$nps_achiever = 0 ;
$ctc_notachiever = 0;
$ctc_achiever = 0;
$ctb_notachiever = 0;
$ctb_achiever = 0;
$nc_notachiever = 0;
$nc_achiever = 0;
$compliance_notachiever = 0;
$compliance_achiever = 0;
$attiude_notachiever = 0;
$attiude_achiever = 0;
$over_promising_notachiever = 0;
$over_promising_achiever = 0;
$total = 0;




if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	$aht = round($row['aht'],2);
	$acw = round($row['acw'] ,2) ;
	$hold = round($row['hold'],2);
	$outbound_aht = round($row['outbound'],2);
	$adherence = $row['adherance'];
	$nps = $row['nps'];
	$ctc = $row['ctc'] ;
	$ctb = $row['ctb'];
	$nc = $row['nc'];
	$compliance = $row['compliance'];
	$attiude = $row['attiude'];
	$over_promising = $row['over_promising'];
	$wrong_info = $row['wrong_info'];
	$total++;
		if($aht > 260 ){
			$aht_notachiever++;
		}else{
			$aht_achiever++;
		}

		if($acw > 5 ){
			$acw_notachiever++;
		}else{
			$acw_achiever++;
		}


		if($hold > 3 ){
			$hold_notachiever++;
		}else{
			$hold_achiever++;
		}


		if($outbound_aht > 300 ){
			$outbound_aht_notachiever++;
		}else{
			$outbound_aht_achiever++;
		}


		if($adherence > 92 ){
			$adherence_notachiever++;
		}else{
			$adherence_achiever++;
		}


		if($nps > 45 ){
			$nps_notachiever++;
		}else{
			$nps_achiever++;
		}

		if($ctc > 0 ){
			$ctc_notachiever++;
		}else{
			$ctc_achiever++;
		}

		if($ctb > 0 ){
			$ctb_notachiever++;
		}else{
			$ctb_achiever++;
		}

		if($nc > 0 ){
			$nc_notachiever++;
		}else{
			$nc_achiever++;
		}


		if($compliance> 0 ){
			$compliance_notachiever++;
		}else{
			$compliance_achiever++;
		}


		if($attiude > 0 ){
			$attiude_notachiever++;
		}else{
			$attiude_achiever++;
		}


		if($over_promising > 0 ){
			$over_promising_notachiever++;
		}else{
			$over_promising_achiever++;
		}

	}
}







?>



<div class="s" style="width:80%; margin: 0 auto;  height:90% ; display: flex; margin-top: 100px;flex-wrap: wrap; margin-left: 175px;">
	
		<div clas="aht" style="background-color: #1b1b1b38; height:100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 45%">
				<img src="../../../style/aht.png" height="90px" width="90px" style="position: absolute; left: 140; top: 30;" >
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $aht_achiever ;?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($aht_achiever / $total) *100 ),1);?> % </span>
				<a href="aht.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>
				<a href="aht.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($aht_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" ><?php echo $aht_notachiever ?></span>

			</div>
		</div> 
		

	<div clas="aht" style="background-color: #1b1b1b38; height:100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 45%">
				<img src="../../../style/acw.png" height="35px" width="35px" style="position: absolute; left: 170; top: 60;" >
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $acw_achiever ?>  </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($acw_achiever / $total) *100 ),1);?> % </span>
				<a href="acw.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>
				<span class="font" style="top : 41; left: 173 ;font-size: 13px;">ACW </span>
				<a href="acw.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($acw_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" > <?php echo $acw_notachiever; ?></span>
			</div>
		</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<img src="../../../style/hold.png" height="50px" width="50px" style="position: absolute; left: 165; top: 55;" >
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $hold_achiever ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($hold_achiever / $total) *100 ),1);?> % </span>
				<a href="hold.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span></a>
				<span class="font" style="top : 45; left: 175 ;font-size: 13px;">Hold </span>
				<a href="hold.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($hold_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black " style="left: 125; top: 40 ;color: black;font-size: 20px" > <?php echo $hold_notachiever; ?></span>
			</div>
		</div>	


	<div clas="aht" style="background-color: #1b1b1b38; height:100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $outbound_aht_achiever ?>  </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($outbound_aht_achiever / $total) *100 ),1);?> % </span>
				<a href="outbound_aht.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span></a>
				<span class="font" style="top : 60; left: 155;font-size: 13px;">Outbound AHT </span>
				<a href="outbound_aht.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($outbound_aht_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black " style="left: 125; top: 40 ;color: black;font-size: 20px" > <?php echo $outbound_aht_notachiever; ?> </span>
			</div>
		</div>	
<!---------------------------------------------------------------------------------------------------------------------- -->

	




	<div clas="aht" style="background-color: #01c5ed66; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 45%">
				<img src="../../../style/Adherence.png" style="position: absolute; width: 45px;height: 45px; left: 165; top: 55 ">
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $adherence_achiever ?>  </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($adherence_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:40; left: 145; font-size: 14px;">Adherence </span>
				<a href="adherance.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>

				<a href="adherance.php?id=2" title="Not"><span class="content black" style="left: 105; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($adherence_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 105; top: 40 ;color: black;font-size: 20px" > <?php echo $adherence_notachiever; ?></span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #09a55c96; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 45%">
				<img src="../../../style/nps2.png" style="position: absolute; width: 45px;height: 45px; left: 165; top: 55 ">
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $nps_achiever; ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($nps_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:40; left: 177; font-size: 14px;">NPS </span>
				<a href="nps.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span></a>

				<a href="nps.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($nps_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" ><?php echo $nps_notachiever; ?> </span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #f39817a1; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<!--<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $ctc_achiever ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($ctc_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:70; left: 170; font-size: 14px;">CTC </span>
				<a href="ctc.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>

				<a href="ctc.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($ctc_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" ><?php echo $ctc_notachiever ?> </span>
			</div>
	</div>



	<div clas="aht" style="background-color: #dd4d33a8; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<!--<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $ctb_achiever ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($ctb_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:70; left: 170; font-size: 14px;">CTB </span>
				<a href="ctb.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>

				<a href="ctb.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($ctb_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" ><?php echo $ctb_notachiever ?> </span>
			</div>
	</div>		



<!------------------------------------------------------------------------------------------------------------------------->

	<div clas="aht" style="background-color: #1b1b1b38; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #01c5ed; width: 45%">
			<!--	<img src="../../../style/Adherence.png" style="position: absolute; width: 50px;height: 55px; left: 159; top: 25 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $nc_achiever ?>  </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($nc_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:70; left: 170; font-size: 14px;">NC </span>
				<a href="nc.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span></a> 

				<a href="nc.php?id=2" title="Not"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($nc_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" > <?php echo $nc_notachiever ?></span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #1b1b1b38; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #09a55c; width: 45%">
				<!--<img src="../../../style/nps2.png" style="position: absolute; width: 50px;height: 55px; left: 159; top: 25 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $compliance_achiever; ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($compliance_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:70; left: 139; font-size: 14px;">Compliance </span>
				<a href="compliance.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span></a> 

				<a href="compliance.php?id=2" title="Not"><span class="content black" style="left: 102; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($compliance_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 104; top: 40 ;color: black;font-size: 20px" ><?php echo $compliance_notachiever ?> </span>
			</div>
	</div>	



	<div clas="aht" style="background-color: #1b1b1b38; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #f39817; width: 45%">
				<!--<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $attiude_achiever ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($attiude_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:70; left: 157; font-size: 14px;">Attitude </span>
				<a href="attitude.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>

				<a href="attitude.php?id=2" title="Achiever"><span class="content black" style="left: 120; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($attiude_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 125; top: 40 ;color: black;font-size: 20px" ><?php echo $attiude_notachiever ?> </span>
			</div>
	</div>



	<div clas="aht" style="background-color: #1b1b1b38; height: 100px; width:210px; margin-right: 50px; position: relative; ">
			<div style="height: 100% ; background-color: #dd4d33; width: 45%">
				<!--<img src="../../../style/nps2.png" style="position: absolute; width: 80px;height: 60px; left: 10; top: 21 "> -->
				<span class="content" style="top: 40; left:25;font-size: 20px"> <?php echo $over_promising_achiever ?> </span>
				<span class="content" style="top: 5; left: 10"> <?php echo round((($over_promising_achiever / $total) *100 ),1);?> % </span>
				<span class="font" style="top:60; left: 146; font-size: 14px;">Over Promising </span>
				<a href="over_promising.php?id=1" title="Achiever"><span class="font" style="top : 68; left: 10">Achiever </span> </a>

				<a href="over_promising.php?id=2" title="Not"><span class="content black" style="left: 102; top: 68; color: black; font-size: 18px">Not</span></a>
				<span class="content" style="top: 5; left: 115;color: black"> <?php echo round((($over_promising_notachiever / $total) *100 ),1);?> % </span>
				<span class="content black" style="left: 104; top: 40 ;color: black;font-size: 20px" ><?php echo $over_promising_notachiever?> </span>
			</div>
	</div>
	


<!--------------------------------------------------------------------------------------------------------------
<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
				<div style="height: 10% ; background-color: #01c5ed; width: 100%">
					<span class="content black" style="top: 45; left: 75"> <?php echo $attiude ;?> </span>
					<span class="font black" style="top : 15; left: 50">Attitude</span>
					
				</div>
	</div>




	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #09a55c; width: 100%">
				<span class="content black" style="top: 45; left: 75"> <?php echo $over_promising ;?> </span>
				<span class="font black" style="top : 15; left: 30 ;">Over Promising </span>
				
			</div>
	</div>

	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #f39817; width: 100%">
				<span class="content black" style="top: 45; left:75"> <?php echo $wrong_info;?> </span>
				<span class="font black" style="top : 15; left: 35">Wrong Info </span>
				
			</div>
	</div>


	<div clas="aht" style="background-color: #1b1b1b38; height:80px; width:160px; margin-right: 50px; position: relative; ">
			<div style="height: 10% ; background-color: #dd4d33; width: 100%">
				<span class="content black" style="top: 45; left: 75"> <?php echo $wron_transaction ;?> </span>
				<span class="font black" style="top : 15; left: 15"> Wrong Transaction </span>
				
			</div>
	</div>

	
	<!---------------------------------------------------------------------------------------------------->




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