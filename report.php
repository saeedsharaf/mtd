<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}

?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="style/style1.php" >
<link rel="shortcut icon" href="style/icon.png" />
<script src="js/chart.js" ></script>
<script src="js/datalabels.js" ></script>
<script src="js/index.js" ></script>


</head>

<body>


	<div class="container">
		<div class="head">
			
			<img src="style/user.jpg" height="40px" style="margin-top: 4px; margin-left: 10px; border-radius: 25px;" />
			<span style="margin-left: 10px; color: white; margin-top: 15px;"> <?php echo $_SESSION['username']; ?> </span>
			
			<div class="bbb">
			<img class="left1" src="style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" alt="Log out"/>
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="config/logout.php" >
			</map>
			
			<img class="left1" src="style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
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
				<a href="report.php" class="report" id="active"> Report <span style="float:right;"> &#x0003E; </span> </a>
				<a href="performance.php" class="performance"> Performance <span style="float:right;"> &#x0003E; </span> </a>
				<a href="sv/nps.php" class="nps"> Nps <span style="float:right;"> &#x0003E; </span> </a>
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
			
			<caption style="background-color:#a90101; padding:9px; color: white;">FL Operation _ Progression & Alarms</caption>
			<thead>
			
			<tr>
				<th class="noborder"> Pillar </th>
				<th class="noborder"> Total Offered</th>
				<th class="noborder"> Total Answered </th>
				<th class="noborder"> Outbound Rate </th>
				<th class="noborder"> SLA%</th>
				<th class="noborder"> Abandon Rate </th>
				<th class="noborder"> AHT </th>
				<th class="noborder"> Hold% </th>
				<th class="noborder"> ACW </th>
				<th class="noborder"> Accessebility%  </th>
				<th class="noborder"> Adherence% </th>
				<th class="noborder"> Absenteeism% </th>
			</tr>
			</thead>
			<tbody>
			
			<tr class="silver">
			
				<td> May MTD</th>
				<td class="light"> 17,625</th>
				<td class="light"> 16,849</th>
				<td class="light"> 30%</th>
				<td class="light"> 72% </th>
				<td class="light"> 4% </th>
				<td class="light"> 03:54 </th>
				<td class="light"> 4% </th>
				<td class="light"> 7% </th>
				<td class="light"> 96% </th>
				<td class="light"> 10% </th>
				<td class="light"> 20% </th>
			</tr>	
			<tr class="silver">
			
				<td> AVG 2018</th>
				<td class="light"> 479,106</th>
				<td class="light"> 469,779</th>
				<td class="light"> 35%</th>
				<td class="light"> 92% </th>
				<td class="light"> 2% </th>
				<td class="light"> 03:54 </th>
				<td class="light"> 3% </th>
				<td class="light"> 6% </th>
				<td class="light"> 98% </th>
				<td class="light"> 15% </th>
				<td class="light"> 10% </th>
			</tr>
		</tbody>
		</table>
		
		
		
		<table style="margin-top: 20px;width:1000px; margin-bottom: 20px" class="ts">
			
			<tr class="silver">
				
				<td style="background-color: white;"> </th>
				<td> Total Offered </th>
				<td> Total Answered </th>
				<td> Outbound Rate</th>
				<td> SLA</th>
				<td> Abandon Rate </th>
				<td> AHT </th>
				<td > Accessebility% </th>
				<td> NPS </th>
				<td colspan="3"> HV NPS </th>
			</tr>
			<tr>
				<td style="background-color: silver;"> Jan </th>
				
				<td> 488k </th>
				<td> 487k </th>
				<td> 36%</th>
				<td> 99% </th>
				<td> 0.26% </th>
				<td> 03:44 </th>
				<td> 99.74% </th>
				<td> 45.76% </th>
				<td rowspan="2"> Current Month Status </th>
				<td rowspan="2" style="color:red;"> 32% </th>
			</tr>
			<tr>
				<td style="background-color: silver;"> Feb</th>
				
				<td> 439k </th>
				<td> 438k </th>
				<td> 37%</th>
				<td> 98% </th>
				<td> 0.36% </th>
				<td> 0:49 </th>
				<td> 99.64% </th>
				<td style="color:red;"> 41.49% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> Mar</th>
				
				<td> 502k </th>
				<td> 488k </th>
				<td> 36%</th>
				<td> 89% </th>
				<td> 2.86% </th>
				<td> 03:59 </th>
				<td> 97.14% </th>
				<td> 46.73% </th>
				<td rowspan="3"> Previous Month Status </th>
				<td rowspan="3" style="color:green;"> 42.1% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> Apr</th>
				
				<td> 487k </th>
				<td> 467k </th>
				<td> 32%</th>
				<td> 83% </th>
				<td> 4.13% </th>
				<td> 04:03 </th>
				<td> 95.87% </th>
				<td style="color:red;"> 42.12% </th>
				
				
			</tr>
			<tr>
				<td style="background-color: silver;"> May MTD</th>
				
				<td> 18k </th>
				<td> 17k </th>
				<td> 30%</th>
				<td> 72% </th>
				<td> 4.40% </th>
				<td> 03:54 </th>
				<td> 95.60% </th>
				<td> 32% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> May Circa</th>
				
				<td> 546k </th>
				<td> 522k </th>
				<td> -</th>
				<td> - </th>
				<td> -</th>
				<td> - </th>
				<td> - </th>
				<td style="color:red;">  </th>
				<td rowspan="2"> YTD Status </th>
				<td rowspan="3" style="color:green;"> 43.2% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> 2018 YTD</th>
				
				<td> 1.93M </th>
				<td> 1.90M</th>
				<td> 35%</th>
				<td> 92% </th>
				<td> 2% </th>
				<td>03:54 </th>
				<td> 98.03% </th>
				<td> 44% </th>
				
			</tr>
			</tbody>
			</table>
		
		
		<div class="inbound">
			<canvas id="inbound" width="535"></canvas>
		</div>	
		
		<div class="inbound" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound">
			<canvas id="acw" width="535" ></canvas>
		</div>
	
		<div class="inbound">
			<canvas id="hh" width="535" ></canvas>
		</div>
	
	<script src="js/first1.js"> </script>
	<script src="js/quality.js"> </script>
	<script src="js/nps.js"> </script>
	<script src="js/first4.js"> </script>
	
	

		
	
		</div>
	</div>
	</div>