<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $productName 		= $_POST['productName'];
  //echo $productName ;exit;
  $productImage 	= $_POST['productImage'];
  $quantity 		= $_POST['quantity'];
  $rate 			= $_POST['rate'];
  $brandName 		= $_POST['brandName'];
  $categoryName 	= $_POST['categoryName'];
  $supplier_id = $_POST['supplier_id'];
  $productStatus 	= $_POST['productStatus'];
	//$type = explode('.', $_FILES['productImage']['name']);
	$image = $_FILES['productImage']['name'];
$target = "../assets/myimages/".basename($image);

if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target)) {
 // @unlink("uploadImage/Profile/".$_POST['old_image']);
	//echo $_FILES['image']['tmp_name'];
	//cho $target;exit;
      $msg = "Image uploaded successfully";
      echo $msg;
    }else{
      $msg = "Failed to upload image";
      echo $msg;exit;
    }
	
				$sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, rate, active, supplier_id, status) 
				VALUES ('$productName', '$image', '$brandName', '$categoryName', '$quantity', '$rate', '$productStatus','$supplier_id', 1)";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:fetchProduct.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../add-product.php');
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST