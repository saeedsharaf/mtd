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
			$teamid = 1;  // team Abdel Hamed Aly
			
			$_SESSION['team'] = array (12231,9749,19363,37920,63480,95167,98550,98849,100622,102098,100502,101190,8407,101172,77922);
			
			
			
			
		include'../style/font.php';
		include'calculation.php';
			

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
				
			
			}
			
			
			
			} else if ($id == 2){ // team Ahmed Abdel Kareem Hamed Mahmoud -Peer Mentor
			$teamid = 2;
			$_SESSION['team'] = array (78031,106500,73564,103279,101581,103487,106344,106509,106356,106379,72124,106359,106747,42890,84424,100346);
			
			include'calculation.php';
			
			include'../style/font.php';
			
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			  
			
		
			
			}
			
			} else if ($id == 3){ // team Ahmed Badaway -Peer Mentor
			
			$teamid = 3;
			
			$_SESSION['team'] = array (124478,127765,116164,127215,110347,127801,72357,91278,126620,110255,110708,110763,109034,127554,127553,127863,127550,127551,127552);
			
			
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
			}
			
			} else if ($id == 4){ // Ahmed Badawy
			$_SESSION['team'] = array (19962,20172,19343,11588,19346,19380,125445,125574,122096,108975,117483,125609,92089,126116,20019,105169);
			
			include'calculation.php';
			
			include'../style/font.php';
			
				
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			include'tabel.php';
			
			}
			
			} else if ($id == 5){ // Ahmed El-Desouky 
			$teamid = 5;
			$_SESSION['team'] = array (98063,106345,68689,81163,97374,98635,100558,102114,102121,98633,95961,100698,101037,105431,45206,98631);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
		
			
			}
			
			} else if ($id == 6){ // Ahmed Moharram
			$teamid = 6;
			$_SESSION['team'] = array (62803,19445,19704,19960,19311,98309,98623,98997,100391,100630,105378,97693,98270,98636);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			include'tabel.php';
			
			}
			
			} else if ($id == 7){ // Ahmed Saeed
			$teamid = 7;
			$_SESSION['team'] = array (106799,19259,10294,12960,14367,19952,65923,98021,98576,99048,101616,105407,15006,98549,99039);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 8){ // Ahmed Shaban
			$teamid = 8;
			$_SESSION['team'] = array (19482,19260,19475,19447,19458,19448,19444,112312,125455,125581,108683,125735,56473,107542,125219,125340,84132);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
				include'tabel.php';
			
			}
			
			} else if ($id == 9){ // Alaa ElAshmawy
			$teamid = 9;
			$_SESSION['team'] = array (43939,106363,19080,19325,7014,10569,98630,100307,100552,105372,105410,105432,105458,44353,97680,99829);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 10 ){ // Aliaa Elgohary
			$teamid = 10;
			$_SESSION['team'] = array (103458,101503,105577,19696,19956,95771,96639,104203,105376,105379,105394,96383,98611,109326);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 11 ){ // Amira Hassan
			$teamid = 11;
			$_SESSION['team'] = array (106750,106801,19486,19360,43289,88647,96382,97890,97909,100117,100564,100646,96872,103582,98350,101189);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 12 ){ // Amr Abbas
			$teamid = 12;
			$_SESSION['team'] = array (20558,19735,19338,19452,19423,77902,126092,69801,125907,95682,125898,126103,58395,126104,126105,107658);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 include'tabel.php';
	
			}
			
			} else if ($id == 13 ){// Amr ElHoseiny -Peer Mentor
			$teamid = 13;
			$_SESSION['team'] = array (127069,127756,93361,110764,125938,95901,110260,111757,127770,105164,127785,111394,112077,92746,111839,111591,111826,108554);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 14 ){ //Dalia Salam
			$teamid = 14;
			$_SESSION['team'] = array (106724,106353,19734,19441,19394,93885,95758,97694,100497,101099,101293,101497,98559,104872,62044);
			include'calculation.php';
			
			include'../style/font.php';
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			 else if ($id == 15 ){ // Essam Hassan -Peer Mentor
			$teamid = 15;
			$_SESSION['team'] = array (127583,101225,127549,91441,93929,127133,127531,127105,128228,121837,112031,127556,105998,127535,127991,127327,111260,111815);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 16 ){ // Fahd Hassan -Peer Mentor
			$teamid = 16;
			$_SESSION['team'] = array (128199,128196,128069,127738,127109,127567,127565,122279,127562,127561,127558,126631,110555,127483,127481,127488,127502,111204,127532);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 17 ){ // Ghada Mosafa
			$teamid = 17;
			$_SESSION['team'] = array (106746,106860,19350,9695,85714,95445,96361,96549,98700,100500,102024,38688,97941,98637,100714);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			} else if ($id == 18 ){ // Hatem AbdelAal
			$teamid = 18;
			$_SESSION['team'] = array (47001,19963,20016,19472,19166,44921,105347,105429,106540,97379,101370,104636,11210,100693,104791);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 19 ){ // Hosny Hussein  -Peer Mentor
			$teamid = 19;
			$_SESSION['team'] = array (124775,127791,105168,111813,127861,108559,127094,127095,20694,101050,127073,127075,103131,107445,108562,127390,127439,127592,110914);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
				include'tabel.php';
			
		
			
			}
			
			} else if ($id == 20){ // Ibrahim Hassan
			$teamid = 20;
			$_SESSION['team'] = array (20022,19428,19427,19717,19958,93002,125370,116550,108285,101529,106271,106053,97645,121758,69568,125337,45851);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 21 ){ // Islam Ezzat
			$teamid = 21;
			$_SESSION['team'] = array (106454,19706,19698,96366,98546,98895,100684,101695,96752,105366,20018,19326,106378,100509,102142);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			}
			
			} else if ($id == 22){ // Karim abdelmenem
			$teamid = 22;
			$_SESSION['team'] = array (106861,19954,20013,39957,99046,100937,101457,101601,101831,103086,91256,101087,105433,101790);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
			
			}
			
			} else if ($id == 23 ){ // Khaled Ali 
			$teamid = 23;
			$_SESSION['team'] = array (93489,106749,106368,19473,54031,66097,93798,96155,96547,98774,102103,104873,96696,100649,100634);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 24 ){ // Mayada ElDessoky
			$teamid = 24;
			$_SESSION['team'] = array (106380,106487,103177,19430,19361,20557,48007,105365,98530,100033,100826,19945,97689);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 25 ){ // Mennat Allah Ismaiel Saleh Ismaiel-Peer Mentor
			$teamid = 25;
			$_SESSION['team'] = array (121892,46510,106360,106522,77928,106361,106508,96806,101347,106346,106362,106430,106533,106748,106752,81437,106385);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 26 ){ // Mohamed Ayman -Peer Mentor 
			$teamid = 26;
			$_SESSION['team'] = array (127542,126624,111889,91740,101069,127065,128016,128042,127543,127391,128064,128065,127544,127540,112028,127545,114152,127199,111370,111367,116829,127441);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 27 ){ // Mohamed El Gendy
			$teamid = 27;
			$_SESSION['team'] = array (19468,19312,19369,106355,126091,125338,107612,126106,96467,85959,111187,107830,125372,125742,117481);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 28 ){ // Mohamed Erfan-Peer Mentor 
			$teamid = 28;
			$_SESSION['team'] = array (127876,109375,127946,127941,127945,127943,127939,127597,127594,127577,127560,127557,127564,127566,127569,127563,128084,127760,127444);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 29 ){ // Mohamed Hamdy -Peer Mentor 
			$teamid = 29;
			$_SESSION['team'] = array (111818,111742,50727,102707,128113,128181,111247,111611,111877,110908,111543,127840,107365,110552,127845,111667,111661,111772,127857);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 30 ){ // Mohamed Hesham -Peer Mentor
			$teamid = 30;
			$_SESSION['team'] = array (110704,127534,127548,127555,109164,127547,127126,127125,127128,127119,74303,127097,128046,127596,110766,127228,128233,127559,128067);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 31 ){ // Mohamed Hosny  
			$teamid = 31;
			$_SESSION['team'] = array (106486,102852,19367,95418,101822,105346,105421,105426,104181,105403,62411,63659,85472,101188,19112);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
			}else if ($id == 32 ){ // Mohamed Madbouli -Peer Mentor 
			$teamid = 32;
			$_SESSION['team'] = array (111252,97712,111797,110115,111856,127099,127098,108984,111592,108539,128119,105447,128226,127134,127436,123298,128184,128176,99702);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
				include'tabel.php';
		
			
			}
			
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