var saeed5 = document.getElementById("inbound");
var char = new Chart(saeed5,  {
	type : 'horizontalBar',
	data : {
		labels: ['Wrong SR','Wrong infromation','Wrong Transaction','Wrong TS','Customer Mistreat'],
		
		datasets: [{
			
			label: 'April',
			stack: 'Stack 0',
			data : ['19','18','10','26','20'],
			backgroundColor: 'rgba(51, 133, 255, 0.8)',
			borderColor: 'silver',
			borderWidth : 1,
			
		
		},
		{
		label: 'AVG 2018',
		stack: 'Stack 0',
		data: ['21','20','13','40','35'],
			backgroundColor: 'rgba(255, 51, 51,0.8)',
			borderColor: 'silver',
			borderWidth : 1,
			datalabels:{
			display:true,
			}
		},
		
		]
		

	},
	
	
	options:{
	
	plugins: {
						datalabels: {
						display: true,
						color: 'black',
						

						}
						},
	
	title:{
		display : true,
		text : 'Quality (Top 5)',
		fontColor : 'black',
		
	},
	
	legend : {
	
	position : 'right',
	
	
	},
	maintainAspectRatio: false,
		scales: {
		
			yAxes: [{
			
				ticks: {
				beginAtZero : false,
				
				
				
				
				
				}
			
			
			}],
		
		
		
		}
	
	
	
	},

});