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
			
			
			
			

			
			
			
			
	
	
		
		$sql1 = "select user_name from member where super = ''";	
		$result1 = $cont->query($sql1);
		$rows = $result1->fetch_assoc();
		 	
		include'tamer_seif.php';	
		include'../style/font.php';
			

			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <!--<a href="more.php?id=555" style="color:blue;" title="click here for more details">--><span>Tamer Seif
 </span> </th>
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
			
			<?php

			}
			
		
		
			 
?>
</table>
<!--
		<div class="inbound" style="width: 100%; height:250px;">
			<canvas id="daily" width="500" height="140"></canvas>
		</div>

		<div class="inbound">
			<canvas id="nps" width="500" height="140"></canvas>
		</div>	
		
		<div class="inbound" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
-->

		<div class="inbound1" style="width: 100%; height:500px;">
			<canvas id="tamer" width="500" height="140"></canvas>
		</div>
	
		
	<?php 

	
	
	include'js/tamer.php';

	
	
		
	?>

	
	
	
	
	
	
	
		</div>
			