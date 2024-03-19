<html>
	<head>
	<!-- <link href="../CSS/TableStyling.css" type="text/css" rel="stylesheet">  -->
	<style>
		h2{
			color:#2ca089;
			font-size: 50px;
			text-align:center;
		}
		p{
			text-align:center;
		}
		button{
			height:30px;
			width:150px;
			border:none;
			border-radius:10px;
		}
		#qw{
			text-align:center;
		}
		.btn_del{
			background:red;
		}
		.btn_del1{
			background:green;
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
	</head>
	<body>
	<div id="navbar">
      <a href="home1.php">Home</a>
      <a class="active" href="profile.php">Profile</a>
      <a href="internshipsR.php">Internships</a>
      <!-- <a href="../Department/department.php">Department </a> -->
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
  <?php
  session_start();?>
<?php 
	include('../db/db.php');
	error_reporting(0);
	
?>
<body>
	<div id="delete">
			<h2>Delete Account</h2>
			<p >You won't be able to access your account after deletion. Do you really want to delete your account?</p>
			<br><br><br>
				<form method="post" action="" >
					<div id="qw">
		    	<button class="btn_del" type="submit" name="yes">Yes, I do</button>
		    	<button class="btn_del1" type="submit" name="no">No, I don't</button>
	                </div>
				</form> 
			</div>
<?php
	//$Name = $_SESSION['firstname'];
	$firstName = $_POST['firstName'];
	if(isset($_POST['yes'])){
		$ip = getIp();
		$delete_student = "DELETE FROM user WHERE firstName ='$_REQUEST[firstName]'";
		$run_delete = $db->query($con,$delete_student);
		echo "<script>alert('Your account has been deleted successfully!')</script>";
		echo "<script>window.open('profile.php', '_self')</script>";
	}
	if(isset($_POST['no'])){
		echo "<script>alert('We are glad you are with us!')</script>";
		echo "<script>window.open('profile.php', '_self')</script>";
	}
	
?>

</body>
</html>