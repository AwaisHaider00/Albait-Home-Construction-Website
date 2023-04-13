<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


<?php include('./constant/connect');
 $user=$_SESSION['userId'];
 $id = $_GET['id'];
 
 $itemQuery = "select product.product_name, brands.brand_name,
 order_item.productName, order_item.quantity, order_item.rate from order_item
 INNER JOIN product on product.product_id = order_item.productName
 INNER JOIN brands on brands.brand_id = product.brand_id where order_item.lastid = '$id' ";
 
 
 $itemResult = mysqli_query($connect, $itemQuery);
 $itemRow = mysqli_fetch_assoc($itemResult);
$sql = "select orders.id,
        orders.uno,
        orders.orderDate,
        orders.paymentStatus,
        client.mobile,
        orders.totalAmount,
        orders.paid,
        orders.paymentType,
        orders.project_id,
        orders.subTotal,
        orders.discount,
        orders.grandTotalValue,
        orders.gstn,
        orders.paid,
        orders.dueValue,
        project.projectname,
        project.pmanager,
        client.name from orders inner JOIN project on project.id = orders.project_id inner JOIN client on client.id = project.client_id where orders.id = '$id' ";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);

//echo $sql;exit;

    //echo $itemCountRow;exit; 
?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Expenses Detail</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Expenses Detail</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                           
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered" style="width:60%; margin:auto">
                                   
                                     <tr>
                                         <td style="text-align:center" colspan="2">UNO : <?php echo $row['uno']; ?> </td>
                                         
                                     </tr>
                                      <tr>
                                         <td style="text-align:center">Client Name</td>
                                         <td style="text-align:center"><?php echo $row['name']; ?> </td>
                                     </tr>
                                      <tr>
                                         <td style="text-align:center">Project</td>
                                         <td style="text-align:center"><?php echo $row['projectname']; ?> </td>
                                     </tr>
                                     <tr>
                                         <td style="text-align:center"> Project Manager </td>
                                         <td style="text-align:center"><?php echo $row['pmanager'] ;?> </td>
                                     </tr>
                                     <tr>
                                         <td style="text-align:center"> Product </td>
                                         <td style="text-align:center"><?php echo $itemRow['product_name'] ;?> </td>
                                     </tr>
                                      <tr>
                                         <td style="text-align:center"> Company </td>
                                         <td style="text-align:center"><?php echo $itemRow['brand_name'] ;?> </td>
                                     </tr>
                                      <tr>
                                         <td style="text-align:center"> Quantity </td>
                                         <td style="text-align:center"><?php echo $itemRow['quantity'] ;?> </td>
                                     </tr>
                                       <tr>
                                         <td style="text-align:center"> Sub Total </td>
                                         <td style="text-align:center"><?php echo $row['subTotal'] ;?> </td>
                                     </tr>
                                       <tr>
                                         <td style="text-align:center"> GSTN </td>
                                         <td style="text-align:center"><?php echo $row['gstn'] ;?> </td>
                                     </tr>
                                       <tr>
                                         <td style="text-align:center"> Discount </td>
                                         <td style="text-align:center; color:green"><?php echo $row['discount'] ;?> </td>
                                     </tr>
                                     
                                       <tr>
                                         <td style="text-align:center">Total Amount</td>
                                         <td style="text-align:center"><?php echo $row['totalAmount'] ;?> </td>
                                     </tr>
                                       <tr>
                                         <td style="text-align:center">Total Amount(After Discount) </td>
                                         <td style="text-align:center"><?php echo $row['grandTotalValue'] ;?> </td>
                                     </tr>
                                      <tr>
                                         <td style="text-align:center">Paid </td>
                                         <td style="text-align:center"><?php echo $row['paid'] ;?> </td>
                                     </tr>
                                      <tr>
                                         <td style="text-align:center">Remaining Dues </td>
                                         <td style="text-align:center; color:red"><?php echo $row['dueValue'] ;?> </td>
                                     </tr>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>

<?php include('./constant/layout/footer.php');?>


