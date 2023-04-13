<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php
//     $localhost = "localhost";
// $username = "jafasaco_baithome_user";
// $password = "b]v[8BqcKSTp";
// $dbname = "jafasaco_baithomes";
//$store_url = "http://localhost/phpinventory/";
// db connection
// $connect = new mysqli($localhost, $username, $password, $dbname);

    $msg="";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $profession=$_POST['profession'];
        $wage=$_POST['wage'];
        $wage_type=$_POST['wage_type'];
        $address=$_POST['address'];
        
        
        $query =  "INSERT INTO employee(name,contact,profession,wage,wage_type,status,address)
        VALUES('$name','$contact','$profession','$wage','$wage_type','1','$address') ";
        
        $result = mysqli_query($query);
        if($result)
        {
            $msg="Employee is inserted";
        }
        else
        {
            $msg="insertion failed ";
        }
        
    }
?>




 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Employee</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Employee</li>
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
                                                  <input type="text" name="name"  class="form-control"id="brandName" placeholder="Employee Name"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                             <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Contact</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="contact"  class="form-control"id="brandName" placeholder="Enter contact"  required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Profession</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="profession"  class="form-control"id="brandName" placeholder="Enter profession"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                          <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Wage</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="wage"  class="form-control"id="brandName" placeholder="Enter wage"   required="" pattern="^[a-z -z]+$"/>
                                                </div>
                                            </div>
                                             </div>
                                        <br>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Wage type</label>
                                                <div class="col-sm-9">
                                                  <select name="wage_type" class="form-control">
                                                       <option value="daily">Daily</option>
                                                       <option value="weekly">Weekly</option>
                                                       <option value="monthly">Monthly</option>
                                                  </select>
                                                </div>
                                            </div>
                                             </div>
                                            <br>
                                              <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="address"  class="form-control"id="brandName" placeholder="Enter Address"   required="" pattern="^[a-z -z]+$"/>
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
                

           <style>
.footer {
  position: fixed;
  left: 0;
  bottom: -17px;
  width: 100%;
  background-color: #3a4651;
  color: white;
  text-align: center;
}

</style>
             <?php
             include('./constant/connect.php');
             
             ?>
                      
        </div>
          
    </div>
    
    
    <script src="assets/js/lib/jquery/jquery.min.js"></script>
    
    <script src="assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/lib/bootstrap/js/bootstrap.js"></script>
    
    <div class=""
    style="color: rgb(156, 159, 166); float: left; position: fixed; bottom: 0px;
    left: 0px; right: 0px; padding: 10px; background: rgb(255, 255, 255); text-align: center;">
        <div>Copyright © 2022 Project Develop by Tahir Islam, Ijaz & Inayat
</div></div>
    
    <script src="assets/js/jquery.slimscroll.js"></script>
    
    <script src="assets/js/sidebarmenu.js"></script>
    
    <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


 <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
    
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
   

    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>


   
    
    <script src="assets/js/custom.min.js"></script>

   
     <script src="assets/js/lib/datatables/datatables.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="assets/js/lib/datatables/datatables-init.js"></script>

     <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/prism.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>

 <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/js/lib/html../assets/5-editor/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-init.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>

</html>
<script>
   

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
                                        </script>
                                        <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }  

    function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);
    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'inline' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});
</script>


<script>
    // const currentLocation = location.href;
    // const menuItem = document.querySelectorAll('li.nav-link');
    // const menuLenght = menuItem.length;
    //     for(let i = 0; i < menuLenght; i++){
    //      if(menuItem[i].href === currentLocation) {
    //         menuItem[i].className = "active"
    //         }
    //     }

    //  jQuery(function($) {
    //  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    //  $('ul .nav-link').each(function() {
    //   if (this.href === path) {
    //    $(this).addClass('active');
    //   }
    //  });
    // });
$(function($) {
 let url = window.location.href;
  $('nav ul li a').each(function() {
  if (this.href === url) {
    // Only For Menu
  $(this).closest('nav ul li').addClass('active');
  // For Dropdown Menu
  $(this).parent('li').addClass("active");
  }
 });
});
 // jQuery(function($) {
 //      var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 //        $(".navbar-nav > .nav-item > .nav-link").each(function(){
 //        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 //        //s$(this).addClass("active");
 //        $(this).parent('.nav-item').addClass("active");
 //      })
 //  });
</script>
<!-- <style>
     .dropdown-menu .dropdown-item.active< .dropdown .dropdown-toggle{
        color: red !important;
    }
</style> -->

  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}
.goog-te-gadget .goog-te-combo {
    margin: 0px 0;
        padding: 8px;
}
#google_translate_element{
        padding-top: 14px;
}
</style>
