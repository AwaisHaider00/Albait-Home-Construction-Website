<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $uno= $_POST['uno'];
  //echo $productName ;exit;
  $orderDate 	= $_POST['orderDate'];
  $projectId 		= $_POST['project_id'];
 
  $subTotal 		= $_POST['subTotalValue'];
  $totalAmount 	= $_POST['totalAmountValue'];
  //$productStatus 	= $_POST['productStatus'];
  $discount 	= $_POST['discount'];
  $grandTotalValue 	= $_POST['grandTotalValue'];
  $gstn 	= $_POST['gstn'];
  $paid 	= $_POST['paid'];
  $dueValue 	= $_POST['dueValue'];

  $paymentType 	= $_POST['paymentType'];
  $paymentStatus 	= $_POST['paymentStatus'];
  $paymentPlace 	= $_POST['paymentPlace'];
	//$type = explode('.', $_FILES['productImage']['name']);
	
	
				$sql = "INSERT INTO orders (uno, orderDate, subTotal, totalAmount, discount, grandTotalValue, gstn, paid, dueValue, paymentType, paymentStatus, paymentPlace, project_id) 
				VALUES ('$uno', '$orderDate', '$subTotal', '$totalAmount', '$discount', '$grandTotalValue', '$gstn', '$paid', '$dueValue', '$paymentType', '$paymentStatus', '$paymentPlace', '$projectId')";
//echo $sql;exit;
				if($connect->query($sql) === TRUE) {

					$lastid = mysqli_insert_id($connect);
					$checkbox1 =count($_POST['productName']);
	 //print_r ($checkbox1);exit;
for ($i=0; $i<($checkbox1);$i++) {extract($_POST);

					$sql1 = "INSERT INTO order_item (productName, quantity,rate,total,lastid) 
				VALUES ('$productName[$i]', '$quantity[$i]', '$rateValue[$i]', '$totalValue[$i]','$lastid')";
				//echo $sql1;exit;
if($connect->query($sql1) === TRUE) {
					//echo $lastid;exit;
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					?>
					  <script> window.location.href="https://www.jafasa.com/baithome/Order.php"; </script>
					<?php
					header('location:../Order.php');	
				} }}
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members ".mysqli_error($connect);
					header('location:../add-order.php');
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST