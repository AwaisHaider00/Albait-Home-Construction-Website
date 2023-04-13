<?php
    $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
$get_id=$_GET['id'];

$querys="select *from client where id='$get_id'";
$rr=mysqli_query($connect,$querys);
$rows=mysqli_fetch_assoc($rr);
    $msg="";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $cnic = $_POST['cnic'];
        $password = $_POST['password'];
        $status = '1';
        
        
        $query =  "update client set name='$name',email='$email',mobile='$mobile',
        address='$address',cnic='$cnic',password='$password' where id='$get_id'";
        
        $result = mysqli_query($connect,$query);
        if($result)
        {
            $msg="Update Client";
            header('location:manageClient.php');
            
        }
        else
        {
            $msg="insertion failed ".mysqli_error($connect);
        }
        
    }
?>

<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Client</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Client</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="name"value="<?php echo($rows['name']); ?>"   class="form-control"id="brandName" placeholder="Client Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mobile</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="mobile" value="<?php echo($rows['mobile']); ?>"   class="form-control"id="brandName" placeholder="Client Mobile"  required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" name="email"value="<?php echo($rows['email']); ?>"   class="form-control"id="brandName" placeholder="Client Email"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                          <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" name="password" value="<?php echo($rows['password']); ?>"  class="form-control"id="brandName" placeholder="Client Password"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">CNIC </label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="cnic" value="<?php echo($rows['cnic']); ?>"  onKeyPress="if(this.value.length>13 && this.value.length < 13) return false;"  class="form-control"id="brandName" placeholder="Client Cnic"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="address" value="<?php echo($rows['address']); ?>"  class="form-control"id="brandName" placeholder="Client Address"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                        


                                        <button type="submit" name="submit" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                        <?php
                                        echo $msg;
                                        
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>


