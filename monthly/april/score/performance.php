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
			  <h1>Login_id</h1>
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
		  <h1 > </h1>
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
			  <h1>Hold %</h1>
		</header>

		<section>
		  <h1></h1>
		</section>
		
	</div>


	<div style="height: 100px; width: 120px;" class="saeed">
		<header>
			  <div class="header__bg brown"></div>
			  <h1>Quality Score</h1>
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
?>
<form action="export.php" method="get">
	<input type="submit" accesskey="s" name="perfomance"  style="display:none;">
</form>
<?php
$sql="select * from april where manger_id >= 111 and manger_id < 444 ORDER BY final_score DESC ";
$result=$cont->query($sql);
if($result->num_rows > 0){


	while($row = $result->fetch_assoc()){
		$nps = $row['nps'];
$fcr = $row['fcr'];
$agent_ttb = $row['agent_target'];
$absent = $row['absent'];
$adherence = $row['adh'] * 100 ;



$zero_aht = is_nan($aht);
		$zero_hold= is_nan($hold);
		$zero_acw = is_nan($acw);
		$zero_outboundaht = is_nan($outbound_aht);
		$zero_outbound = is_nan($outbound);

		if($zero_aht === true ){
			$aht = 0;
		}
		if($zero_hold === true){
			$hold = 0;
		}

		if($zero_acw === true){
			$acw = 0;
		}

		if($zero_outboundaht === true){
			$outbound_aht = 0;
		}

		if($zero_outbound === true){
			$outbound = 0;
		}

		
$aht = round($row['aht'],0) ;
$acw = $row['acw'];
$hold = $row['hold'];
$outbound_aht = $row['outbound'];
$absent = $row['absent'];
$adherence = $row['adherance'];
$nps = $row['nps'] ;
$ctc = $row['ctc'] ;
$ctb = $row['ctb'];
$nc = $row['nc'];
$quality_score = $row['quality_score'];
$final_score = round($row['final_score'],2);



// below code to remove % and validate value
if($aht == ''){
			$aht = '';
		}


		if($acw == ''){
			$acw = '';
		}else{
			$acw = round($row['acw'],2) . ' %';
		}


		if($hold == ''){
			$hold = '';
		}else{
			$hold = round($row['hold'],2) . ' %';
		}

		if($quality_score == ''){
			$quality_score = '';
		}else{
		$quality_score = $row['quality_score']	. ' %';
		}

		$final_score = $row['final_score'];

		if($final_score == 0){
			$final_score = '';
		}else{
			$final_score = $row['final_score'] . ' %';
		}

if($aht > 260){
	$aht_score = 0;

}else{
	$aht_score = 10;
}

if($acw > 5){
	$acw_score = 0;
}else{
	$acw_score = 5;
}

if($hold > 3){
	$hold_score = 0;
}else{
	$hold_score = 5;
}

if($outbound_aht > 300 ){
	$outbound_score = 0;
}else{
	$outbound_score = 5;
}



if($adherence > 92 ){
	$adherence_score = 10;
}else{
	$adherence_score = 0;
}




if($fcr > 60 ){
	$fcr_score = 2;
}else{
	$fcr_score = 0;
}



if($nps > 45 ){
	$nps_score = 10;
}else{
	$nps_score = 0;
}


if($agent_ttb > 80){
	$agent_t = 8;

}else{
	$agent_t = 0;
};

if($absent == 1){
	$absnt_score = 5;
}else{
	$absent_score= 0;
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


	<div style="height:45px; width: 70px; color :<?php echo $aht_color ;?>; " class="saeed purblech">
		<h1 ><?php echo $aht ?> </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $acw_color ;?>; " class="saeed graych">
		<h1><?php  echo $acw ?>  </h1>
	</div>


	<div style="height:45px; width: 70px; color :<?php echo $hold_color ;?>;" class="saeed gray1ch">
		<h1><?php  echo $hold ?>   </h1>
	</div>


	<div style="height:45px; width: 120px;" class="saeed brownch">
		<h1><?php echo $quality_score ; ?> </h1>
	</div>

	<div style="height:45px; width: 120px;" class="saeed qch ">
		<h1><?php echo $final_score ; ?> </h1>
	</div>

							<?php

							}
						}

?>

	
	
		</div>


	<?php


	include'../main_page.php';

	?>

	<style >
	.container {
    height: 0%;
    width: 0%;
    /* background-color: #e7ebee26; */
	</style>