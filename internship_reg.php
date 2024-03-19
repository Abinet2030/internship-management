<!DOCTYPE html>
<html>
    <head>

        </head>
<?php
include('db.php');
if(isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$category=$_POST['category'];
$nameOfCompany=$_POST['nameOfCompany'];
$applicationDate=$_POST['applicationDate'];
$place=$_POST['place'];
$dateOfBirth=$_POST['dateOfBirth'];
$dipartment=$_POST['dipartment'];
$applicationLatter=$_POST['applicationLatter'];
$sql="INSERT INTO internship_register1 (id,firstname,lastname,category,nameOfCompany,applicationDate, place
      ,dateOfBirth,dipartment,applicationLatter
     ) VALUES('$id','$firstname','$lastname','$category','$nameOfCompany','$applicationDate','$place','$dateOfBirth','$dipartment','$applicationLatter')";


$query=mysqli_query($con,$sql);
if ($query) {

   header("Location: internshipsR.php"); 
}
else {
  echo'<script href="#"> alert("Internships not added successfully")</script>';
}
}
?>
    <body>

 
    </body>
    </html> 
