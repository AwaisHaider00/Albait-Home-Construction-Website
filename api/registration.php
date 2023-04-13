<?php

 $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);

      $name = $_POST['name'];
      $contact = $_POST['contact'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $insertQuery = "INSERT INTO client(name, mobile, address, cnic, email, status, password) 
                                  VALUES('$name','$contact','$address','14202-9875644-3','$email','1','$password')";
      $result = mysqli_query($connect,$insertQuery);
      if($result)
      {
          print(json_encode("Success"));
      }
      else
      {
          print(json_encode("Failed"));
      }
  
?>