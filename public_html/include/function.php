<?php
	include ('define.php');
	
	class schoolRadar{
		
		//fine the school name based on suburb
		function schoolFinder($suburbName){
			
			$con	=	mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			
			if (mysqli_connect_errno()){
				return false;
			}
			
			$searchQuery	=	"
								SELECT sa_public_h_school.`Zoned school`
								FROM sa_public_h_school
								WHERE sa_public_h_school.`Suburb name` = '".$suburbName."'";
			
			//echo $searchQuery;
			
			$result			=	mysqli_query($con, $searchQuery);
			
			$i				=	0;
			while($row = mysqli_fetch_array($result)){
				$schoolName[$i]	=	$row['Zoned school'];
				$i++;
			}
			
			mysqli_close($con);
			
			return $schoolName;
			
		}
		
		
		//return school contact infomation
		function schoolContact($schoolName){
			
			$con	=	mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			
			if (mysqli_connect_errno()){
				return false;
			}
			
			$searchQuery	=	"
									SELECT 	`Sites Services - Excl Ethnic`.Description, 
											`Sites Services - Excl Ethnic`.`Organisation Unit Name`, 
											`Sites Services - Excl Ethnic`.`Organisation Unit Number`, 
											`Sites Services - Excl Ethnic`.`Address 1 Formatted Postal`, 
											`Sites Services - Excl Ethnic`.`Address 2 Formatted Physical`, 
											`Sites Services - Excl Ethnic`.Phone, 
											`Sites Services - Excl Ethnic`.Fax, 
											`Sites Services - Excl Ethnic`.Contact, 
											`Sites Services - Excl Ethnic`.`Region code`
									FROM 	`Sites Services - Excl Ethnic`
									WHERE 	`Sites Services - Excl Ethnic`.`Organisation Unit Name` like '%".$schoolName."%' 
									AND 	`Sites Services - Excl Ethnic`.Description = 'High Schools' ";
			
			//echo $searchQuery;
			
			$result			=	mysqli_query($con, $searchQuery);
			
			$i				=	0;
			while($row = mysqli_fetch_array($result)){
				$schoolInfo[$i]	=	$row;
				$i++;
			}
			
			mysqli_close($con);
			
			return $schoolInfo;
				
		}
		
	
		function schoolEnrolments($schoolName){
			$con	=	mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			
			if (mysqli_connect_errno()){
				return false;
			}
			
			$searchQuery	=	"
									SELECT 	`Enrolments by Sch by Age`.`Census Type`, 
											`Enrolments by Sch by Age`.`Year`, 
											`Enrolments by Sch by Age`.`Organisation Unit Number`, 
											`Enrolments by Sch by Age`.`Organisation Unit Name`, 
											`Enrolments by Sch by Age`.`Age Group`, 
											`Enrolments by Sch by Age`.`Number of Students (FTE)`, 
											`Enrolments by Sch by Age`.`Number of Students (Persons)`
									FROM 	`Enrolments by Sch by Age`
									WHERE 	`Enrolments by Sch by Age`.`Organisation Unit Name` = '".$schoolName."'
								";
			
			//echo $searchQuery;
			
			$result			=	mysqli_query($con, $searchQuery);
			
			$i				=	0;
			while($row = mysqli_fetch_array($result)){
				$schoolEnrol[$i]	=	$row;
				$i++;
			}
			
			mysqli_close($con);
			
			return $schoolEnrol;
		}
		
		
		function suburbGender($suburbName){
			$con	=	mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			
			if (mysqli_connect_errno()){
				return false;
			}
			
			$searchQuery	=	"
									SELECT 	gender.LocalCommunity, 
											gender.Male, 
											gender.Female
									FROM 	gender
									WHERE 	gender.LocalCommunity = '".$suburbName."'
								";
			
			//echo $searchQuery;
			
			$result			=	mysqli_query($con, $searchQuery);
			
			$i				=	0;
			while($row = mysqli_fetch_array($result)){
				$schoolEnrol[$i]	=	$row;
				$i++;
			}
			
			mysqli_close($con);
			
			return $schoolEnrol[0];
		}
		
		function academicResult($suburbName){
			$con	=	mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			
			if (mysqli_connect_errno()){
				return false;
			}
			
			$searchQuery	=	"
									SELECT 	comm.LocalCommunity, 
											comm.`10`, 
											comm.`25`, 
											comm.`50`, 
											comm.`100`, 
											lang.`10`, 
											lang.`25`, 
											lang.`50`, 
											lang.`100`, 
											emot.`10`, 
											emot.`25`, 
											emot.`50`, 
											emot.`100`, 
											phys.`10`, 
											phys.`25`, 
											phys.`50`, 
											phys.`100`, 
											soc.`10`, 
											soc.`25`, 
											soc.`50`, 
											soc.`100`
									FROM 	comm INNER JOIN lang ON comm.LocalCommunity = lang.LocalCommunity
										 	INNER JOIN emot ON lang.LocalCommunity = emot.LocalCommunity
										 	INNER JOIN phys ON emot.LocalCommunity = phys.LocalCommunity
										 	INNER JOIN soc ON phys.LocalCommunity = soc.LocalCommunity
									WHERE 	comm.LocalCommunity = '".$suburbName."'
								";
			
			//echo $searchQuery;
			
			$result			=	mysqli_query($con, $searchQuery);
			
			$i				=	0;
			while($row = mysqli_fetch_array($result)){
				$schoolEnrol[$i]	=	$row;
				$i++;
			}
			
			mysqli_close($con);
			
			return $schoolEnrol;
		}
		
	}
?>