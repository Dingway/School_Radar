<?php
	include ('include/function.php');
	
	$schoolScriptHandler		=	new schoolRadar;
	
	$suburbName					=	$_GET['sn'];
	
	$results					=	$schoolScriptHandler	->	schoolFinder($suburbName);
	
//	echo "<pre>";
//	print_r($results);
//	echo "</pre>";
?>

        <h3>Schools you are zoned for:</h3>
        <ul>
	        <?php
	        	foreach($results as $result){
	        	
	        	
	        ?>
	        	 <li><a href="javascript:void(0)" onclick="showSchoolContact('norwood');"><?php	echo $result;	?></a></li>
	        <?php	
	        	}
	        ?>
        </ul>