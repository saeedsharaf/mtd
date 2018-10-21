

<?php

session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='index.php' </script>
<?php
}
include'../main_page.php';
?>
<style>

.tf, .ts {
   
	margin:auto;
font-size: 13px;	
color:#212121f2;
margin-bottom: 20px;
border-collapse: collapse;

}


th, tr{
margin-right:20px;

}

th, td {
    border: 1px solid black;
	text-align : center;
	
	padding: 4px;
}

th, td {

}

.noborder{
/*border:none;*/
background-color: #cccccc;
}

.silver{
background-color: #b5b5b5;
}

.light{

background-color:#f2f2f2;
}


select{
    width: 100%;
    height: 50px;
}

</style>


		
		<div class="reset" id="main" style="display: unset">
			
			<?php
			
			include'../config/connect.php';
			$id = $_SESSION['agent'];
			
			$sql = "Select * from nps where agent_id = '$id'and nps_rating < 7 ";
			$result = $cont->query($sql);
			$row = $result->fetch_assoc();

			?>
		
			<table class="tf">
			
			<caption style="background-color:#b93ab1; padding:9px; color: white;"><?php echo $row['agent_id'] . ' ' . $row['agent_name'] ; ?> </caption>
			<thead>
			
			<tr>
				 
				<th class="noborder"> Phone</th>
				<th class="noborder" style="width:130px;"> Survey Date </th>
				
				<th class="noborder"> NPS  </th>
				<th class="noborder"> CSR </th>
				<th class="noborder"> AR</th>				
				<th class="noborder"> IR </th>
				<th class="noborder"> Call Category </th>
				<th class="noborder"> Sub Category </th>
				<th class="noborder"> Sub Category 2</th>
				<th class="noborder"> Case Details </th> 
				<th class="noborder"> Repetitive call </th>
				
				<th class="noborder"> Validation </th>
				<th class="noborder"> Validation Area </th>
				<th class="noborder"> AI </th> 
				<th class="noborder"> Area gab </th>


			</tr>
			</thead>
			<tbody>
			
			
			
			
			<?php
			
			include'../config/connect.php';
			$id = $_SESSION['agent'];
			
			$sql = "Select * from nps where agent_id = '$id'and nps_rating < 7 ";
			$result = $cont->query($sql);
			

			if ( $result->num_rows > 0 ){
			?>
			<form action="update.php" method="post" >
			<?php
				while($row = $result->fetch_assoc()){
				
				?>
				
			<tr>
				
				<input type="hidden" name="id[]"value="<?php echo $row['id']; ?>" >
				
				<td class="light"> <?php echo $row['phone']; ?> </td>
				<td class="light"> <?php echo $row['survey_date']; ?> </td>
								
				<td class="light"> <?php echo $row['nps_rating']; ?> </td>				
				<td class="light"> <?php echo $row['sats']; ?> </td>			
				<td class="light"> <?php echo $row['agent_satisfaction']; ?> </td>			
				<td class="light"> <?php echo $row['ir']; ?></td>
				<th >
					<select name="call_category[]">
						<option><?php echo $row['call_category'] ; ?> </option>
						<option>TBD 1</option>
						<option>TBD 2</option>
						<option>TBD 3</option>
					</select>
				</th>

				<th >
					<select name="sub_category[]">
						<option><?php echo $row['sub_category'] ; ?> </option>
						<option>TBD 1</option>
						<option>TBD 2</option>
						<option>TBD 3</option>
					</select>
				</th>


				<th >
					<select name="sub_category2[]">
						<option><?php echo $row['sub_category2'] ; ?> </option>
						<option>TBD 1</option>
						<option>TBD 2</option>
						<option>TBD 3</option>
					</select>
				</th>


				<th >
					<select name="case_details[]">
						<option><?php echo $row['case_details'] ; ?> </option>
						<option>TBD 1</option>
						<option>TBD 2</option>
						<option>TBD 3</option>
					</select>
				</th>

				<th >
					<select name="repetitive_call[]">
						<option><?php echo $row['repetitive_call'] ; ?> </option>
						<option value =""></option>
						<option value ="Yes">Yes</option>
						<option value="Yes">No</option>
						
					</select>
				</th>

				



				<th >
					<select name="validation[]" >
						<option><?php echo $row['validation'] ; ?> </option>
						<option value =""></option>
						<option value ="Valid">Valid</option>
						<option value="Invalid">Invalid</option>
						
					</select>
				</th>


				<th >
					<select name="validation_area[]">
						<option><?php echo $row['validation_area'] ; ?> </option>
						<option value =""></option>
						<option value ="Agent">Agent</option>
						<option value ="Process">Process</option>
						<option value="Outages">Outages</option>
						<option value="Outages">Delayed Cases</option>
					</select>
				</th>


				<th >
					<select name="ai[]">
						<option><?php echo $row['ai'] ; ?> </option>
						<option value =""></option>
						<option value ="Helpful">Helpful</option>
						<option value ="have issue">have issue</option>
						
					</select>
				</th>


				<th style="text-align: left;">
					<div style="height: 50px;overflow-x: hidden;" >
						<input type="checkbox" name="area_gab1[]" value="Didnt solve the case"> Didn't solve the case <br>
						<input type="checkbox" name="area_gab2[]" value="Poor Tone of voice"> Poor Tone of voice <br>
						<input type="checkbox" name="area_gab3[]" value="Attitude Problem"> Attitude Problem<br>
						<input type="checkbox" name="area_gab4[]" value="Empathy"> Empathy <br>
						<input type="checkbox" name="area_gab5[]" value="Scripted"> Scripted <br>
						<input type="checkbox" name="area_gab6[]" value="No ownership"> No ownership 
					</div>
				</th>



<!--
				<td class="light"><textarea name="comment[]" ><?php echo $row['comment']; ?></textarea></td>
				-->
			</tr>
			
			<?php
			}
			
			};
			?>
			</tbody>
			</table>
		<div style="width: 100px;height: 50px;margin: 0 auto;margin-top: 20px;"><input type="submit" name="submit" style="width:100px; height:30px;" class="submit" > </div>
		
			
			</form>
				
			
	

		
	
		</div>
				
	</div>
	</div>