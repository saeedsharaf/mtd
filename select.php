<?php

// below code to get jan KPI
$jan = "select * from jan where login_id = '$oracle' ";
$jan_result = $cont->query($jan);
$jan_row = $jan_result->fetch_assoc();


//below code to get feb kpi
$feb = "select * from feb where login_id = '$oracle' ";
$feb_result = $cont->query($feb);
$feb_row = $feb_result->fetch_assoc();


//below code to get mar kpi
$mar = "select * from mar where login_id = '$oracle' ";
$mar_result = $cont->query($mar);
$mar_row = $mar_result->fetch_assoc();


//below code to get april kpi
$april = "select * from april where login_id = '$oracle' ";
$april_result = $cont->query($april);
$april_row = $april_result->fetch_assoc();


//below code to get may
$may = "select * from may where login_id = '$oracle' ";
$may_result = $cont->query($may);
$may_row = $may_result->fetch_assoc();

//below code to get jun kpi
$jun = "select * from jun where login_id = '$oracle' ";
$jun_result = $cont->query($jun);
$jun_row = $jun_result->fetch_assoc();

//below code to get july kpi
$july = "select * from july where login_id = '$oracle' ";
$july_result = $cont->query($july);
$july_row = $july_result->fetch_assoc();


//below code to get august kpi
$aug = "select * from august where login_id = '$oracle' ";
$aug_result = $cont->query($aug);
$aug_row = $aug_result->fetch_assoc();

if($aug_row['aht'] > 260){
	$aug_aht = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($aug_row['acw'] > 5 ){
	$aug_acw = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($aug_row['hold'] > 3 ){
	$aug_hold = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['nps'] < 45){
	$aug_nps = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['fcr'] < 60){
	$aug_fcr = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($aug_row['agent_ttb'] < 80){
	$aug_agent_ttb= 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['absentscore'] < 10){
	$aug_absent = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['adherance'] < 92){
	$aug_adh = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['quality_score'] < 20){
	$aug_quality = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($aug_row['complaint_score'] < 15){
	$aug_comp = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}









//below code to get sep kpi
$sep = "select * from sep where login_id = '$oracle' ";
$sep_result = $cont->query($sep);
$sep_row = $sep_result->fetch_assoc();


if($sep_row['aht'] > 260){
	$sep_aht_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($sep_row['acw'] > 5 ){
	$sep_acw_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($sep_row['hold'] > 3 ){
	$sep_hold_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['nps'] < 45){
	$sep_nps_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['fcr'] < 60){
	$sep_fcr_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


if($sep_row['agent_ttb'] < 80){
	$sep_agent_ttb_color= 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['absentscore'] < 10){
	$sep_absent_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['adherance'] < 92){
	$sep_adh_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['quality_score'] < 20){
	$sep_quality_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}

if($sep_row['complaint_score'] < 15){
	$sep_comp_color = 'style="background-color: #ffc7ce; color: #d6001b;" ' ;
}


// AHT

$jan_aht = $jan_row['aht'];
$feb_aht = $feb_row['aht'];
$mar_aht = $mar_row['aht'];
$april_aht = $april_row['aht'];
$may_aht = $may_row['aht'];
$jun_aht = $jun_row['aht'];
$july_aht = $july_row['aht'];
$aug_aht = $aug_row['aht'];
$sep_aht = $sep_row['aht'];

	if($jan_aht == ''){
		$jan_aht = '';
	}else{
		$jan_aht = $jan_row['aht'];
	}

	if($feb_aht == ''){
		$feb_aht = '';
	}else{
		$feb_aht = $feb_row['aht'];
	}

	if($mar_aht == ''){
		$mar_aht = '';
	}else{
		$mar_aht = $mar_row['aht'];
	}

	if($april_aht == ''){
		$april_aht = '';
	}else{
		$april_aht = $april_row['aht'];
	}

	if($may_aht == ''){
		$may_aht = '';
	}else{
		$may_aht = $may_row['aht'];
	}

	if($jun_aht == ''){
		$jun_aht = '';
	}else{
		$jun_aht = $jun_row['aht'];
	}

	if($july_aht == ''){
		$july_aht = '';
	}else{
		$july_aht = $july_row['aht'];
	}

	if($aug_aht == ''){
		$aug_aht = '';
	}else{
		$aug_aht = $aug_row['aht'];
	}

	if($sep_aht == ''){
		$sep_aht = '';
	}else{
		$sep_aht = $sep_row['aht'];
	}


	//////////////////////////////////////////////////////////////////////////////////

	//hold
	$jan_hold = $jan_row['hold'];
	$feb_hold = $feb_row['hold'];
	$mar_hold = $mar_row['hold'];
	$april_hold = $april_row['hold'];
	$may_hold = $may_row['hold'];
	$jun_hold = $jun_row['hold'];
	$july_hold = $july_row['hold'];
	$aug_hold = $aug_row['hold'];
	$sep_hold = $sep_row['hold'];


		if($jan_hold == ''){
		$jan_hold = '';
	}else{
		$jan_hold = $jan_row['hold'];
	}

	if($feb_hold == ''){
		$feb_hold = '';
	}else{
		$feb_hold = $feb_row['hold'];
	}

	if($mar_hold == ''){
		$mar_hold = '';
	}else{
		$mar_hold = $mar_row['hold'];
	}

	if($april_hold == ''){
		$april_hold = '';
	}else{
		$april_hold = $april_row['hold'];
	}

	if($may_hold == ''){
		$may_hold = '';
	}else{
		$may_hold = $may_row['hold'];
	}

	if($jun_hold == ''){
		$jun_hold = '';
	}else{
		$jun_hold = $jun_row['hold'];
	}

	if($july_hold == ''){
		$july_hold = '';
	}else{
		$july_hold = $july_row['hold'];
	}

	if($aug_hold == ''){
		$aug_hold = '';
	}else{
		$aug_hold = $aug_row['hold'];
	}

	if($sep_hold == ''){
		$sep_hold = '';
	}else{
		$sep_hold = $sep_row['hold'];
	}


		if($acw == ''){
			$acw = '';
		}else{
			$acw = round($row['acw'],1) . ' %';
		}


		if($hold == ''){
			$hold = '';
		}else{
			$hold = round($row['hold'],2) . ' %';
		}

		if($quality_score == ''){
			$quality_score = '';
		}else{
		$quality_score = $row['quality_score']	. ' %';
		}

		$final_score = $row['final_score'];

		if($final_score == 0){
			$final_score = '';
		}else{
			$final_score = $row['final_score'] . ' %';
		}


		if($nps == ''){
			$nps = '';
		}else {
			$nps = $row['nps'] . ' %';
		}

		if($adherence == ''){
			$adherence == '';
		}else{
			$adherence = $row['adherance'] . ' %';
		}

		if($fcr == ''){
			$fcr = '';
		} else{
			$fcr = $row['fcr'] . ' %';
		}

		if($agent_ttb == ''){
			$agent_ttb = '';
		}else{
			$agent_ttb = $row['agent_ttb'] . ' %';
		}

		if($complaint_score == ''){
			$complaint_score = '';
		}else{
			$complaint_score = $row['complaint_score'] . ' %';
		}



?>