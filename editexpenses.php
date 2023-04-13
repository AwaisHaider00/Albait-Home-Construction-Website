<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>
<?php
 include('./constant/connect.php');

    $msg="";
     if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="select *from expenses where id='$id'";
        $res=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($res);
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $amount=$_POST['amount'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $status=$_POST['status'];
        
        $query="update supplier set name='$name',amount='$amount',time='$time',date='$date' set id='$id'";
        $result = mysqli_query($connect,$query);
        if($result)
        {
            $msg="update successfully";
        }
        else
        {
            $msg="update failed ".mysqli_error($connect);
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
                                                  <input type="text" name="name"  class="form-control"id="brandName"  placeholder="Expenses Name"   required=""  value="<?php echo $row['name']?>"   pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> amount</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="amount"  class="form-control"id="brandName" placeholder="Expenses amount"  required=""  value="<?php echo $row['amount']?>" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="time"  class="form-control"id="brandName" placeholder="Comapany Name"   required=""  value="<?php echo $row['time']?>" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Date</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="date"  class="form-control"id="brandName" placeholder="Comapany Name"   required=""  value="<?php echo $row['date']?>" pattern="^[a-z -z]+$"/>
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
                </div>
                
               

<?php include('./constant/layout/footer.php');?>

<script src="custom/js/product.js"></script>
