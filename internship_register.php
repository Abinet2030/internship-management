<!DOCTYPE html>
<html>
    <head>
        <style>
            h2{
        font-style:italic;
        font-size:40px;
        font-weight:bold;
        color: #2ca089;
      }
    input[type=text],input[type=number],select{
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
button{
  background-color:#2ca089;
  height:40px;
  width:150px;
  border:none;
  border-radius:10px;
  float:left;
  margin-left:385px;
  margin-top:-40px;
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
      <script>
              function validate(){
                  var id= document.internForm.id.value;
                  var firstname= document.internForm.firstname.value;
                  var lastname= document.internForm.lastname.value;
                  var category= document.internForm.category.value;
                  var nameOfCompany= document.internForm.nameOfCompany.value;
                  var applicationDate= document.internForm.applicationDate.value;
                  var place= document.internForm.place.value;
                  var dateOfBirth= document.internForm.dateOfBirth.value;
                  var dipartment= document.internForm.dipartment.value;
                  var applicationLatter= document.internForm.applicationLatter.value;
              
                  if(id==|| id==""){
                      alert("id can not be blank")
                  }
                }
        </script>
    
    </head>
     <body>
     <div id="navbar">
      <a href="home1.php">Home</a>
      <a href="profile.php">Profile</a>
      <a class="active" href="internshipsR.php">Internships</a>
      <!-- <a href="../Department/department.php">Department </a> -->
      <a href="logout.php">Logout</a>
      <a href="">Contact Us</a>
  </div>
        <h2>Register for Internship </h2>
        <form name="internForm" action="internship_reg.php" method="post" onsubmit="validate()">
        <!-- <h3>Add internship</h3> -->
        <button> <a href="internshipsR.php"> View Internship </a> </button>
            <label for="id">ID</label><br>
            <input type="text" id="id" name="id"><br>

            <label for="firstname">first name</label><br>
            <input type="text" id="firstname" name="firstname"> <br>

            <label for="lastname">last name</label> <br>
            <input type="text" id="lastname" name="lastname"> <br>

            <label for="category">category</label> <br>
            <input type="text" id="category" name="category"> <br>

            <label for="nameOfCompany">Name Of Company</label><br>
            <input type="text" id="nameOfCompany" name="nameOfCompany"> <br>

            <label for="applicationDate">application Date</label><br>
            <input type="date" id="applicationDate" name="applicationDate"> <br>

            <label for="place">Place</label><br>
            <input type="text" id="place" name="place"> <br>
            
            <label for="dateOfBirth">dateOfBirth</label><br>
            <input type="date" id="dateOfBirth" name="dateOfBirth"> <br>
         
            <label for="dipartment">Department</label><br>
            <input type="text" id="dipartment" name="dipartment"> <br>

            <label for="applicationLatter">Application Letter</label><br>
            <input type="text" id="applicationLatter" name="applicationLatter"> <br>

            <input type="submit" name="submit" value="REGISTER">
        </form>
        
    </body> 