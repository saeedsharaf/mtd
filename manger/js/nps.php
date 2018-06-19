
<script>
var saeed5 = document.getElementById("nps");
var char = new Chart(saeed5,  {
	type : 'line',
	data : {
		labels: ['Jan','Feb','March','April','May','June','July', 'Aug', 'Sep','Oct','Nov','Dec'],
		
		datasets: [{
			label: 'Ezz',
			data : [85,45,-40,26,<?php echo round($finalnps[0]) ;?> ],
			backgroundColor: 'rgba(255,0,0,0.1)',
			borderColor: 'red',
			borderWidth : 1,
			borderDash : [5]
			
		
		},
		
		{
		label: 'Abdallah',
		data: [50,20,13,40,<?php echo round($finalnps[1]); ?> ],
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
		text : 'Yearly NPS %',
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