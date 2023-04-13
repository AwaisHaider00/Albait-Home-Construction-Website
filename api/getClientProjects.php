<?php
$localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);


 $projectList = array();
 $counter = 0;

 $email = $_POST['email'];
 
 $clientQuery = "select *from client where email = '$email' ";
 $clientResult = mysqli_query($connect, $clientQuery);
 $clientRow = mysqli_fetch_assoc($clientResult);
 
 $clientId = $clientRow['id'];
 
 $projectQuery = "select *from project where client_id = '$clientId' ";
 $projectResult = mysqli_query($connect, $projectQuery);
 

 while($row = mysqli_fetch_assoc($projectResult))
 {
     $p = new Project($row['id'], $row['projectname'], $row['address'], $row['pmanager'], $row['date1'], $row['deadline']);
     $projectList[$counter] = $p;
     $counter++;
 }
 
 print(json_encode($projectList));
 
 
 class Project
 {
      public $id, $projectname, $address, $pmanager, $date1, $deadline;
      
      function __construct($id, $projectname, $address, $pmanager, $date1, $deadline)
      {
           $this->id = $id;
           $this->projectname = $projectname;
           $this->address = $address;
           $this->pmanager = $pmanager;
           $this->date1 = $date1;
           $this->deadline = $deadline;
      }
 }











?>