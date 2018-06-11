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
			
			<caption style="background-color:#a90101; padding:9px; color: white;">May 2018</caption>
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
			$teamid = 1;  // team XCC.Ahmed.Saeed
			
			$_SESSION['team'] = array (106799,19952,10294,19259,12960,15006,14367,98021,101616,99039,65923,98549,105407,98576,99048,12960,19259,14367,10294,98549,106799);
			
			
			
		include'calculation.php';	
		include'../style/font.php';
			

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			
			
			} else if ($id == 2){ // XCC.Hatem.AbdelAal
			$teamid = 2;
			$_SESSION['team'] = array (44921,106540,19472,105347,101370,105429,100693,19963,97379,11210,104791,104636,20016,47001,19166,47001,104791,105429);
			
			include'calculation.php';
			
			include'../style/font.php';
			
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 3){ // XCC.Amira.Hassan
			
			$teamid = 3;
			
			$_SESSION['team'] = array (97890,43289,98350,106801,100646,97909,19360,103582,100117,88647,100564,19486,96872,106750);
			
			
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 4){ // XCC.Sabry.ElKomaty
			$_SESSION['team'] = array (105395,104673,102045,105405,34381,19479,100652,98573,104765,100429,106438,106167);
			
			include'calculation.php';
			
			include'../style/font.php';
			
				
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 5){ // XCC.Mohamed.Morsy
			$teamid = 5;
			$_SESSION['team'] = array (19357,105391,41194,42080,105401,97716,20281,105388,100887,106588,77518,106400,19456,101501,19357,105388,103676,105391,106400,103676);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 6){ // XCC.Dalia.Salam
			$teamid = 6;
			$_SESSION['team'] = array (19734,101293,19441,97694,19394,98559,101099,106353,95758,100602,100497,101497,93885,104872,106724,101099,106724,106353);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 7){ // XCC.Mohamed.Hosny
			$teamid = 7;
			$_SESSION['team'] = array (105421,105426,95418,101822,19112,19367,101188,106486,63659,62411,102852,105403,105346,85472,19367,104181);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 8){ // XCC.Ghada.Mosafa
			$teamid = 8;
			$_SESSION['team'] = array (100500,19350,97941,102024,38688,9695,98700,100714,106860,96549,95445,52349,85714,106746,100500,52349,98637);
			
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 9){
			$teamid = 9;
			$_SESSION['team'] = array (106799,19952,10294,19259,12960,15006,14367,98021,101616,99039,65923,98549,105407,98576,99048,12960,19259,14367,10294,98549,106799);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 10 ){ // XCC.Mohamed.Mokhtar
			$teamid = 10;
			$_SESSION['team'] = array (105411,19443,19341,19440,105977,62150,97730,105400,100584,20017,45274,86349,103198,13080,13080,86349,105411,20017,105977,19440,33113);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 11 ){ // XCC.Abdel.HamedAly
			$teamid = 11;
			$_SESSION['team'] = array (102098,95167,12231,101172,8407,101190,98550,37920,98849,100622,77922,63480,100502,100622,95167,63480,101172);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 12 ){ // XCC.Ahmed.ElDesouky
			$teamid = 12;
			$_SESSION['team'] = array (101037,95961,100698,68689,81163,102114,98633,100558,45206,106345,105431,98635,97374,98063,105431,102121,100698,98063,98633,100558);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 13 ){// XCC.Islam.Ezzat
			$teamid = 13;
			$_SESSION['team'] = array (19326,19698,105366,19706,19705,100684,96752,98895,96056,106378,20018,98546,101695,96366,19326,96056,101695,96752,106454,106454);
			include'calculation.php';
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 14 ){ // XCC.Tamer.Kassem
			$teamid = 14;
			$_SESSION['team'] = array (33185,87320,96458,102095,39663,102093,95814,96607,101262,100912,106367,97922,23694,39663);
			include'calculation.php';
			
			include'../style/font.php';
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			 else if ($id == 15 ){ // XCC.Mayada.ElDessoky
			$teamid = 15;
			$_SESSION['team'] = array (103177,100033,48007,19945,20557,100826,98530,106487,106380,19361,105365,19430,19953,105827,105356,19945,105356,105827,100826);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 16 ){
			$teamid = 16;
			$_SESSION['team'] = array (106799,19952,10294,19259,12960,15006,14367,98021,101616,99039,65923,98549,105407,98576,99048,12960,19259,14367,10294,98549,106799);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 17 ){ // XCC.Ahmed.Moharram
			$teamid = 17;
			$_SESSION['team'] = array (19960,19311,19445,98623,105378,100630,19704,98997,100391,62803,98270,98636,41149,97693,98309,97693,19704,62803,98623,19445);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 18 ){ // XCC.Mostafa.Magdy
			$teamid = 18;
			$_SESSION['team'] = array (19449,100459,101163,106365,105420,100451,105414,98973,104363,105355,53956,90377,98567,105384,101163,105384,105420,53956);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 19 ){ // XCC.Aliaa.Elgohary
			$teamid = 19;
			$_SESSION['team'] = array (101503,105577,19956,103458,95771,105379,98611,105376,96639,104203,109326,105905,104203,19696);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 20){ // XCC.Khaled.Ali
			$teamid = 20;
			$_SESSION['team'] = array (93489,96155,98774,106749,106368,96696,54031,19473,96547,102103,104873,100649,96547,104873,96155,96696,66097);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 21 ){ // XCC.Tamer.Baioumy
			$teamid = 21;
			$_SESSION['team'] = array (19483,19258,19961,20011,19348,19715,19362,20012,19255,125449,125375,19715,20011,19348,103133,122822,125347,125353,118735,82969);
			include'calculation.php';
			
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 22){ // XCC.Amr.Abbas
			$teamid = 22;
			$_SESSION['team'] = array (19423,19338,19452,20558,126092,99014,107658,125907,20276,20276,19338,69801,117663,126105,58395,95682,126103,77902,125898,126104);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			} else if ($id == 23 ){ // XCC.Tamer.Elsherbeny
			$teamid = 23;
			$_SESSION['team'] = array (19114,19964,19446,19442,106514,125448,107025,125212,107778,125443,109044,19114,78276,125441,125431,125733,119891,124600);
			include'calculation.php';
			
			include'../style/font.php';

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
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
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
			  
			
		
			
			}
			
			}; 
			
				
	include'js/daily_calls.php' ;

		
			?>

		<div class="inbound" style="height:240px;margin-top:20px;">
			<canvas id="nps" width="500"></canvas>
		</div>	
		
		<div class="inbound" style="height:240px; margin-top:20px;" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound" style="width: 100%; height:250px; margin-top:20px;">
			<canvas id="calls" width="535" ></canvas>
			
		</div>
	
	
	
		
		
	<?php 
	
	include'js/daily_calls.php' ;
	include'js/nps.php';
	include'js/pro.php' ;
	
	

	
	
	?>

	
	
	
	<a href="more.php" class="more" style="color:blue; position: absolute; right: 30;bottom: 45px;"> More >> </a> 
	
	
	
		</div>
					
	</div>
	</div>