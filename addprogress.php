<?php
  include("constant/connect.php");
  $msg = "";
  if(isset($_POST['submit']))
  {
       $imageName = $_FILES['image']['name'];
       $tempLocation = $_FILES['image']['tmp_name'];
       $detail = $_POST['detail'];
       
       $id = $_GET['id'];
       
       $query = "insert into progress (p_id, image, detail) values ('$id', '$imageName', '$detail' ) ";
       $result = mysqli_query($connect, $query);
       
       if($result)
       {
           move_uploaded_file($tempLocation, "image/$imageName");
            ?>
         <script> window.location.href = "https://www.jafasa.com/baithome/dashboard.php"; </script>
        <?php
       }
       else 
       {
            $msg = "Progress Insertion Failed ";
       }
  }


?>

<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>




 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Company Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Company</li>
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
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm"  enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Select an Image</label>
                                                <div class="col-sm-9">
                                                  <input type="file"  class="form-control" id="brandName" placeholder="Select an Image" name="image"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Enter Detail</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control" id="brandName" placeholder="Enter Detail" name="detail"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                       


                                        <button type="submit" name="submit" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                   
                                        <div class="text-danger mt-2"> <?php echo $msg; ?> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>


