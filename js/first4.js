var saeed5 = document.getElementById("hh");
var char = new Chart(saeed5,  {
	type : 'horizontalBar',
	data : {
		labels: ['Wrong SR','Wrong infromation','Wrong Transaction','Wrong TS','Customer Mistreat'],
		
		datasets: [{
			
			label: 'April',
			stack: 'Stack 0',
			data : ['19','18','10','26','20'],
			backgroundColor: '#3385ff',
			borderColor: '#ff8099',
			borderWidth : 1,
			
		
		},
		{
		label: 'AVG 2018',
		stack: 'Stack 0',
		data: ['21','20','13','40','35'],
			backgroundColor: '#ff3333',
			borderColor: '#73bdf2',
			borderWidth : 1,
			datalabels:{
			display:true,
			}
		},
		
		]
		

	},
	
	
	options:{
	
	
	title:{
		display : true,
		text : 'Adjustment Transaction FL LOB (Top 5)',
		fontColor : 'black',
		
	},
	
	
	plugins: {
						datalabels: {
						display: true,
						color: 'white',
						

						}
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