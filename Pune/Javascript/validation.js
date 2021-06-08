 function validation()

        {
			 var firstname=document.getElementById('ffname').value;                              // Taking all values from form  
             var lastname=document.getElementById('lname').value;
             var Gender=document.f1.gen;
             var abc=document.getElementById('eemail').value;
             var phone=document.getElementById('ppnumber').value;
             var city=document.getElementById('ccity').value;
              var graduation=document.getElementById('ggrad').value;
              var graduationyear=document.getElementById('ggrady').value;
              var special=document.getElementById('sspecial').value;
              var college=document.getElementById('uvclg').value;
              var primary=document.getElementById('pm').value;
              var pitch=document.getElementById('pitchofuser').value;

              if(firstname=="")                                                                   // If First Name is Empty it will give an error
			   {
			   	   
			   	    document.getElementById('nerror').style.display="block";

				    document.getElementById('nerror').innerHTML="Please Enter Your FirstName ";

					return false;
			   }

			   if(!isNaN(firstname))                                                               // If First Name contains Number it will give an error
			   {
			   	 document.getElementById('nerror').style.display="block";
			   	document.getElementById('nerror').innerHTML="FirstName cannot be a number  ";
			   	return false;
			   }
			   else{
			   	 	document.getElementById('nerror').innerHTML="";
			   }
			    if(lastname.length!=0)                                                            // If Last Name is not empty then 
			   {
                   if(!isNaN(lastname))                                                          // , check if last name contains number  if yes then it will give an error                                                 
			   {
			   	document.getElementById('llnerror').innerHTML="Lastname cannot be a number ";                      
			   	return false;
			   }
			   }
			      
			
            	if(Gender[0].checked==false && Gender[1].checked==false && Gender[2].checked==false)    // checking if none of the radio button is selected 
            	{
            		   document.getElementById('gerror').style.display="block";
            		document.getElementById('gerror').innerHTML="Please Select Your Gender";
            		 return false;
            	}
            	else{
            		document.getElementById('gerror').innerHTML="";
            	}



            	 if(abc=="")                                                                                 // If email is empty it will give an error.                                                               
			   {
			   	    document.getElementById('emerror').style.display="block";
				    document.getElementById('emerror').innerHTML="Please Enter Your Email ";

					return false;
			   }
			   	 if(abc.indexOf('@')<=0)                                                                  // checking email's @ position 
			   {
			   	    document.getElementById('emerror').style.display="block";
				    document.getElementById('emerror').innerHTML="Invalid Email Position ";

					return false;
			   }
			   if((abc.charAt(abc.length-4)!='.') &&  (abc.charAt(abc.length-3)!='.'))                 // calculating the length of the string and using length-4 so,
			   																							 // to get 4th position of the string from backwards and then ,
			   																							 // checking whether . appears in 4 position if not error ,
			   																							 // similarly for length-3 to validate .in etc
               {
               	   document.getElementById('emerror').style.display="block";
                    document.getElementById('emerror').innerHTML=" Please Enter Valid Email Address";
                    return false;
               }
               else{
            		document.getElementById('emerror').innerHTML="";
            	}

                if(phone.length!=0)                                                                      // If phone number  is not empty then                                                                   
			   {                                                                   
                     if(isNaN(phone))                                                                    // checking whether phone number is a numeric field, if not give error
			    {
			     
			    	document.getElementById('errorofphone').innerHTML="Please Enter Digits Only  ";        
			        return false;
		        }
		        if(phone.length!=10)
		        {
		        	document.getElementById('errorofphone').innerHTML="Please Enter  10 digit Valid Phone Number  ";       // Checking whether phone number is digit or not  
			        return false;
		        }
		           else{
            		document.getElementById('errorofphone').innerHTML="";
            	}

			   }
           
		      if(city=="")                                                                                                  // rest validation are for empty field 
			   {
			   	    document.getElementById('cerror').style.display="block";
				    document.getElementById('cerror').innerHTML="Please Enter Your City ";

					return false;
			   }
			      else{
            		document.getElementById('cerror').innerHTML="";
            	}
			   if(graduation=="")
			   	 {
			   	    document.getElementById('ggraderror').style.display="block";
				    document.getElementById('ggraderror').innerHTML="Please Select Your Graduation ";

					return false;
			   }
			      else{
            		document.getElementById('ggraderror').innerHTML="";
            	}
			     if(graduationyear=="")
			   {
			   	    document.getElementById('ggradyerror').style.display="block";
				    document.getElementById('ggradyerror').innerHTML="Please Select Your Graduation Year ";

					return false;
			   }
			      else{
            		document.getElementById('ggradyerror').innerHTML="";
            	}
			     if(special=="")
			   {
			   	    document.getElementById('spclerror').style.display="block";
				    document.getElementById('spclerror').innerHTML="Please Mention Your  Specialisation ";

					return false;
			   }
			      else{
            		document.getElementById('spclerror').innerHTML="";
            	}
			     if(college=="")
			   {
			   	    document.getElementById('clgerror').style.display="block";
				    document.getElementById('clgerror').innerHTML="Please Mention Your College ";

					return false;
			   }
			      else{
            		document.getElementById('clgerror').innerHTML="";
            	}
			     if(primary=="")
			   {
			   	    document.getElementById('pmerror').style.display="block";
				    document.getElementById('pmerror').innerHTML="Please Mention Your one Primary Skill ";

					return false;
			   }
			      else{
            		document.getElementById('pmerror').innerHTML="";
            	}
			      if(pitch=="")
			   {
			   	    document.getElementById('perror').style.display="block";
				    document.getElementById('perror').innerHTML="Please Write Something about Yourself ";

					return false;
			   }
			      else{
            		document.getElementById('perror').innerHTML="";
            	}



             }


            	
          

