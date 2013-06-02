<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="js/script.js"></script>
<style>
	#findSchool, #suburbGender, #acaResult, #schoolInfo, #schoolEnrolment{
		display: none;
	}
</style>
<h1>School Radar</h1>

<a href="javascript:void(0)" onclick="showSchoolFinder('rostrevor');">Find School</a>
<a href="javascript:void(0)" onclick="showSuburbGender('rostrevor');">Suburb Gender</a>
<a href="javascript:void(0)" onclick="showAcademicResult('rostrevor');">Academic Result</a>
<a href="javascript:void(0)" onclick="showSchoolContact('norwood');">School Info</a>
<a href="javascript:void(0)" onclick="showSchoolEnrolments('Norwood Morialta High School');">School Enrolments</a>

<div id="findSchool"></div>

<div id="suburbGender"></div>

<div id="acaResult"></div>

<div id="schoolInfo"></div>

<div id="schoolEnrolment"></div>
<?php
/*
	include ('include/function.php');

	$schoolScriptHandler		=	new schoolRadar;

	$results					=	$schoolScriptHandler	->	schoolFinder('rostrevor');
	
	echo "<pre>";
	print_r($results);
	echo "</pre>";
	

	$schoolResults				=	$schoolScriptHandler	->	schoolContact('norwood');
	
	echo "<pre>";
	print_r($schoolResults);
	echo "</pre>";
	
	
	$EnrolmentResults			=	$schoolScriptHandler	->	schoolEnrolments('Norwood Morialta High School');
	
	echo "<pre>";
	print_r($schoolResults);
	echo "</pre>";
	
	
	$suburbResults				=	$schoolScriptHandler	->	suburbGender('rostrevor');
	
	echo "<pre>";
	print_r($schoolResults);
	echo "</pre>";
	
	$academicResults			=	$schoolScriptHandler	->	academicResult('rostrevor');
	
	echo "<pre>";
	print_r($academicResults);
	echo "</pre>";
	
*/	
?>

<h2>Bullshit</h2>