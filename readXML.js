// File: readXML.js

// Start function when DOM has completely loaded 
//$(document).ready(function(){ 
var allides=[];
	// Open the students.xml file
	$.get("comm.xml",{},function(xml){
      	
		
		// Build an HTML string
		myHTMLOutput = '';
	 	myHTMLOutput += '<table width="98%" border="1" cellpadding="0" cellspacing="0">';
	  	myHTMLOutput += '<th>Name</th><th>Age</th><th>Phone</th><th>SSN</th>';
	  	
		// Run the function for each student tag in the XML file
		$('user',xml).each(function(i) {
			uid = $(this).find("uid").text();
			command = $(this).find("descript").text();
			cdate = $(this).find("lmdate").text();
			//studentSSN = $(this).find("ssn").text();
			//studentPost = $(this).find("name").attr("post"); 
			allides[i]=uid;
			// Build row HTML data and store in string
			mydata = BuildStudentHTML(uid,command,cdate);
			myHTMLOutput = myHTMLOutput + mydata;
		});
		myHTMLOutput += '</table>';
		
		// Update the DIV called Content Area with the HTML string
		$("#ContentArea").append(myHTMLOutput);
		alert(allides[0]+" "+allides[1]);
		
		
		///////////////////////////////////////////////////////////////
		 $.post( "designArtical.php",//"login.php"   ,
    {
	//email:"sujitnag2011@gmail.com",
   //   pasw:"sujitnag"
	
     gid:allides
	  
      //pasw:$("#pasw").val()
    },
    function(data1,data2){
   var myarr=data1.split(",");
   
   alert(data1);
		
	  });	
		
		
		
		/////////////////////////////////////////////////////////////////
		
		
		
		
		
		
	});
//});
 
 
 
 function BuildStudentHTML(uid,command,cdate){
	
	// Check to see if their is a "post" attribute in the name field
	if ((uid) != undefined){
		//studentPostHTML = "<strong>(" + studentPost + ")</strong>";
	}
	else
	{
		studentPostHTML = "";
	}
	
	// Build HTML string and return
	output = '';
	output += '<tr>';
	output += '<td>'+ uid + '</td>';
	output += '<td>'+ command +'</td>';
	output += '<td>'+ cdate +'</td>';
	//output += '<td>'+ studentSSN +'</td>';
	output += '</tr>';
	return output;
}
	 