<?php

//error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='../index.php' </script>
<?php
}

?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="../style/nps.php" >
<link rel="shortcut icon" href="../style/icon.png" />
<script src="../js/chart.js" ></script>
<script src="../js/datalabels.js" ></script>
<script src="../js/index.js" ></script>


</head>

<body>


	<div class="container">
		<div class="head">
			
			<img src="../style/user.jpg" height="40px" style="margin-top: 4px; margin-left: 10px; border-radius: 25px;" />
			<span style="margin-left: 10px; color: white; margin-top: 15px;"> <?php echo $_SESSION['username']; ?> </span>
			
			<div class="bbb">
			<img class="left1" src="../style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="../config/logout.php" >
			</map>
			
			<img class="left1" src="../style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="#">
			</map>
			</div>
			<!--
			<div class="page">
			<div class="f" id=""><ul style="list-style-type:none"><li><a href="daily.php"> Daily Dashboard </a></li></div>
			<div class="f" id="active"><ul style="list-style-type:none"><li><a href="daily.php"> Monthly Dashboard </a></li> </ul></div>
			</div>
			-->
		</div>	
		<div class="leftside">
			<div class="sss">
				 <a href="../report.php" class="report" > Report <span style="float:right;"> &#x0003E; </span> </a>  <!-- this line for S.V view -->
				<a href="../performance.php" class="performance"> Performance <span style="float:right;"> &#x0003E; </span> </a>
				<a href="nps.php" class="nps" id="active"> Nps <span style="float:right;"> &#x0003E; </span> </a>
			</div>
		
		<!--
		
		<div class="left" >
			<div class="hhh" style="background-color:#252d3a; ">
			<img class="left1" src="style/logout.png" width="20px" height="20px" style="margin:10px; margin-right:30px;" usemap="#logout" /> 
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="config/logout.php" >
			</map>
			
			<img class="left1" src="style/set6.png" width="20px" height="20px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="#">
			</map>
			</div>
		
		
		<div style="width:100%; height: 50px; display:flex; " >  
			
			<div style="margin-left: 42%;"> Daily  </div>
			<div style="margin-left: 150px;"> Monthly  </div>
			
		</div>
			-->
			
		
		<div class="reset">
			
			
		
			<table class="tf">
			
			<caption style="background-color:#a90101; padding:9px; color: white;">May 2018</caption>
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
			$id = $_SESSION['id'];
			
			$month = array ('5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018');
			
			$totalsurvey = 0;
				$pass = 0;
				$pro = 0;
				$de = 0;
				$fcr1 = 0;
				$ir1 = 0;
				
				if ($id == 3){ // amira hassan
				$sql = "select * from nps where team_id = '3' ";
				$result = $cont->query($sql);
				$totalsurvey +=  $result->num_rows ;
	
			$promoter = "select * from nps where team_id= '3' and nps_rating >= 9 "; // select all promoter rows that's higher tahn 9
			$passive = "select * from nps where team_id= '3' and nps_rating > 5 and nps_rating < 9 "; // select passive rows 
			$detractor = "select * from nps where team_id= '3' and nps_rating <= 5 "; // select detractor rows  
			
			$fcr = "select * from nps where team_id= '3' and ir = '1' ";
			$ir = "select * from nps where team_id= '3' and ir = '2' ";

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
			
			
			
			};
			
			?>
		<div class="inbound">
			<canvas id="nps" width="500"></canvas>
		</div>	
		
		<div class="inbound" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound" style="width: 100%;">
			<canvas id="calls" width="535" ></canvas>
		</div>
		
		<?php
			
			include'js/daily_calls.php' ;
	include'js/pro.php';
			