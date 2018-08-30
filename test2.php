<?php
error_reporting(0);
session_start();
set_time_limit(0);
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
//include'../main_page.php';
?>
			
		

<?php 
include'config/connect.php';
?>


<?php
$id = $_SESSION['id'];
$sql="select * from august1  ";
$result=$cont->query($sql);

if($result->num_rows > 0){


	while($row = $result->fetch_assoc()){

		$login = $row['login_id'];

		$aht = ($row['acd_time'] + $row['hold_time'] + $row['acw_time']) / $row['acd_calls'];
		$acw = ($row['acw_time']) / ($row['hold_time'] + $row['acw_time'] + $row['acd_time']) * 100;
		$hold = ($row['hold_time']) / ($row['hold_time'] + $row['acw_time'] + $row['acd_time']) * 100 ;
		$outbound_aht = ($row['aux_out_time'] + $row['acw_out_time']) / ($row['acw_out_time'] + $row['aux_out_calls']) ;


$nps = $row['nps'];
$fcr = $row['fcr'];
$agent_ttb = $row['agent_target'];
$absent = $row['absent'];
$adherence = $row['adh'] * 100 ;
$outbound = $row['outbound'];
$sick = $row['sick'];
$emerg = $row['emerg'];
$leave_early = $row['leave_early'];
$nps_calls = $row['nps_calls'];
$ctc = $row['ctc'];
$ctb = $row['ctb'];
$nc = $row['nc'];
$c2compliance = $row['c2compliance'];
$attitude = $row['attitude'];
$over_promising = $row['over_promising'];
$wrong_info = $row['wrong_info'];
$wrong_action = $row['wrong_action'];



		$zero_aht = is_nan($aht);
		$zero_hold= is_nan($hold);
		$zero_acw = is_nan($acw);
		$zero_outboundaht = is_nan($outbound_aht);
		$zero_outbound = is_nan($outbound);

		if($zero_aht === true ){
			$aht = '';
		};
		if($zero_hold === true){
			$hold = '';
		};

		if($zero_acw === true){
			$acw = '';
		};

		if($zero_outboundaht === true){
			$outbound_aht = '';
		};

		if($zero_outbound === true){
			$outbound = '';
		};

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
$final_score = round($row['final_score']*100,2);

*/

if($aht < 260 or $aht == '' ){
	$aht_score = 10;

}else{
	$aht_score = 0;
};


if($acw < 5 or $acw == ''){
	$acw_score = 5;
}else{
	$acw_score = 0;
};

if($hold < 3 or $hold == ''){
	$hold_score = 5;
}else{
	$hold_score = 0;
};

if($outbound_aht < 300 or $outbound_aht == ''  ){
	$outbound_score = 5;
}else{
	$outbound_score = 0;
};



if($adherence > 92 ){
	$adherence_score = 10;
}else{
	$adherence_score = 0;
};




if($fcr > 60 or $fcr == ''  ){
	$fcr_score = 2;
}else{
	$fcr_score = 0;
};



if($nps > 45 or $nps == '' ){
	$nps_score = 10;
}else{
	$nps_score = 0;
};


if($agent_ttb > 80 or $agent_ttb == '' ){
	$agent_t = 8;

}else{
	$agent_t = 0;
};



//below code for Absenteeism
$absentscore = 10;

$absent_score = $absent * 5;
$sick_score = $sick * 2.5;
$emerg_score = $emerg * 2.5 ;


if($leave_early <= 7200){
	$early_score = 0;
}else if($leave_early > 7200){
	$early_score = 1;
}else if($leave_early > 10800){
	$early_score = 3;
}



$final_absentscore = $absentscore - ($absent_score + $sick_score + $emerg_score + $early_score  );



/*
if($absent < 1){
	$absent_score = 5;
}else{
	$absent_score= 0;
};

if($sick < 1){
	$sick_score = 2.5;
}else{
	$sick_score = 0;
};
*/

//below code to calculate ctc & ctb score

$qualityscore = 20 ;
$ctc_score = $ctc * 2.5 ;
$ctb_score = $ctb * 2.5;
$c2compli = $c2compliance * 2.5 ;
$nc_socre = $nc * 1.5 ;

$final_quality_score = $qualityscore - ($ctc_score + $ctb_score + $c2compli + $nc_socre );

/*
if(($ctc + $ctb) < 1){
	$ctc_score = 10;
} else if (($ctc + $ctb) == 1 ){
	$ctc_score = 7.5;
}else if (($ctc + $ctb) == 2 ){
	$ctc_score = 5;
} else if (($ctc + $ctb) == 3 ){
	$ctc_score = 2.5;
}else if (($ctc + $ctb) > 3 ){
	$ctc_score = 0;
}

//below code to calculate c2compliance
if($c2compliance < 1){
	$complaint_score = 8;
} else if($c2compliance == 1){
	$complaint_score = 5.5;
} else if($c2compliance == 2){
	$complaint_score = 3;
}else if($c2compliance == 3){
	$complaint_score = 0.5;
} else {
	$complaint_score = 0;
}


//below code to calculate nc
if($nc < 1){
	$nc_socre = 2;
} else if($nc == 1){
	$nc_socre = 0.5;
}else{
	$nc_socre = 0;
}

*/

//below code to calculate complaint
$qcomplaint_score = 15;

$attitude_score = $attitude * 5 ;
$over_promising_score = $over_promising * 3;
$wrong_info_score = $wrong_info * 3 ;
$wrong_action_score = $wrong_action * 3;

$final_score_complaint = $qcomplaint_score - ($attitude_score + $over_promising_score + $wrong_info_score + $wrong_action_score);


/*
if($attitude > 0){
	$attitude_score = 0;
}else{
	$attitude_score = 5;
}


if($over_promising > 0){
	$over_promising_score = 0;
}else{
	$over_promising_score = 3;
}


if($wrong_info > 0){
	$wrong_info_score = 0;
} else {
	$wrong_info_score = 3;
}


if($wrong_action > 0){
	$wrong_action_score = 0;

} else{
	$wrong_action_score = 3;
}

*/







$final_score=$aht_score + $acw_score +$hold_score + $outbound_score + $adherence_score + $nps_score + $fcr_score + $agent_t + $final_absentscore + $final_quality_score + $final_score_complaint ;


$no_calls = $row['acd_calls'] ;
$leave_early = $row['leave_early'] /24/3600 ;


//$saeed = " update august set no_calls = '$no_calls' , aht = '$aht' , acw = '$acw' , hold = '$hold' , outbound = '$outbound_aht', adherance = '$adherence' , sick = '$sick' , emerg = '$emerg' , absent = '$absent' , nps = '$nps' , fcr = '$fcr' , agent_ttb = '$agent_ttb', nps_calls = '$nps_calls', ctc = '$ctc', ctb = '$ctb', nc = '$nc', compliance = '$c2compliance', attiude = '$attitude', over_promising = '$over_promising', wrong_info = '$wrong_info', wron_transaction = '$wrong_action', final_score = '$final_score' , quality_score = '$final_quality_score' , complaint_score = '$final_score_complaint', leave_early = '$leave_early'  where login_id = '$login' ";



$saeed = " update august set no_calls = '$no_calls' , aht = '$aht' , acw = '$acw' , hold = '$hold' , outbound = '$outbound_aht', adherance = '$adherence' , sick = '$sick' , emerg = '$emerg' , absent = '$absent' , nps = '$nps' , fcr = '$fcr' , agent_ttb = '$agent_ttb', nps_calls = '$nps_calls' where login_id = '$login' ";




if($cont->query($saeed) === true){
	
	echo $aht ; '<br>';
	echo $login . $final_score . '<br>';
	echo $aht_score . ' AHT'.'<br>';
	echo $acw_score . ' acw'. '<br>';
	echo $hold_score  . ' hold' . '<br>';
	echo $outbound_score . ' outbound'.'<br>';
	echo $adherence_score . ' adh'. '<br>';
	echo $nps_score . ' nps' . '<br>';
	echo $fcr_score . ' fcr' . '<br>';
	echo $agent_t  . ' agent_t' . '<br>';
	echo $final_absentscore  . ' final_absentscore' . '<br>';
	echo $final_absentscore  . ' final_absentscore' . '<br>';
	echo $early_score  . '<br>';
	echo $final_score_complaint  . ' final_score_complaint' . '<br>';




	
}else{
	echo $cont->error . '<br>' ;
}





							}
						}








