<?php
	include ('include/function.php');
	
	$schoolScriptHandler		=	new schoolRadar;
	
	$schoolName					=	$_GET['sc'];
	
	$c_results					=	$schoolScriptHandler	->	schoolContact("norwood");
	
	$e_results					=	$schoolScriptHandler	->	schoolEnrolments("Norwood Morialta High School");

	
?>


	        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Norwood+Morialta+High+School&amp;sll=-34.985965,138.701955&amp;sspn=1.766459,3.56781&amp;ie=UTF8&amp;hq=Norwood+Morialta+High+School&amp;hnear=&amp;ll=-34.919278,138.672288&amp;spn=1.768205,3.56781&amp;t=m&amp;z=9&amp;iwloc=A&amp;cid=5330039913668507733&amp;output=embed"></iframe>
	    
        <h3><?php	echo $c_results[0][1];	?></h3>
        <div class="row">
          <div class="span2">
            <p><?php	echo $c_results[0][4];	?>
            <br/>
            <a href="http://www.adelaidemetro.com.au/jp/results/?&fromPlace=Rostrevor SA 5073::-34.895893,138.67490&toPlace=Norwood Morialta Middle Campus::-34.919278,138.672288&mode=BUS,RAIL,TRAM,WALK&min=TRANSFERS&maxWalkDistance=750&time=2:55%20pm&date=02/06/13&arr=Depart" target="_blank">SCHOOl BUS</a>
            </p>
          </div>
          <div class="span2">
            <p><?php	echo $c_results[0][5];	?></p>
          </div>
        </div>
        <h4> Number of enrollments for Term 3, 2012</h4>
        <div class="row">
          <div class="span1">
            <p class="lead"> 90 </p>
            <p>ages 5-7</p>
          </div>
          <div class="span1">
            <p class="lead"> 1221 </p>
            <p>ages 7-9</p>
          </div>
          <div class="span1">
            <p class="lead"> 300</p>
            <p>ages 9-12</p>
          </div>
        </div>