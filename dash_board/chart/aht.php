<?php
//error_reporting(0);



?>


<script>

var barChartData1 = {
			labels: [
      <?php
        $arraylenght = count($month);
        for($x = 0; $x < $arraylenght; $x++) {
          echo '"' . $month[$x] . '"' . ',' ;
        }
        ?>
			],


			datasets: [

			{

        type: 'line',
        label: 'SLA',
        borderColor: 'red',
        
        borderWidth: 1,
        fill: false,

        data: [
         <?php
         	foreach ($month  as $date ){
			$e_t = "select * from dashboard where date = '$date'"; // to select total rows				
			$e_tq = $cont->query($e_t); 
			$rows = $e_tq->fetch_assoc();
      echo round(($rows['acd_thr1'] + $rows['acd_thr2'] + $rows['acd_thr3'] + $rows['acd_thr4']) / ($rows['call_offered'] - $rows['abn_thr1'] ) * 100 ,2) . ',';
			
			}
			
         ?>

        ],
        yAxisID: 'y-axis-1',
          datalabels:{
          backgroundColor : '#ff008b',
          borderRadius: 9,
          color: 'white',
          align: 'center',
          anchor: 'end',
      

      }

      },


      

	

      {
        
        label: 'Calls',
        
        borderWidth: 1,
        backgroundColor: 'rgba(54,162,235,0.3)',
        data: [
          <?php
          	foreach($month as $date){
          		$e_t3 = "select * from dashboard where date = '$date'";
          		$e_tq3 = $cont->query($e_t3);
              $row = $e_tq3->fetch_assoc();
          		echo $row['call_offered'] . ',';
          	}
          ?>
        ],
        yAxisID: 'y-axis-2',
        datalabels:{
      display:false,
      color: 'black',
      },
        
      }]} ;

		//window.onload = function() {
			var saeed = document.getElementById('aht').getContext('2d');
			window.myBar1 = new Chart(saeed, {
				type: 'bar',
				data: barChartData1,
				options: {
         
             layout: {
            padding: {
                left: 50,
                right: 0,
                top: 50,
                bottom: 0
            }
        },
         maintainAspectRatio: false,


 

          hover: {
          mode: 'index',
          intersect: false
        },
        plugins: {
          datalabels: {
            backgroundColor: function(context) {
              return context.active ? context.dataset.backgroundColor : 'white';
            },
            borderColor: function(context) {
              return context.dataset.backgroundColor;
                        },
            borderRadius: function(context) {
              return context.active ? 0 : 32;
                        },
                        borderWidth: 1,
            color: function(context) {
              return context.active ? 'black' : context.dataset.backgroundColor;
            },
            font: {
              weight: 'bold'
            },
                        formatter: function(value, context) {
              value = Math.round(value * 100) / 100;
                            return context.active
                                ? context.dataset.label + '\n' + value + '%'
                                : Math.round(value);
            },
            offset: 8,
                        textAlign: 'center'
          }
        },

          
        

					responsive: true,
					title: {
						display: true,
						text: 'SL'
					},
					tooltips: {
            enabled:true,
						mode: 'index',
						intersect: true
					},
					scales: {
						yAxes: [{

							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
							gridLines:{
								display: false
							}
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',
							gridLines:{
								display: false
							}
						}],

						xAxes: [{
				
				gridLines:{
				display: false
				}
				
				}],

					}

					
				}
			});
		//}
    ;
</script>
		