<?php
session_start();
error_reporting(0);
include'../config/connect.php';

$call_category = $_POST['call_category'];
$sub_category = $_POST['sub_category'];
$sub_category2 = $_POST['sub_category2'];
$case_details = $_POST['case_details'];
$repetitive_call = $_POST['repetitive_call'];
$validation = $_POST['validation'];
$validation_area = $_POST['validation_area'];
$ai = $_POST['ai'];

/*
$saeed1 = ' ';

if(isset($_POST['area_gab1'])){
	$saeed1 = $_POST['area_gab1'] ;
} 


$saeed2 = ' ';
if(isset($_POST['area_gab2'])){
	$saeed2 = $_POST['area_gab2'] ;
} 


$saeed3 = ' ';
if(isset($_POST['area_gab3'])){
	$saeed3 = $_POST['area_gab3'] ;
}  


$saeed4 = ' ';
if(isset($_POST['area_gab4'])){
	$saeed4 = $_POST['area_gab4'] ;
}  


$saeed5 = ' ';
if(isset($_POST['area_gab5'])){
	$saeed5 = $_POST['area_gab5'] ;
} 


$saeed6 = ' ';
if(isset($_POST['area_gab6'])){
	$saeed6 = $_POST['area_gab6'] ;
} 

*/

$saeed1 = $_POST['area_gab1'] ;
$saeed2 = $_POST['area_gab2'] ;
$saeed3 = $_POST['area_gab3'] ;
$saeed4 = $_POST['area_gab4'] ;
$saeed5 = $_POST['area_gab5'] ;
$saeed6 = $_POST['area_gab6'] ;

foreach($_POST['id'] as $ids => $id ){

     $comm = "update nps set call_category = '$call_category[$ids]' , sub_category = '$sub_category[$ids]', sub_category2 = '$sub_category2[$ids]' , case_detail = '$case_details[$ids]' , 	repetitive_call = '$repetitive_call[$ids]' , validation = '$validation[$ids]', 	validation_area = '$validation_area[$ids]' , ai = '$ai[$ids]' , area_gab1 = '$saeed1[$ids]' , area_gab2 = '$saeed2[$ids]' , area_gab3 = '$saeed3[$ids]' , area_gab4 = '$saeed4[$ids]' , area_gab5 = '$saeed5[$ids]' , area_gab6 = '$saeed6[$ids]' where id = '$id' ";

     $cont->query($comm) ; 
     

}



if ($cont->query($comm) === true ){
?>
<script>
window.location.href='agent_more.php';
</script>
<?php
}




?>
	