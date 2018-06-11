var saeed5 = document.getElementById("t_in");
var char = new Chart(saeed5,  {
	type : 'horizontalBar',
	data : {
		labels: ['ON','MD','MN'],
		
		datasets: [{
			
			label: 'Calls Answered',
			stack: 'Stack 0',
			data : ['1479','8027','5452'],
			backgroundColor: 'rgba(255,179,194,0.5)',
			borderColor: '#ff8099',
			borderWidth : 1,
			
		
		},
		

		
		
		{
		
		label: 'Calls Abandon',
		stack: 'Stack 0',
		data: ['4','26','14'],
			backgroundColor: '#0066ff',
			borderColor: '#73bdf2',
			borderWidth : 1,
			height: 20,
			datalabels:{
			display:true,
			}
		},
		
		]
		

	},
	
	
	options:{
	maintainAspectRatio: false,
	responsive:true,
		scales: {
		
			yAxes: [{
			
				ticks: {
				beginAtZero : false,
				
				
				
				
				
				}
			
			
			}],
		
		
		
		}
	
	
	
	},

});