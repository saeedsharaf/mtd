<?php
//error_reporting(0);


//$month = array ('5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018');

echo 'saeed';

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
        label: 'Nps',
        borderColor: 'red',
        
        borderWidth: 1,
        fill: false,

        data: [
         <?php
         	foreach ($month  as $date ){
			$e_t = "select * from nps where date = '$date' and team_id ='$id'"; // to select total rows				
			$e_p = "select * from nps where team_id= '$id' and nps_rating >= 9 and date = '$date' "; // select promoter
			$e_d = "select * from nps where team_id ='$id' and nps_rating <= 6 and date = '$date' "; // select dertactor
			$e_tq = $cont->query($e_t); 
			$e_pq = $cont->query($e_p); 
			$e_dq = $cont-> query ($e_d);

			if ($e_tq->num_rows == 0){
      $e_eq = 0;
    }else{

      $e_eq = (($e_pq->num_rows - $e_dq->num_rows) / $e_tq->num_rows) * 100 ; // get result of nps
    }

      
      echo round($e_eq) . ','; 

			}
			
         ?>

        ],
        yAxisID: 'y-axis-1',
          datalabels:{
          backgroundColor : '#ff008b',
          borderRadius: 9,
          color: 'white',
          align: 'start',
          anchor: 'end',
      

      }

      },

      {

        type: 'line',
        label: 'A-TTB',
        borderColor: '#283747',
        borderWidth: 1,
        fill: false,
        data: [
         <?php
          foreach ($month  as $date ){
      $t = "select * from nps where date = '$date' and team_id ='$id'"; // to select total rows       
      $ag_ttb = "select * from nps where team_id = '$id' and agent_satisfaction > 3 and date='$date' "; // select agent tob box 
      
      $tq = $cont->query($t); 

      $result_agttb = $cont->query($ag_ttb);
      $ge_ttb1 = $result_agttb->num_rows; // query agent top box
      
      if($tq->num_rows == 0){
        $agent = 0;
      } else{


      $agent = ($ge_ttb1 / $tq->num_rows) * 100 ; // get result of nps 
       }
      echo round($agent) . ','; 
      }
      
         ?>

        ],
        yAxisID: 'y-axis-1',
     datalabels:{
          backgroundColor : '#283747',
          borderRadius: 9,
          color: 'white',
          align: 'center',
          anchor: 'end',
      

      }},



			{
        type: 'line',
        label: 'FCR',
        borderColor: 'green',
        borderWidth: 1,
        fill: false,
        data: [
          <?php
          	foreach ($month  as $date ){
          		$e_t1 = "select * from nps where team_id='$id' and date = '$date'"; // to select total rows
          		$e_fcr = "select * from nps where team_id = '$id' and ir = '1' and date ='$date' " ;
          		$e_tq1 = $cont->query($e_t1);
          		$e_fcr_q = $cont->query($e_fcr);
          		
              if($e_tq1->num_rows == 0){
                $e_eq1 = 0;
              } else {
                $e_eq1 = ($e_fcr_q->num_rows / $e_tq1->num_rows) * 100 ;
              }
          		echo round($e_eq1) . ',';
          	}

          ?>
        ],
        yAxisID: 'y-axis-1',
          datalabels:{
          backgroundColor : '#82e0aa',
          borderRadius: 9,
          color: 'black',
          align: 'center',
          anchor: 'end',
      

      }
      },


       {
        type: 'line',
        label: 'IR',
        borderColor: window.chartColors.orange,
        borderWidth: 1,
        fill: false,
        data: [
         <?php
         	foreach($month as $date){
         		$e_t2 = "select * from nps where team_id='$id' and date = '$date'";
         		$e_ir = "select * from nps where team_id='$id' and ir <=2 and date ='$date' ";
         		$e_tq2 = $cont->query ($e_t2);
         		$e_irq = $cont->query($e_ir);
         		
            if($e_tq2->num_rows == 0){
              $e_eql2 = 0;
            } else{
              $e_eql2 = ($e_irq->num_rows / $e_tq2->num_rows) * 100 ;
            }
         		echo round($e_eql2) . ',';

         	}

         ?>
        ],
        yAxixID: 'y-axis-1',
         datalabels:{
          backgroundColor : '#F7DC6F  ',
          borderRadius: 9,
          color: 'black',
          align: 'end',
          anchor: 'end',
      

      }
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
          datalabels:{
      display:false,
      color: 'black',
      },
      },

	

      {
        
        label: 'Calls',
        
        borderWidth: 1,
        backgroundColor: 'rgba(54,162,235,0.3)',
        data: [
          <?php
          	foreach($month as $date){
          		$e_t3 = "select * from nps where team_id='$id' and date = '$date'";
          		$e_tq3 = $cont->query($e_t3);
          		echo $e_tq3->num_rows . ',';
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
			var saeed = document.getElementById('calls').getContext('2d');
			window.myBar1 = new Chart(saeed, {
				type: 'bar',
				data: barChartData1,
				options: {
         


 

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
		