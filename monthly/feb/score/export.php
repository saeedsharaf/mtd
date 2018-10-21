<?php
//session_start();
error_reporting(0);
include'../../../config/connect.php';

	
	
?>
<style type="text/css" >
table, th, td {
    border: 0.5pt solid gray;
    border-collapse: collapse;
    text-align:center;
}
.color{
	background-color:#24318e;
	color:white;
}
</style>


<?php
if($_GET['acw_not']){
	$sql="select * from feb where acw > 5 ";
}else if($_GET['acw']){
	$sql="select * from feb where acw > 5 ";
}else if($_GET['adh_not']){
	$sql="select * from feb where adherance < 95 ";
} else if($_GET['adh']){
	$sql="select * from feb where adherance >= 95 ";
}else if($_GET['aht_not']){
	$sql="select * from feb where aht > 260 ";
}else if($_GET['aht']){
	$sql="select * from feb where aht < 260 ";
}else if($_GET['attiude_not']){
	$sql="select * from feb where attiude < 1 ";
}else if($_GET['attiude']){
	$sql="select * from feb where attiude > 0 ";
}else if($_GET['compl_not']){
	$sql="select * from feb where compliance > 0 ";
}else if($_GET['compl_not']){
	$sql="select * from feb where compliance < 1 ";
}else if($_GET['ctb_not']){
	$sql="select * from feb where ctb > 0 ";
}else if($_GET['ctb']){
	$sql="select * from feb where ctb < 1 ";
}else if($_GET['ctc_not']){
	$sql="select * from feb where ctc > 0 ";

}else if($_GET['ctc']){
	$sql="select * from feb where ctc < 1 ";

}else if($_GET['hold_not']){
	$sql="select * from feb where hold > 3 ";

}else if($_GET['hold']){
	$sql="select * from feb where hold < 3 ";
}else if($_GET['nc_not']){
	$sql="select * from feb where nc > 0 ";

}else if($_GET['nc']){
	$sql="select * from feb where nc < 1 ";
}else if($_GET['nps_not']){
	$sql="select * from feb where nps < 45 ";
} else if($_GET['nps']){
	$sql="select * from feb where nps > 45 ";
}else if($_GET['outbound_not']){
	$sql="select * from feb where outbound > 300 ";
}else if($_GET['outbound']){
	$sql="select * from feb where outbound < 300 ";
}else if ($_GET['overpromise_not']){
	$sql="select * from feb where over_promising > 0 ";
} else if($_GET['overpromise']){
	$sql="select * from feb where over_promising < 1 ";
}else if($_GET['perfomance']){
	$sql="select * from feb where manger_id >= 111 and manger_id < 444 ORDER BY final_score DESC ";
}


else{
	$sql="select * from feb order by final_score desc ";
}







$result =$cont->query($sql);
$output="";
$x = 0;
if($result->num_rows > 0){
 	
$output .='
	<table>
	<thead>
		<tr>
			<th  class="color">Avaya</th>
			<th  class="color">Name</th>	
			<th  class="color"> SPV</th>		
			<th  class="color">Manger</th>
			<th  class="color">No of Calls</th>
			<th  class="color">AHT</th>
			<th  class="color">ACW</th>
			<th  class="color">Hold</th>
			<th  class="color">Outbound AHT</th>
			<th  class="color">Sick</th>
			<th  class="color">Emerg</th>
			<th  class="color">Absent</th>
			<th  class="color">Leave early</th>
			<th  class="color">Adherence </th>
			<th  class="color">NPS Calls </th>
			<th  class="color">NPS </th>			
			<th  class="color" style="background-color:#8e2439;">FCR </th>
			<th  class="color" style="background-color:#8e2439;">Agent_TTB </th>
			<th  class="color" style="background-color:#8e2439;">CTC </th>
			<th  class="color" style="background-color:#8e2439;">CTB </th>
			<th  class="color" style="background-color:#8e2439;">Compliance </th>
			<th  class="color" style="background-color:#8e2439;">NC </th>
			<th  class="color" style="background-color:#8e2439;">Quilty Score </th>
			
			<th  class="color" style="background-color:#8e2439;">Attiude </th>
			<th  class="color" style="background-color:#8e2439;">Over Promising </th>
			<th  class="color" style="background-color:#8e2439;">Wrong Info </th>
			<th  class="color" style="background-color:#8e2439;">Wrong Transaction </th>
			<th  class="color" style="background-color:#8e2439;">Lack Follow </th>
			
			<th  class="color" style="background-color:#8e2439;">Complaint Score </th>
			<th  class="color" style="background-color:#8e2439;">Final score </th>
			<th  class="color" style="background-color:#8e2439;">Rank </th>
			
		</tr></thead>'
		;	
			while($row = $result->fetch_array()){

				if($row['final_score'] != $saeed ){
					$x++;
				}

				if($row['aht'] > 260){
					$aht_color = '#ffc7ce';
				}else{
					$aht_color = '#ffffff63';
				}
				

				if($row['acw'] > 5 ){
					$acw_color = '#ffc7ce';
				}else{
					$acw_color = '#ffffff63';
				}

				if($row['hold'] > 3){
					$hold_color = '#ffc7ce';
				}else{
					$hold_color = '#ffffff63';
				}

				if($row['outbound'] > 300){
					$outbound_color = '#ffc7ce';
				}else{
					$outbound_color = '#ffffff63';
				}

				if($row['sick'] > 0){
					$sick_color = '#ffc7ce';
				}else{
					$sick_color = '#ffffff63';
				}

				if($row['emerg'] > 0){
					$emerg_color = '#ffc7ce';
				}else{
					$emerg_color = '#ffffff63';
				}

				if($row['absent'] > 0){
					$absent_color = '#ffc7ce';

				}else{
					$absent_color = '#ffffff63';
				}

				if($row['leave_early'] > 0){
					$early_color = '#ffc7ce';
				}else{
					$early_color = '#ffffff63';
				}

				if($row['adherance'] < 95 and $row['adherance'] !== ''){
					$adh_color = '#ffc7ce';
				}else {
					$adh_color = '#ffffff63';
				}
				

				if($row['nps'] < 45 and $row['nps'] !== ''){
					$nps_color = '#ffc7ce';
				}else{
					$nps_color = '#ffffff63';
				}

				if($row['fcr'] < 60 and $row['fcr'] !== ''){
					$fcr_color = '#ffc7ce';
				}else{
					$fcr_color = '#ffffff63';
				}

				if($row['agent_ttb'] < 80 and $row['agent_ttb'] !== ''){
					$agent_color = '#ffc7ce';
				}else{
					$agent_color = '#ffffff63';
				}

				if($row['ctc'] > 0){
					$ctc_color = '#ffc7ce';
				}else{
					$ctc_color = '#ffffff63';
				}

				if($row['ctb'] > 0){
					$ctb_color = '#ffc7ce';
				}else{
					$ctb_color = '#ffffff63';
				}

				if($row['compliance'] > 0){
					$compl_color = '#ffc7ce';
				}else{
					$compl_color = '#ffffff63';
				}

				if($row['nc'] > 0){
					$nc_color = '#ffc7ce';
				}else{
					$nc_color = '#ffffff63';
				}

				if($row['rejection'] > 0){
					$rejection_color = '#ffc7ce';
				}else{
					$rejection_color = '#ffffff63';
				}

				if($row['attiude'] > 0){
					$attiude_color = '#ffc7ce';
				}else{
					$attiude_color = '#ffffff63';
				}

				if($row['over_promising'] > 0){
					$over_color = '#ffc7ce'; 
				}else{
					$over_color = '#ffffff63'; 
				}

				if($row['wrong_info'] > 0){
					$wrong_color = '#ffc7ce';
				}else{
					$wrong_color = '#ffffff63';
				}

				if($row['wron_transaction'] > 0){
					$transaction_color = '#ffc7ce';
				}else{
					$transaction_color = '#ffffff63';
				}

				if($row['lack_follow'] > 0){
					$follow_color = '#ffc7ce';
				}else{
					$follow_color = '#ffffff63';
				}


				if($row['lack_follow'] > 0){
					$lack_color = '#ffc7ce';
				} else{
					$lack_color = '#ffffff63';
				}


$aht = round($row['aht'],0) ;
$acw = $row['acw'];
$hold = $row['hold'];
$outbound_aht = $row['outbound'];
$absent = $row['absent'];
$adherence = $row['adherance'];
$nps = $row['nps'] ;
$fcr = $row['fcr'];
$agent_ttb = $row['agent_ttb'];
$ctc = $row['ctc'] ;
$ctb = $row['ctb'];
$nc = $row['nc'];
$quality_score = $row['quality_score'];
$complaint_score = $row['complaint_score'];

$final_score = round($row['final_score'],2);			



	// below code to remove % and validate value
		if($aht == ''){
			$aht = '';
		}


		if($acw == ''){
			$acw = '';
		}else{
			$acw = round($row['acw'],1) . ' %';
		}


		if($hold == ''){
			$hold = '';
		}else{
			$hold = round($row['hold'],2) . ' %';
		}

		if($quality_score == ''){
			$quality_score = '';
		}else{
		$quality_score = $row['quality_score']	. ' %';
		}

		$final_score = $row['final_score'];

		if($final_score == 0){
			$final_score = '';
		}else{
			$final_score = $row['final_score'] . ' %';
		}


		if($nps == ''){
			$nps = '';
		}else {
			$nps = $row['nps'] . ' %';
		}

		if($adherence == ''){
			$adherence == '';
		}else{
			$adherence = $row['adherance'] . ' %';
		}

		if($fcr == ''){
			$fcr = '';
		} else{
			$fcr = $row['fcr'] . ' %';
		}

		if($agent_ttb == ''){
			$agent_ttb = '';
		}else{
			$agent_ttb = $row['agent_ttb'] . ' %';
		}

		if($complaint_score == ''){
			$complaint_score = '';
		}else{
			$complaint_score = $row['complaint_score'] . ' %';
		}




				


			$output .='
			<tbody>
			<tr>
				<td  >' .$row['login_id'].'</td>
				<td>' .$row['name'].'</td>
				<td>' .$row['sv'].'</td>
				<td>' .$row['manger'].'</td>
				<td>' .$row['no_calls'].'</td>
				<td style="background-color:'.$aht_color.'">' .  $aht .'</td>
				<td style="background-color:'.$acw_color.'">' . $acw .'</td>
				<td style="background-color:'.$hold_color.'">' . $hold .'</td>
				<td style="background-color:'.$outbound_color.'">' .round($row['outbound'],0).'</td>
				<td style="background-color:'.$sick_color.'">' .$row['sick'].'</td>
				<td style="background-color:'.$emerg_color.'">' .$row['emerg'].'</td>
				<td style="background-color:'.$absent_color.'">' .$row['absent'].'</td>
				<td style="background-color:'.$early_color.'">' .$row['leave_early'].'</td>
				<td style="background-color:'.$adh_color.'">' . $adherence.' </td>
				<td >' .$row['nps_calls'].'</td>
				<td style="background-color:'.$nps_color.'">' . $nps .'</td>
				<td style="background-color:'.$fcr_color.'">' . $fcr.'</td>
				<td style="background-color:'.$agent_color.'">' . $agent_ttb .' </td>
				<td style="background-color:'.$ctc_color.'">' .$row['ctc'].'</td>
				<td style="background-color:'.$ctb_color.'">' .$row['ctb'].'</td>
				<td style="background-color:'.$compl_color.'">' .$row['compliance'].'</td>
				<td style="background-color:'.$nc_color.'">' .$row['nc'].'</td>
				<td>' .  $quality_score . ' </td>
				
				<td style="background-color:'.$attiude_color.'">' .$row['attiude'].'</td>
				<td style="background-color:'.$over_color.'">' .$row['over_promising'].'</td>
				<td style="background-color:'.$wrong_color.'">' .$row['wrong_info'].'</td>
				<td style="background-color:'.$transaction_color.'">' .$row['wron_transaction'].'</td>
				<td style="background-color:'.$lack_color.'">' .$row['lack_follow'].'</td>
				
				<td >' . $complaint_score .' </td>
				<td>' .$row['final_score'].'%</td>
				<td>' .$x.'</td>
				
				
			</tr>
			</tbody>
			';
			$saeed = $row['final_score'];
			}



			
			
				
				

			$output .='
			</table>';
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=KPI.xls") ; 
			
	}


	echo $output ;