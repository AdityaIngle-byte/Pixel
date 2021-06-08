

<?php


error_reporting(0);
include_once "cofig.php";
$names=$_REQUEST['name'];
$var1=explode("-",$names);
$FNAME=$var1[0];
$LNAME=$var1[1];
$Em=$var1[2];
// echo $FNAME;
// echo $LNAME;

//  $FNAME=$_GET['name'];
if(empty($FNAME) || empty($LNAME))
{
exit ("<h1>URL Record Not Found. Provide name =  Firstname-Lastname</h1>");
}
// $con=mysqli_connect("localhost","root","","pixel6");
if($con)
{
if(!empty($Em))
{
$query="SELECT * FROM userprofile WHERE  FirstName='$FNAME' and  LastName='$LNAME' and Email='$Em'";
$q=mysqli_query($con,$query);
}
else
{
  $query="SELECT * FROM userprofile WHERE  FirstName='$FNAME' and  LastName='$LNAME'";
$q=mysqli_query($con,$query);
}

if($q)
{
  if(mysqli_num_rows($q)<1)
  {
    exit("<h1>Record Not Found</h1>");
  }
 if (mysqli_num_rows($q)>1)
 {
  echo "<table cellpadding='20'>";
  while ($arr=mysqli_fetch_array($q)) {
    echo "<tr><td>".$arr['FirstName']."</td><td>".$arr['LastName']."</td><td>".$arr['Email']."</td><td><a href='profile.php?name=".$arr['FirstName']."-".$arr['LastName']."-".$arr['Email']."'>Click Here to Show Profile</a></td>";
    echo "<tr>";
  }
    exit();
 }
   else{


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
  <link rel="stylesheet" type="text/css" href="CSS/profile.css">
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
     <div class="brief1">
       <h3><?php echo $prefix."&nbsp;".$arr['FirstName']." did ".$prefix2."&nbsp;".$arr['Graduation']." from " .$arr['University']."  in the year ".$arr['GraduationYear'].".<br>".$prefix3." is highly skilled in ".$arr['Primaryy'].". ".$prefix3." lives in ".$arr['City']." and can be contacted <br> via ".$arr['Email']." and ".$arr['PhoneNumber'];?></h3>
     </div>
     <br>
     <br>
     <h2>Personal</h2>
    <hr>
     
     <section class="parent">
     <section class="child">
           <h4 class="abc">Name:</h4><span><h4 class="somestyle"><?php echo $arr['FirstName'];?></h4></span>
      <br>
      <h4 class="def">Last Name:</h4><h4 class="somestyle"><?php echo $arr['LastName'];?></h4></span>
      <br>
      <h4  class="gh">Gender:</h4><h4 class="somestyle"><?php echo $arr['Gender'];?></h4></span>
     </section>
     
       <section class="child">
         <h4  class="paddingr" >Email:</h4><span><h4 class="someestyle"><?php echo $arr['Email'];?></h4></span>
         <br>
            <h4 class="paddingr">Phone:</h4><span><h4 class="someestyle"><?php echo $arr['PhoneNumber'];?></h4></span>
            <br>
               <h4 class="paddingr">Lives in:</h4><span><h4 class="someestyle"><?php echo $arr['City'];?></h4></span>
       </section>
     </section>
          <br>
     <br>
         <br>
     <br>
     <h2>Education</h2>
    <hr>
         <h4 class="ij" >Graduation:</h4><span><h4 class="someestyle"><?php echo $arr['Graduation']." in ".$arr['Specialisation'];?></h4></span>
      <br>
      <h4  class="kl">Pass Out:</h4><span><h4 class="someestyle"><?php echo $arr['GraduationYear'];?></h4></span>
      <br>
      <h4  class="mn">College/University:</h4><span><h4 class="someestyle"><?php echo $arr['University'];?></h4></span>
            <br>
     <br>
          <br>
     <br>
     <h2>Skills</h2>
    <hr>
     <h4 class="z" >Primary:</h4><span><h4  class="someestyle"><?php echo $arr['Primaryy']." in ".$arr['Specialisation'];?></h4></span>
      <br>
      <h4 class="y">Secondary:</h4><h4  class="someestyle"><?php echo $arr['Secondary'];?></h4></span>
      <br>
      <h4 class="x" >Certification:</h4><h4  class="someestyle"><?php echo $arr['Certifications'];?></h4></span>
             <br>
     <br>
          <br>
     <br>
     <h2><?php echo $arr['FirstName']."' Pitch"?></h2>
    <hr >
    <div class="brief">
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

<?php

}

?>