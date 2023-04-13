<?php 
session_start();
error_reporting(1);

?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>
<?php include('./constant/layout/connect.php');?>

<?php 


$lowStockSql = "SELECT * FROM product WHERE status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$lowStockSql1 = "SELECT * FROM brands WHERE brand_status = 1";
$lowStockQuery1 = $connect->query($lowStockSql1);
$countLowStock1 = $lowStockQuery1->num_rows;

$lowStockSql2 = "SELECT * FROM orders WHERE delete_status = 0";
$lowStockQuery2 = $connect->query($lowStockSql2);
$countLowStock2 = $lowStockQuery2->num_rows;


$totalSupplier = "select count(id) as totalSupplier from supplier";
$supplierResult = mysqli_query($connect, $totalSupplier);
$supplierRow = mysqli_fetch_assoc($supplierResult);


$totalProject = "select count(id) as totalProject from project";
$projectResult = mysqli_query($connect, $totalProject);
$projectRow = mysqli_fetch_assoc($projectResult);

$sumOfExpense = "select sum(amount) as totalExpense from expenses";
$expenseResult = mysqli_query($connect, $sumOfExpense);
$expenseRow = mysqli_fetch_assoc($expenseResult);


$totalClients = "select count(id) as totalClient from client";
$clientResult = mysqli_query($connect, $totalClients);
$clientRow = mysqli_fetch_assoc($clientResult);


$totalEmployee = "select count(id) as totalEmployee from employee";
$employeeResult = mysqli_query($connect, $totalEmployee);
$employeeRow = mysqli_fetch_assoc($employeeResult);


$totalCategory = "select count(categories_id) as totalCategory from categories ";
$categoriesResult = mysqli_query($connect, $totalCategory);
$categoryRow = mysqli_fetch_assoc($categoriesResult);

$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        
        <div class="page-wrapper">
          
          <!--   <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                     
            <div class="text-center"><h3 style="color:black;"><p style="color:black;"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></h3></div>
                    </div>
                
            </div> -->
            
            
            <div class="container-fluid">
                
                
        

                      <div class="row">
                    
                <div class="col-md-3">
                       <div class="card p-48" style="background: #626ed4">
                           <div class="media widget-ten">
                               <div class="media-left meida media-middle">
                                   <span><i class="ti-agenda f-s-50"></i></span>
                               </div>
                               <div class="media-body media-text-right">
                                
                           
                                   <h2 class="color-white f-s-30"><?php echo $countLowStock; ?></h2>
                                   <a><p class="m-b-0" >Total Material/Services</p></a>
                               </div>
                           </div>
                       </div>
                   </div> 
                   
                    <div class="col-md-3">
                        <div class="card p-48" style="background: #626ed4">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-widget f-s-50 color-white"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white f-s-30"><?php echo $countLowStock1; ?></h2>
                                     <a><p class="m-b-0">Total Company</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       
                                       
                  <!-- <div class="col-md-3">-->
                  <!--    <div class="card p-48" style="background-color:#626ed4">-->
                  <!--        <div class="media widget-ten">-->
                  <!--            <div class="media-left meida media-middle">-->
                  <!--                <span><i class="ti-vector f-s-50 color-white"></i></span>-->
                  <!--            </div>-->
                  <!--            <div class="media-body media-text-right">-->
                                  
                  <!--        <h2 class="color-white f-s-30"><?php echo $countLowStock2; ?></h2>-->
                  <!--                <a><p class="m-b-0">Total Utilization</p></a>-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--    </div>-->
                  <!--</div>-->
                  
                  
                     <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-truck f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $supplierRow['totalSupplier'];  ?></h2>
                                  <a><p class="m-b-0">Total Supplier</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  
                     <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-clipboard f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $projectRow['totalProject'];  ?></h2>
                                  <a><p class="m-b-0">Total Projects</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  
                     <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-shopping-cart-full f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $expenseRow['totalExpense']; ?></h2>
                                  <a><p class="m-b-0">Total Expenses</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <!-- Total Clients -->
                    <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-user f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $clientRow['totalClient']; ?></h2>
                                  <a><p class="m-b-0">Total Clients</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                    <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-medall f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $employeeRow['totalEmployee']; ?></h2>
                                  <a><p class="m-b-0">Total Employee</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  
                  
                    <div class="col-md-3">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-layout-menu-v f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $categoryRow['totalCategory']; ?></h2>
                                  <a><p class="m-b-0">Total Categories</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                                 
                     
                   
                  
     <div class="col-md-12">
<div class="card">
                            <div class="card-header">
                                <strong class="card-title">User Wise Utilization</strong>
                                
                                <div class="table-responsive m-t-40">
                                                    <table id="myTable" class="table table-bordered ">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Reciept No</th>
                                               <th>Utilization Date</th>
                                               <th>Project Name</th>
                                               <th>Project Manager</th>
                                                <th>Client Name</th>
                                                 <th>Contact</th>
                                                 <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                 <?php 
include('./constant/connect.php');
 $user=$_SESSION['userId'];
$s = "select orders.id, orders.uno, orders.orderDate,orders.paymentStatus, 
        client.mobile, orders.totalAmount, orders.paid, orders.paymentType, 
        orders.project_id, project.projectname, project.pmanager, client.name from orders
        inner JOIN project on project.id = orders.project_id inner JOIN client on  client.id = project.client_id";
$result = mysqli_query($connect, $s);

foreach ($result as $row) {
     
$no+=1;
    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['uno']; ?> </td>
                                            <td><?php echo $row['orderDate'] ?></td>
                                            <td><?php echo $row['projectname']; ?> </td>
                                            <td><?php echo $row['pmanager']; ?> </td>
                                             <td><?php echo $row['name'] ?></td>
                                              <td><?php echo $row['mobile'] ?></td>
                                              
                                             
                                               
                                            <td><?php  if($row['paymentStatus']==1)
                                            {
                                                 
                                                 $paymentStatus = "<label class='label label-success' ><h4>Full Payment</h4></label>";
                                                 echo $paymentStatus;
                                            }
                                            else if($row['payment_status']==2){
                                                $paymentStatus = "<label class='label label-danger'><h4>Advance Payment</h4></label>";
                                                echo $paymentStatus;
                                            }else {
                                                $paymentStatus = "<label class='label label-warning'><h4>No Payment</h4></label>";
                                                 echo $paymentStatus;
                                                } // /els
                                            ?></td>
                                            <td>
            
                                               
                                              

             
                                                <a href="php_action/removeOrder.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>

                                                <a href="invoiceprint.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-xs btn-success" ><i class="fa fa-print"></i></button></a>
                                           
                                                
                                                </td>
                                        </tr>
                                     
                                    </tbody>
                                   <?php    
}

?>
                               </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                </div>
        </div>
    </div>
            <?php include ('./constant/layout/footer.php');?>
 