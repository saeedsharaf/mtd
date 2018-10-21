<?php
session_start();

include'connect.php';

$id = $_SESSION['id'];

$saeed = "select super from member where id = '$id' ";
$sql = $cont->query($saeed);
$row = $sql->fetch_assoc();



if( $row['super'] == 1 ){
	?>
	<script>window.location.href='../monthly/oct/score/sv_score_more.php' </script>
	<?php
} else if( $row['super'] == 111 or $row['super'] == 222 or $row['super'] == 333 ) {
	?>
	<script> window.location.href='../monthly/oct/score/manger_score_more.php' </script>
	<?php

} else {
?>
	<script> window.location.href='../monthly/oct/score/sv_score.php' </script>
	<?php

}
?>