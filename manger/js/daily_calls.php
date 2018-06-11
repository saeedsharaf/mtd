

	<script>
	
		var saeed = document.getElementById("calls");

var myLineChart = new Chart(saeed, {
    type: 'line',
    data: {
		labels: ['5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018','5/16/2018','5/17/2018','5/18/2018','5/19/2018','5/20/2018','5/21/2018','5/22/2018','5/23/2018','5/24/2018','5/25/2018','5/26/2018','5/27/2018','5/28/2018','5/29/2018','5/30/2018','5/31/2018'],
		
		
		// inbound calls
		
		datasets: [{
			label:'No of Calls',
			data:[<?php 
			
			
			
			$total = 0;
			
			foreach ($month as $date ){
				$S = "select * from nps where manger_id ='$id' and date = '$date'";
				$ss = $cont-> query ($S);
				
				echo $ss->num_rows . ',';
		}
		
				
		 ?>],	
	

			
			lineTension: 0,  // this to make line smoth 
			fill: false, // to make the chart fill or not 
			borderWidth: 1, // thickness of line 
			backgroundColor: 'white', 
			borderColor: '#03A9F4', 
		
		},
		
		// out bound calls
		
		{
		label: 'Promoter',
			data:[
					<?php 
			//$month = array (5/1/2018','5/2/2018','5/3/2018','4/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018','5/16/2018','5/17/2018','5/18/2018','5/19/2018','5/20/2018','5/21/2018','5/22/2018','5/23/2018','5/24/2018','5/25/2018','5/26/2018','5/27/2018','5/28/2018','5/29/2018','5/30/2018','5/31/2018');
			foreach ($month  as $date ){
							
			$S = "select * from nps where manger_id='$id' and nps_rating >= 9 and date = '$date' ";
			$ss = $cont-> query ($S);
			echo $ss->num_rows . ',';  
			
		} ?>
			
			],
			lineTension: 0,
			borderWidth: 1,
			backgroundColor: 'white',
			borderColor: '#33cc33',		
			fill: false,
		
		},
		{
		label: 'Detractor',
			data:[

				<?php 
			//$month = array ('05-01-2018','05-02-2018','05-03-2018','05-04-2018','5-5-2018','5-6-2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018');
			foreach ($month as $date ){
			
			$S = "select * from nps where manger_id='$id' and nps_rating <= 6 and date = '$date' ";
			$ss = $cont-> query ($S);
			echo $ss->num_rows . ',';  
			
		} ?>



			],
			lineTension: 0,
			borderWidth: 1,
			backgroundColor: 'white',
			borderColor: '#ff3333',		
			fill: false,
		
		}
		
		]
		},

		options: {
		title:{
		display: true,
		text:'May 2018 Calls',
		position: 'top',
		padding:5,
		
		},
		
		
		legend:{
		
			position: 'top',
		},
		
		layout : {
	padding : {
	top:25,
	right: 10,
	
	
	}
	
	},
		
		plugins: {
					datalabels: {
					display : false,
					color: 'black',
					align:'right',

					}
					},
		
			maintainAspectRatio: false, // this to set the height with defined 
				tooltips: {
					mode: 'index',
					intersect: false,
				},		 
			scales: {
		
				yAxes: [{
				gridLines: {
				display : false,
				tickMarkLength: 10,
				maxTicksLimit : 1
				},
			   ticks: {
				   min: 0, 	
			   },

				}],
				
				xAxes: [{
				
				gridLines:{
				display: false
				}
				
				}]
				
				
			},
		}	
		
	});
	
</script>	


