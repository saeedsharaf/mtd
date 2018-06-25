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
			
			
			
			

			
			
			
			
		//$ids = array(111,222);
		//foreach($ids as $id){
		
		//$sql1 = "select user_name from member where super = '$id'";	
		//$result1 = $cont->query($sql1);
		//$rows = $result1->fetch_assoc();
		
		include'hv_calculation.php';	
		include'../style/font.php';
			

			//if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <a href="nps.php" style="color:blue;" title="click here for more details">High Value </a> </td>
				<td class="light"> <?php echo $totalsurvey ;?></td>
				<td class="light"> <?php echo $pro ;?> </td>
				<td class="light"> <?php echo $de ;?> </td>
				<td class="light"> <?php echo $pass ;?>  </td>
				<td class="light" style="<?php echo $nps_color ; ?> " > <?php echo round($nps) ;?>%  </td>
				<td class="light" style="<?php echo $p_color ; ?> "> <?php echo round($pro_pr) ;?>% </td>
				<td class="light" style="<?php echo $de_color ; ?> "> <?php echo round($de_pr) ;?>%  </td>
				<td class="light" style="<?php echo $pa_color ; ?> "> <?php echo round($pass_pr) ;?>%  </td>
				<td class="light" style="<?php echo $cs_tt ; ?> "> <?php echo round($per_csttb) ; ?> % </td>
				<td class="light" style="<?php echo $cs_bb ; ?> "> <?php echo round($per_csbb) ; ?> % </td>
				<td class="light" style="<?php echo $ag_tt ; ?> "> <?php echo round($per_agttb) ; ?> %  </td>
				<td class="light" style="<?php echo $ag_bb ; ?> "> <?php echo round($per_agbb) ; ?> % </td>
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </td>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </td>
				<td class="light"> <?php echo $fcr1 ;?></td>
				<td class="light"> <?php echo $ir1 ; ?> </td>
				
			
			</tr>	
			
			<?php

			//}
			
			//}
		
			 
?>
</table>

		<div class="inbound" style="width: 100%; height:500px; margin-top: 10px;">
			<canvas id="daily" width="500" height="140"></canvas>
		</div>

	

		
	<?php 

	
	include'js/res.php';
	
		
	?>

	
	
	
	
	
	
	
		</div>
			