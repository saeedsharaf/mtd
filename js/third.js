var saeed5 = document.getElementById("acw");
var char = new Chart(saeed5,  {
	type : 'line',
	data : {
		labels: ['8 AM','9 AM','10 AM','11 AM','12 PM','1 PM','2 PM','3 PM','4 PM','5 PM','6 PM','7 PM','8 PM','9 PM','10 PM','11 PM','12 AM','1 AM','2 AM','3 AM','4 AM','5 AM','6 AM','7 AM'],
		
		datasets: [{
			
			label: 'Calls Offered',
			stack: 'Stack 0',
			data : ['256','428','590','688','805','908','901','890','893','900','843','1028','1095','1243','1099','932','596','310','179','108','49','37','70','134','','',''],
			backgroundColor: 'rgba(255,179,194,0.5)',
			borderColor: '#ff8099',
			borderWidth : 1,
			
		
		},
		/*{
		label: 'SLA',
		stack: 'Stack 0',
		data: ['1000','1005','1006'],
			backgroundColor: '#0066ff',
			borderColor: '#73bdf2',
			borderWidth : 1,
			datalabels:{
			display:true,
			}
		},*/
		
		]
		

	},
	
	
	options:{
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