<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php
//     $localhost = "localhost";
// $username = "jafasaco_baithome_user";
// $password = "b]v[8BqcKSTp";
// $dbname = "jafasaco_baithomes";
// //$store_url = "http://localhost/phpinventory/";
// // db connection
// $connect = new mysqli($localhost, $username, $password, $dbname);

    $msg="";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $amount=$_POST['amount'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $status=$_POST['status'];
        $project_id = $_POST['project_id'];
        $description = $_POST['description'];
        
        $query="INSERT INTO expenses(name,amount,time,date,status, project_id, description)
                                VALUES('$name','$amount','$time','$date','1', '$project_id', '$description')";
        $result = mysqli_query($connect,$query);
        if($result)
        {
            $msg="Expenses is inserted";
        }
        else
        {
            $msg="insertion failed ".mysqli_error($connect);
        }
        
    }
?>



 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Expenses</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Expenses</li>
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
                                                  <input type="text" name="name"  class="form-control"id="brandName" placeholder="Expenses Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Amount</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="amount"  class="form-control"id="brandName" placeholder="Expenses amount"  required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="time"  class="form-control"id="brandName" placeholder="Comapany Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Date</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="date"  class="form-control"id="brandName" placeholder="Comapany Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                         </div>
                                            <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Project</label>
                                                <div class="col-sm-9">
                                                 <select name="project_id" class="form-control">
                                                      <?php 
                                                       $pquery = "select *from project";
                                                       $presult = mysqli_query($connect, $pquery);
                                                       while($prow = mysqli_fetch_assoc($presult))
                                                       {
                                                          ?>
                                                         <option value="<?php echo $prow['id']; ?> "> <?php echo $prow['projectname']; ?> </option> 
                                                        <?php
                                                       }
                                                       ?>
                                                 </select>
                                                </div>
                                            </div>
                                         </div>
                                            <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Description</label>
                                                <div class="col-sm-12">
                                                  <input type="text" name="description"  class="form-control"id="brandName" placeholder="Comapany Name"   required="" pattern="^[a-z -z]+$"/>
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



