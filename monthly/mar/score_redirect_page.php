<?php
session_start();

//include'../../config/connect.php';

$super = $_SESSION['super'];
/*
$saeed = "select super from member where id = '$id' ";
$sql = $cont->query($saeed);
$row = $sql->fetch_assoc();


*/
if( $super == 1 ){
	?>
	<script>window.location.href='score/sv_score_more.php' </script>
	<?php
} else if( $super== 111 or $super == 222) {
	?>
	<script> window.location.href='score/manger_score_more.php' </script>
	<?php

} else {
?>
	<script> window.location.href='score/sv_score.php' </script>
	<?php

}
?>