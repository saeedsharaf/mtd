<?php
//error_reporting(0);


$month = array ('5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018');


?>


<script>
var barChartData1 = {
			labels: ['5/1','5/2','5/3','5/4','5/5','5/6','5/7',
			'5/8','5/9','5/10','5/11','5/12','5/13','5/14','5/15'
			],
			datasets: [

			{

        type: 'line',
        label: 'Nps %',
        borderColor: 'red',
        borderWidth: 1,
        fill: false,

        data: [
         <?php
         	foreach ($month  as $date ){
			$e_t = "select * from nps where date = '$date' and manger_id ='111'"; // to select total rows				
			$e_p = "select * from nps where manger_id= '111' and nps_rating >= 9 and date = '$date' "; // select promoter
			$e_d = "select * from nps where manger_id ='111' and nps_rating <= 6 and date = '$date' "; // select dertactor
			$e_tq = $cont->query($e_t); 
			$e_pq = $cont->query($e_p); 
			$e_dq = $cont-> query ($e_d);

			$e_eq = (($e_pq->num_rows - $e_dq->num_rows) / $e_tq->num_rows) * 100 ; // get result of nps 
			echo round($e_eq) . ','; 
			}
			
         ?>

        ],
        yAxisID: 'y-axis-1',
         datalabels:{
      display:true,
      color: 'black',
      },

      },

			{
        type: 'line',
        label: 'FCR %',
        borderColor: 'green',
        borderWidth: 1,
        fill: false,
        data: [
          <?php
          	foreach ($month  as $date ){
          		$e_t1 = "select * from nps where manger_id='111' and date = '$date'"; // to select total rows
          		$e_fcr = "select * from nps where manger_id = '111' and ir = '1' and date ='$date' " ;
          		$e_tq1 = $cont->query($e_t1);
          		$e_fcr_q = $cont->query($e_fcr);
          		$e_eq1 = ($e_fcr_q->num_rows / $e_tq1->num_rows) * 100 ;
          		echo round($e_eq1) . ',';
          	}

          ?>
        ],
        yAxisID: 'y-axis-1',
      },


       {
        type: 'line',
        label: 'IR %',
        borderColor: window.chartColors.orange,
        borderWidth: 1,
        fill: false,
        data: [
         <?php
         	foreach($month as $date){
         		$e_t2 = "select * from nps where manger_id='111' and date = '$date'";
         		$e_ir = "select * from nps where manger_id='111' and ir <=2 and date ='$date' ";
         		$e_tq2 = $cont->query ($e_t2);
         		$e_irq = $cont->query($e_ir);
         		$e_eql2 = ($e_irq->num_rows / $e_tq2->num_rows) * 100 ;
         		echo round($e_eql2) . ',';

         	}

         ?>
        ],
        yAxixID: 'y-axis-1',
      },


      {
        type: 'line',
        label: 'NPS target %',
        borderColor: '#000000',
        borderWidth: 1,
        fill: false,
        data: [
          <?php
          	$arraylenght = count($month);
          	for ($i = 0 ; $i < $arraylenght ; $i++ ){
          		echo 40 . ',';
          	}
          ?>
        ],
        yAxixID: 'y-axis-1',
      },

	

      {
        
        label: 'Calls',
        
        borderWidth: 1,
        backgroundColor: 'rgba(54,162,235,0.3)',
        data: [
          <?php
          	foreach($month as $date){
          		$e_t3 = "select * from nps where manger_id='111' and date = '$date'";
          		$e_tq3 = $cont->query($e_t3);
          		echo $e_tq3->num_rows . ',';
          	}
          ?>
        ],
        yAxisID: 'y-axis-2',
        
      }]} ;

		//window.onload = function() {
			var saeed = document.getElementById('ezz').getContext('2d');
			window.myBar1 = new Chart(saeed, {
				type: 'bar',
				data: barChartData1,
				options: {
          plugins: {
          datalabels: {
            display:true,
          }
        },

					responsive: true,
					title: {
						display: true,
						text: 'Ezz Ashour'
					},
					tooltips: {
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
		