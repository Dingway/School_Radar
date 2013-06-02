function showAcademicResult(suburbName){

	var	fullLink	=	"http://school.thedistillery.co/academicResult.php?sn=" + suburbName;

	$.ajax({            
    		url: fullLink,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#acaResult").html(data);            
            	$("#acaResult").show("slow");           	    
	        }
	});
}

function showSchoolFinder(){

	//var suburbName	=	$('input[id=findSuburb]').val();
	
	var suburbName		=	"Rostrevor";

	var	fullLink	=	"http://school.thedistillery.co/schoolFinder.php?sn=" + suburbName;

	$.ajax({            
    		url: fullLink,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#results").html(data);            
            	$("#results").show("slow");           	    
	        }
	});
	
	var	fullLink_1	=	"http://school.thedistillery.co/suburbGender.php?sn=" + suburbName;

	$.ajax({            
    		url: fullLink_1,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#suburb-stats").html(data);            
            	$("#suburb-stats").show("slow");           	    
	        }
	});
	
}

function showSchoolEnrolments(schoolName){

	var	fullLink	=	"http://school.thedistillery.co/schoolEnrolments.php?sc=" + schoolName;

	$.ajax({            
    		url: fullLink,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#schoolEnrolment").html(data);            
            	$("#schoolEnrolment").show("slow");           	    
	        }
	});
}

function showSchoolContact(schoolName){

	var	fullLink	=	"http://school.thedistillery.co/schoolContact.php?sc=" + schoolName;

	$.ajax({            
    		url: fullLink,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#school-details").html(data);            
            	$("#school-details").show("slow");           	    
	        }
	});
}

function showSuburbGender(suburbName){

	var	fullLink	=	"http://school.thedistillery.co/suburbGender.php?sn=" + suburbName;

	$.ajax({            
    		url: fullLink,
            dataType: "html",
            type: "GET",
            success: function( data ) {
            	$("#suburbGender").html(data);            
            	$("#suburbGender").show("slow");           	    
	        }
	});
}