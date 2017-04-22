 function myFunction() 
 {
	//workshop name
	var a = document.forms["form"]["wname"];
	if(a.value=="")
		{
		 alert("Workshop Name should not be blank !!");
        	 return false;
		}
		if (! allLetter(a)) 
		{
			 alert("Workshop should be all characters!!");
			 return false;
		}
		
// speaker name
 	var a = document.forms["form"]["sname"];
	if(a.value=="")
		{
		 alert("Speaker Name should not be blank !!");
        	 return false;
		}
		if (! allLetter(a)) 
		{
			 alert("Speaker Name should be all characters!!");
			 return false;
		}
		
		
		//emailid
	  var d = document.forms["form"]["email"];

 	 if (d.value == "") 
		{
    	            alert("Email should not be blank !!");
		    return false;
                }

	if (! ValidateEmail2(d)) 
		{
		   alert('Please input valid Email ID!!!');
		   return false;
		}	 
		
		//contact no
	var g = document.forms["form"]["no"];
	if(g.value=="")
	{
		 alert("Contact Number should not be blank !!");
        	 return false;
	}
	if(!allnumeric(g))
	{
		alert("all should be numbers");
		return false;
	}
	
	//CSI MEMBER
	var t = document.forms["form"];
	if (!validateCSI(t)) {
		alert ( "Select whether csi member or not" );
      return false;
	}
 }
 
 function allnumeric(inputtxt)
 {
      var no = /^[0-9]+$/;
      if(inputtxt.value.match(no))
      {
           return true;
      }
      else
      {
          return false;
      }
}
               
function allLetter(inputtxt)
{
    var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }
                

			 function ValidateEmail2(inputText) {

				var valid = true;

				if (inputText.value.indexOf('@') == -1) {
					valid = false;
				} else {

					var parts = inputText.value.split('@');
					var domain = parts[1];
							

					if (domain.indexOf('.') == -1) {

						valid = false;

					} else {

						var domainParts = domain.split('.');
						var ext = domainParts[1];
					
					}

				}


				return valid;

			}
			
function validateCSI(inputText)
{
	if ( ( inputText.YES[0].checked == false ) && ( inputText.YES[1].checked == false ) )
		return false;
	else
		return true;
}