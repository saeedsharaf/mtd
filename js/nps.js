var saeed5 = document.getElementById("t_in");
var char = new Chart(saeed5,  {
	type : 'line',
	data : {
		labels: ['Wrong SR','No Des','Wrong Info','lack Follow up','Attitude'],
		
		datasets: [{
			label: 'Aprile',
			data : [19,13,25,26,20],
			backgroundColor: 'rgba(255,0,0,0.1)',
			borderColor: 'red',
			borderWidth : 1,
			
		
		},
		{
		label: 'AVG 2018',
		data: [13,20,13,40,35],
			backgroundColor: 'rgba(0,128,255,0.1)',
			borderColor: '#0080ff',
			borderWidth : 1,
			borderDash : [5]
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
		text : 'Rejection & Complaints (Top 5)',
		fontColor : 'black',
		position : 'top',
		padding : 10,
		
	},
	
	maintainAspectRatio: false,
	
	
	legend:{
	position: 'right',
	labels:{
	
	padding:35,
	}
	}, 
	
	
		scales: {
		
			xAxes:[{
				ticks:{
				
			autoSkip: false,
			}
			}],
		
			yAxes: [{
			
				ticks: {
				beginAtZero : true,
				max : 50,
				
				
				
				}
			
			
			}],
		
		
		
		}
	
	
	
	},

});