<?php

     $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);

  
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query = "select *from client where email = '$email' and password = '$password' and status='1'";
  $result = mysqli_query($connect, $query);
  
  if(mysqli_num_rows($result) > 0)
  {
    print(json_encode("success"));   
  }
  else 
  {
       print(json_encode("failed"));
  }
  
  
  
  
  
  
  
?>