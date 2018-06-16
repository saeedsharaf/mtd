<?php
//error_reporting(0);


$month = array ('5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018','5/17/2018','5/18/2018','5/19/2018','5/20/2018','5/21/2018');


?>


<script>
var barChartData = {
			labels: ['5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018',
			'5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018','5/16/2018',
			'5/17/2018','5/18/2018','5/19/2018','5/20/2018','5/21/2018','5/22/2018','5/23/2018','5/24/2018',
			'5/25/2018','5/26/2018','5/27/2018','5/28/2018','5/29/2018','5/30/2018','5/31/2018'],
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
			$t = "select * from nps where date = '$date'"; // to select total rows				
			$p = "select * from nps where nps_rating >= 9 and date = '$date' "; // select promoter
			$d = "select * from nps where nps_rating <= 6 and date = '$date' "; // select dertactor
			$tq = $cont->query($t); 
			$pq = $cont->query($p); 
			$dq = $cont-> query ($d);

			$eq = (($pq->num_rows - $dq->num_rows) / $tq->num_rows) * 100 ; // get result of nps 
			echo round($eq) . ','; 
			}
			
         ?>

        ],
        yAxisID: 'y-axis-1',

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
          		$t1 = "select * from nps where date = '$date'"; // to select total rows
          		$fcr = "select * from nps where ir = '1' and date ='$date' " ;
          		$tq1 = $cont->query($t1);
          		$fcr_q = $cont->query($fcr);
          		$eq1 = ($fcr_q->num_rows / $tq1->num_rows) * 100 ;
          		echo round($eq1) . ',';
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
         		$t2 = "select * from nps where date = '$date'";
         		$ir = "select * from nps where ir <=2 and date ='$date' ";
         		$tq2 = $cont->query ($t2);
         		$irq = $cont->query($ir);
         		$eql2 = ($irq->num_rows / $tq2->num_rows) * 100 ;
         		echo round($eql2) . ',';

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
        
        label: 'calls',
        
        borderWidth: 1,
        backgroundColor: 'rgba(54,162,235,0.3)',
        data: [
          <?php
          	foreach($month as $date){
          		$t3 = "select * from nps where date = '$date'";
          		$tq3 = $cont->query($t3);
          		echo $tq3->num_rows . ',';
          	}
          ?>
        ],
        yAxisID: 'y-axis-2',
        
      }]} ;

		window.onload = function() {
			var ctx = document.getElementById('daily').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					title: {
						display: true,
						text: 'HV Daily Trend'
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
		};
</script>
		