<?php 
     header('X-Frame-Options:"SAMEORIGIN"'); 
     header('X-Content-Type-Options: nosniff');
     header('X-XSS-Protection:"1; mode=block"');
    //  header('x-powered-by: ZendServer 8.5.0,ASP.NET');
    header('x-powered-by: unset X-Powered-By');
?>
<?php
include('db.php');
error_reporting(0);
$fname="";
$lname="";
$email="";
$sex="";
$pass1="";
$pass2="";
$err=array();
$congra="";
//database conection

//$conn=mysqli_connect("localhost","root","","stud_db");
if(isset($_POST['SIGNUP'])){
    $fname="";
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$sex=mysqli_real_escape_string($con,$_POST['sex']);
$pass1=mysqli_real_escape_string($con,$_POST['pass1']);
$pass2=mysqli_real_escape_string($con,$_POST['pass2']);

//validation
if($pass1!=$pass2)
{
   array_push($err,"the two password is not match!");   
}
$user_check_query="select *from user where firstname='$fname'or email='$email' limit 1";
$result=mysqli_query($con,$user_check_query);
$user=mysqli_fetch_assoc($result);

if($user['firstname']===$fname){
    array_push($err,"user name already exist!"); 
}

else if($user['email']===$email){
    array_push($err,"Email is already esist!");
}

//finall registeration
if (count($err)===0){
    $query="insert into user(firstname,lastname,sex,email,password)values('$fname','$lname','$sex','$email','$pass1')";
    mysqli_query($con,$query);
    $congra="you are successfuly registerd please login!";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <!-- <link rel="stylesheet" href="signup_style.css"> -->
    <link rel="stylesheet" href="../CSS/signup_style.css">
</head>
<body>
    <h1>Students registration page</h1>
    <div class="box2">
        <h1>signup Here</h1>
        <div class="err">
           
        
</div>

        <form action="signup.php"method="post">
            <input type="text" name="fname" id="" placeholder="enter first name " required>
            <input type="text" name="lname" id="" placeholder="enter last name " required>
            <input type="email" name="email" id="" placeholder="enter email " required>
            <label >sex</label>
            <input type="radio" name="sex" id="" value="male" required>male 
            <input type="radio" name="sex" id="" value="female" required>female 
            <input type="password" name="pass1" id="" placeholder="enter password"required>
            <input type="password" name="pass2" id="" placeholder="confirm password" required>

            <input type="submit" value="SIGNUP" name="SIGNUP">
            Already a member? <a href="login.php" style="color:#ffc107;">LOGIN</a>
            
        </form>
</div>
</body>
</html>
