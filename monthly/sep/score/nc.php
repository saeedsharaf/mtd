<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
?>
<script>window.location.href='../../../index.php' </script>
<?php
}
//include'../main_page.php';
?>
			
<style>
.reset{
width:100%;

display: flex;
flex-wrap: wrap;


}



.redch:nth-child(even){
	background-color: #8eabc754;

}

.yellowch:nth-child(odd){
	background-color: #8eabc754;

}


.bluech:nth-child(even){
	background-color: #8eabc754;

}




.greench:nth-child(odd){
	background-color: #8eabc754;

}


.purblech:nth-child(even){
	background-color: #8eabc754;

}


.graych:nth-child(odd){
	background-color: #8eabc754;

}


.gray1ch:nth-child(even){
	background-color: #8eabc754;

}


.brownch:nth-child(odd){
	background-color: #8eabc754;

}



.qch:nth-child(even){
	background-color: #8eabc754;

}


.saeed:nth-last-child(-n+9){
	border-bottom: 1px solid #80808063;

}






.saeed{
	position: relative;
  height: 300px;
  overflow: hidden;
  margin-right:5px;
  border-right: 1px solid #80808063;
	border-left: 1px solid #80808063; 
}

.header__bg{
	position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 50%;
	
	transform: skewY(-6deg);
	 
	 transform-origin: top left;
	
}


.red{
	background-image: linear-gradient(#f13b48, #ffb2b2e3);
	
}

.yellow{
	            background-image: linear-gradient(#fcc00a, #ffde7c);
}


.blue{
	background-image: linear-gradient(#01b2d4, #6de2f9);
}

.green{
	        background-image: linear-gradient(#adce25, #d1f53cd9);
}

.purble{
	    background-image: linear-gradient(#8556a6, #ce98f5);
}


.gray{
	background-image: linear-gradient(#34495e, #8eabc7);
}

.green1{
	background-image: linear-gradient(#00817f, #6fd0ce);
}

.brown{
	background-image: linear-gradient(#88785e, #e0cbaa);
}


.q{
	background-image: linear-gradient(#f1037c, #f1b9d6);
}

h1 {
  margin: 0;
  padding: 13px 0;
  font: 14px "Arial";
  text-align: center;
}

header h1 {
  position: relative;
  color: white;
}

section h1{
	padding-top: 25px;
}




</style>






	<div class="reset " id="main" style="width:1227px; min-width:1227px ">
			<div style="height: 100px; width: 100px;" class="saeed">
		<header>
			  <div class="header__bg red"></div>
			  <h1>Login ID</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>	

	<div style="height: 100px; width: 200px;" class="saeed">
		<header>
			  <div class="header__bg yellow"></div>
			  <h1>Name</h1>
		</header>

		<section>
		  <h1 ></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 200px;" class="saeed">
		<header>
			  <div class="header__bg blue"></div>
			  <h1>Supervisor</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 200px;" class="saeed">
		<header>
			  <div class="header__bg green"></div>
			  <h1>Manger</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 70px;" class="saeed">
		<header>
			  <div class="header__bg purble"></div>
			  <h1>AHT </h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 70px;" class="saeed">
		<header>
			  <div class="header__bg gray"></div>
			  <h1>ACW %</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 70px;" class="saeed ">
		<header>
			  <div class="header__bg green1"></div>
			  <h1>Hold</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 120px;" class="saeed">
		<header>
			  <div class="header__bg brown"></div>
			  <h1>NC </h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 120px;" class="saeed ">
		<header>
			  <div class="header__bg q"></div>
			  <h1>Final Score</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>
			
		

<?php 
include'../../../config/connect.php';
?>


<?php
$id = $_GET['id'];
//$ctc = 0;
if($id == 2){
				?>
					<form action="export.php" method="get">
						<input type="submit" accesskey="s" name="nc_not"  style="display:none;">
					</form>
			<?php
	
		$sql="select * from sep where nc > 1 ";
		$result=$cont->query($sql);
		if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
				$aht = round($row['aht'],2) ;
				$acw = round($row['acw'],2) ;
				$hold = round($row['hold'],2);
				$nc = $row['nc'];
				$final_score = $row['final_score'];
			

if($aht > 260 ){
			$aht_score = 0;
			$aht_color = 'red';
		}else{
			$aht_score = 10;
			$aht_color = 'green';
		}

		if($hold > 5 ){
			$hold_score = 0;
			$hold_color = 'red';
		}else{
			$hold_score = 10;
			$hold_color = 'green';
		}

		if($acw > 5 ){
			$acw_score = 0;
			$acw_color ='red';
		}else{
			$acw_score = 10;
			$acw_color = 'green';
		}

		if($nc > 1){
			$ctc_color = 'red';
		}else{
			$ctc_color = 'green';
		}




		?>

	<div style="height:45px; width: 100px;" class="saeed redch">
		<h1><a href="more.php?id=<?php echo $row['login_id'] ?>" style="color:blue" title="More"> <?php echo $row['login_id']; ?> </a></h1>

	</div>


	<div style="height:45px; width: 200px;" class="saeed yellowch">
		<h1><?php echo $row['name']; ?> </h1>
	</div>



	<div style="height:45px; width: 200px;" class="saeed bluech">
		<h1><?php echo $row['sv']; ?><h1>
	</div>

	<div style="height:45px; width: 200px;" class="saeed greench">
		<h1><?php echo $row['manger']; ?> <h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $aht_color ;?> " class="saeed purblech">
		<h1><?php echo round($aht) ?> </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $acw_color ;?> " class="saeed graych">
		<h1><?php  echo round($acw) ?> % </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $hold_color ;?> " class="saeed gray1ch">
		<h1><?php  echo round ($hold) ?> %  </h1>
	</div>


	<div style="height:45px; width: 120px; color : <?php echo $ctc_color; ?>" class="saeed brownch">
		<h1><?php echo $nc; ?> </h1>
	</div>

	<div style="height:45px; width: 120px;" class="saeed qch ">
		<h1><?php echo $final_score; ?> %</h1>
	</div>

							<?php

							}
						}
					}else{
							?>
								<form action="export.php" method="get">
									<input type="submit" accesskey="s" name="nc"  style="display:none;">
								</form>
							<?php

						$sql="select * from sep where nc < 1 ";
						$result=$cont->query($sql);
						if($result->num_rows > 0){

							while($row = $result->fetch_assoc()){
								$aht = round($row['aht'],2) ;
								$acw = round($row['acw'],2) ;
								$hold = round($row['hold'],2);
								$nc = $row['nc'];
								$final_score = $row['final_score'];
								
							

				if($aht > 260 ){
							$aht_score = 0;
							$aht_color = 'red';
						}else{
							$aht_score = 10;
							$aht_color = 'green';
						}

						if($hold > 5 ){
							$hold_score = 0;
							$hold_color = 'red';
						}else{
							$hold_score = 10;
							$hold_color = 'green';
						}

						if($acw > 5 ){
							$acw_score = 0;
							$acw_color ='red';
						}else{
							$acw_score = 10;
							$acw_color = 'green';

						}


						if($nc> 1){
							$ctc_color = 'red';
						}else{
							$ctc_color = 'green';
						}




		?>

	<div style="height:45px; width: 100px;" class="saeed redch">
		<h1><a href="more.php?id=<?php echo $row['login_id'] ?>" style="color:blue" title="More"> <?php echo $row['login_id']; ?> </a></h1>

	</div>


	<div style="height:45px; width: 200px;" class="saeed yellowch">
		<h1><?php echo $row['name']; ?> </h1>
	</div>



	<div style="height:45px; width: 200px;" class="saeed bluech">
		<h1><?php echo $row['sv']; ?><h1>
	</div>

	<div style="height:45px; width: 200px;" class="saeed greench">
		<h1><?php echo $row['manger']; ?> <h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $aht_color ;?> " class="saeed purblech">
		<h1><?php echo round($aht) ?> </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $acw_color ;?> " class="saeed graych">
		<h1><?php  echo round($acw) ?> % </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $hold_color ;?> " class="saeed gray1ch">
		<h1><?php  echo round ($hold) ?> %  </h1>
	</div>


	<div style="height:45px; width: 120px;color :<?php echo $ctc_color; ?>" class="saeed brownch">
		<h1><?php echo $nc; ?> </h1>
	</div>

	<div style="height:45px; width: 120px;" class="saeed qch ">
		<h1><?php echo $final_score; ?> %</h1>
	</div>

							<?php

							}
						}


					}





?>

	
	
		</div>


	<?php


	include'../main_page.php';

	?>