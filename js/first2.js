var saeed5 = document.getElementById("acw");
var char = new Chart(saeed5,  {
	type : 'horizontalBar',
	data : {
		labels: ['Wrong Path','No Des','Wrong Info','Lack follow up','Attitude'],
		
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
	
	plugins: {
						datalabels: {
						display: true,
						color: 'white',
						

						}
						},
	
	
	title:{
		display : true,
		text : 'Adjustment Transaction ALL LOBs (Top 5)',
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