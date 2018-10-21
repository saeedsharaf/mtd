<?php

include'config/connect.php';

$jan = "select * from jan where login_id = '$oracle' ";
$feb = "select * from feb where login_id = '$oracle' ";
$mar = "select * from mar where login_id = '$oracle' ";
$april = "select * from april where login_id = '$oracle' ";
$may = "select * from may where login_id = '$oracle' ";
$jun = "select * from jun where login_id = '$oracle' ";
$july = "select * from july where login_id = '$oracle' ";
$aug = "select * from august where login_id = '$oracle' ";
$sep = "select * from sep where login_id = '$oracle' ";


$jan_result = $cont->query($jan);
$feb_result = $cont->query($feb);
$mar_result = $cont->query($mar);
$april_result = $cont->query($april);
$may_result = $cont->query($may);
$jun_result = $cont->query($jun);
$july_result = $cont->query($july);
$aug_result = $cont->query($aug);
$sep_result = $cont->query($sep);



$jan_row = $jan_result->fetch_assoc();
$feb_row = $feb_result->fetch_assoc();
$mar_row = $mar_result->fetch_assoc();
$april_row = $april_result->fetch_assoc();
$may_row = $may_result->fetch_assoc();
$jun_row = $jun_result->fetch_assoc();
$july_row = $july_result->fetch_assoc();
$aug_row = $aug_result->fetch_assoc();
$sep_row = $sep_result->fetch_assoc();



?>


<script>







var saeed4 = document.getElementById('chart');
var chart = new Chart(saeed4, {
type: 'line',
data: {
	labels: ['Jan'],

	datasets: [{
		label: 'April',
		data: [
			<?php
          echo $jan_row['final_score'] ;
           

        ?>

		],
		backgroundColor : 'rgba(255,0,0,0.1)',
		borderColor : 'red',
		borderWidth : 1,
	},
	
	

		{
		label: 'AVG 2018',
		data: [
			<?php
          echo $jan_row['nps'] ;

      
         ?>

		],
		backgroundColor : 'rgba(0,128,255,0.2)',
		borderColor : '#0080ff',
		borderWidth : 1,
	
	
	


}]},


	options : {	
	maintainAspectRatio: false,
	
	title:{
		display : true,
		text : 'Transaction ALL LOBs (Top 5)',
		fontColor : 'black',
		position : 'top',
		padding : 10,
		
	},
	
	plugins: {
						datalabels: {
						display: false,
						color: 'white',
						

						}
						},
	
	
	legend:{
	position: 'right',
	labels:{
	
	padding:35,
	}
	},
		scale:{
			ticks: {
			beginAtZero : true,
			
			}		
		},	
	}




});
