<?php
	include ('include/function.php');
	
	$schoolScriptHandler		=	new schoolRadar;
	
	$suburbName					=	$_GET['sn'];
	
	$gender						=	$schoolScriptHandler	->	suburbGender($suburbName);
	
	
	$results					=	$schoolScriptHandler	->	academicResult($suburbName);
	
	
	
	/*
	echo "<pre>";
	print_r($results);
	echo "</pre>";
	*/
	
	
?>


	    <h3>Eductation statistics for your suburb:</h3>
        <div class="row">
          <div class="span2">
            <p class="lead"> Male: <?php	echo $gender['Male'];	?></p>
          </div>
          <div class="span2">
            <p class="lead"> Female:  <?php	echo $gender['Female'];	?></p>
          </div>
        </div>
        <table class="table table-striped" width="100" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Phys</th>
            <th scope="col">Soc</th>
            <th scope="col">Emot</th>
            <th scope="col">Lang</th>
            <th scope="col">Comm</th>
          </tr>
          <tr>
            <th scope="row">Developmentally<br>
              vulnerable</th>
            <td><?php	echo $results[0]['17'];	?></td>
            <td><?php	echo $results[0]['13'];	?></td>
            <td><?php	echo $results[0]['9'];		?></td>
            <td><?php	echo $results[0]['5'];		?></td>
            <td><?php	echo $results[0]['1'];		?></td>
          </tr>
          <tr>
            <th scope="row">Developmentally <br>
              at risk</th>
            <td><?php	echo $results[0]['18'];	?></td>
            <td><?php	echo $results[0]['14'];	?></td>
            <td><?php	echo $results[0]['10'];	?></td>
            <td><?php	echo $results[0]['6'];		?></td>
            <td><?php	echo $results[0]['2'];		?></td>
          </tr>
          <tr>
            <th scope="row">On track</th>
            <td><?php	echo $results[0]['19'];	?></td>
            <td><?php	echo $results[0]['15'];	?></td>
            <td><?php	echo $results[0]['11'];	?></td>
            <td><?php	echo $results[0]['7'];		?></td>
            <td><?php	echo $results[0]['3'];		?></td>
          </tr>
          <tr>
            <th scope="row">Really On track</th>
            <td><?php	echo $results[0]['20'];	?></td>
            <td><?php	echo $results[0]['16'];	?></td>
            <td><?php	echo $results[0]['12'];	?></td>
            <td><?php	echo $results[0]['8'];		?></td>
            <td><?php	echo $results[0]['4'];		?></td>
          </tr>
        </table>