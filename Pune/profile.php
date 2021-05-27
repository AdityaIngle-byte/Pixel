

<?php


// $names=$_REQUEST['param1'];
// $var1=explode("-",$names);
// $FNAME=$var1[0];
// $LNAME=$var1[1];
// echo $FNAME;
// echo $LNAME;
//something 
 $FNAME=$_GET['name'];

$con=mysqli_connect("localhost","root","","pixel6");
if($con)
{
$query="SELECT * FROM userprofile WHERE  FirstName='$FNAME'";
$q=mysqli_query($con,$query);
if($q)
{
  $arr=mysqli_fetch_array($q);
  $getgender=$arr['Gender'];
  $prefix="";
  $prefix2="";
  $prefix3="";
  if($getgender=='Male')
  {
  $prefix="Mr.";
  $prefix2="his";
  $prefix3="He";
  }
  else
  {
    $prefix="Ms.";
    $prefix2="her";
    $prefix3="She";
  }



}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Showing Data</title>

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style type="text/css">
   .ncontainer{
    background-color: white;
   }
   .section{

   }
     *{
      margin:0px;
      padding: 0px;
   }
body,html{
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        overflow: auto;

 }
 .ncontainer { 
    display: table;
    width: 100%;
    height: 100%;

  }
 .content { 
    display: table-row; 
    height: 100%; 
   
   


   
  }
.content-body { 
    display: table-cell;


  }
  .profileimage{
    display: flex;
    justify-content: center;
    padding-top: 30px;
  }
  .name{
   display: flex;
    justify-content: center;
    padding-top: 30px;
  }
  h1{
    font-size: 2rem;
  }
  .brief{
    display: flex;
    justify-content: center;
    padding-top: 30px;
  }
  h3{
    font-size: 1.2rem;
    font-family: cursive;
  }
  h2{
    margin-left: 100px;
  }
  h4{
     padding-top: 30px;
     color: gray;
     
      font-style: italic;
      display: inline-block;

  }
  .parent{
    display: flex;
    justify-content: space-between;
  }
  footer{
    background-color:  #E8E8E8;
    text-align: center;
    height: 50px;
    display: block;
   line-height: 50px;
   transition: all 0.8s;
   
  }
  footer a{
    color: black;
       transition: all 0.8s;
  }
    footer a:hover{
    color: black;
    font-size: 1.3rem;
      
  }
  </style>
</head>
<body>
<div class="ncontainer">
  <div class="content">
    <section class="content-body">
     <div class="profileimage">
   <img src="<?php echo $arr['Photo']?>" height=300 width=300>  

     </div>
     <div class="name">
        <h1><?php  echo $arr['FirstName']."&nbsp;".$arr['LastName'];?></h1>

     </div>
     <div class="brief" style="margin-left: 100px; margin-right: 100px;">
       <h3><?php echo $prefix."&nbsp;".$arr['FirstName']." did ".$prefix2."&nbsp;".$arr['Graduation']." from " .$arr['University']."  in the year ".$arr['GraduationYear'].".<br>".$prefix3." is highly skilled in ".$arr['Primaryy'].". ".$prefix3." lives in ".$arr['City']." and can be contacted <br> via ".$arr['Email']." and ".$arr['PhoneNumber'];?></h3>
     </div>
     <br>
     <br>
     <h2>Personal</h2>
    <hr style="border:2px solid black; margin-left: 100px; margin-right: 100px;">
     
     <section class="parent">
     <section class="child">
           <h4 style="padding-right: 50px; margin-left: 100px;">Name:</h4><span><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['FirstName'];?></h4></span>
      <br>
      <h4 style="padding-right: 20px; margin-left: 100px;">Last Name:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['LastName'];?></h4></span>
      <br>
      <h4 style="padding-right: 45px; margin-left: 100px;">Gender:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['Gender'];?></h4></span>
     </section>
  
       <section class="child">
         <h4 style="padding-right: 50px; ">Email:</h4><span><h4 style="color: black; display: inline; font-style: normal;margin-right: 100px;"><?php echo $arr['Email'];?></h4></span>
         <br>
            <h4 style="padding-right: 50px; ">Phone:</h4><span><h4 style="color: black; display: inline; font-style: normal;margin-right: 100px;"><?php echo $arr['PhoneNumber'];?></h4></span>
            <br>
               <h4 style="padding-right: 50px; ">Lives in:</h4><span><h4 style="color: black; display: inline; font-style: normal;margin-right: 100px;"><?php echo $arr['City'];?></h4></span>
       </section>
     </section>
          <br>
     <br>
         <br>
     <br>
     <h2>Education</h2>
    <hr style="border:2px solid black; margin-left: 100px; margin-right: 100px;">
         <h4 style="padding-right: 60px; margin-left: 100px;">Graduation:</h4><span><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['Graduation']." in ".$arr['Specialisation'];?></h4></span>
      <br>
      <h4 style="padding-right: 80px; margin-left: 100px;">Pass Out:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['GraduationYear'];?></h4></span>
      <br>
      <h4 style="padding-right: 20px; margin-left: 100px;">College/University:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['University'];?></h4></span>
            <br>
     <br>
          <br>
     <br>
     <h2>Skills</h2>
    <hr style="border:2px solid black; margin-left: 100px; margin-right: 100px;">
     <h4 style="padding-right: 50px; margin-left: 100px;">Primary:</h4><span><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['Primaryy']." in ".$arr['Specialisation'];?></h4></span>
      <br>
      <h4 style="padding-right: 35px; margin-left: 100px;">Secondary:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['Secondary'];?></h4></span>
      <br>
      <h4 style="padding-right: 20px; margin-left: 100px;">Certification:</h4><h4 style="color: black; display: inline; font-style: normal;"><?php echo $arr['Certifications'];?></h4></span>
             <br>
     <br>
          <br>
     <br>
     <h2><?php echo $arr['FirstName']."' Pitch"?></h2>
    <hr style="border:2px solid black; margin-left: 100px; margin-right: 100px;">
    <div class="brief" style="margin-bottom: 100px; margin-left: 100px; margin-right: 100px;">
      <h3 style=""><?php echo "<span><i class='fas fa-comment'></i></span> ".$arr['Speech'];?></h3>
    </div>
      
    </section>
   
  </div>
   <footer>
      <?php
  include_once "footer.php";
  ?>
    </footer>
</div>


</body>
</html>