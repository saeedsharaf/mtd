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
			
			<caption style="background-color:#b93ab1; padding:9px; color: white;">Oct 2018</caption>
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
			$teamid = 1;  // Moataz Younis_ alex
			
			$_SESSION['team'] = array (639202,639212,639216,639230,639285,639315,639328,639333,639354,639391,639398,639415,639423,639451,639466
);
			
			
			
			
		include'../style/font.php';
		include'calculation.php';
			

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
				
			
			}
			
			
			
			} else if ($id == 2){ // Ahmed El-Desouky 
			$teamid = 2;
			$_SESSION['team'] = array (638176,638178,638186,638187,638206,638220,638409,638482,638484,638535,638860,638928);
		
			include'calculation.php';
			
			include'../style/font.php';
			
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			  
			
		
			
			}
			
			} else if ($id == 3){ // Ahmed Moharram
			
			$teamid = 3;
			
			$_SESSION['team'] = array (638158,638204,638310,638316,638351,638410,638447,638627,638655,638665,638698,638715,638892);
		
			
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
			}
			
			} else if ($id == 4){ //Ahmed Saeed
			$_SESSION['team'] = array (638108,638109,638342,638364,638372,638444,638480,638495,638500,638633,638639,638829
);
			
			include'calculation.php';
			
			include'../style/font.php';
			
				
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			include'tabel.php';
			
			}
			
			} else if ($id == 5){ // Alaa ElAshmawy 
			$teamid = 5;
			$_SESSION['team'] = array (638043,638214,638319,638343,638570,638751,638753,638775,638813,638849,638878,638954,638966
);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
		
			
			}
			
			} else if ($id == 6){ // Aliaa Elgohary
			$teamid = 6;
			$_SESSION['team'] = array (638065,638218,638329,638472,638620,638641,638772,638778,638784,638811,638832,638943
);
		
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
			}
			
			} else if ($id == 7){ // Ahmed Hatem_alex
			$teamid = 7;
			$_SESSION['team'] = array (639203,639254,639282,639295,639309,639327,639334,639348,639363,639396,639408,639421,639429,639450
);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 8){ // Dalia Salam
			$teamid = 8;
			$_SESSION['team'] = array (638035,638179,638198,638327,638468,638504,638630,638696,638713,638744,638880,638958,638962
);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
				include'tabel.php';
			
			}
			
			} else if ($id == 9){ // Ghada Mosafa
			$teamid = 9;
			$_SESSION['team'] = array (638022,638023,638066,638205,638267,638334,638454,638469,638488,638701,638884,638917,638991
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 10 ){ // Hatem AbdelAal
			$teamid = 10;
			$_SESSION['team'] = array (638078,638079,638230,638344,638422,638606,638622,638686,638821,638853,638949,638968,638994
);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 11 ){ // Sherif Hafez_alex
			$teamid = 11;
			$_SESSION['team'] = array (639205,639208,639234,639243,639255,639271,639290,639336,639338,639352,639410,639436,639448,639460
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 12 ){ // Islam Ezzat
			$teamid = 12;
			$_SESSION['team'] = array (638060,638170,638173,638235,638347,638349,638419,638509,638619,638625,638631,638887,638975
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
	
			}
			
			} else if ($id == 13 ){// Karim abdelmenem
			$teamid = 13;
			$_SESSION['team'] = array (638055,638374,638384,638420,638515,638518,638731,638734,638804,638855,638974,638992
);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 14 ){ //Khaled Ali 
			$teamid = 14;
			$_SESSION['team'] = array (638074,638129,638162,638185,638188,638493,638513,638569,638864,638876,638879,638885,638895,639070
);
			include'calculation.php';
			
			include'../style/font.php';
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			 else if ($id == 15 ){ // Amr Mounir_alex
			$teamid = 15;
			$_SESSION['team'] = array (639209,639220,639276,639277,639291,639296,639330,639389,639399,639406,639411,639425,639442,639465
);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 16 ){ //Mohamed Nagi_lex
			$teamid = 16;
			$_SESSION['team'] = array (639247,639280,639322,639339,639353,639359,639383,639384,639407,639427,639437,639443
);
		include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 17 ){ // Mohamed Adel Ragab_alex
			$teamid = 17;
			$_SESSION['team'] = array (639217,639229,639238,639251,639252,639266,639300,639357,639390,639395,639401,639428,639447
);
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
			
			} else if ($id == 19 ){ // Ahmed El-Tahan_alex
			$teamid = 19;
			$_SESSION['team'] = array (639224,639226,639242,639253,639275,639342,639351,639361,639387,639393,639432,639452,639455,639469
);
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
			$_SESSION['team'] = array (638057,638147,638353,638392,638548,638709,638748,638758,638764,638830,638989,639161
);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 22){ // Mohamed Morsy
			$teamid = 22;
			$_SESSION['team'] = array (638426,638648,638680,638687,638756,638761,638776,638794,638814,638839,638842,638850,638897
);
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
			$_SESSION['team'] = array (638064,638077,638140,638145,638207,638359,638424,638496,638550,638668,638831,638935
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 25 ){ //XCC-Ahmed Badawy
			$teamid = 25;
			$_SESSION['team'] = array (638699,638889,638903,638916,638918,638926,638927,638932,638933,638938,638940,638952,638967,638972
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 26 ){ // XCC-Ahmed Shaaban
			$teamid = 26;
			$_SESSION['team'] = array (638605,638615,638632,638647,638657,638659,638702,638705,638712,638716,638733,638742,639100
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 27 ){ // XCC-Amr Abbas
			$teamid = 27;
			$_SESSION['team'] = array (638164,638896,638909,638912,638914,638931,638934,638939,638942,638945,638971,638977,638990
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 28 ){ // XCC-Ibrahim Hassan 
			$teamid = 28;
			$_SESSION['team'] = array (638051,638308,638464,638508,638572,638660,638729,638777,638802,638840,638844,638901,638951
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 29 ){ // XCC-Mohamed El Gendy 
			$teamid = 29;
			$_SESSION['team'] = array (638135,638136,638189,638320,638321,638502,638520,638708,638722,638803,638808,638820,638936
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 30 ){ // XCC-Tamer Baioumy 
			$teamid = 30;
			$_SESSION['team'] = array (638891,638894,638906,638908,638910,638920,638924,638929,638941,638956,638957,638959,638981,639082
);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 31 ){ // XCC-Tamer Elsherbeny 
			$teamid = 31;
			$_SESSION['team'] = array (638196,638323,638379,638387,638435,638526,638608,638654,638682,638730,638735,638852,638953
);
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