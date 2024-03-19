<?php 
     header('X-Content-Type-Options: nosniff');
?>
<html>
    <?php
    error_reporting(0);
    include "db.php";
    ?>
    <head>
         <link rel="stylesheet" type = "text/css" href="CSS/Indexpage.css"/> 
    </head>
    <body>
        <!-- <nav id="link">
        <a href="#">Sign Up </a>
        <a href="#"> Login </a>
        </nav> -->
            <nav>
       <div id="logo"><a href="http://wcu.edu.et/"> <img src="CSS/logo.jfif" alt="" align="left" HSPACE="40"> </a></div>
        <div><h1>Internship management system for WCU</h1> </div>
        
        </nav>
        <div class="login">
            <div id="Admin">
                <a href="Admin/Admin_login.php"><img src="CSS/Admin.png" alt=""> </a>
                <p class="pwrite">Admin Login</p>
            </div>
            <div id="Department">
            <a href="Department/Dept_login.php"><img src="CSS/department.jpg" alt=""> </a>
            <p class="pwrite">Department Login</p>
            </div>
            <div id="Student">
            <a href="student/login.php"><img src="CSS/Student.png" alt=""> </a>
            <p class="pwrite">Student Login</p>
            </div>
        </div>
    </body>
</html>