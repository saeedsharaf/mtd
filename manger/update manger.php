<?php 

//include'../config/connect.php';

$manger = array (11,12,1,3,6,2,24,13,15,25,7,18,4,23);
	foreach( $manger as $mangerid ){
	
	$update = "update nps set manger_id = '111' where team_id = $mangerid ; ";	
	echo $update . '<br>' ;
	}

	?>