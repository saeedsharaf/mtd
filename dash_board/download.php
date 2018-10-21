<?php

session_start();
error_reporting(0);

include'../config/connect.php';

$date = $_GET['date'];
$output = '';
$sql = "select * from daily_forcast where date = '$date' ";
$query = $cont->query($sql);


	$cal_call = ''; 
	$for_call = ''; 
	$off_call = ''; 
	$ans_call = ''; 
	$for_att = ''; 
	$act_att = ''; 
	$for_acw = ''; 
	$act_acw = ''; 


if($query->num_rows <= 0 ){
	?>
		<div style="width:100%;height: 200px ;margin:0 auto;text-align: center;line-height: 100px;">No result found</div>

		<script>
			 
			function redirect (){
				window.location.href='daily.php';

			}
			setTimeout(redirect, 1000);
		</script>

	<?php	

} 


if($query->num_rows > 0 ){
	$output .='
	<table>
		<thead>
			<tr>
				<th>Date</th>
				<th>Period</th>
				<th>Calculated Calls</th>
				<th>Forecasted Calls</th>
				<th>Offered Calls</th>
				<th>Answered Calls</th>
				<th>Forecasted ATT (Sec)</th>
				<th>Actual ATT (Sec)</th>
				<th>Forecasted ACW (Sec)</th>
				<th>Actual ACW (Sec)</th>

			</tr>
		</thead>';
		
		
		
		while($row = $query->fetch_assoc()){
			

		$output .='
		<tr>
			<td>' . $row['date']  .  '</td>
			<td>' . $row['period'] . '</td>
			<td>' . $row['calculated_calls'] . '</td>
			<td>' . $row['forcast_calls'] . '</td>
			<td>' . $row['offered_calls'] . '</td>
			<td>' . $row['answered_calls'] . '</td>
			<td>' . $row['forcast_att'] . '</td>
			<td>' . $row['actual_att'] . '</td>
			<td>' . $row['forcast_acw'] . '</td>
			<td>' . $row['actual_acw'] . '</td>


		</tr>';

			$cal_call += $row['calculated_calls'];
			$for_call += $row['forcast_calls'];
			$off_call += $row['offered_calls'];
			$ans_call += $row['answered_calls'];
			$for_att += $row['forcast_att'];
			$act_att += $row['actual_att'];
			$for_acw += $row['forcast_acw'];
			$act_acw += $row['actual_acw'];


		}

		$output .='
			<tr>
			<td>'.$date . '</td>
			<td>Total</td>
			<td>' .$cal_call . '</td>
			<td>' .$for_call . '</td>
			<td>' .$off_call . '</td>
			<td>' .$ans_call . '</td>
			<td>' .$for_att . '</td>
			<td>' .$act_att . '</td>
			<td>' .$for_acw . '</td>
			<td>' .$act_acw . '</td>
			<tr>

			</table>';
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=Forcast.xls") ;

		

	}
	

	echo $output;

	