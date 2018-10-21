<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}

include'config/connect.php';


?>

<html>
<head>
<title> We Eye </title>
<link rel="stylesheet" href="style/style1.php" >
<link rel="shortcut icon" href="style/icon.png" />

<script src="js/b.js" ></script>

<script src="js/chart.js" ></script>
<script src="js/datalabels.js" ></script>

<script src="js/index.js" ></script>

<style>



.drop{
	position: relative;
    display: inline-block;
    float: right;
    margin-right: 13px;
}

.drop_content{
    display: block;
    position: absolute;
    background-color: #0000009e;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
   
    border-radius: 5px;
    padding: 3px;
    color: white;
}

.drop_span{
	position: absolute;
    top: 9px;
    left: 35px;
    font-size: 14px;
}
.triangle-down {
	display: none;
	position: absolute;
    width: 0;
    height: 0;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-top: 14px solid #f3ff04;
    
    top: 36px;
    left: 2px;
}


.triangle{
	display: none;
    height: 158px;
    width: 80px;
  
   
    position: absolute;
    z-index: 1;
    
    left: -22px;
}

.drop:hover .drop_content  {display: block;}
.drop:hover .triangle  {display: block;}

.month{
	position: absolute;
	top:10px;
	left:7px;
}


.monthly{
	right:-56px;
	border-radius: 5px;: 
}

.active{
	right:-35px;
}

.a{
	color: blue;
}

</style>





</head>

<body  >


	<div class="container" >
		<div class="head" >
			
			<span id="te">telcom<b>egypt </b> </span>
			<span id="we" style="font-size: 15px; font-family: sans-serif;font-weight: bolder; color:white;margin-top: 25px;">We Eye</span>
			
			<div class="bbb">
			
			<img class="left1" src="style/flogout.png" width="30px" height="25px" style="margin:10px; margin-right:25px;" usemap="#logout" />
			<map name="logout">
			<area shape ="circle" coords="1301,78,1316,93" href="config/logout.php" title="Log Out">
			</map>
			
			<img class="left1" src="style/set6.png" width="25px" height="25px" style="margin:10px;" usemap="#setting"/> 
			<map name="setting" >
			<area shape="circle"  coords="1259,76,1280,95"  href="config/password.php" title="Setting">
			</map>
			<a href="config/redirect_page.php" title="home" > <img src="style/home.png" class="left1" width="25px" style="margin-top:11px;margin-right: 21px;" ></a>


			<a href="search.php" title="Search" > <img src="style/search1.png" class="left1" width="29px" style="margin-top:11px;margin-right: 25px;" ></a>

			
			

				<div class="drop" >
					<a href="monthly/sep/score/performance.php" title="Score OverView" class="drop"> <img src="style/all.png" class="left1" width="25px" style="margin-top:11px;" ></a>

					<?php 

			if($_SESSION['id'] != 111 and $_SESSION['id'] != 222 and $_SESSION['id'] != 333 and $_SESSION['id'] != 444 and $_SESSION['id'] != 555  ){
	
			?>

					<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="monthly/oct/score_redirect_page.php" title="Score OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 90px;">	
							<a href="manger/hv.php" title=" Nps OverView"> <img src="style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

						</div>
					</div>	
					
				
				<?php
			} else {
				?>

				<div class="triangle">
						<div class="drop_content" style="margin-top: 55px">
							<a href="monthly/sep/score/achiever.php" title="Achiever OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Achiever</span> </a>
						</div>

						<div class="drop_content" style="margin-top: 90px">
							<a href="monthly/sep/score/performance.php" title="Score OverView" ><img src="style/aa.png" style="width: 25px; "> <span class="drop_span">Score</span> </a>
						</div>	

			

						<div class="drop_content" style="height: 25px;margin-top: 125px;">	
							<a href="manger/hv.php" title=" Nps OverView"> <img src="style/nps.png" style="width: 35px;"> <span class="drop_span" style="left: 40px;">NPS</span> </a>

						</div>
					</div>
					<?php

			}
			?>
			</div>
			<span style="margin-right: 20px; color: white; margin-top: 15px;float:right;"> <?php echo $_SESSION['username']; ?> </span>
			</div>
			<!--
			<div class="page">
			<div class="f" id=""><ul style="list-style-type:none"><li><a href="daily.php"> Daily Dashboard </a></li></div>
			<div class="f" id="active"><ul style="list-style-type:none"><li><a href="daily.php"> Monthly Dashboard </a></li> </ul></div>
			</div>
			-->
		</div>
		
		
		
		
		<div id="mySidenav" class="sidenave" onmouseover="mouseOver()" onmouseout="mouseOut()" > 

				<!--<span id="close"> <img src="../style/right.png" style="width:25px;"> </span> -->
				<img src="style/ii.png" style="width: 25px;position: absolute;left: 15px;"> <a href="dash_board/report.php" class="report" id="report"  > Dashboard </a>
				<img src="style/aa.png" style="width: 25px;position: absolute;left: 13px;" ><a href="config/score_redirect_page.php" class="performance" id="performance" > Score   </a> 
				<img src="style/nps.png" style="width: 40px;position: absolute;left: 5px;"> <a href="config/redirect_page.php" class="nps" id="npss"> Nps  </a>
		</div>
		<script>

		function back(){
			window.history.back();
		}
		

		function mouseOver(){
			document.getElementById('mySidenav').style.width = "150px";
			document.getElementById('mySidenav').style.filter = "grayscale(0%)";
			document.getElementById('report').style.marginLeft = "15px";
			document.getElementById('performance').style.marginLeft = "15px";
			document.getElementById('npss').style.marginLeft = "15px";
		}

		function mouseOut(){
			document.getElementById('mySidenav').style.width = "55px"
			document.getElementById('mySidenav').style.filter = "grayscale(100%)";
			document.getElementById('report').style.marginLeft = "-100px";
			document.getElementById('performance').style.marginLeft = "-150px";
			document.getElementById('npss').style.marginLeft = "-100px";

		}

		
	</script>
	
<a class="back" href="javascript:void(0)" onclick ="back()" > <img src="style/backlogo.png" width="80px" title="Back" ></a>	


<div style="margin-top:100px;margin-left:43%;" >
	<form action="" method="get">
		<input type="text" style="margin: 0 auto;padding-left: 15px;border-radius: 15px;height: 32px;border: none; background-color: #e0e0e0; outline: none;webkit-appearance: unset;"  placeholder="Search by Login ID" name="oracle" autocomplete="off">

	</form>



</div>

<style >
	table{
		border-collapse: collapse;
	
	}

	thead{
		background-color: #b200ff;
		color: white;
	   
	}

	th{
		 font-weight: 100;
		 font-size: 14px;
	}
</style>
<?php

$oracle = $_GET['oracle'];

include'select.php';


if($sep_result->num_rows > 0){
?>

<div class="table" style="width: 80%; margin: 0 auto">
	<table style="width: 100%">
		<caption style="background-color: #b200ff;color: white;height: 30px;line-height: 30px;border-top-right-radius: 10px;border-top-left-radius: 10px;"><?php echo $oracle .' '.$sep_row['name'] ;?></caption>
		<thead>
			<tr>
				<th>Month</th>
				<th>AHT</th>
				<th>Hold</th>
				<th>ACW</th>
				<th>Nps</th>
				<th>FCR</th>
				<th>Agent_TTB</th>
				<th>Absenteeism</th>
				<th>Adherance</th>
				<th>Quilty Score</th>
				<th>Complaint Score</th>
				<th>Final score</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a class="a" href="more.php?name=jan&id=<?php echo $oracle; ?>" >Jan</a></td>
				<td><?php echo round($jan_row['aht'],0) ; ?></td>
				<td><?php echo round($jan_row['hold'],2) ; ?> %</td>
				<td><?php echo round($jan_row['acw'],2) ; ?> %</td>
				<td><?php echo round($jan_row['nps'],2) ; ?> %</td>
				<td><?php echo round($jan_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($jan_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($jan_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($jan_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($jan_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($jan_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($jan_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=feb&id=<?php echo $oracle; ?>" >Feb</a></td>
				<td><?php echo round($feb_row['aht'],0) ; ?></td>
				<td><?php echo round($feb_row['hold'],2) ; ?> %</td>
				<td><?php echo round($feb_row['acw'],2) ; ?> %</td>
				<td><?php echo round($feb_row['nps'],2) ; ?> %</td>
				<td><?php echo round($feb_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($feb_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($feb_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($feb_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($feb_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($feb_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($feb_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=mar&id=<?php echo $oracle; ?>" >Mar</a></td>
				<td><?php echo round($mar_row['aht'],0) ; ?></td>
				<td><?php echo round($mar_row['hold'],2) ; ?> %</td>
				<td><?php echo round($mar_row['acw'],2) ; ?> %</td>
				<td><?php echo round($mar_row['nps'],2) ; ?> %</td>
				<td><?php echo round($mar_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($mar_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($mar_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($mar_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($mar_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($mar_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($mar_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=april&id=<?php echo $oracle; ?>" >April</a></td>
				<td><?php echo round($april_row['aht'],0) ; ?></td>
				<td><?php echo round($april_row['hold'],2) ; ?></td>
				<td><?php echo round($april_row['acw'],2) ; ?></td>
				<td><?php echo round($april_row['nps'],2) ; ?> %</td>
				<td><?php echo round($april_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($april_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($april_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($april_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($april_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($april_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($april_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=may&id=<?php echo $oracle; ?>" >May</a></td>
				<td><?php echo round($may_row['aht'],0) ; ?></td>
				<td><?php echo round($may_row['hold'],2) ; ?></td>
				<td><?php echo round($may_row['acw'],2) ; ?></td>
				<td><?php echo round($may_row['nps'],2) ; ?> %</td>
				<td><?php echo round($may_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($may_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($may_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($may_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($may_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($may_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($may_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=jun&id=<?php echo $oracle; ?>" >June</a></td>
				<td><?php echo round($jun_row['aht'],0) ; ?></td>
				<td><?php echo round($jun_row['hold'],2) ; ?></td>
				<td><?php echo round($jun_row['acw'],2) ; ?></td>
				<td><?php echo round($jun_row['nps'],2) ; ?> %</td>
				<td><?php echo round($jun_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($jun_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($jun_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($jun_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($jun_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($jun_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($jun_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=july&id=<?php echo $oracle; ?>" >July</a></td>
				<td><?php echo round($july_row['aht'],0) ; ?></td>
				<td><?php echo round($july_row['hold'],2) ; ?></td>
				<td><?php echo round($july_row['acw'],2) ; ?></td>
				<td><?php echo round($july_row['nps'],2) ; ?> %</td>
				<td><?php echo round($july_row['fcr'],2) ; ?> %</td>
				<td><?php echo round($july_row['agent_ttb'],2) ; ?> %</td>
				<td><?php echo round($july_row['absentscore'],2) ; ?> %</td>
				<td><?php echo round($july_row['adherance'],2) ; ?> %</td>
				<td><?php echo round($july_row['quality_score'],2) ; ?> %</td>
				<td><?php echo round($july_row['complaint_score'],2) ; ?> %</td>
				<td><?php echo round($july_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=aug&id=<?php echo $oracle; ?>" >Aug</a></td>
				<td <?php echo $aug_aht_color ;?> > <?php echo round($aug_aht,0) ; ?></td>
				<td <?php echo $aug_hold_color ;?> ><?php echo round($aug_hold,2) ; ?> %</td>
				<td <?php echo $aug_acw_color ;?> ><?php echo round($aug_row['acw'],2) ; ?> %</td>
				<td <?php echo $aug_nps_color ;?> ><?php echo round($aug_row['nps'],2) ; ?> %</td>
				<td <?php echo $aug_fcr_color ;?> ><?php echo round($aug_row['fcr'],2) ; ?> %</td>
				<td <?php echo $aug_agent_ttb_color ;?> ><?php echo round($aug_row['agent_ttb'],2) ; ?> %</td>
				<td <?php echo $aug_absent_color ;?>  ><?php echo round($aug_row['absentscore'],2) ; ?> %</td>
				<td <?php echo $aug_adh_color ;?> ><?php echo round($aug_row['adherance'],2) ; ?> %</td>
				<td <?php echo $aug_quality_color ;?> ><?php echo round($aug_row['quality_score'],2) ; ?> %</td>
				<td <?php echo $aug_comp_color ;?> ><?php echo round($aug_row['complaint_score'],2) ; ?> %</td>
				<td ><?php echo round($aug_row['final_score'],2) ; ?> %</td>

			</tr>

			<tr>
				<td><a class="a" href="more.php?name=sep&id=<?php echo $oracle; ?>" >Sep</a></td>
				<td <?php echo $sep_aht ;?> > <?php echo round($sep_aht,0) ; ?></td>
				<td <?php echo $sep_hold ;?> ><?php echo round($sep_row['hold'],2) ; ?> %</td>
				<td <?php echo $sep_acw ;?> ><?php echo round($sep_row['acw'],2) ; ?> %</td>
				<td <?php echo $sep_nps ;?> ><?php echo round($sep_row['nps'],2) ; ?> %</td>
				<td <?php echo $sep_fcr ;?> ><?php echo round($sep_row['fcr'],2) ; ?> %</td>
				<td <?php echo $sep_agent_ttb ;?> ><?php echo round($sep_row['agent_ttb'],2) ; ?> %</td>
				<td <?php echo $sep_absent ;?>  ><?php echo round($sep_row['absentscore'],2) ; ?> %</td>
				<td <?php echo $sep_adh ;?> ><?php echo round($sep_row['adherance'],2) ; ?> %</td>
				<td <?php echo $sep_quality ;?> ><?php echo round($sep_row['quality_score'],2) ; ?> %</td>
				<td <?php echo $sep_comp ;?> ><?php echo round($sep_row['complaint_score'],2) ; ?> %</td>
				<td ><?php echo round($sep_row['final_score'],2) ; ?> %</td>

			</tr>
		</tbody>
	</table>

	<div  style=" width: 100%; height:300px;margin: 0 auto; margin-top: 20px;margin-bottom: 50px;">

		<canvas id="chart" width="535" ></canvas>

		<?php
		include'chart.php';
		?>

	</div>



	<?php
	}else{
	?>
	<div style="width: 80%;margin: 0 auto; height:50px;text-align: center;">No Result Found</div>
	<?php
}	


