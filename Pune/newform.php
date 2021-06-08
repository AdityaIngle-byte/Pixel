<?php

include_once "cofig.php";

// The below code is  after the user presses the submit button and PHP VALIDATION  starts

 $nameErr="";
 $namesErr="";
 $gendErr="";
 $EmailErr="";
 $CityErr="";
 $GradErr="";
 $GradYearErr="";
 $CErr="";
 $SErr="";
 $SkErr="";
 $PitchErr="";
 $PhoneErr="";
 $imgErr="";
if(isset($_POST['sub']))
{
  if($_POST['sub']=='Submit')                                          
  {
  if(empty($_POST['fname']))                                       // checking  whether the mandatory fields are empty or not using the php empty function 


  {
    $nameErr="Please Enter Your FirstName";

  }
  elseif(is_numeric($_POST['fname']))                             // checking  whether the user has entered number value in place of first name and last name 
  {
    $nameErr="First Name cannot be a numeric Value";
  }
    elseif(is_numeric($_POST['lname']))
  {
    $namesErr="Last Name cannot be a numeric Value";
  }
  elseif(empty($_POST['gen']))                                   
  {
    // $gendErr="Please Select Your Gender";
  }
  elseif(empty($_POST['email']))
  {
    $EmailErr="Email is Required";
    
  }
  elseif(strpos($_POST['email'], "@")<=0)                                 // checking @  position in email 
      {
      $EmailErr="Invalid Email (@ position)";
      }
      
   elseif (!is_numeric($_POST['phnumber']))                                // if phone number is not a numeric field give error 
     {

       $PhoneErr="Please Enter Digits Only";
     }
  elseif(empty($_POST['city']))
  {
    $CityErr="Please Specify City";
  }
  elseif(empty($_POST['grad']))
  {
    $GradErr="Please Select Your Graduation";
   
  }
  
  elseif(empty($_POST['grady']))
  {
    $GradYearErr="Please Select Your Graduation Year";
  }
  elseif(empty($_POST['sp']))
  {
    $SErr="Mention Your Specialization";
  }
  elseif(empty($_POST['cp']))
  {
    $CErr="Mention Your College";
  }
  elseif(empty($_POST['ps']))
  {
    $SkErr="Atleast Mention one skill";
  }
  elseif(empty($_POST['pitch']))
  {
    $PitchErr="Please Mention Something About Yourself";                  // The above validation can also be done in javascript using javascript function and also using new html 5    required field . But they both are client side validation thus hacker can easily break into our code using various ethical hacking technique such as sql injection .PHP VALIDATION IS MORE SECURE ( SERVER SIDE )
  }                                                                       // If there is no validation error  the else parts start where we first connect the database. 
  else{

      // $con=mysqli_connect("localhost","root","","pixel6");
      if($con)
      {

                                                                          // Storing all data  into some variable  
        $email1=$_POST['email'];
        $q=mysqli_query($con,"SELECT * from userprofile where Email='$email1' ");
        if(mysqli_num_rows($q)>0)
        {
          exit("<h1>This Email id already exists. Try different !!</h1><a href='newform.php'>Submit Again</a>");
        }
        $firstname1=$_POST['fname'];          
        $lastname1=$_POST['lname'];
        $gender1=$_POST['gen'];
        
        $phonenumber1=$_POST['phnumber'];
        $state1=$_POST['ss'];
        $city1=$_POST['city'];
        $graduation1=$_POST['grad'];
        $graduationgrade1=$_POST['gradp'];
        $graduationyear1=$_POST['grady'];
        $specialisation1=$_POST['sp'];
        $university1=$_POST['cp'];
        $primary1=$_POST['ps'];
        $secondary1=$_POST['stf'];
        $certifications1=$_POST['ctf'];
        $pitch1=$_POST['pitch'];                                    
        $imgname=$_FILES['picsub']['name'];                         // with the help of image file and super global variable collecting all information about image file     
        $path="Uploaded/".$imgname;                                 //  Storing some path into the variable with respect to the image name selected above.
        $imgtype=$_FILES['picsub']['type'];                         // To store type of file 
        $imgtemp=$_FILES['picsub']['tmp_name'];                     // to store the temporarty file path after the user selects the file.
        $imgsize=$_FILES['picsub']['size'];
        if($imgtype=='image/png' || $imgtype=='image/jpg'  ||  $imgtype=='image/jpeg') // checking whether user has selected only image file if not jump to else part
        {
             move_uploaded_file($imgtemp, $path);                     // moving file from temporary location to actual location specified in path variable
       
    
       // data base query to insert into mysql database 

        $query2="INSERT INTO userprofile (                                       FirstName,LastName,Gender,Email,PhoneNumber,State,City,Graduation,GraduationGrade,GraduationYear,Specialisation,University,Primaryy,Secondary,Certifications,Speech,Photo)values('$firstname1','$lastname1','$gender1','$email1','$phonenumber1','$state1','$city1','$graduation1','$graduationgrade1','$graduationyear1','$specialisation1','$university1','$primary1','$secondary1','$certifications1','$pitch1','$path'); ";
        $q2=mysqli_query($con,$query2);
        if($q2)                                                                   // If query is succesfull data will get inserted into the database.
        { 
           
        
    
                echo "<script>alert('Data Uploaded Successfully');window.location='profile.php?name=".$firstname1."-".$lastname1."';</script>";                   
        
        }
        }
        else{                                                                         
            $imgErr="Please Select Image File only";
        }                                  // size
    
      }
  }
  
  


  
  
  
}

}
?>




<!DOCTYPE html>
<!-- html from to insert data into the database  -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <script type="text/javascript" src="Javascript/validation.js" ></script>
    <title>Registration</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="text/css">
      
     </style>
   </head>
<body>

  <div class="container" style="">

    <div class="title logoform"><h5>Profile Submission</h5></div>
    <div class="content">
      <form  method="post" enctype="multipart/form-data" name="f1" autocomplete="off" onsubmit="return validation()">
        <div class="user-details">
          <div class="logof">
            <h2>Personal</h2>
           </div>
          <div class="input-box">
            <span class="details">First Name</span>
             <span class="error">* <?php  if(isset($_POST['sub'])){echo $nameErr;}?></span>
              <span id="nerror"></span>

            <input type="text" name="fname" placeholder="Enter your first name" id="ffname">
            
          
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <span class="error"> <?php  if(isset($_POST['sub'])){echo $namesErr;}?></span>
             <span id="llnerror" ></span>
            <input type="text" name="lname" placeholder="Enter your last name" id="lname">
              
          </div>

 
          <div class="gender-details">
          <span class="gender-title ">Gender:</span>
          <span class="error">* <?php  if(isset($_POST['sub'])){echo $gendErr;}?></span>
             <span id="gerror"></span>
          <br>
          <input type="radio" name="gen" value="Male" id="male1"><span class="o">Male</span>
            <input type="radio" name="gen" value="Female" id="female1"><span class="o" >Female</span>
              <input type="radio" name="gen"  value="Other" id="other1"><span class="o">Other</span>
              
        
          
       
        </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $EmailErr;}?></span>
               <span id="emerror"></span>
            <input type="text" name="email" placeholder="Enter your email" id="eemail">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <span class="error"> <?php  if(isset($_POST['sub'])){echo $PhoneErr;}?></span>
              <span id="errorofphone" ></span>
            <input type="text"   name="phnumber" placeholder="Enter your Phonenumber" id="ppnumber">
          </div>
        <div class="input-box">
            <span class="details">Select State</span>
           <select name="ss" id="sstate">
                  <option value="">Select State</option>
                  <option>Andhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Chhattisgarh</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Mizoram</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Nagaland</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Tripura</option>
                  <option>Telangana</option>
                  <option>Uttar Pradesh</option>
                  <option>Uttarakhand</option>
                  <option>West Bengal</option>
                    </select>
          </div>
           <div class="input-box">
            <span class="details">City</span>
           <span class="error">* <?php  if(isset($_POST['sub'])){echo $CityErr;}?></span>
            <span id="cerror" ></span>
            <input type="text" placeholder=" Enter Your City"  name="city" id="ccity">
          </div>
           <div class="input-box">
            <span class="details">Photo</span>
           <input type="file" name="picsub"  id="uploadfile" >
             <span class="error"> <?php  if(isset($_POST['sub'])){echo $imgErr;}?></span>

          </div>
          <div class="logof" style="margin-top: 20px;">
            <h2>Education</h2>
           </div>
            <div class="input-box">
            <span class="details">Graduation</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $GradErr;}?></span>
             <span id="ggraderror" ></span>
            <select  name="grad" id="ggrad">
                  <option value="">Select Graduation</option>
                  <option>Bachelor of Arts</option>
                  <option>Bachelor of Science</option>
                  <option>Bachelor of Commerce</option>
                  <option>Bachelor of Engg./Tech</option>
                  <option>BMS/BBA/BBS</option>
                  <option>Bachelor of Law</option>
                  <option>Bachelor of Medicine (MBBS)</option>
                  <option>IIM 5-year Integrated Mgmt. Programme</option>
                  <option>Other</option>
                    </select>
                    
          </div>
           <div class="input-box">
            <span class="details">Graduation Grade/Percentage</span>
            <input type="text" placeholder="  Enter Your Grade/Percentage"  name="gradp"  >
          </div>
           <div class="input-box">
            <span class="details">Graduation Year</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $GradYearErr;}?></span>
             <span id="ggradyerror" ></span>
          <select name="grady" id="ggrady">
                  <option value="">Select Graduation Year</option>
                  <option>2021</option>
                  <option>2020</option>
                  <option>2019</option>
                  <option>2018</option>
                  <option>2017</option>
                    </select>
          </div>
           <div class="input-box">
            <span class="details">Specialisation</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $SErr;}?></span>
             <span id="spclerror" ></span>
           <input type="text" placeholder=" Enter Your Specialisation" name="sp" id="sspecial">
          </div>
            <div class="input-box">
            <span class="details">College/University</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $CErr;}?></span>
             <span id="clgerror" ></span>
           <input type="text" placeholder=" Enter Your College/University Name" name="cp" id="uvclg">
          </div>
           <div class="logof" style="margin-top: 20px;">
            <h2>Skills</h2>
           </div>
              <div class="input-box">
            <span class="details">Primary</span>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $SkErr;}?></span>
                <span id="pmerror" ></span>
           <input type="text" placeholder=" Enter Your Primary Skills" name="ps" id="pm">
          </div>
             <div class="input-box">
            <span class="details">Secondary</span>
           <input type="text" placeholder=" Enter Your Secondary Skills" name="stf"  >
          </div>
            <div class="input-box">
            <span class="details">Certifications</span>
           <input type="text" placeholder=" Enter Certifications if any " name="ctf">
          </div>
           <div class="logof" style="margin-top: 20px;">
            <h2>Pitch(Why should we consider you?)</h2>
            <span class="error">* <?php  if(isset($_POST['sub'])){echo $PitchErr;}?></span>
                <span id="perror" ></span>
           </div>
            
           
           <textarea cols="90" rows="5" style="margin-bottom: 10%;" name="pitch" id="pitchofuser"></textarea>
         



        <div class="button">
          <input type="submit" name="sub">
        </div>

      </form>
    </div>
  </div>

</body>
</html>
