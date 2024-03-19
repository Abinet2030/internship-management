<?php
    // $db_host="localhost";
    // $db_user="user";
    // $db_password="user2509";
    // $db_name="IMS_WCU";
    //$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
    $con=mysqli_connect("localhost","root","","ims_wcs");
    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
?>