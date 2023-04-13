<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  
  //echo $productName ;exit;
  $client_id = $_POST['client_id'];
  $projectname 		= $_POST['projectname'];
  $address 			= $_POST['address'];
  $pmanager 		= $_POST['pmanager'];
  $date1 	= $_POST['date1'];
  //$productStatus 	= $_POST['productStatus'];
  $deadline 	= $_POST['deadline'];
	//$type = explode('.', $_FILES['productImage']['name']);
	
	
				$sql = "INSERT INTO project (client_id,  projectname, address, pmanager, date1, deadline) 
				VALUES ('$client_id','$projectname', '$address', '$pmanager', '$date1', '$deadline')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:view_project.php');
				
				} 
				else {
				    
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members ".mysqli_error($connect);
					?>
				
					
					<?php
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST