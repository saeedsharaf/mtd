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
			
			<caption style="background-color:#a90101; padding:9px; color: white;">Oct 2018</caption>
			<thead>
			
			<tr>
				<th class="noborder"> ID </th>
				
				<th class="noborder"> S.V </th>
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
			
			
			

			if($_GET['id'] == 111){
			//$_SESSION['sv']= array(9,8,28,4,12,10,29,2,31,31,4,8,26,1,7,11,15,17,19,16,7);
		} else if($_GET['id'] == 222){
			$_SESSION['sv']= array(9,8,28,4,12,10,29,2,31,31,4,8,26,1,7,11,15,17,19,16,7,5,13,24,6,3,14,21,27,22,25,30);
			}else if($_GET['id'] == 333){
				$_SESSION['sv'] = array(1,7,15,16,17,19,20,23,32);
			}else if($_GET['id'] == 444){
				$_SESSION['sv'] = array(2,25,37);
			}else if($_GET['id'] == 555){
				$_SESSION['sv'] = array(45,46,47,48,49,50,51,52);
			}


			
			foreach( $_SESSION['sv'] as $id ){
			
			
			
			$sql = "select * from nps where team_id = '$id' ";  // to select all data rows in data base 
			
			$promoter = "select * from nps where team_id = '$id' and nps_rating >= 9 "; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where team_id = '$id' and nps_rating > 6 and nps_rating < 9  "; // select passive rows 
			$detractor = "select * from nps where team_id = '$id' and nps_rating <= 6 "; // select detractor rows  
			
			$fcr = "select * from nps where team_id = '$id' and ir = '1' ";
			$ir = "select * from nps where team_id = '$id' and ir = '2' ";

			$result_pro = $cont->query($promoter); // promter query
			$result_pass= $cont->query($passive); // passive query
			$result_de = $cont->query($detractor); // detractor query 
			// below code to get total of promtor & passive & detractor 
			$pro = $result_pro->num_rows; 
			$pass = $result_pass->num_rows;
			$de = $result_de->num_rows;
			////////////////////////////////////////////////////////////////////
			
			$result = $cont->query($sql);
			
			
			$cs_ttb = "select * from nps where team_id = '$id' and sats > 3 ";
			$cs_bb = "select * from nps where team_id = '$id' and sats < 2";
			
			$ag_ttb = "select * from nps where team_id = '$id' and agent_satisfaction > 3 "; // select agent tob box 
			$ag_bb = "select * from nps where team_id = '$id' and agent_satisfaction < 2 "; // select agent bottom box 
			
			
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
				<td class="light"><a href="sv_nps.php?id=<?php echo $row['team_id'] ; ?>" style="color:blue; " > <?php echo $row['team_id'] ;?> </a></th>
				
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
<!--
		<div class="inbound">
			<canvas id="nps" width="500"></canvas>
		</div>	
		
		<div class="inbound" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound" style="width: 100%;">
			<canvas id="calls" width="535" ></canvas>
		</div>
	
		<div class="inbound">
			<canvas id="hh" width="535" ></canvas>
		</div>
	
	
		-->
		
		

	
	
	
	
		</div>
					
	</div>
	</div>