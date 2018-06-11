

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
font-size: 15px;	
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
border:none;
background-color: #cccccc;
}

.silver{
background-color: #b5b5b5;
}

.light{

background-color:#f2f2f2;
}

</style>


		
		<div class="reset" id="main" style="display: unset">
			
			
		
			<table class="tf">
			
			<caption style="background-color:#a90101; padding:9px; color: white;">NPS Historical</caption>
			<thead>
			
			<tr>
				<th class="noborder" style="width:80px;"> Date </th>
				<th class="noborder"> Phone</th>
				<th class="noborder" style="width:130px;"> Survey Date </th>
				<th class="noborder"> Agent ID </th>
				<th class="noborder"> Agent Name</th>
				<th class="noborder"> NPS  </th>
				<th class="noborder"> Very dissatisfied </th>
				<th class="noborder"> Agent Rating</th>				
				<th class="noborder"> IR </th>
				<th class="noborder"> SV Comment </th>

			</tr>
			</thead>
			<tbody>
			
			
			
			
			<?php
			
			include'../config/connect.php';
			$id = $_SESSION['agent'];
			
			$sql = "Select * from nps where agent_id = '$id'";
			$result = $cont->query($sql);
			
			if ( $result->num_rows > 0 ){
			?>
			<form action="update.php" method="post">
			<?php
				while($row = $result->fetch_assoc()){
				
				?>
			<tr>
				<form action="update.php" method="post" >
				<input type="hidden" name="id[]"value="<?php echo $row['id']; ?>" >
				<td> <?php echo $row['date']; ?> </td>
				<td class="light"> <?php echo $row['phone']; ?> </td>
				<td class="light"> <?php echo $row['survey_date']; ?> </td>
				<td class="light"> <?php echo $row['agent_id']; ?> </td>
				<td class="light"> <?php echo $row['agent_name']; ?> </td>				
				<td class="light"> <?php echo $row['nps_rating']; ?> </td>				
				<td class="light"> <?php echo $row['sats']; ?> </td>			
				<td class="light"> <?php echo $row['agent_satisfaction']; ?> </td>			
				<td class="light"> <?php echo $row['ir']; ?></td>
				<td class="light"><textarea name="comment[]" ><?php echo $row['comment']; ?></textarea></td>
				
			</tr>
			<?php
			}
			
			};
			?>
			
			</table>
		<div style="width: 100px;height: 50px;margin: 0 auto;margin-top: 20px;"><input type="submit" name="submit" style="width:100px; height:30px;" class="submit" > </div>
		</form>
			</form>
			
				
			
	

		
	
		</div>
				
	</div>
	</div>