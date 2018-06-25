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
table{
	border-collapse: collapse;
}
td{
	border:1px solid #4f75a2;
	font-size:15px;

}
</style>		
		<div class="reset" id="main">
			
		<table>
			<thead>
				<tr style="background-color:#3f51b5 ; color:white ; font-size: 14px;">
					<th> Name</th>
					<th> Supervisor</th>
					<th> Manager</th>
					<th> Inbound AHT</th>
					<th> AHT Score</th>
					<th>  ACW % </th>
					<th> ACW Score</th>
					<th>  Hold % </th>
					<th> Hold Score</th>
					<th> Outbound AHT</th>
					<th> OB Score</th>
					
					

				</tr>	
				<tbody>
					
						<?php 
						include'../config/connect.php';

						$sql="select * from score where manger_id = '111'";
						$result=$cont->query($sql);
						if($result->num_rows > 0){


							while($row = $result->fetch_assoc()){
							$aht = ($row['acd_time'] + $row['gold_time'] + $row['acw_time']) / $row['acd_calls'];
							$hold = ($row['hold_time']) / ($row['hold_time'] + $rowp['acw_time'] + $row['acd_time']) * 100 ;
							$acw = ($row['acw_time']) / ($row['hold_time'] + $rowp['acw_time'] + $row['acd_time']) * 100;
							$outbound_aht = ($row['aux_out_time'] + $row['acw_out_time']) / ($row['acw_out_time'] + $row['aux_out_calls']) ;
							$extra_aux = $row['extra_aux'];
							$held_Calls = $row['held_call'] / $row['acd_calls'] * 100;
							$outbound = $row['outbound'];

							if($aht > 260 ){
								$aht_score = 0;
							}else{
								$aht_score = 10;
							}

							if($hold > 5 ){
								$hold_score = 0;
							}else{
								$hold_score = 10;
							}

							if($acw > 5 ){
								$acw_score = 0;
							}else{
								$acw_score = 10;
							}

							?>

							<tr>
								<td><?php echo $row['name']; ?>  </td>
								<td><?php echo $row['sv']; ?>  </td>
								<td><?php echo $row['manger']; ?>  </td>
								<td><?php echo round($aht) ?>  </td>
								<td><?php echo $aht_score ?></td>
								<td><?php  echo round($acw) ?> % </td>
								<td><?php echo $acw_score ?> </td>
								<td><?php  echo round ($hold) ?> %  </td>
								<td><?php echo $hold_score ?> </td>
								<td><?php echo round($outbound_aht) ?>  </td>
								<td> </td>
							</tr>
							<?php

							}
						}

?>

		</table>		
		
			
	
	

		
	
		</div>
	</div>
	</div>