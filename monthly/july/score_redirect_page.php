<?php
session_start();

include'../../config/connect.php';

$id = $_SESSION['id'];

$saeed = "select super from member where id = '$id' ";
$sql = $cont->query($saeed);
$row = $sql->fetch_assoc();



if( $row['super'] == 1 ){
	?>
	<script>window.location.href='score/sv_score_more.php' </script>
	<?php
} else if( $row['super'] == 111 or $row['super'] == 222) {
	?>
	<script> window.location.href='score/manger_score_more.php' </script>
	<?php

} else {
?>
	<script> window.location.href='score/sv_score.php' </script>
	<?php

}

?>