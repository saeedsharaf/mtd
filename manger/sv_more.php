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
			
			<caption style="background-color:#a90101; padding:9px; color: white;">Jun 2018</caption>
			<thead>
			
			<tr>
				<th class="noborder"> Login ID </th>
				<th class="noborder"> Name </th>
				<th class="noborder"> SPV </th>
				<th class="noborder"> Total Survey </th>
				<th class="noborder"> Promoter </th>
				<th class="noborder"> Detractor </th>
				<th class="noborder"> Passive </th>
				<th class="noborder"> NPS % </th>
				<th class="noborder"> Promoter % </th>
				<th class="noborder"> Detractor % </th>
				<th class="noborder"> Passive %  </th>
				<th class="noborder"> CS TTB </th>
				<th class="noborder"> CS BB</th>
				<th class="noborder"> Agent TTB</th>
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
			
			
		if ($_GET['id'] == 1){ 
			$team = array (12231,9749,19363,37920,63480,95167,98550,98849,100622,102098,100502,101190,8407,101172,77922);	
		}else if ($_GET['id'] == 2){ // XCC.Hatem.AbdelAal
			$team = array (78031,106500,73564,103279,101581,103487,106344,106509,106356,106379,72124,106359,106747,42890,84424,100346);
		}else if ($_GET['id'] == 3){ // XCC.Amira.Hassan
			$team = array (124478,127765,116164,127215,110347,127801,72357,91278,126620,110255,110708,110763,109034,127554,127553,127863,127550,127551,127552);
		}else if ($_GET['id'] == 4){ // XCC.Sabry.ElKomaty
			$team = array (19962,20172,19343,11588,19346,19380,125445,125574,122096,108975,117483,125609,92089,126116,20019,105169);
		}else if ($_GET['id'] == 5){ // XCC.Mohamed.Morsy
			$team = array (98063,106345,68689,81163,97374,98635,100558,102114,102121,98633,95961,100698,101037,105431,45206,98631);
		}else if ($_GET['id'] == 6){ // XCC.Dalia.Salam	
			$team = array (62803,19445,19704,19960,19311,98309,98623,98997,100391,100630,105378,97693,98270,98636);
		}else if ($_GET['id'] == 7){ // XCC.Mohamed.Hosny
			$team = array (106799,19259,10294,12960,14367,19952,65923,98021,98576,99048,101616,105407,15006,98549,99039);
		}else if ($_GET['id'] == 8){ // XCC.Ghada.Mosafa
			$team = array (19482,19260,19475,19447,19458,19448,19444,112312,125455,125581,108683,125735,56473,107542,125219,125340,84132);
		}else if ($_GET['id'] == 9){
			$team = array (43939,106363,19080,19325,7014,10569,98630,100307,100552,105372,105410,105432,105458,44353,97680,99829);
		}else if ($_GET['id'] == 10 ){ // XCC.Mohamed.Mokhtar
			$team = array (103458,101503,105577,19696,19956,95771,96639,104203,105376,105379,105394,96383,98611,109326);
		}else if ($_GET['id'] == 11 ){ // XCC.Abdel.HamedAly
			$team = array (106750,106801,19486,19360,43289,88647,96382,97890,97909,100117,100564,100646,96872,103582,98350,101189);
		}else if ($_GET['id'] == 12 ){ // XCC.Ahmed.ElDesouky
			$team = array (20558,19735,19338,19452,19423,77902,126092,69801,125907,95682,125898,126103,58395,126104,126105,107658);
		}else if ($_GET['id'] == 13 ){// XCC.Islam.Ezzat
			$team = array (127069,127756,93361,110764,125938,95901,110260,111757,127770,105164,127785,111394,112077,92746,111839,111591,111826,108554);
		}else if ($_GET['id'] == 14 ){ // XCC.Tamer.Kassem
			$team = array (106724,106353,19734,19441,19394,93885,95758,97694,100497,101099,101293,101497,98559,104872,62044);
		}else if ($_GET['id'] == 15 ){ // XCC.Mayada.ElDessoky
			$team = array (127583,101225,127549,91441,93929,127133,127531,127105,128228,121837,112031,127556,105998,127535,127991,127327,111260,111815);
		}else if ($_GET['id'] == 16 ){
			$team = array (128199,128196,128069,127738,127109,127567,127565,122279,127562,127561,127558,126631,110555,127483,127481,127488,127502,111204,127532);
		}else if ($_GET['id'] == 17 ){ // XCC.Ahmed.Moharram
			$team = array (106746,106860,19350,9695,85714,95445,96361,96549,98700,100500,102024,38688,97941,98637,100714);
		}else if ($_GET['id'] == 18 ){ // XCC.Mostafa.Magdy
			$team = array (47001,19963,20016,19472,19166,44921,105347,105429,106540,97379,101370,104636,11210,100693,104791);
		}else if ($_GET['id'] == 19 ){ // XCC.Aliaa.Elgohary
			$team = array (124775,127791,105168,111813,127861,108559,127094,127095,20694,101050,127073,127075,103131,107445,108562,127390,127439,127592,110914);
		}else if ($_GET['id'] == 20){ // XCC.Khaled.Ali
			$team = array (20022,19428,19427,19717,19958,93002,125370,116550,108285,101529,106271,106053,97645,121758,69568,125337,45851);
		}else if ($_GET['id'] == 21 ){ // XCC.Tamer.Baioumy
			$team = array (106454,19706,19698,96366,98546,98895,100684,101695,96752,105366,20018,19326,106378,100509,102142);
		}else if ($_GET['id'] == 22){ // XCC.Amr.Abbas
			$team = array (106861,19954,20013,39957,99046,100937,101457,101601,101831,103086,91256,101087,105433,101790);
		}else if ($_GET['id'] == 23 ){ // XCC.Tamer.Elsherbeny
			$team = array (93489,106749,106368,19473,54031,66097,93798,96155,96547,98774,102103,104873,96696,100649,100634);
		}

		else if ($_GET['id'] == 24 ){ // XCC.Tamer.Elsherbeny
			$team = array (106380,106487,103177,19430,19361,20557,48007,105365,98530,100033,100826,19945,97689);
		}


		else if ($_GET['id'] == 25 ){ // XCC.Tamer.Elsherbeny
			$team = array (121892,46510,106360,106522,77928,106361,106508,96806,101347,106346,106362,106430,106533,106748,106752,81437,106385);
		}


		else if ($_GET['id'] == 26 ){ // XCC.Tamer.Elsherbeny
			$team = array (127542,126624,111889,91740,101069,127065,128016,128042,127543,127391,128064,128065,127544,127540,112028,127545,114152,127199,111370,111367,116829,127441);
		}


		else if ($_GET['id'] == 27 ){ // XCC.Tamer.Elsherbeny
			$team = array (19468,19312,19369,106355,126091,125338,107612,126106,96467,85959,111187,107830,125372,125742,117481);
		}



		else if ($_GET['id'] == 28 ){ // XCC.Tamer.Elsherbeny
			$team = array (127876,109375,127946,127941,127945,127943,127939,127597,127594,127577,127560,127557,127564,127566,127569,127563,128084,127760,127444);
		}



		else if ($_GET['id'] == 29 ){ // XCC.Tamer.Elsherbeny
			$team = array (111818,111742,50727,102707,128113,128181,111247,111611,111877,110908,111543,127840,107365,110552,127845,111667,111661,111772,127857);
		}



		else if ($_GET['id'] == 30 ){ // XCC.Tamer.Elsherbeny
			$team = array (110704,127534,127548,127555,109164,127547,127126,127125,127128,127119,74303,127097,128046,127596,110766,127228,128233,127559,128067);
		}




		else if ($_GET['id'] == 31 ){ // XCC.Tamer.Elsherbeny
			$team = array (106486,102852,19367,95418,101822,105346,105421,105426,104181,105403,62411,63659,85472,101188,19112);
		}



		else if ($_GET['id'] == 32 ){ // XCC.Tamer.Elsherbeny
			$team = array (111252,97712,111797,110115,111856,127099,127098,108984,111592,108539,128119,105447,128226,127134,127436,123298,128184,128176,99702);
		}



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
				
				
			<?php	
			
			}
		
			
			}
			
			?>

		
		

	
	
	
	
		</div>
					
	</div>
	</div>