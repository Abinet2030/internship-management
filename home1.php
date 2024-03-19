
<html>
    <head>
    <title>Student HomePage</title>
    <link href="../CSS/homePage.css" type="text/css" rel="stylesheet">
    <style>
         /*  *{
             font-family:Montserrat;
         } 
         h1{
             color:#2ca089;
         }
         div{
    float:left;
    padding: 100px; 
    margin-left:50px;
    border-radius:30px;
}
#left{
    border:1px solid rgb(0, 0, 0); 
    margin-top:50px;
    height:245px;
}

#left h1{
    margin-top: -60px;
    color:black;
    font-size:40px;
    
}
#left a{
    padding:20px;
    color:#2ca089;
    font-size: 20px;

}
#left a:hover{
    color:red;
}
#right{
    border: 1px solid black;
    margin-top:50px;
    color:white;
    
    height:240px;
    background-color:#2ca089;
}
#right h1{
    color:white;
    margin-top:-40px;
    font-size:40px;
}

#h11{
    font-size:60px;
} */
#right{
   border: 1px solid black;
   margin-top:50px;
   color:white;
   width:600px;
   height:200px;
   background-color:#2ca089;
}
#header{
    background-color: black;
    color: white;
    /* height: 100px; */
    /* font-size: 23px; */
    font-family:verdana;
    text-align: right;
    margin-top: 0px;
    padding-top: 0px;

  }
      #navbar ul{
         
        /* margin:10px; */
        margin-bottom: -200px;
        
        border-radius: 5px;
        text-align:left;
        padding: 10px;
        border-radius: 5px;
      }
      #navbar {

        /* display: inline; */
        text-align:right;
        margin-top:-70px;
      }

      #navbar a{
        color: black;
        padding: 10px;
        font-size: 19px;
        text-decoration: none;
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
    
    
     <link rel = "stylesheet" type = "text/css" href = "Admin_home.css"> 
     <link rel = "stylesheet" type = "text/css" href = "styles.css"> 
    </head>
    <body>
    <div id="navbar">
      <a class="active" href="home1.php">Home</a>
      <a href="profile.php">Profile</a>
      <a href="internshipsR.php">Internships</a>
      <!-- <a href="../Department/department.php">Department </a> -->
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
    <h1 id="h11">Student Dashboard</h1>
        <div id="left">
        <nav class="link">
            
            <a href="profile.php">Profile</a><br>
            <br>
            <a href="internshipsR.php">Registration</a><br>
            <br>
            <a href="../Admin/company.php">Company</a><br>
            <br>
             <a href="logout.php">logout</a><br>

        </nav>
        <br>
    </div>
        <div id="right">
        <?php
            echo"<h1>Welcome to the Student home page </h1>";
            echo"<p>The student has priviledge to view the internships, has responsiblity of managing profile <br>
            communicating with hiring companies and is responsible for communication with their department</p>";
        ?>
        <p>Students should communiacte with their department,<br>Click the button below to communicate departments</p>        <p id="hy"><a href="../Admin/company.php">Department</a></p> 
        </div>

    </body>
</html>
