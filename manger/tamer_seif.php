<?php

//error_reporting(0);

$sql = "select * from nps where manger_id = ''";
	
			$result = $cont->query($sql);
			$totalsurvey =  $result->num_rows ;
	
			$promoter = "select * from nps where nps_rating >= 9 and manger_id = ''"; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where nps_rating > 6 and nps_rating < 9 and manger_id = '' "; // select passive rows 
			$detractor = "select * from nps where nps_rating <= 6 and manger_id = ''"; // select detractor rows  
			
			$cs_ttb = "select * from nps where sats > 3 and manger_id = '' ";
			$cs_bb = "select * from nps where sats < 2 and manger_id = ''";
			
			
			$fcr = "select * from nps where ir = '1' and manger_id = ''";
			$ir = "select * from nps where  ir = '2' and manger_id = ''";

			$result_pro = $cont->query($promoter); // promter query
			$result_pass = $cont->query($passive); // passive query
			$result_de = $cont->query($detractor); // detractor query 
			
			
			
			// below code to get total of promtor & passive & detractor 
			$pro = $result_pro->num_rows; 
			$pass = $result_pass->num_rows;
			$de = $result_de->num_rows;
			
			//////////////////////////////////////////
			$cs_ttb = "select * from nps where sats > 3  and manger_id = ''";
			$cs_bb = "select * from nps where sats < 2 and manger_id = ''";
			
			$ag_ttb = "select * from nps where agent_satisfaction > 3 and manger_id = '' "; // select agent tob box 
			$ag_bb = "select * from nps where agent_satisfaction < 2 and manger_id = '' "; // select agent bottom box 
			
			
			$result_agttb = $cont->query($ag_ttb);
			$result_agbb = $cont->query ($ag_bb);
			
			
			
			$result_csttb = $cont->query($cs_ttb); // query customer top box
			
			$result_csbb = $cont->query($cs_bb); // query for customer bottom box
			
			$ge_ttb1 = $result_agttb->num_rows; // query agent top box
			$ge_bb1 = $result_agbb->num_rows; // query agent bottom box
			
			$cs_ttb1 = $result_csttb->num_rows;
			$cs_csbb1 = $result_csbb->num_rows;
			

			$per_csttb = ($cs_ttb1 / $totalsurvey ) * 100;
			$per_csbb = ($cs_csbb1 / $totalsurvey) * 100;
			
			$per_agttb = ($ge_ttb1 / $totalsurvey ) * 100 ;
			$per_agbb = ($ge_bb1 / $totalsurvey ) * 100 ;
			
		
			////////////////////////////////////////////////////////////////////
		
			$pro_pr = ($pro / $totalsurvey) * 100; // to get percentage of promoter 
			$pass_pr = ($pass / $totalsurvey) * 100; // to get percntage of passive 
			$de_pr = ($de / $totalsurvey) * 100; // to get percentage of detractor
			$nps = (($pro - $de ) / $totalsurvey) * 100; // to get percntage of nps 

			$result_fcr = $cont->query($fcr); // query for fcr 
			$result_ir = $cont->query($ir); // query for ir 
			
			
			$fcr1 = $result_fcr->num_rows;
			$ir1 = $result_ir->num_rows;
			
			
			
			$fcr_pre = ($fcr1 / $totalsurvey ) * 100 ; // collect the % of fcr
			$ir_pre = (($ir1 + $fcr1) / $totalsurvey) * 100 ;  // collect the % of ir 
			
			
			$fcr_percentage ; 
			$fcr_percentage ;
			// below code to ignore error apear when 0 subtract on value 

			if ($fcr_pre == 0 and $ir_pre == 0){
				
				$fcr_percentage = 0 ;
				$ir_percentage = 0 ;
				
			} else {
				
				$fcr_percentage =  $fcr_pre ; 
				$ir_percentage = $ir_pre ;
			
			};
			
$finalnps[] = $nps;
$ffcr_percentage[] = $fcr_percentage;
			