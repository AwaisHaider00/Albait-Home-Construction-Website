<?php
$localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
if(isset($_GET['d_id']))
{
    $id=$_GET['d_id'];
    
   
        $query="delete from client where id='$id'";
        $res=mysqli_query($connect,$query);
        if($res)
        {
            header("location:manageClient.php");
        }
        else
        {
            header("location:index.php");
        }
    
}
 if(isset($_GET['type'])=='status'&&$_GET['operation']!="")
{
   $status = "";
   $a_id = $_GET['id'];
   if($_GET['operation']=='active')
   {
     $status = '0';
   }
   else
   {
     $status = '1';
   }
   $update_querys = "update client set status='$status' WHERE id = '$a_id'";
   mysqli_query($connect,$update_querys);
}
?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>
  
<?php include('./constant/connect');
// $sql = "SELECT product_id, product_name,product_image,rate,quantity,brand_id,categories_id,active,status FROM product WHERE status = 1";
// $result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Client</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Expenses</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-expenses.php"><button class="btn btn-primary">Add Client</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                         <th>id</th>
                                         <th>Name</th>
                                         <th>Email</th>                           
                                         <th>Contact</th>
                                         <th>CNIC</th>
                                         <th>Address</th>
                                         <th>Status</th>
                                         <th>Operation</th>
                                                
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                       $query="select *from client";
                                       $result=mysqli_query($connect,$query);
                                       while($row=mysqli_fetch_assoc($result))
                                       {
                                           $id=$row['id'];
                                           ?>
                                            <tr>
                                            <td><span class="name"></span><?php echo $row['id'] ?></td>
                                            <td><span class="name"></span><?php echo $row['name'] ?></td>
                                            <td><span class="name"></span><?php echo $row['email'] ?></td>
                                            <td><span class="name"></span><?php echo $row['mobile'] ?></td>
                                            <td><span class="name"></span><?php echo $row['cnic'] ?></td>
                                             <td><span class="name"></span><?php echo $row['address'] ?></td>
                                             <td><span class="badge me-1">
                           <?php 

                                       if($row['status']=='1')
                                       {
                                          echo "<a href='?type=status&operation=active&id=$id'> <p class='btn btn-primary btn-sm'>Active</p> </a>";
                                       }
                                       else
                                       {
                                         
                                          echo "<a href='?type=status&operation=deactive&id=$id' > <p class='btn btn-danger btn-sm'>DEActive</p>  </a>";
                                       }

                                       ?>
                        </span></td>
                                            <td>
                                            <a href="edit_client.php?id=<?php echo $id?>"><span class="btn btn-success">Edit</span></a>   
                                            <a href="?d_id=<?php echo $id?>"><span class="btn btn-danger">Delete</span></a>
                                                
                                            </td>
                                            <?php
                                       }
    
                                ?>
                                       
                                            
                                          
                                        </tr>
                                      
                                    </tbody>
                             
                               </table>
                                </div>
                            </div>
                        </div>

<?php include('./constant/layout/footer.php');?>


