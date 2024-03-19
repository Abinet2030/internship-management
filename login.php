<?php 
     header('X-Frame-Options:"SAMEORIGIN"'); 
     header('X-Content-Type-Options: nosniff');
     header('X-XSS-Protection:"1; mode=block"');
    //  header('x-powered-by: ZendServer 8.5.0,ASP.NET');
    header('x-powered-by: unset X-Powered-By');
?>
<?php
error_reporting(0);
$fname="";
$password="";
$err="";
// //database connection
 
//$conn= mysqli_connect("localhost","root","","stud_db");
include('db.php');
$fname=$_POST['username'];
$password=$_POST['password'];
 if(isset($_POST['LOGIN']))
   {
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
      
    $sql="select * from user where firstname='$fname'  and password='$password'";
    $result=mysqli_query($con,$sql);

     if(mysqli_num_rows($result)>0){
         header('location:home1.php'); 
     }
     else {
        echo'<script href="#"> alert("Incorrect user information")</script>';
      }
      echo "<a><script>history.go(-1)</script>Click here to go back </a>";
    //  else{
    //            $err="username or password incorrect";
    //        }
    //validation

    if(empty($fname))
    {
        $err="username is required";
    }else if(empty($password)){
        $err="password is required";

    }else if(mysqli_num_rows($result>0)){
        header('location:home.php');
    }else{
        $err="username or password incorrect";
    }
}
   
   ?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login_style.css">
    <!-- <link rel="stylesheet" href="../CSS/loginas.css"> -->
</head>
<body>
<nav class="link">
        <a href="/IMS/index.php">Back to Home</a>
        </nav>
        <h1>Student Login page</h1>
    <div class="box">
        <h2>Login</h2>
        <div class="err">
            <?php echo$err;?>
</div>
        <form action="login.php"method="post">
            <input type="text" name="fname" id="" placeholder="enter your name ">
            <input type="password" name="password" id="" placeholder="enter password">
            <input type="submit" value="LOGIN" name="LOGIN">
            Not yet a member? <a href="signup.php" style="color:#ffc107;">SIGNUP</a>
            
        </form>
</div>
</body>
</html>

