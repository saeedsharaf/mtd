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
/*
thead{
	display:block;
	width: 100%;
	overflow: auto;
}

tbody{
	display:block;
	width: 100%;
	height: 500px;
	overflow: auto;
}


*/

a:hover{
	color:blue;
}

</style>
		
		
			
		
		<div class="reset" id="main">
			
			
		
			<table class="tf">
			
			<caption style="background-color:#2801a9a6; padding:9px; color: white;"><a href="report.php" calss="hover">Daily FL Operation _ Progression & Alarms </a></caption>
			<thead>
			
			<tr>
				<th class="noborder"> Date </th>
				<th class="noborder"> Offered calls </th>
				<th class="noborder"> Answered calls</th>
				<th class="noborder"> Outbound call </th>
				<th class="noborder"> SL </th>
				<th class="noborder"> AHT </th>
				<th class="noborder"> Aban Calls </th>
				<th class="noborder"> Accessibility </th>
				<th class="noborder"> Adherence  </th>
				<th class="noborder"> Absent </th>
				<th class="noborder"> Aban % </th>
				<th class="noborder"> Hold %  </th>
				<th class="noborder"> ACW% </th>
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

				$sl = ($row['acd_thr1'] + $row['acd_thr2'] + $row['acd_thr3'] + $row['acd_thr4']) / ($row['call_offered'] - $row['abn_thr1']) * 100 ;	
				$aht = (($row['acd_time'] + $row['acw_time'] + $row['hold_time']) / $row['acd_call']);

				$hold = ($row['hold_time'] / ($row['acd_time'] + $row['acw_time'] + $row['hold_time']))*100;

				$acw = ($row['acw_time'] / ($row['acd_time'] + $row['acw_time'] + $row['hold_time'])) *100 ;

				if($sl < 80){
					$sl_color = 'color: #ff0000';
				}else{
					$sl_color = 'color: #108003db';
				}

				if($aht > 220){
					$aht_color = 'color: #ff0000';
				}else{
					$aht_color = 'color: #108003db';

				}


				if($hold > 5){
					$hold_color = 'color: #ff0000';
				}else{
					$hold_color = 'color: #108003db';
				}

				if($acw > 5){
					$acw_color = 'color: #ff0000';

				}else{
					$acw_color = 'color: #108003db';
				}

				$date = date_create($row['date']);

					?>
				

			<tr>
				<td> <?php echo date_format($date,'d-M-Y' ); ?></th>
				<td> <?php echo number_format($row['call_offered']); ?></th>
				<td> <?php echo number_format($row['acd_call']); ?></th>
				<td> <?php echo number_format($row['auxoutofcalls'] + $row['acwoutofcalls']) ; ?></th>
				<td style="<?php echo $sl_color;  ?>"> <?php echo round( $sl,2) ; ?> % </th>
				<td style="<?php echo $aht_color ?>"> <?php echo round($aht); ?> </th>
				<td><?php echo number_format($row['aban_calls']) ; ?> </th>
				<td> <?php echo round(($row['acd_call'] / $row['call_offered']) *100 ,2) ; ?> % </th>
				<td> Tel </th>
				<td> Tel </th>
				<td> <?php echo round(($row['aban_calls'] / $row['call_offered']) * 100,2) ; ?> % </th>
				<td style="<?php echo $hold_color ?>"> <?php echo round($hold,2) ; ?> %  </th>
				<td style="<?php echo $acw_color ; ?>"> <?php echo round($acw ,2) ; ?> %</th>
				<td> <?php echo round((($row['auxoutofcalls'] + $row['acwoutofcalls']) / $row['call_offered']) * 100 ,2) ; ?> %</th>
			</tr>

			<?php
			}
			}

			?>	
			
		</tbody>
		</table>
		
		
		
	
		
	
		</div>
	</div>
	