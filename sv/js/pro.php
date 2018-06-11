<script>


var saeed4 = document.getElementById('t_in');
var chart = new Chart(saeed4, {
type: 'radar',
data: {
	labels: ['Promoter','Detractor','Passive','IR'],

	datasets: [{
		label: 'May 2018',
		data: [<?php echo round($pro_pr) ; ?> ,<?php echo round($de_pr) ;?> ,<?php echo round($pass_pr) ;?>,<?php echo round($ir_percentage); ?>],
		backgroundColor : 'rgba(255,0,0,0.1)',
		borderColor : 'red',
		borderWidth : 1,
		pointStyle: 'circle',
		pointRadius : 2,
		pointBorderColor: 'red'
	},
	
	

		{
		label: 'April 2018',
		data: [70,41,70,88,35],
		backgroundColor : 'rgba(255, 255, 153,0.3)',
		borderColor : 'black',
		borderWidth : 1,
		pointStyle: 'circle',
		pointRadius : 2,
		pointBorderColor : 'black'
},


{
		label: 'March 2018',
		data: [28,20,20,55,51],
		backgroundColor : 'rgba(0,128,255,0.2)',
		borderColor : '#0080ff',
		borderWidth : 1,
		pointRadius : 2,
		pointStyle: 'circle',
		pointBackgroundColor : '#0080ff',
		pointRadius: 2,
	
},

]},


	options : {	
	maintainAspectRatio: false,

	
	title:{
		display : true,
		text : 'NPS last 3 Month %',
		
		position : 'top',
		padding : 10,
		
	},
	
	plugins: {
						datalabels: {
						display: false,
						color: 'gray',
						

						}
						},
	
	
	legend:{
	position: 'top',
	labels:{
	
	padding:10,
	}
	},
		scale:{
			ticks: {
			beginAtZero : true,
			
			}		
		},	
	}




});
</script>
