<?php
include('../db/db.php');
session_start();
$_SESSION["firstname"] = "user";
// $conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));

// if (count($_POST) > 0) {
//     $result = mysqli_query($con, "SELECT *from admin_login WHERE Name='" . $_SESSION["Name"] . "'");
//     $row = mysqli_fetch_array($result);
//     if ($_POST["currentPassword"] == $row["Password"]) {
//         mysqli_query($con, "UPDATE Admin_login set Password='" . $_POST["newPassword"] . "' WHERE Name='" . $_SESSION["Name"] . "'");
//         $message = "Password Changed successfully";
//         echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
//     }
//     } else{
//         $message ="Current Password is not correct";
//         echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
//         //the code below is written for validation
    
// }
if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT *from user WHERE firstname='" . $_SESSION["firstname"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($con, "UPDATE user set password='" . $_POST["newPassword"] . "' WHERE firstname='" . $_SESSION["firstname"] . "'");
        $message = "Password Changed successfully";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    } else{
        $message ="Current Password is not correct";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        //the code below is written for validation
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
<style>
    h3{
        font-size:40px;
        color:#2ca089;
    }
    input{
    width:40%;
    padding:12px 20px;
    margin: 8px 0;
    display: inline-block;
    border:1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
    width: 10%;
    background-color: #2ca089;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
input[type=submit]:hover{
    background-color: #2ca089;
}
*{
                margin-top:20px;
            }
            h2{
                text-align:right;
                margin-top:-40px;
                font-size:60px;
            }
         #navbar a{
        color: black;
        padding: 20px;
        font-size: 19px;
        text-decoration: none;
        margin-top: 0px;
		float:left;
      }
      #navbar a:hover {
        color: white;
        background-color: black;
        border-radius:8px;
      }
       .active {
        background-color: #2ca089;
        border-radius:8px;
        color: white;
        font-style: bold;
      }
    </style> 
    <?php 
   echo'
    <script type="text/javascript">
    function validate(){
   var x = document.getElementById("currentPassword").value;
   var y = document.getElementById("newPassword").value;
   var z = document.getElementById("confirmPassword").value;
   if(x==""){
       alert("please enter the correct current password");

   }
   if(y==""){
       alert("please enter new password");
   }
   if(z==""){
       alert("please retype the new password correctly");
   }
   if(z!=y){
       alert("new passwords does not match");
   }
}</script>';
?>
    <?php echo "<script> validate(); </script>"; ?>
</head>
<body>
<div id="navbar">
      <a href="home1.php">Home</a>
      <a class="active" href="profile.php">Profile</a>
      <a href="internship_register.php">Internships</a>
      <a href="">Department </a>
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php //if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit" name="submit" value="Change Password">
</form>
<br>
<br>
</body>
</html>