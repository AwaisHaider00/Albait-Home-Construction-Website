<?php
    $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);

    $msg="";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="select *from supplier where id='$id'";
        $res=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($res);
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        
        
        $query="update supplier set name='$name',email='$email',contact='$contact',address='$address' where id='$id'";
        $result = mysqli_query($connect,$query);
        if($result)
        {
            $msg="update successful";
        }
        else
        {
            $msg="update failed ".mysqli_error($connect);
        }
        
    }
?>

<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Supplier</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Supplier</li>
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
                                                <label class="col-sm-3 control-label"> Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="name"  class="form-control"id="brandName" placeholder=" Supplier Name" value="<?php echo $row['name']?>"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" name="email"  class="form-control"id="brandName" placeholder="Supplier email"  required="" value="<?php echo $row['email']?>"  pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Contact</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="contact"  class="form-control"id="brandName" placeholder="Supplier contact number"   required="" value="<?php echo $row['contact']?>" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="address"  class="form-control"id="brandName" placeholder="Supplier Address"   required="" value="<?php echo $row['address']?>" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        


                                        <button type="submit" name="submit" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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


