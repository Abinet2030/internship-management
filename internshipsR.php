<!DOCTYPE html>
<html>
  <head>
    <style>
      h2{
        font-style:italic;
        font-size:40px;
        font-weight:bold;
      }
      table{
    border-collapse: collapse;
    width:100%;
}
th, td{
    text-align: left;
    padding:8px;
}
tr:nth-child(even){
    background-color: white;
}
th{
    background-color: #2ca089;
    color:white;
}
button{
  background-color:#2ca089;
  height:40px;
  width:150px;
  border:none;
  border-radius:10px;
  float:right;
  margin:30px;
}
button a{
  color:white
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
      <a href="profile.php">Profile</a>
      <a class="active" href="internshipsR.php">Internships</a>
      <!-- <a href="../Department/department.php">Department </a> -->
      <a href="logout.php">Logout</a>
      <a href="contact.html">Contact Us</a>
  </div>
    <h2>Internship Registrations </h2>
    <?php
    include('db.php');
    $sql="SELECT * FROM internship_register1";

    $response=mysqli_query($con,$sql);
      if($response){
        echo'<table>
            <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Name of company</th>
            <th>application date</th>
            <th>Department</th>
            <th>Application Letter</th>
            </tr>';

            while($row=mysqli_fetch_array($response)){
              echo'<tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['firstname'].'</td>
                  <td>'.$row['lastname'].'</td>
                  <td>'.$row['nameOfCompany'].'</td>
                  <td>'.$row['applicationDate'].'</td>
                  <td>'.$row['dipartment'].'</td>
                  <td>'.$row['applicationLatter'].'</td>
                  </tr>';
            }
            echo'</table>';
      }
      else{
        echo"could not get a response from the database".mysqli_error($con);
      }
      mysqli_close($con);
    ?>
     <button> <a href="internship_register.php"> Register for Internship </a> </button>
     <!-- <button> <a href="#"> Edit Internship </a> </button> -->
</body>
</html>
