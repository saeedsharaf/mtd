<?php


?>
		<script>
	
	function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("main").style.marginLeft = "80px";
	document.getElementById("te").style.marginLeft = "200px";
	document.getElementById("we").style.marginLeft = "280px";
	document.getElementById("close").innerHTML = '<a href="javascript:void(0)" style="float:right;color:white;margin-left:-5;position: absolute;top: 40%;left: 70%;" onclick="closeNav()">&#8644';
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.left = "-125px";
    document.getElementById("main").style.margin = "0 auto";
	document.getElementById("te").style.marginLeft = "70px";
	document.getElementById("we").style.marginLeft = "150px";
	document.getElementById("close").innerHTML = "<a href='javascript:void(0)' style='float:right;color:white;margin-left:-5;position: absolute;top: 40%;left: 70%;' onclick='openNav()'>&#8644</span>";
}
	
	</script>
	
<?php

?>