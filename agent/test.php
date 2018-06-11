<?php


session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='../index.php' </script>
<?php
}

			include'../config/connect.php';
			
			$month = array ('5/1/2018','5/2/2018','5/3/2018','4/4/2018','5/5/2018','5/6/2018','5/7/2018');
			$saeed = array(44921,106540,19472,105347,101370,105429,100693,19963,97379,11210,104791,104636,20016,47001,19166,105356,123340);
			
$totalsurvey = 0;
			
			
				foreach($saeed as $teamid){
				$sql = "select * from nps where agent_id = '$teamid' ";
				$result = $cont->query($sql);
				$totalsurvey +=  $result->num_rows ;
				
					
					
					
					
			$promoter = "select * from nps where agent_id = '$teamid' and nps_rating >= 9 "; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where agent_id = '$teamid' and nps_rating > 5 and nps_rating < 9 "; // select passive rows 
			$detractor = "select * from nps where agent_id = '$teamid' and nps_rating <= 5 "; // select detractor rows  
			
			$fcr = "select * from nps where agent_id = '$teamid' and ir = '1' ";
			$ir = "select * from nps where agent_id = '$teamid' and ir = '2' ";

			$result_pro = $cont->query($promoter); // promter query
			$result_pass= $cont->query($passive); // passive query
			$result_de = $cont->query($detractor); // detractor query 
			// below code to get total of promtor & passive & detractor 
			$pro += $result_pro->num_rows; 
			$pass += $result_pass->num_rows;
			$de += $result_de->num_rows;
		
			////////////////////////////////////////////////////////////////////
		
			$pro_pr = ($pro / $totalsurvey) * 100; // to get percentage of promoter 
			$pass_pr = ($pass / $totalsurvey) * 100; // to get percntage of passive 
			$de_pr = ($de / $totalsurvey) * 100; // to get percentage of detractor
			$nps = (($pro - $de ) / $totalsurvey) * 100; // to get percntage of nps 

			$result_fcr = $cont->query($fcr); // query for fcr 
			$result_ir = $cont->query($ir); // query for ir 
			
			$fcr1 += $result_fcr->num_rows;
			$ir1 += $result_ir->num_rows;
			
			$fcr_pre = ($fcr1 / $totalsurvey ) * 100 ; // collect the % of fcr
			$ir_pre = (($ir1 + $fcr1) / $totalsurvey) * 100 ;  // collect the % of ir 
			
			
			$fcr_percentage ; 
			$fcr_percentage ;
			// below code to ignore error apear when 0 subtract on value 
			};
		
		
		///////////////////////////////
		
		?>

		
		<?php
		
		
		
		
		
		
		/////////////////////////////////
			
			
			
			if ($fcr_pre == 0 and $ir_pre == 0){
				
				$fcr_percentage = 0 ;
				$ir_percentage = 0 ;
				
			} else {
				
				$fcr_percentage =  $fcr_pre ; 
				$ir_percentage = $ir_pre ;
			
			};
		
			
		
			
			
			if ( $result->num_rows > 0 ){
			
			
			$row = $result->fetch_assoc();
			 
			?>
				
				<td class="light"> <?php echo $_SESSION['username']  ;?>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
				<td class="light"> <?php echo $pro ;?> </th>
				<td class="light"> <?php echo $de ;?> </th>
				<td class="light"> <?php echo $pass ;?>  </th>
				<td class="light"> <?php echo round($nps) ;?>%  </th>
				<td class="light"> <?php echo round($pro_pr) ;?>% </th>
				<td class="light"> <?php echo round($de_pr) ;?>%  </th></th>
				<td class="light"> <?php echo round($pass_pr) ;?>%  </th></th></th>
				<td class="light"> </th>
				<td class="light">  </th>
				<td class="light">  </th>
				<td class="light">  </th>
				<td class="light"> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light"> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			
			
			<?php
	}
	
	
	include'js/daily_calls.php';
	