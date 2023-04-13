<?php
       $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);


 $id = $_POST['id'];
 $progressList = array();
 $counter = 0;
 
 $query = "select *from progress where p_id = '$id' ";
 $result = mysqli_query($connect, $query);
 
 while($row = mysqli_fetch_assoc($result))
 {
      $p = new Progress($row['id'], $row['p_id'], $row['image'], $row['detail']);
      $progressList[$counter] = $p;
      $counter++;
      
 }
 
 print(json_encode($progressList));
 
 
 class Progress
 {
       public $id, $p_id, $image, $detail;
       
       function __construct($id, $p_id, $image, $detail)
       {
             $this->id = $id;
             $this->p_id = $p_id;
             $this->image = $image;
             $this->detail = $detail;
       }
 }

















?>