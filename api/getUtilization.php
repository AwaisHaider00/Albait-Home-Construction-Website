<?php
       $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);


 $id = $_POST['id'];
 $utilizationList = array();
 $counter = 0;
 
 $query = "select orders.id, orders.uno, orders.orderDate, orders.subTotal, orders.totalAmount, 
          orders.discount, orders.grandTotalValue, orders.gstn, orders.paid, orders.dueValue, 
          orders.paymentType, orders.paymentStatus, orders.paymentPlace, orders.project_id, 
          project.projectname, project.address, project.pmanager, project.date1, project.deadline,
          order_item.productName, order_item.quantity, order_item.rate, order_item.total, product.product_name from orders
          INNER JOIN project on project.id = orders.project_id INNER JOIN order_item on order_item.lastid = orders.id
          INNER JOIN product on product.product_id = order_item.productName where project.id = '$id' ";
 

 $result = mysqli_query($connect, $query);
 
 while($row= mysqli_fetch_assoc($result))
 {
       $u = new Utilization($row['id'], $row['uno'], $row['orderDate'], $row['subTotal'], $row['totalAmount'], $row['discount'],
        $row['grandTotalValue'], $row['gstn'], $row['paid'], $row['dueValue'], $row['paymentType'], $row['paymentStatus'],
        $row['paymentPlace'], $row['project_id'], $row['projectname'], $row['address'], $row['pmanager'], $row['date1'],
        $row['deadline'], $row['quantity'], $row['rate'], $row['total'], $row['product_name']);
        
        $utilizationList[$counter] = $u;
        $counter++;
 }
 
 print(json_encode($utilizationList));
 
 class Utilization
 {
     public $id, $uno, $orderDate, $subTotal, $totalAmount, $discount, $grandTotalValue, $gstn, $paid, $dueValue, 
     $paymentType, $paymentStatus, $paymentPlace, $project_id, $projectname, $address, $pmanager, $date1, $deadline, $quantity, 
     $rate, $total, $product_name;
     function __construct($id, $uno, $orderDate, $subTotal, $totalAmount, $discount, $grandTotalValue, $gstn, $paid, $dueValue, 
     $paymentType, $paymentStatus, $paymentPlace, $project_id, $projectname, $address, $pmanager, $date1, $deadline,$quantity, 
     $rate, $total, $product_name)
     {
         $this->quantity = $quantity;
         $this->rate = $rate;
         $this->total = $total;
         $this->product_name = $product_name;
         $this->id = $id;
         $this->uno = $uno;
         $this->orderDate = $orderDate;
         $this->subTotal = $subTotal;
         $this->totalAmount = $totalAmount;
         $this->discount = $discount;
         $this->grandTotalValue = $grandTotalValue;
         $this->gstn = $gstn;
         $this->paid = $paid;
         $this->dueValue = $dueValue;
         $this->paymentType = $paymentType;
         $this->paymentStatus = $paymentStatus;
         $this->paymentPlace = $paymentPlace;
         $this->project_id = $project_id;
         $this->projectname = $projectname;
         $this->address = $address;
         $this->pmanager = $pmanager;
         $this->date1 = $date1;
         $this->deadline = $deadline;
     }
 }

?>