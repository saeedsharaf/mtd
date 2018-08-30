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
				
				<th class="noborder"> Name </th>
				
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
			include'../month.php';
			$id = $_SESSION['id'];
			
			
			
			
			
			
			$totalsurvey = 0;
				$pass = 0;
				$pro = 0;
				$de = 0;
				$fcr1 = 0;
				$ir1 = 0;
			
		if ($id == 1){ 
			$teamid = 1;  // Ahmed Badaway -Peer Mentor
			
			$_SESSION['team'] = array (639338,639436,639208,639205,639300,639352,639460,639410,639290,639243,639386,639354);
			
			
			
			
		include'../style/font.php';
		include'calculation.php';
			

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
				
			
			}
			
			
			
			} else if ($id == 2){ // Ahmed El-Desouky 
			$teamid = 2;
			$_SESSION['team'] = array (638928,638932,638220,638178,638187,638186,638409,638484,638535,638206,638482,638860,638176);
		
			include'calculation.php';
			
			include'../style/font.php';
			
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			  
			
		
			
			}
			
			} else if ($id == 3){ // Ahmed Moharram
			
			$teamid = 3;
			
			$_SESSION['team'] = array (638715,638655,638665,638698,638158,638892,638074,638447,638410,638351,638204,638310,638316);
			
			
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
			}
			
			} else if ($id == 4){ //Ahmed Saeed
			$_SESSION['team'] = array (638639,638108,638739,638109,638745,638952,638057,638444,638480,638372,638500,638829,638495,638342);
			
			include'calculation.php';
			
			include'../style/font.php';
			
				
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			include'tabel.php';
			
			}
			
			} else if ($id == 5){ // Alaa ElAshmawy 
			$teamid = 5;
			$_SESSION['team'] = array (638043,638751,638966,638954,638775,638343,638319,638753,638849,638813,638570,638214,638417);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
		
			
			}
			
			} else if ($id == 6){ // Aliaa Elgohary
			$teamid = 6;
			$_SESSION['team'] = array (638620,638641,638943,638065,638811,638772,638784,638218,638472,639161,638329,638832);
		
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
			}
			
			} else if ($id == 7){ // Amr ElHoseiny -Peer Mentor
			$teamid = 7;
			$_SESSION['team'] = array (639427,639443,639215,639280,639359,639465,639407,639247,639370,639437,639310);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 8){ // Dalia Salam
			$teamid = 8;
			$_SESSION['team'] = array (638713,638744,638696,638958,638962,638179,638327,638504,638503,638880,638198);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
				include'tabel.php';
			
			}
			
			} else if ($id == 9){ // Ghada Mosafa
			$teamid = 9;
			$_SESSION['team'] = array (638701,638917,638991,638066,638022,638334,638023,638488,638469,638267,638205,638454,638884);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 10 ){ // Hatem AbdelAal
			$teamid = 10;
			$_SESSION['team'] = array (638686,638622,638606,638230,638968,638821,638853,638949,638079,638422,638078,638344,638994);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 11 ){ // Hosny Hussein  -Peer Mentor
			$teamid = 11;
			$_SESSION['team'] = array (639452,639334,639415,639255,639282,639309,639293,639271,639438,639399);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 12 ){ // Islam Ezzat
			$teamid = 12;
			$_SESSION['team'] = array (638619,638625,638631,638235,638975,638060,638170,638347,638349,638509,638173,638887,638419);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
	
			}
			
			} else if ($id == 13 ){// Karim abdelmenem
			$teamid = 13;
			$_SESSION['team'] = array (638734,638731,638055,638515,638992,638384,638353,638420,638546,638878,638518,638374,638855);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 14 ){ //Khaled Ali 
			$teamid = 14;
			$_SESSION['team'] = array (638162,638513,638895,638925,638885,638188,638185,638129,638569,638493,638879,638399);
			include'calculation.php';
			
			include'../style/font.php';
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			 else if ($id == 15 ){ // Mohamed Ayman -Peer Mentor
			$teamid = 15;
			$_SESSION['team'] = array (639455,639342,639387,639224,639361,639253,639291,639351,639322,639431);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 16 ){ //Mohamed Erfan-Peer Mentor
			$teamid = 16;
			$_SESSION['team'] = array (639327,639332,639421,639203,639254,639348,639363,639276,639295,639444,639258,639372);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 17 ){ // Mohamed Hesham -Peer Mentor
			$teamid = 17;
			$_SESSION['team'] = array (639448,639391,639393,639429,639408,639281,639390,639230,639242,639457,639383,639384);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			} else if ($id == 18 ){ // Mohamed Hosny 
			$teamid = 18;
			$_SESSION['team'] = array (638630,638633,638035,638974,638864,638468,638852,638831,638758,638876,638778,638379,638435,639070);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 19 ){ // Mohamed Madbouli-Peer Mentor
			$teamid = 19;
			$_SESSION['team'] = array (639209,639220,639226,639353,639406,639277,639296,639411,639389,639235,639442,639307);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
				include'tabel.php';
			
		
			
			}
			
			} else if ($id == 20){ // Mohamed Mamdouh-Peer Mentor
			$teamid = 20;
			$_SESSION['team'] = array (639341,639428,639217,639252,639395,639357,639401,639251,639447,639238,639439,639266,639229);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 21 ){ // Mohamed Mokhtar
			$teamid = 21;
			$_SESSION['team'] = array (638709,638627,638748,638392,638989,638364,638147,638548,638804,638830,638764,638331);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 22){ // Mohamed Morsy
			$teamid = 22;
			$_SESSION['team'] = array (638687,638648,638680,638839,638897,638842,638814,638850,638776,638761,638426,638756,638794);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 23 ){ // Mohamed Ramadan-Peer Mentor
			$teamid = 23;
			$_SESSION['team'] = array (639450,639330,639336,639425,639432,639216,639275,639396,639469,639202,639286,639240);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 24 ){ // Tamer Kassem  
			$teamid = 24;
			$_SESSION['team'] = array (638668,638207,638935,638550,638064,638140,638145,638359,638496,638424,638077);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 25 ){ //XCC-Ahmed Badawy
			$teamid = 25;
			$_SESSION['team'] = array (638889,638927,638898,638933,638938,638916,638918,638940,638903,638926,638699,638972,638967);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 26 ){ // XCC-Ahmed Shaaban
			$teamid = 26;
			$_SESSION['team'] = array (638702,638632,638716,638733,638659,639100,638712,638615,638657,638705,638647,638742,638605);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 27 ){ // XCC-Amr Abbas
			$teamid = 27;
			$_SESSION['team'] = array (638939,638912,638934,638945,638896,638931,638909,638164,638914,638942,638971,638990,638977);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 28 ){ // XCC-Ibrahim Hassan 
			$teamid = 28;
			$_SESSION['team'] = array (638660,638729,638308,638051,638464,638901,638844,638802,638840,638777,638951,638572,638508);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 29 ){ // XCC-Mohamed El Gendy 
			$teamid = 29;
			$_SESSION['team'] = array (638708,638722,638936,638502,638136,638321,638320,638189,638803,638820,638135,638520,638808);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 30 ){ // XCC-Tamer Baioumy 
			$teamid = 30;
			$_SESSION['team'] = array (638908,638906,638929,638910,638920,638924,638941,638894,638891,639082,638957,638981,638956,638959);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 31 ){ // XCC-Tamer Elsherbeny 
			$teamid = 31;
			$_SESSION['team'] = array (638735,638661,638608,638730,638682,638654,638323,638953,638387,638526,638196);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 32 ){ // Youssef Shaaban -Peer Mentor 
			$teamid = 32;
			$_SESSION['team'] = array (639451,639333,639423,639212,639234,639315,639398,639466,639285,639328,639326,639339);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			/*
			}else if ($id == 33 ){ // Mohamed Mamdouh-Peer Mentor
			$teamid = 33;
			$_SESSION['team'] = array (127225,127227,98854,110553,128075,127251,112118,127537,127244,128068,128009,127355,127352,123247,108387,127961,124785);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 34 ){ // Mohamed Mokhtar
			$teamid = 34;
			$_SESSION['team'] = array (105977,33113,19443,19341,20017,13080,45274,62150,86349,103198,105400,105411,97730,100584);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 35 ){ // Mohamed Morsy 
			$teamid = 35;
			$_SESSION['team'] = array (97716,77518,101501,20281,19357,105388,19456,105401,103676,42080,105391,100887,41194,101162);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 36 ){ // Mohamed Ramadan-Peer Mentor
			$teamid = 36;
			$_SESSION['team'] = array (104219,127107,127103,127220,128071,127584,128056,128037,127505,114458,120045,127434,127217,127218,127219,111287,117890,127771);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 37 ){ // Mostafa Ahmed- Peer Mentor
			$teamid = 37;
			$_SESSION['team'] = array (103460,47138,106441,106520,106567,106364,106866,104876,103694,106859);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 38 ){ // Mostafa Magdy
			$teamid = 38;
			$_SESSION['team'] = array (106365,19449,72442,90377,98567,98973,101163,104363,105355,105414,105420,53956,100451,100459);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 39 ){ // Sabry ElKomaty
			$teamid = 39;
			$_SESSION['team'] = array (106438,19479,54199,100429,100652,104673,104765,105395,105405,106167,98573,34381,102045,102806);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 40 ){ // Sayed Eid -Peer Mentor
			$teamid = 40;
			$_SESSION['team'] = array (127546,127443,127440,111382,111383,127539,127108,110747,109952,116522,127541,110363,110761,110754,110749,127538,110696,127576,127340,127114,127115);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 41 ){ // Tamer Baioumy  
			$teamid = 41;
			$_SESSION['team'] = array (19715,19348,20011,19258,19362,20012,19961,19483,19255,103133,118735,122822,125375,125353,125354,125347);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 42 ){ // Tamer Elsherbeny
			$teamid = 42;
			$_SESSION['team'] = array (19114,19964,19446,19442,125443,109044,109045,116946,117032,125441,106514,107778,125212,78276,125431,119891,93229);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 43 ){ // Tamer Kassem  
			$teamid = 43;
			$_SESSION['team'] = array (106367,87320,95814,96458,97922,100912,101262,101774,102093,102095,39663,33185,96607,103619);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 44 ){ // Youssef Shaaban -Peer Mentor
			$teamid = 44;
			$_SESSION['team'] = array (109043,128012,128013,128008,128007,108566,111617,128031,128030,106604,128038,127070,124476,128048,92828,70617,128054,127536,128050);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 45 ){ // Hassan Hamdy
			$teamid = 45;
			$_SESSION['team'] = array (2130,96981,29329,95774,98563,94284,97521,98095,104588,98383,96845,102049,102942,103167,107025,117663);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 46 ){ // Hatem ElBaz
			$teamid = 46;
			$_SESSION['team'] = array (6064,86133,98580,51876,98412,96380,97903,96987,96398,96803,96362,95620,72657,103635,42174);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 47 ){ // Marwa Amer 
			$teamid = 47;
			$_SESSION['team'] = array (14691,98571,98610,98586,95751,97935,98534,95176,96610,103618,114990,124620,124840,125222);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 48 ){ // Fady Mohamed
			$teamid = 48;
			$_SESSION['team'] = array (68016,98569,97695,98612,81115,98575,98781,58104,103161,64362,103709,97681,96653,102998,43092,99014);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 49 ){ // Samah ElSayed 
			$teamid = 49;
			$_SESSION['team'] = array (46752,96977,98625,95436,98634,96750,98626,96287,97898,92256,98638,76302,82969,103730,125449);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 50 ){ // Khaled Arafa
			$teamid = 50;
			$_SESSION['team'] = array (62613,96706,98526,93268,97554,98556,98540,98527,98490,98377,98529,56530,72998,123340,124600,125447);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 51 ){ // Rana Gohar
			$teamid = 51;
			$_SESSION['team'] = array (98603,98562,95258,98528,96269,99126,100306,103736,97720,98628,116826,125448,125733);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 52 ){ // Activation Part Time 
			$teamid = 52;
			$_SESSION['team'] = array (84739,95352,77283,124545,127737,13704,127497,128162,124543,126842,105354,128100,128025,128072,99328,128059,118791,128018,128073,128020,128026,72904,118498,51784,106140,128049,128163,128003,128027,92790,128021,128029);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			*/
			};

			?>
-->
		<div class="inbound" style="width: 100%; height:300px; margin-top:100px;">
			<canvas id="calls" width="535" ></canvas>
			
		</div>
	
	
	
		
		
	<?php 
	
	include'js/sv_daily.php' ;

	
	?>

	
		</div>
					
	</div>
	</div>