<?php
session_start();
include'../config/connect.php';

$comment = $_POST['comment'];


foreach($_POST['id'] as $ids => $id ){
$comm = "update nps set comment = '$comment[$ids]' where id = $id";
$cont->query($comm);

};

if ($cont->query($comm) === true ){
?>
<script>
window.location.href='agent_more.php';
</script>
<?php
}




?>
	