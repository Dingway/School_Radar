<?php
	include ('include/function.php');
	
	$schoolScriptHandler		=	new schoolRadar;
	
	$suburbName					=	$_GET['sn'];
	
	$results					=	$schoolScriptHandler	->	academicResult($suburbName);
	
	echo "<pre>";
	print_r($results);
	echo "</pre>";
?>