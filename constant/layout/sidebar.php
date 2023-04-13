 <?php 
 include('./constant/connect.php');
  

 ?>

 <div id="loading"></div>
<div id="page">
<div class="header"> 
  <div class="container-fluid">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
         <a class="navbar-brand" href="">
         <b><img src="./assets/uploadImage/Logo/logo.png" style="width:250px;" alt="homepage" class="dark-logo" style="width:100%;height:auto;"/></b>
         </a>
         <div class="navbar-collapse">
         <!--   <ul class="navbar-nav mr-auto mt-md-0">
               <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
               <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
               
               
               
               </ul> --> 
               
                <div class="col-md-9 align-self-center justify-content-end">
                     
            <div class="text-center"><p style="color:#000; font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;"  class="f-s-25 f-w-500"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></div>
                    </div>
                
            
            <ul class="navbar-nav nav ml-auto">
            <li><div id="google_translate_element"></div></li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="./assets/uploadImage/Profile/young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg" alt="user" class="profile-pic" /></a>
                  <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                     <ul class="dropdown-user">
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li><a href="#"><i class="fa fa-key"></i> Changed Password</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Add user</a></li>
                        <?php }?>
                        <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
          </nav>
   </div> 
  
</div>


   <div class="container">
       
            <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Company</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Company</a></li>
                           
                                <li><a href="brand.php">Manage Company</a></li>
                                 <li><a href="importbrand.php">Import Company</a></li>
                            </ul>
                        </li>
                   
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                  
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-rub"></i><span class="hide-menu">Material/Services</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-product.php">Add Material</a></li>
                           
                                <li><a href="product.php">Manage Material</a></li>
                            </ul>
                        </li>
                  
                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">Project</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_project.php">Add Project</a></li>
                           
                                <li><a href="view_project.php">Manage Project</a></li>
                                <li><a href="status_project.php">Project Status</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Utilization</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">Add Utilization</a></li>
                           
                                <li><a href="Order.php">Manage Utilization</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Expenses</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-expenses.php">Add Expenses</a></li>
                           
                                <li><a href="view_expenses.php">Manage Expenses</a></li>
                            </ul>
                        </li>
                         
                        
                         <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Reports</span></a></li>
                        



                  


                  


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
   </div>
 </div>
 </div>