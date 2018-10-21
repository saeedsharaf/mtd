

<?php

session_start();
set_time_limit(0);
echo ini_get('max_execution_time');

		
		
		
			
			include'config/connect.php';
			//include'../month.php';
	
			$ids = array(639338,639436,639208,639205,639300,639352,639460,639410,639290,639243,639386,639354,638928,638932,638220,638178,638187,638186,638409,638484,638535,638206,638482,638860,638176,638715,638655,638665,638698,638158,638892,638074,638447,638410,638351,638204,638310,638316,638639,638108,638739,638109,638745,638952,638057,638444,638480,638372,638500,638829,638495,638342,638043,638751,638966,638954,638775,638343,638319,638753,638849,638813,638570,638214,638417,638620,638641,638943,638065,638811,638772,638784,638218,638472,639161,638329,638832,639427,639443,639215,639280,639359,639465,639407,639247,639370,639437,639310,638713,638744,638696,638958,638962,638179,638327,638504,638503,638880,638198,638701,638917,638991,638066,638022,638334,638023,638488,638469,638267,638205,638454,638884,638686,638622,638606,638230,638968,638821,638853,638949,638079,638422,638078,638344,638994,639452,639334,639415,639255,639282,639309,639293,639271,639438,639399,638619,638625,638631,638235,638975,638060,638170,638347,638349,638509,638173,638887,638419,638734,638731,638055,638515,638992,638384,638353,638420,638546,638878,638518,638374,638855,638162,638513,638895,638925,638885,638188,638185,638129,638569,638493,638879,638399,639455,639342,639387,639224,639361,639253,639291,639351,639322,639431,639327,639332,639421,639203,639254,639348,639363,639276,639295,639444,639258,639372,639448,639391,639393,639429,639408,639281,639390,639230,639242,639457,639383,639384,638630,638633,638035,638974,638864,638468,638852,638831,638758,638876,638778,638379,638435,639070,639209,639220,639226,639353,639406,639277,639296,639411,639389,639235,639442,639307,639341,639428,639217,639252,639395,639357,639401,639251,639447,639238,639439,639266,639229,638709,638627,638748,638392,638989,638364,638147,638548,638804,638830,638764,638331,638687,638648,638680,638839,638897,638842,638814,638850,638776,638761,638426,638756,638794,639450,639330,639336,639425,639432,639216,639275,639396,639469,639202,639286,639240,638668,638207,638935,638550,638064,638140,638145,638359,638496,638424,638077,638889,638927,638898,638933,638938,638916,638918,638940,638903,638926,638699,638972,638967,638702,638632,638716,638733,638659,639100,638712,638615,638657,638705,638647,638742,638605,638939,638912,638934,638945,638896,638931,638909,638164,638914,638942,638971,638990,638977,638660,638729,638308,638051,638464,638901,638844,638802,638840,638777,638951,638572,638508,638708,638722,638936,638502,638136,638321,638320,638189,638803,638820,638135,638520,638808,638908,638906,638929,638910,638920,638924,638941,638894,638891,639082,638957,638981,638956,638959,638735,638661,638608,638730,638682,638654,638323,638953,638387,638526,638196,639451,639333,639423,639212,639234,639315,639398,639466,639285,639328,639326,639339

);
			
			foreach($ids as $id ){
				
			$ge_ttb1 = 0;
			$ge_bb1 = 0; 
			$cs_ttb1 = 0;
			$cs_csbb1 = 0;
			
			$sql = "select * from nps where agent_id = '$id' ";  // to select all data rows in data base 
			
			$promoter = "select * from nps where agent_id = '$id' and nps_rating >= 9 "; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where agent_id = '$id' and nps_rating > 6 and nps_rating < 9  "; // select passive rows 
			$detractor = "select * from nps where agent_id = '$id' and nps_rating <= 6 "; // select detractor rows  
			
			$fcr = "select * from nps where agent_id = '$id' and ir = '1' ";
			$ir = "select * from nps where agent_id = '$id' and ir = '2' ";

			$result_pro = $cont->query($promoter); // promter query
			$result_pass= $cont->query($passive); // passive query
			$result_de = $cont->query($detractor); // detractor query 
			// below code to get total of promtor & passive & detractor 
			$pro = $result_pro->num_rows; 
			$pass = $result_pass->num_rows;
			$de = $result_de->num_rows;
			////////////////////////////////////////////////////////////////////
			
			$result = $cont->query($sql);
			
			
		
			
			$cs_ttb = "select * from nps where agent_id = '$id' and sats > 3 ";
			$cs_bb = "select * from nps where agent_id = '$id' and sats < 2";
			
			$ag_ttb = "select * from nps where agent_id = '$id' and agent_satisfaction > 3 "; // select agent tob box 
			$ag_bb = "select * from nps where agent_id = '$id' and agent_satisfaction < 2 "; // select agent bottom box 
			
			
			$result_agttb = $cont->query($ag_ttb);
			$result_agbb = $cont->query ($ag_bb);
			
			
			
			$result_csttb = $cont->query($cs_ttb); // query customer top box
			
			$result_csbb = $cont->query($cs_bb); // query for customer bottom box
			
			$ge_ttb1 += $result_agttb->num_rows; // query agent top box
			$ge_bb1 += $result_agbb->num_rows; // query agent bottom box
			
			$cs_ttb1 += $result_csttb->num_rows;
			$cs_csbb1 += $result_csbb->num_rows;
			

			
			$per_csttb = ($cs_ttb1 / $result->num_rows ) * 100;
			$per_csbb = ($cs_csbb1 / $result->num_rows ) * 100;
			
			$per_agttb = ($ge_ttb1 / $result->num_rows ) * 100 ;
			$per_agbb = ($ge_bb1 / $result->num_rows ) * 100 ;
			
			echo $ge_ttb1 . '<br>';
			echo $result->num_rows. '<br>';
			
			////////////////////////////////////////////
			
			
			$pro_pr = ($pro / $result->num_rows) * 100; // to get percentage of promoter 
			$pass_pr = ($pass / $result->num_rows) * 100; // to get percntage of passive 
			$de_pr = ($de / $result->num_rows) * 100; // to get percentage of detractor
			$nps = (($pro - $de ) / $result->num_rows) * 100; // to get percntage of nps 

			$result_fcr = $cont->query($fcr); // query for fcr 
			$result_ir = $cont->query($ir); // query for ir 
			
			$fcr_pre = ($result_fcr->num_rows / $result->num_rows ) * 100 ; // collect the % of fcr
			$ir_pre = (($result_ir->num_rows + $result_fcr->num_rows) / $result->num_rows) * 100 ;  // collect the % of ir 
			
			
			$fcr_precentage ; 
			$fcr_precentage ;
			// below code to ignore error apear when 0 subtract on value 
			
			if ($fcr_pre == 0 and $ir_pre == 0){
				
				$fcr_precentage = 0 ;
				$ir_precentage = 0 ;
				
			} else {
				
				$fcr_precentage =  $fcr_pre ; 
				$ir_precentage = $ir_pre ;
			
			};
			
			// changing color bassed the value in nps %
		



			$score = "update score set nps = $nps , fcr = $fcr_precentage , agent_target = round($per_agttb) , nps_calls = $result->num_rows where login_id = $id  ";

			if($cont->query($score) === true){
				
			}else{
				echo $cont->error . '<br>'; 
			}
			// 
			/*
			if ( $result->num_rows > 0 ){
			$row = $result->fetch_assoc();
			
			?>
				<td class="light"> <?php echo $row['agent_id'] ;?> </th>
				<td class="light"><a href="more.php" style="color:blue;"> <?php echo $row['agent_name'] ;?> </a> </th>
				<td class="light"> <?php echo $row['s_v']; ?> </th>
				<td class="light"> <?php echo $result->num_rows ;?></th>
				
				<td class="light"> <?php echo $pro ;?> </th>
				<td class="light"> <?php echo $de ;?> </th>
				<td class="light"> <?php echo $pass ;?>  </th>
				<td class="light" style="<?php echo $nps_color ; ?> " > <?php echo round($nps) ;?>%  </th>
				<td class="light" style="<?php echo $p_color ; ?> "> <?php echo round($pro_pr) ;?>% </th>
				<td class="light" style="<?php echo $de_color ; ?> "> <?php echo round($de_pr) ;?>%  </th></th>
				<td class="light" style="<?php echo $pa_color ; ?> "> <?php echo round($pass_pr) ;?>%  </th></th></th>
				<td class="light" style="<?php echo $cs_tt ; ?> "> <?php echo round($per_csttb) ; ?> % </th>
				<td class="light" style="<?php echo $cs_bb ; ?> "> <?php echo round($per_csbb) ; ?> % </th>
				<td class="light" style="<?php echo $ag_tt ; ?> "> <?php echo round($per_agttb) ; ?> %  </th>
				<td class="light" style="<?php echo $ag_bb ; ?> "> <?php echo round($per_agbb) ; ?> % </th>
				<td class="light" style="<?php echo $fcr_color ;?>;"> <?php echo round($fcr_precentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ;?> ;"> <?php echo round($ir_precentage); ?>%  </th>
				<td class="light"> <?php echo $result_fcr->num_rows ;?></th>
				<td class="light"> <?php echo $result_ir->num_rows ; ?> </th>
				
			
			</tr>	
			</table>
			*/	
	}

		
			
			
				


		
		
