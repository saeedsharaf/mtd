<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
include'../main_page.php';
?>
	
		
		<div class="reset" id="main">
			
			
		
			<table class="tf">
			
			<caption style="background-color:#a90101; padding:9px; color: white;">August 2018</caption>
			<thead>
			
			<tr>
				<th class="noborder"> Login ID </th>
				<th class="noborder" style="width: 250px;"> Name </th>
				<th class="noborder" > SPV </th>
				<th class="noborder"> Total Survey </th>
				<th class="noborder"> Promoter </th>
				<th class="noborder"> Detractor </th>
				<th class="noborder"> Passive </th>
				<th class="noborder"> NPS % </th>
				<th class="noborder"> Promoter % </th>
				<th class="noborder"> Detractor % </th>
				<th class="noborder" > Passive %  </th>
				<th class="noborder" style="width: 55px;"> CS TTB </th>
				<th class="noborder" style="width: 45px;"> CS BB</th>
				<th class="noborder" style="width: 45px;"> Agent TTB</th>
				<th class="noborder"> Agent BB</th>
				<th class="noborder"> FCR</th>
				<th class="noborder"> IR</th>
				<th class="noborder"> FCR Surveys</th>
				<th class="noborder"> IR Surveys</th>
			</tr>
			</thead>
			<tbody>
			
			<tr class="silver">
			<?php 
			include'../config/connect.php';
			
			
		if ($_GET['id'] == 1){ //Ahmed Badaway -Peer Mentor
			$team = array (639338,639436,639208,639205,639300,639352,639460,639410,639290,639243,639386,639354);

		}else if ($_GET['id'] == 2){ // Ahmed El-Desouky 
			$team = array (638928,638932,638220,638178,638187,638186,638409,638484,638535,638206,638482,638860,638176);

		}else if ($_GET['id'] == 3){ // Ahmed Moharram
			$team = array (638715,638655,638665,638698,638158,638892,638074,638447,638410,638351,638204,638310,638316);


		}else if ($_GET['id'] == 4){ // Ahmed Saeed
			$team = array (638639,638108,638739,638109,638745,638952,638057,638444,638480,638372,638500,638829,638495,638342);

		}else if ($_GET['id'] == 5){ // Alaa ElAshmawy
			$team = array (638043,638751,638966,638954,638775,638343,638319,638753,638849,638813,638570,638214,638417);

		}else if ($_GET['id'] == 6){ // Aliaa Elgohary	
			$team = array (638620,638641,638943,638065,638811,638772,638784,638218,638472,639161,638329,638832);

		}else if ($_GET['id'] == 7){ // Amr ElHoseiny -Peer Mentor
			$team = array (639427,639443,639215,639280,639359,639465,639407,639247,639370,639437,639310);

		}else if ($_GET['id'] == 8){ // Dalia Salam
			$team = array (638713,638744,638696,638958,638962,638179,638327,638504,638503,638880,638198);

		}else if ($_GET['id'] == 9){// Ghada Mosafa
			$team = array (638701,638917,638991,638066,638022,638334,638023,638488,638469,638267,638205,638454,638884);

		}else if ($_GET['id'] == 10 ){ // Hatem AbdelAal
			$team = array (638686,638622,638606,638230,638968,638821,638853,638949,638079,638422,638078,638344,638994);

		}else if ($_GET['id'] == 11 ){ // Hosny Hussein  -Peer Mentor
			$team = array (639452,639334,639415,639255,639282,639309,639293,639271,639438,639399);

		}else if ($_GET['id'] == 12 ){ // Islam Ezzat
			$team = array (638619,638625,638631,638235,638975,638060,638170,638347,638349,638509,638173,638887,638419);

		}else if ($_GET['id'] == 13 ){// Karim abdelmenem
			$team = array (638734,638731,638055,638515,638992,638384,638353,638420,638546,638878,638518,638374,638855);

		}else if ($_GET['id'] == 14 ){ // Khaled Ali
			$team = array (638162,638513,638895,638925,638885,638188,638185,638129,638569,638493,638879,638399);

		}else if ($_GET['id'] == 15 ){ // Mohamed Ayman -Peer Mentor
			$team = array (639455,639342,639387,639224,639361,639253,639291,639351,639322,639431);

		}else if ($_GET['id'] == 16 ){// //Mohamed Erfan-Peer Mentor
			$team = array (639327,639332,639421,639203,639254,639348,639363,639276,639295,639444,639258,639372);

		}else if ($_GET['id'] == 17 ){ // Mohamed Hesham -Peer Mentor
			$team = array (639448,639391,639393,639429,639408,639281,639390,639230,639242,639457,639383,639384);

		}else if ($_GET['id'] == 18 ){ // Mohamed Hosny 
			$team = array (638630,638633,638035,638974,638864,638468,638852,638831,638758,638876,638778,638379,638435,639070);

		}else if ($_GET['id'] == 19 ){ // Mohamed Madbouli-Peer Mentor
			$team = array (639209,639220,639226,639353,639406,639277,639296,639411,639389,639235,639442,639307);

		}else if ($_GET['id'] == 20){ //  Mohamed Mamdouh-Peer Mentor
			$team = array (639341,639428,639217,639252,639395,639357,639401,639251,639447,639238,639439,639266,639229);

		}else if ($_GET['id'] == 21 ){ // Mohamed Mokhtar
			$team = array (638709,638627,638748,638392,638989,638364,638147,638548,638804,638830,638764,638331);

		}else if ($_GET['id'] == 22){ // Mohamed Morsy
			$team = array (638687,638648,638680,638839,638897,638842,638814,638850,638776,638761,638426,638756,638794);

		}else if ($_GET['id'] == 23 ){ // Mohamed Ramadan-Peer Mentor
			$team = array (639450,639330,639336,639425,639432,639216,639275,639396,639469,639202,639286,639240);
		}

		else if ($_GET['id'] == 24 ){ // Tamer Kassem 
			$team = array (638668,638207,638935,638550,638064,638140,638145,638359,638496,638424,638077);
		}


		else if ($_GET['id'] == 25 ){ //XCC-Ahmed Badawy
			$team = array (638889,638927,638898,638933,638938,638916,638918,638940,638903,638926,638699,638972,638967);
		}


		else if ($_GET['id'] == 26 ){ // XCC-Ahmed Shaaban
			$team = array (638702,638632,638716,638733,638659,639100,638712,638615,638657,638705,638647,638742,638605);
		}


		else if ($_GET['id'] == 27 ){ // XCC-Amr Abbas
			$team = array (638939,638912,638934,638945,638896,638931,638909,638164,638914,638942,638971,638990,638977);
		}



		else if ($_GET['id'] == 28 ){ // XCC-Ibrahim Hassan
			$team = array (1638660,638729,638308,638051,638464,638901,638844,638802,638840,638777,638951,638572,638508);
		}



		else if ($_GET['id'] == 29 ){ // XCC-Mohamed El Gendy
			$team = array (638708,638722,638936,638502,638136,638321,638320,638189,638803,638820,638135,638520,638808);
		}



		else if ($_GET['id'] == 30 ){ // XCC-Tamer Baioumy
			$team = array (638908,638906,638929,638910,638920,638924,638941,638894,638891,639082,638957,638981,638956,638959);
		}




		else if ($_GET['id'] == 31 ){ // XCC-Tamer Elsherbeny
			$team = array (638735,638661,638608,638730,638682,638654,638323,638953,638387,638526,638196);
		}



		else if ($_GET['id'] == 32 ){ // Youssef Shaaban -Peer Mentor 
			$team = array (639451,639333,639423,639212,639234,639315,639398,639466,639285,639328,639326,639339);
		}

/*

		else if ($_GET['id'] == 33 ){ // XCC.Tamer.Elsherbeny
			$team = array (127225,127227,98854,110553,128075,127251,112118,127537,127244,128068,128009,127355,127352,123247,108387,127961,124785);
		}



		else if ($_GET['id'] == 34 ){ // XCC.Tamer.Elsherbeny
			$team = array (105977,33113,19443,19341,20017,13080,45274,62150,86349,103198,105400,105411,97730,100584);
		}


		else if ($_GET['id'] == 35 ){ // XCC.Tamer.Elsherbeny
			$team = array (97716,77518,101501,20281,19357,105388,19456,105401,103676,42080,105391,100887,41194,101162);
		}


		else if ($_GET['id'] == 36 ){ // XCC.Tamer.Elsherbeny
			$team = array (104219,127107,127103,127220,128071,127584,128056,128037,127505,114458,120045,127434,127217,127218,127219,111287,117890,127771);
		}


		else if ($_GET['id'] == 37 ){ // XCC.Tamer.Elsherbeny
			$team = array (103460,47138,106441,106520,106567,106364,106866,104876,103694,106859);
		}


		else if ($_GET['id'] == 38 ){ // XCC.Tamer.Elsherbeny
			$team = array (106365,19449,72442,90377,98567,98973,101163,104363,105355,105414,105420,53956,100451,100459);
		}


		else if ($_GET['id'] == 39 ){ // XCC.Tamer.Elsherbeny
			$team = array (106438,19479,54199,100429,100652,104673,104765,105395,105405,106167,98573,34381,102045,102806);
		}

		else if ($_GET['id'] == 40 ){ // XCC.Tamer.Elsherbeny
			$team = array (127546,127443,127440,111382,111383,127539,127108,110747,109952,116522,127541,110363,110761,110754,110749,127538,110696,127576,127340,127114,127115);
		}


		else if ($_GET['id'] == 41 ){ // XCC.Tamer.Elsherbeny
			$team = array (19715,19348,20011,19258,19362,20012,19961,19483,19255,103133,118735,122822,125375,125353,125354,125347);
		}


		else if ($_GET['id'] == 42 ){ // XCC.Tamer.Elsherbeny
			$team = array (19114,19964,19446,19442,125443,109044,109045,116946,117032,125441,106514,107778,125212,78276,125431,119891,93229);
		}


		else if ($_GET['id'] == 43 ){ // XCC.Tamer.Elsherbeny
			$team = array (106367,87320,95814,96458,97922,100912,101262,101774,102093,102095,39663,33185,96607,103619);
		}


		else if ($_GET['id'] == 44 ){ // XCC.Tamer.Elsherbeny
			$team = array (109043,128012,128013,128008,128007,108566,111617,128031,128030,106604,128038,127070,124476,128048,92828,70617,128054,127536,128050);
		}


		else if ($_GET['id'] == 45 ){ // XCC.Tamer.Elsherbeny
			$team = array (2130,96981,29329,95774,98563,94284,97521,98095,104588,98383,96845,102049,102942,103167,107025,117663);
		}


		else if ($_GET['id'] == 46 ){ // XCC.Tamer.Elsherbeny
			$team = array (6064,86133,98580,51876,98412,96380,97903,96987,96398,96803,96362,95620,72657,103635,42174);
		}


		else if ($_GET['id'] == 47 ){ // XCC.Tamer.Elsherbeny
			$team = array (14691,98571,98610,98586,95751,97935,98534,95176,96610,103618,114990,124620,124840,125222);
		}


		else if ($_GET['id'] == 48 ){ // XCC.Tamer.Elsherbeny
			$team = array (68016,98569,97695,98612,81115,98575,98781,58104,103161,64362,103709,97681,96653,102998,43092,99014);
		}


		else if ($_GET['id'] == 49 ){ // XCC.Tamer.Elsherbeny
			$team = array (46752,96977,98625,95436,98634,96750,98626,96287,97898,92256,98638,76302,82969,103730,125449);
		}


		else if ($_GET['id'] == 50 ){ // XCC.Tamer.Elsherbeny
			$team = array (62613,96706,98526,93268,97554,98556,98540,98527,98490,98377,98529,56530,72998,123340,124600,125447);
		}



		else if ($_GET['id'] == 51 ){ // XCC.Tamer.Elsherbeny
			$team = array (98603,98562,95258,98528,96269,99126,100306,103736,97720,98628,116826,125448,125733);
		}


		else if ($_GET['id'] == 52 ){ // XCC.Tamer.Elsherbeny
			$team = array (84739,95352,77283,124545,127737,13704,127497,128162,124543,126842,105354,128100,128025,128072,99328,128059,118791,128018,128073,128020,128026,72904,118498,51784,106140,128049,128163,128003,128027,92790,128021,128029);
		};

*/

		
		
	
		
		
		
		
			foreach( $team as $ids ){
			
			
			
			$sql = "select * from nps where agent_id = '$ids' ";  // to select all data rows in data base 
			
			$promoter = "select * from nps where agent_id = '$ids' and nps_rating >= 9 "; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where agent_id = '$ids' and nps_rating > 6 and nps_rating < 9  "; // select passive rows 
			$detractor = "select * from nps where agent_id = '$ids' and nps_rating <= 6 "; // select detractor rows  
			
			$fcr = "select * from nps where agent_id = '$ids' and ir = '1' ";
			$ir = "select * from nps where agent_id = '$ids' and ir = '2' ";

			$result_pro = $cont->query($promoter); // promter query
			$result_pass= $cont->query($passive); // passive query
			$result_de = $cont->query($detractor); // detractor query 
			// below code to get total of promtor & passive & detractor 
			$pro = $result_pro->num_rows; 
			$pass = $result_pass->num_rows;
			$de = $result_de->num_rows;
			////////////////////////////////////////////////////////////////////
			
			$result = $cont->query($sql);
			
			
			$cs_ttb = "select * from nps where agent_id = '$ids' and sats > 3 ";
			$cs_bb = "select * from nps where agent_id = '$ids' and sats < 2";
			
			$ag_ttb = "select * from nps where agent_id = '$ids' and agent_satisfaction > 3 "; // select agent tob box 
			$ag_bb = "select * from nps where agent_id = '$ids' and agent_satisfaction < 2 "; // select agent bottom box 
			
			
			$result_agttb = $cont->query($ag_ttb);
			$result_agbb = $cont->query ($ag_bb);
			
			
			
			$result_csttb = $cont->query($cs_ttb); // query customer top box
			
			$result_csbb = $cont->query($cs_bb); // query for customer bottom box
			
			
			
			$ge_ttb1 = $result_agttb->num_rows; // query agent top box
			$ge_bb1 = $result_agbb->num_rows; // query agent bottom box
			
			$cs_ttb1 = $result_csttb->num_rows;
			$cs_csbb1 = $result_csbb->num_rows;
		

			
			$per_csttb = ($cs_ttb1 / $result->num_rows ) * 100;
			$per_csbb = ($cs_csbb1 / $result->num_rows ) * 100;
			
			$per_agttb = ($ge_ttb1 / $result->num_rows ) * 100 ;
			$per_agbb = ($ge_bb1 / $result->num_rows ) * 100 ;
			
			
			
			
			/////////////////////////////////////////////////////////////////
			
			
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
			
			
			
			
			
			include'../style/font.php';
			
			if ( $result->num_rows > 0 ){
			$row = $result->fetch_assoc() 
			
			
			
			
			?>
				<td class="light"> <?php echo $row['agent_id'] ;?> </th>
				<td class="light"> <?php echo $row['agent_name'] ;?>  </th>
				<td class="light"> <?php echo $row['s_v']; ?> </th>
				<td class="light"> <?php echo $result->num_rows ;?></th>
				
				<td class="light"> <?php echo $pro ;?> </th>
				<td class="light"> <?php echo $de ;?> </th>
				<td class="light"> <?php echo $pass ;?>  </th>
				<td class="light" style="<?php echo $nps_color ; ?> ;width: 50px;" > <?php echo round($nps) ;?>%  </th>
				<td class="light" style="<?php echo $p_color ; ?>"> <?php echo round($pro_pr) ;?>% </th>
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
				
				
			<?php	
			
			}
		
			
			}
			
			?>

		
		

	
	
	
	
		</div>
					
	</div>
	</div>