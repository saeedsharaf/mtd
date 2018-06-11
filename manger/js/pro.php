<script>


var saeed4 = document.getElementById('t_in');
var chart = new Chart(saeed4, {
type: 'line',
data: {
	labels: ['Jan 2018','Feb 2018','March 2018','April 2018','May 2018','June 2018','July 2018', 'Aug 2018', 'Sep 2018','Oct 2018','Nov 2018','Dec 2018'],

	datasets: [{
			label: 'Ezz',
			data : [85,45,80,26,<?php echo round($ffcr_percentage[0]) ;?> ],
			backgroundColor: 'rgba(255,0,0,0.1)',
			borderColor: 'red',
			borderWidth : 1,
			borderDash : [5]
			
		
		},
		
		{
		label: 'Abdallah',
		data: [30,60,35,40,<?php echo round($ffcr_percentage[1]); ?> ],
			backgroundColor: 'rgba(0,128,255,0.1)',
			borderColor: '#0080ff',
			borderWidth : 1,
			
		},
		
		]
		

	},
	
	
	options:{
	
	
	plugins: {
						datalabels: {
						display: true,
						color: 'black',
						align:'right',

						}
						},
	
	title:{
		display : true,
		text : 'Yearly FCR %',
		//fontColor : 'black',
		position : 'top',
		padding : 10,
		
	},
	
	maintainAspectRatio: false,
	
	
	legend:{
	position: 'top',
	labels:{
	
	
	}
	}, 
	
	
		scales: {
		
			xAxes:[{
				ticks:{
				
			autoSkip: false,
			}
			}],
		
			yAxes: [{
				gridLines:{
				display: false
				},
				ticks: {
				beginAtZero : true,
				min : -100,
				max : 100,
				
				
				
				
				}
			
			
			}],
			
			
			xAxes: [{
				
				gridLines:{
				display: false
				}
				
				}]
		
		
		
		}
	
	
	
	},

});

</script>