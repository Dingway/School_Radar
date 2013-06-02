<?php
	include ('include/function.php');
	
	$schoolScriptHandler		=	new schoolRadar;
	
	$schoolName					=	$_GET['sc'];
	
	
	$results					=	$schoolScriptHandler	->	schoolEnrolments($schoolName);
	
	echo "<pre>";
	print_r($results);
	echo "</pre>";
?>