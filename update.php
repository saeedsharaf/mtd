<?php

// update nps 
// insert from template sheet 
// update team_id & manger id

//update daash board
	// use dashboard score copy data into pavot table source shet then insert from template sheet 

//update aht & hold & outpound aht
	// open cmc and go to historical then designer then n-tedata-generic-daily-utlization
	// use cms template from tamer template 
	// then delete all data into august1 then use score template from mtd folder the insert data again ( make sure you insert hv only so search login_id from hv structure)
	// then open teli opti and got to agent-matric
	// then update adherance use adherance template where login _id into august 1 

	// then clear data into august by below code

	UPDATE `` SET `no_calls` = '', `aht`='',`acw`='',`hold`='',`outbound`='',`sick`='',`emerg`='',`absent`='',`leave_early`='',`adherance`='',`nps`='',
	`nps_calls`='',`fcr`='',`agent_ttb`='',`ctc`='',`ctb`='',`compliance`='',`nc`='',`quality_score`='',`rejection`='',`attiude`='',
	`over_promising`='',`wrong_info`='',`wron_transaction`='',`wrong_ts`='',`lack_follow`='',`complaint_score`='',`final_score`='', `absentscore` = '' 

	// then use test.php to update nps into august drictly
	// then use test2.php


	//equation used

	$aht = ($row['acd_time'] + $row['hold_time'] + $row['acw_time']) / $row['acd_calls'];

	$acw = $row['acw_time'] / ($row['hold_time'] + $row['acw_time'] + $row['acd_time']);

	$hold = $row['hold_time'] / ($row['hold_time'] + $row['acw_time'] + $row['acd_time'];

	$outbound_aht = ($row['aux_out_time'] + $row['acw_out_time']) / ($row['acw_out calls'] + $row['aux_out_calls']);
	
	$sl = ($acd_tr1 + $acd_tr2 + $acd_tr3 + $acd_tr4 ) / ($total__calls - $aban_tra1);

	$aban_percentage = ($aban_calls / $total_calls) * 100 ;

	$outbound_calls = $aux_out_of_call + $acw_out_of_calls;

	$outbound_percentage = ($aux_out_of_calls + $acw_out_of_calls) / $total_calls) *100
	

