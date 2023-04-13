<?php

 $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);


 $totalGrandValue = 0;
 $totalDiscount = 0;
 $totalGSTN = 0;
 $totalDueValue = 0;
 
 $project_id = $_POST['id'];
 
 $totalCostList = [];
 $query = "select orders.grandTotalValue,
          orders.discount, orders.gstn,
           orders.dueValue from orders
           where orders.project_id = '$project_id' ";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_assoc($result))
 {
     $totalGrandValue = $totalGrandValue + $row['grandTotalValue'];
     $totalDiscount = $totalDiscount + $row['discount'];
     $totalGSTN = $totalGSTN + $row['gstn'];
     $totalDueValue = $totalDueValue + $row['dueValue'];
    
    
     
      
 }
  $totalCost = new TotalCost($totalGrandValue, $totalDiscount, $totalGSTN, $totalDueValue);
  
  $totalCostList[0] = $totalCost;
  print(json_encode($totalCostList));
     
 
 class TotalCost
 {
      public $totalGrandValue, $totalDiscount, $totalGSTN, $totalDueValue;
      
      function __construct($totalGrandValue, $totalDiscount, $totalGSTN, $totalDueValue)
      {
           $this->totalGrandValue = $totalGrandValue;
           $this->totalDiscount = $totalDiscount;
           $this->totalGSTN = $totalGSTN;
           $this->totalDueValue = $totalDueValue;
      }
 }
 






?>