<?php
    $localhost = "localhost";
$username = "jafasaco_baithome_user";
$password = "b]v[8BqcKSTp";
$dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);

    $msg="";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        
        
        $query="INSERT INTO supplier(name,email,contact,address,status)
                                VALUES('$name','$email','$contact','$address','1')";
        $result = mysqli_query($connect,$query);
        if($result)
        {
            $msg="Supplier is inserted";
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
                                                  <input type="text" name="name"  class="form-control"id="brandName" placeholder=" Supplier Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" name="email"  class="form-control"id="brandName" placeholder="Supplier email"  required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Contact</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="contact"  class="form-control"id="brandName" placeholder="Supplier contact number"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="address"  class="form-control"id="brandName" placeholder="Supplier Address"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
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


