<?php




?>



var saeed4 = document.getElementById('acw');
var chart = new Chart(saeed4, {
type: 'radar',
data: {
	labels: ['Wrong SR','No Des','Wrong Info','lack Follow up','Attitude'],

	datasets: [{
		label: 'April',
		data: [19,28,10,26,20],
		backgroundColor : 'rgba(255,0,0,0.1)',
		borderColor : 'red',
		borderWidth : 1,
	},
	
	

		{
		label: 'AVG 2018',
		data: [28,20,19,40,35],
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
