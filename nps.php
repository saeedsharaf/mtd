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
<link rel="stylesheet" href="style/nps.php" >
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
			<img class="left1" src="style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
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
				<!-- <a href="report.php" class="report" > Report <span style="float:right;"> &#x0003E; </span> </a> -->  <!-- this line for S.V view -->
				<a href="performance.php" class="performance"> Performance <span style="float:right;"> &#x0003E; </span> </a>
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
			
			<caption style="background-color:#a90101; padding:9px; color: white;">FL Operation _ Progression & Alarms</caption>
			<thead>
			
			<tr>
				<th class="noborder"> Lgon ID </th>
				<th class="noborder"> Name </th>
				<th class="noborder"> SPV </th>
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
			include'config/connect.php';
			$id = $_SESSION['id'];
			
			
			$sql = "select * from nps where agent_id = '$id' ";
			
			$promoter = "select * from nps where agent_id = '$id' and nps_rating >= 9 ";
			$passive = "select * from nps where agent_id = '$id' and nps_rating > 5 and nps_rating < 9  ";
			$detractor = "select * from nps where agent_id = '$id' and nps_rating <= 5 ";
			
			
			$result_pro = $cont->query($promoter);
			$result_pass= $cont->query($passive);
			$result_de = $cont->query($detractor);
			
			$pro = $result_pro->num_rows;
			$pass = $result_pass->num_rows;
			$de = $result_de->num_rows;
			
			$result = $cont->query($sql);
			
			
			$pro_pr = ($pro / $result->num_rows) * 100;
			$pass_pr = ($pass / $result->num_rows) * 100;
			$de_pr = ($de / $result->num_rows) * 100;
			$nps = (($pro - $de ) / $result->num_rows) * 100;
			
			
			if ( $result->num_rows > 0 ){
			$row = $result->fetch_assoc();
			
			?>
				<td class="light"> <?php echo $row['agent_id'] ;?> </th>
				<td class="light"> <?php echo $row['agent_name'] ;?>  </th>
				<td class="light"> <?php echo $row['s_v']; ?> </th>
				<td class="light"> <?php echo $result->num_rows ;?></th>
				
				<td class="light"> <?php echo $pro ;?> </th>
				<td class="light"> <?php echo $de ;?> </th>
				<td class="light"> <?php echo $pass ;?>  </th>
				<td class="light"> <?php echo round($nps) ;?>%  </th>
				<td class="light"> <?php echo round($pro_pr) ;?>% </th>
				<td class="light"> <?php echo round($de_pr) ;?>%  </th></th>
				<td class="light"> <?php echo round($pass_pr) ;?>%  </th></th></th>
				<td class="light"> 10% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				<td class="light"> 20% </th>
				
			
			</tr>	
			</table>	
			<?php	
				
				
				//while ($row = $result->fetch_assoc()){
					

			
			}
			
			
			?>
			
					
			
			
		
		
		<div class="inbound">
			<canvas id="inbound" width="535"></canvas>
		</div>	
		<!--
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
		-->
		
		
	<?php
	
	
	/*
	if($row['survey_date'] = $month){
	echo $row['nps_rating'];
}	

	*/

	
	
	?>	
	<!--	
	<script>
	
	
	var date = moment().format(D); ;
	
	
		var saeed = document.getElementById("inbound");

var myLineChart = new Chart(saeed, {
    type: 'line',
    data: {
		labels: [date], //['4/1/2018','4/2/2018','4/3/2018','4/4/2018','4/5/2018','4/6/2018','4/7/2018','4/8/2018','4/9/2018','4/10/2018','4/11/2018','4/12/2018','4/13/2018','4/14/2018','4/15/2018','4/16/2018','4/17/2018','4/18/2018','4/19/2018','4/20/2018','4/21/2018','4/22/2018','4/23/2018','4/24/2018','4/25/2018','4/26/2018','4/27/2018','4/28/2018','4/29/2018','4/30/2018'],
		
		
		// inbound calls
		
		datasets: [{
			label:'Calls',
			data:['<?php echo $result->num_rows;?>', 5,4,4,7,2,3,6,6,8],
			lineTension: 0,  // this to make line smoth 
			fill: false, // to make the chart fill or not 
			borderWidth: 1, // thickness of line 
			backgroundColor: 'white', 
			borderColor: '#1fad8c', 
		
		},
		
		// out bound calls
		
		{
		label: 'Promoter',
			data:[4,4,2,5,2,3,2,2,5 ],
			lineTension: 0,
			borderWidth: 1,
			backgroundColor: 'white',
			borderColor: 'green',		
			fill: false,
		
		},
		
		/*{
		label: 'Passive',
			data:[4,5,1,3,3,4,4,3,8,8 ],
			lineTension: 0,
			borderWidth: 1,
			backgroundColor: '#03A9F4',
			borderColor: '#03A9F4',		
			fill: false,
		
		},
		*/
		{
		label: 'Detractor',
			data:[1,0,2,2,0,0,4,4,3],
			lineTension: 0,
			borderWidth: 1,
			backgroundColor: 'white',
			borderColor: 'red',		
			fill: false,
		
		}
		
		
		
		
		
		]
		},

		options: {
		title:{
		display: true,
		text:'Calls',
		position: 'bottom',
		padding:5,
		
		},
		
		
		legend:{
		
			position: 'bottom',
		},
		
		layout : {
	padding : {
	top:25,
	right: 10,
	
	
	}
	
	},
		
		plugins: {
					datalabels: {
					color: 'black',
					align:'end',

					}
					},
		
			maintainAspectRatio: false, // this to set the height with defined 
				tooltips: {
					mode: 'index',
					intersect: false,
				},		 
			scales: {
		
				yAxes: [{
				gridLines: {
				tickMarkLength: 20
				},
			   ticks: {
				   min: 0, 	
			   },

				}]
			},
		}	
		
	});
		
	</script>
	-->
	
	
	
	
	
		</div>
	</div>
	</div>