<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
include'../main_page.php';
?>


		
		
			
		
		<div class="reset" id="main">
			
			
		
			<table class="tf">
			
			<caption style="background-color:#a90101; padding:9px; color: white;">FL Operation _ Progression & Alarms</caption>
			<thead>
			
			<tr>
				<th class="noborder"> Pillar </th>
				<th class="noborder"> Total Offered</th>
				<th class="noborder"> Total Answered </th>
				<th class="noborder"> Outbound Rate </th>
				<th class="noborder"> SLA%</th>
				<th class="noborder"> Abandon Rate </th>
				<th class="noborder"> AHT </th>
				<th class="noborder"> Hold% </th>
				<th class="noborder"> ACW </th>
				<th class="noborder"> Accessebility%  </th>
				<th class="noborder"> Adherence% </th>
				<th class="noborder"> Absenteeism% </th>
			</tr>
			</thead>
			<tbody>
			
			<tr class="silver">
			
				<td> May MTD</th>
				<td class="light"> 17,625</th>
				<td class="light"> 16,849</th>
				<td class="light"> 30%</th>
				<td class="light"> 72% </th>
				<td class="light"> 4% </th>
				<td class="light"> 03:54 </th>
				<td class="light"> 4% </th>
				<td class="light"> 7% </th>
				<td class="light"> 96% </th>
				<td class="light"> TBD </th>
				<td class="light"> TBD</th>
			</tr>	
			<tr class="silver">
			
				<td> AVG 2018</th>
				<td class="light"> 479,106</th>
				<td class="light"> 469,779</th>
				<td class="light"> 35%</th>
				<td class="light"> 92% </th>
				<td class="light"> 2% </th>
				<td class="light"> 03:54 </th>
				<td class="light"> 3% </th>
				<td class="light"> 6% </th>
				<td class="light"> 98% </th>
				<td class="light"> TBD </th>
				<td class="light"> TBD </th>
			</tr>
		</tbody>
		</table>
		
		
		
		<table style="margin-top: 20px;width:1000px; margin-bottom: 20px" class="ts">
			
			<tr class="silver">
				
				<td style="background-color: white;"> </th>
				<td> Total Offered </th>
				<td> Total Answered </th>
				<td> Outbound Rate</th>
				<td> SLA</th>
				<td> Abandon Rate </th>
				<td> AHT </th>
				<td > Accessebility% </th>
				<td> NPS </th>
				<td colspan="3"> HV NPS </th>
			</tr>
			<tr>
				<td style="background-color: silver;"> Jan </th>
				
				<td> 488k </th>
				<td> 487k </th>
				<td> 36%</th>
				<td> 99% </th>
				<td> 0.26% </th>
				<td> 03:44 </th>
				<td> 99.74% </th>
				<td> 45.76% </th>
				<td rowspan="2"> Current Month Status </th>
				<td rowspan="2" style="color:red;"> 32% </th>
			</tr>
			<tr>
				<td style="background-color: silver;"> Feb</th>
				
				<td> 439k </th>
				<td> 438k </th>
				<td> 37%</th>
				<td> 98% </th>
				<td> 0.36% </th>
				<td> 0:49 </th>
				<td> 99.64% </th>
				<td style="color:red;"> 41.49% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> Mar</th>
				
				<td> 502k </th>
				<td> 488k </th>
				<td> 36%</th>
				<td> 89% </th>
				<td> 2.86% </th>
				<td> 03:59 </th>
				<td> 97.14% </th>
				<td> 46.73% </th>
				<td rowspan="3"> Previous Month Status </th>
				<td rowspan="3"> TBD </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> Apr</th>
				
				<td> 487k </th>
				<td> 467k </th>
				<td> 32%</th>
				<td> 83% </th>
				<td> 4.13% </th>
				<td> 04:03 </th>
				<td> 95.87% </th>
				<td style="color:red;"> 42.12% </th>
				
				
			</tr>
			<tr>
				<td style="background-color: silver;"> May MTD</th>
				
				<td> 18k </th>
				<td> 17k </th>
				<td> 30%</th>
				<td> 72% </th>
				<td> 4.40% </th>
				<td> 03:54 </th>
				<td> 95.60% </th>
				<td> 32% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> May Circa</th>
				
				<td> 546k </th>
				<td> 522k </th>
				<td> -</th>
				<td> - </th>
				<td> -</th>
				<td> - </th>
				<td> - </th>
				<td style="color:red;">  </th>
				<td rowspan="2"> YTD Status </th>
				<td rowspan="3" style="color:green;"> 43.2% </th>
				
			</tr>
			<tr>
				<td style="background-color: silver;"> 2018 YTD</th>
				
				<td> 1.93M </th>
				<td> 1.90M</th>
				<td> 35%</th>
				<td> 92% </th>
				<td> 2% </th>
				<td>03:54 </th>
				<td> 98.03% </th>
				<td> 44% </th>
				
			</tr>
			</tbody>
			</table>
		
		
		<div class="inbound" style="height: 200px">
			<canvas id="inbound" width="535"></canvas>
		</div>	
		
		<div class="inbound" style="height: 200px" >
			<canvas id="t_in" width="535" ></canvas>
		</div> 
		
		<div class="inbound" style="height: 200px">
			<canvas id="acw" width="535" ></canvas>
		</div>
	
		<div class="inbound" style="height: 200px">
			<canvas id="hh" width="535" ></canvas>
		</div>
	
	<script src="../js/first1.js"> </script>
	<script src="../quality.js"> </script>
	<script src="../js/nps.js"> </script>
	<script src="../js/first4.js"> </script>
	
	
		
	
		</div>
	</div>
	