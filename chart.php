<?php
error_reporting(0);


//$month = array ('5/1/2018','5/2/2018','5/3/2018','5/4/2018','5/5/2018','5/6/2018','5/7/2018','5/8/2018','5/9/2018','5/10/2018','5/11/2018','5/12/2018','5/13/2018','5/14/2018','5/15/2018');


include'config/connect.php';

$jan = "select * from jan where login_id = '$oracle' ";
$feb = "select * from feb where login_id = '$oracle' ";
$mar = "select * from mar where login_id = '$oracle' ";
$april = "select * from april where login_id = '$oracle' ";
$may = "select * from may where login_id = '$oracle' ";
$jun = "select * from jun where login_id = '$oracle' ";
$july = "select * from july where login_id = '$oracle' ";
$aug = "select * from august where login_id = '$oracle' ";
$sep = "select * from sep where login_id = '$oracle' ";


$jan_result = $cont->query($jan);
$feb_result = $cont->query($feb);
$mar_result = $cont->query($mar);
$april_result = $cont->query($april);
$may_result = $cont->query($may);
$jun_result = $cont->query($jun);
$july_result = $cont->query($july);
$aug_result = $cont->query($aug);
$sep_result = $cont->query($sep);



$jan_row = $jan_result->fetch_assoc();
$feb_row = $feb_result->fetch_assoc();
$mar_row = $mar_result->fetch_assoc();
$april_row = $april_result->fetch_assoc();
$may_row = $may_result->fetch_assoc();
$jun_row = $jun_result->fetch_assoc();
$july_row = $july_result->fetch_assoc();
$aug_row = $aug_result->fetch_assoc();
$sep_row = $sep_result->fetch_assoc();



?>


<script>
  
var barChartData1 = {
			labels: ['Jan','Feb','Mar','April','May','Jun','July','Aug','Sep'],


			datasets: [

			{

        type: 'line',
        label: 'Final Score',
        borderColor: 'red',
        
        borderWidth: 1,
        fill: false,

        data: [
        <?php
          echo $jan_row['final_score'] . ',' ; 
          echo $feb_row['final_score'] . ',' ;
          echo $mar_row['final_score'] . ',' ;
          echo $april_row['final_score'] . ',' ;
          echo $may_row['final_score'] . ',' ;
          echo $jun_row['final_score'] . ',' ;
          echo $july_row['final_score'] . ',' ;
          echo $aug_row['final_score'] . ',' ;
          echo $sep_row['final_score'] . ',' ;  
         

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

        type: 'line',
        label: 'NPS',
        borderColor: '#283747',
        borderWidth: 1,
        fill: false,
        data: [

        <?php
          echo $jan_row['nps'] . ',' ; 
          echo $feb_row['nps'] . ',' ;
          echo $mar_row['nps'] . ',' ;
          echo $april_row['nps'] . ',' ;
          echo $may_row['nps'] . ',' ;
          echo $jun_row['nps'] . ',' ;
          echo $july_row['nps'] . ',' ;
          echo $aug_row['nps'] . ',' ;
          echo $sep_row['nps'] . ',' ;

      
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



			


   ]} ;


		//window.onload = function(){
			var saeed = document.getElementById('chart');
			window.myBar1 = new Chart(saeed, {
				type: 'bar',
				data: barChartData1,
				options: {
         

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
						text: 'Yearly Trend'
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
						} 
            ],

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
		