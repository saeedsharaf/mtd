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
				 <th class="noborder"> Forcast <br>(Over-Under)</th>  
				<th class="noborder"> Outbound call </th>
				<th class="noborder"> SL <br> ( 80% ) </th>
				<th class="noborder"> AHT <br> ( 260 )</th>
				<th class="noborder"> Aban Calls </th>
				<th class="noborder"> Accessibility </th>
				<th class="noborder"> Adherence <br> ( 95% ) </th>
				<!-- <th class="noborder"> Absent </th>  -->
				<th class="noborder"> Aban  </th>
				<th class="noborder"> Hold <br> ( 3% ) </th>
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
					$date = $row['date'] ;

					$forcast = "select * from forcast where date = '$date' ";
					$forcast_q = $cont->query($forcast);
					$forcast_row = $forcast_q->fetch_assoc();

					


					$over_under = round(($forcast_row['offered_calls'] - $forcast_row['forcast_calls']) / $forcast_row['forcast_calls'] * 100,2) ;


				$sl = ($row['acd_thr1'] + $row['acd_thr2'] + $row['acd_thr3'] + $row['acd_thr4']) / ($row['call_offered'] - $row['abn_thr1']) * 100 ;	
				$aht = (($row['acd_time'] + $row['acw_time'] + $row['hold_time']) / $row['acd_call']);

				$hold = ($row['hold_time'] / ($row['acd_time'] + $row['acw_time'] + $row['hold_time']))*100;

				$acw = ($row['acw_time'] / ($row['acd_time'] + $row['acw_time'] + $row['hold_time'])) *100 ;

				if($sl < 80){
					$sl_color = 'color: #ff0000';
				}else{
					$sl_color = 'color: #108003db';
				}

				if($aht > 260){
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


				if($row['adherence'] < 95){
					$adher_color = 'color: #ff0000';
				}else{
					$adher_color = 'color: #108003db';
				}

				$date = date_create($row['date']);

				if($over_under > 10 ){
					$over_color = 'color: #ff0000';
				} else if ($over_under < - 10 ){
					$over_color = 'color: #ff0000';
					}else{
						$over_color = 'color: #108003db';
					}

					?>
				

			<tr>
				<td> <?php echo date_format($date,'d-M-Y' ); ?></td>
				<td> <?php echo number_format($row['call_offered']); ?></td>
				<td> <?php echo number_format($row['acd_call']); ?></td>
				 <td style="<?php echo $over_color;  ?>"> <a href="download.php?date=<?php echo $row['date'] ?>" style="color: unset;" title="Press to download " > <?php echo $over_under; ?> % </a></td>  
				<td> <?php echo number_format($row['auxoutofcalls'] + $row['acwoutofcalls']) ; ?></td>
				<td style="<?php echo $sl_color;  ?>"> <?php echo round( $sl,1) ; ?> % </td>
				<td style="<?php echo $aht_color ?>"> <?php echo round($aht); ?> </td>
				<td><?php echo number_format($row['aban_calls']) ; ?> </td>
				<td> <?php echo round(($row['acd_call'] / $row['call_offered']) *100 ,1) ; ?> % </td>
				<td style="<?php echo $adher_color;  ?>"> <?php echo $row['adherence'] ?> % </td>
				<!-- <td> Tel </td>  -->
				<td> <?php echo round(($row['aban_calls'] / $row['call_offered']) * 100,1) ; ?> % </td>
				<td style="<?php echo $hold_color ?>"> <?php echo round($hold,1) ; ?> %  </td>
				<td style="<?php echo $acw_color ; ?>"> <?php echo round($acw ,1) ; ?> %</td>
				<td> <?php echo round((($row['auxoutofcalls'] + $row['acwoutofcalls']) / $row['call_offered']) * 100 ,1) ; ?> %</td>
			</tr>

			<?php
			}
			}

			?>	
			
		</tbody>
		</table>
		
		
		
	
		
	
		</div>
	</div>
	