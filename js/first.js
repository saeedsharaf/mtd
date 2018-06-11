var saeed5 = document.getElementById("inbound");
var char = new Chart(saeed5,  {
	type : 'horizontalBar',
	data : {
		labels: ['ON','MD','MN'],
		
		datasets: [{
			
			label: 'Calls Offered',
			stack: 'Stack 0',
			data : ['1483','8033','5466'],
			backgroundColor: 'rgba(255,179,194,0.5)',
			borderColor: '#ff8099',
			borderWidth : 1,
			
		
		},
		{
		label: 'SLA',
		stack: 'Stack 0',
		data: ['','1005','1006'],
			backgroundColor: '#0066ff',
			borderColor: '#73bdf2',
			borderWidth : 1,
			datalabels:{
			display:true,
			}
		},
		
		]
		

	},
	
	
	options:{
	
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