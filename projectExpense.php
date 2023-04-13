<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


<?php include('./constant/connect');
 $user=$_SESSION['userId'];
 $id = $_GET['id'];
$sql = "select orders.id, orders.uno, orders.orderDate,orders.paymentStatus,
     client.mobile, orders.totalAmount, orders.paid, orders.paymentType, orders.project_id,
      project.projectname, project.pmanager, client.name from orders inner JOIN project on project.id = orders.project_id 
      inner JOIN client on  client.id = project.client_id where project.id = '$id'";
$result = $connect->query($sql);

//echo $sql;exit;

    //echo $itemCountRow;exit; 
?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Project Utilization</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Project Utilization</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-order.php?id=<?php echo $id; ?> "><button class="btn btn-primary">Add Utilization</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Reciept No</th>
                                               <th>Utilization Date</th>
                                               <th>Project Name</th>
                                               <th>Project Manager</th>
                                                <th>Client Name</th>
                                                 <th>Contact</th>
                                                 <th>Action</th>
                                               
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
     
$no+=1;
$id = $row['id'];
    ?>
                                        <tr>
                                            <td><?=$no; ?></td>
                                            <td><?php echo $row['uno']; ?> </td>
                                            <td><?php echo $row['orderDate'] ?></td>
                                            <td><?php echo $row['projectname']; ?> </td>
                                            <td><?php echo $row['pmanager']; ?> </td>
                                             <td><?php echo $row['name'] ?></td>
                                              <td><?php echo $row['mobile'] ?></td>
                                              
                                             
                                               
                                          
                                       <td>
                                            <a href="detailExpenses.php?id=<?php echo $id; ?> "> <button class="btn btn-primary btn-sm"> Detail</button></a>
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

<?php include('./constant/layout/footer.php');?>


