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
    
   
        $query="delete from expenses where id='$id'";
        $res=mysqli_query($connect,$query);
        if($res)
        {
            header("location:view_expenses.php");
        }
        else
        {
            header("location:index.php");
        }
    
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
                    <h3 class="text-primary"> View Expenses</h3> </div>
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
                              
                            <a href="add-expenses.php"><button class="btn btn-primary">Add Expenses</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                         <th>id</th>
                                         <th>Name</th>
                                         <th>Amount</th>                           
                                         <th>Time</th>
                                         <th>Date</th>
                                         <th>status</th>
                                         <th>Operation</th>
                                                
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                       $query="select *from expenses";
                                       $result=mysqli_query($connect,$query);
                                       while($row=mysqli_fetch_assoc($result))
                                       {
                                           $id=$row['id'];
                                           ?>
                                            <tr>
                                            <td><span class="name"></span><?php echo $row['id'] ?></td>
                                            <td><span class="name"></span><?php echo $row['name'] ?></td>
                                            <td><span class="name"></span><?php echo $row['amount'] ?></td>
                                            <td><span class="name"></span><?php echo $row['time'] ?></td>
                                            <td><span class="name"></span><?php echo $row['date'] ?></td>
                                            <td><span class="name"></span><?php echo $row['status'] ?></td>
                                            <td>
                                            <a href="editexpenses.php?id=<?php echo $id?>"><span class="btn btn-success">edit</span></a>   
                                            <a href="?d_id=<?php echo $id?>"><span class="btn btn-danger">delete</span></a>
                                                
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


