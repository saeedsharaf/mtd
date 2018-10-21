<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
include'../main_page.php';
?>


<style>
	.hover:hover{
		color:blue;
	}
</style>
		
			
		
		<div class="reset" id="main">
			
			
		
			<table class="tf">
			
			 <caption style="background-color:#2801a9a6; padding:9px; color: white;"><a href="daily.php" class="hover" title="Daily Operation">FL Operation _ Progression & Alarms</a></caption> 
			<thead>
			
			<tr>
				<th class="noborder"> Offered calls </th>
				<th class="noborder"> Answered calls</th>
				<th class="noborder"> Outbound call </th>
				<th class="noborder"> SL <br> ( 80% ) </th>
				<th class="noborder"> AHT <br> ( 260 ) </th>
				<th class="noborder"> Aban Calls </th>
				<th class="noborder"> Accessibility </th>
				<th class="noborder"> Adherence <br> ( 95% ) </th>
				<!-- <th class="noborder"> Absent </th> -->
				<th class="noborder"> Aban % </th>
				<th class="noborder"> hold <br> ( 3% )  </th>
				<th class="noborder"> ACW <br> ( 5% ) </th>
				<th class="noborder"> Outbound % </th>
			</tr>
			</thead>
			<tbody>
			
			<?php 
			include'../config/connect.php';
			$sql="select * from dashboard ";
			$result = $cont->query($sql);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$total_calls += $row['call_offered']; // calls offered
					$total_answer += $row['acd_call']; // ACD call
					$total_outbound += $row['outbound'];
					$acd_tr1 += $row['acd_thr1'];
					$acd_tr2 += $row['acd_thr2'];
					$acd_tr3 += $row['acd_thr3'];
					$acd_tr4 += $row['acd_thr4'];
					$aban_tr1 += $row['abn_thr1'];
					$acd_time += $row['acd_time']; //acd time
					$acw_time += $row['acw_time']; // acw time
					$hold_time += $row['hold_time']; // hold time
					$aban_calls += $row['aban_calls']; // aban calls
					$auxoutofcalls += $row['auxoutofcalls']; // auxoutofcalls
					$acwoutofcalls += $row['acwoutofcalls']; // auxoutofcalls

				}

				
			}
			
			$sl = ($acd_tr1 + $acd_tr2 + $acd_tr3 + $acd_tr4) / ($total_calls - $aban_tr1) * 100 ;
			$aht = (($acd_time + $acw_tim + $hold_time) / $total_answer)  ;
			$access = ($total_answer / $total_calls) * 100  ;
			$aban_percentage = ($aban_calls / $total_calls) * 100;
			$hold_percentage = (($hold_time) / ($acd_time + $acw_time + $hold_time)) * 100 ;
			$acw_percentage = (($acw_time) / ($acd_time + $acw_time + $hold_time)) * 100;
			$outbound_calls =  $auxoutofcalls + $acwoutofcalls;
			$outbound_percentage =  (($auxoutofcalls + $acwoutofcalls) / $total_calls) *100 ;

			include'../style/font.php';
			?>

			<tr class="">
			
				<td><?php echo number_format($total_calls); ?></th>
				<td class=""> <?php echo number_format($total_answer) ?></th>
				<td class=""> <?php echo number_format($outbound_calls) ?></th>
				<td class="" style="<?php echo $sl_color ?>; "> <?php echo round($sl,2) ?> %</th>
				<td class="" style="<?php echo $aht_color ?>"> <?php echo round($aht) ?></th>
				<td class=""> <?php echo number_format($aban_calls) ?> </th>
				<td class=""> <?php echo round($access,2)  ?> % </th>
				<td class="" style="color:#ff0000;"> 93.3 % </th>
				<!-- <td class=""> Tel Opti</th>  -->
				<td class=""> <?php echo round($aban_percentage,2)  ?> %  </th>
				<td class="" style="<?php echo $hold_color  ?>"> <?php echo round($hold_percentage,2)  ?> %  </th>
				<td class="" style="<?php echo $acw_color ;?> "> <?php echo round($acw_percentage,2)  ?> % </th>
				<td class=""> <?php echo round($outbound_percentage,2)  ?> %</th>
			</tr>	
			
		</tbody>
		</table>
		
		
		
		
		
		<!--
		<div class="inbound" style="height: 200px">
			<canvas id="inbound" width="535"></canvas>
		</div>	
		
		<div class="inbound" style="height: 200px" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound" style="height: 200px">
			<canvas id="acw" width="535" ></canvas>
		</div>
	-->
		<div class="inbound" style="height: 300px; width:100%">
			<canvas id="chart" width="535" ></canvas>
		</div>
		
	
	<?php
	include'../month.php';
	include'chart/chart.php';
	

	?>
	
	
		
	
		</div>
	</div>
	