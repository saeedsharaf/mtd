<?php
session_start();

include'connect.php';

$id = $_SESSION['id'];

$saeed = "select super from member where id = '$id' ";
$sql = $cont->query($saeed);
$row = $sql->fetch_assoc();



if( $row['super'] == 1 ){
	?>
	<script>window.location.href='../sv/nps.php' </script>
	<?php
} else if( $row['super'] == 111 or $row['super'] == 222) {
	?>
	<script> window.location.href='../manger/hv.php' </script>
	<?php

} else {
?>
	<script> window.location.href='../agent/nps.php' </script>
	<?php

}
?>