<?php include "include/header.php"; 
$id = $_GET['id'];
$service = mysqli_query($conn, "SELECT * FROM `services` where id ='$id'");
$services = mysqli_fetch_assoc($service);
$book_id = $services['id'];

if(isset($_POST['submit']))
{
  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $date = $_POST['sdate'];
  $time = $_POST['stime'];
  $description = $_POST['description'];

  $query = mysqli_query($conn, "INSERT INTO `booking`(`booked_service`, `fname`, `lname`, `email`, `phone`, `address`, `city`, `pincode`, `date`, `time`, `description`, `status`) 
                        VALUES ('$book_id','$fname','$lname','$email','$phone','$address','$city','$pincode','$date','$time','$description','1')");
  if($query)
    echo "<p class='success'>Your details are sent successfully</p>";
  else
    echo "<p class='col'>Something happen wrong</p>";
}

?>

<div id="wrapper" class="inner_page booking_page"><!--Wrapper Start--> 
  
<!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">book now</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Book Now</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Contact Information Start-->
  <section id="contact_information">
    <div class="container">
      <div class="row"> 
        <!--Left Form Part-->
        <div class="col-md-8 col-sm-8 col-xs-12"> 
          
          <!--Contact Information-->
          <div class="contact_information_left "> 
            
            <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
            <div class="booking_form">
              <div class="container-fluid">
                <div class="row">
                  <form method="post">
                    <h2>Contact Information</h2>
                    <p>This information will be used to contact you about your service</p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="name" name="fname" placeholder="First Name*" type="text" required/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <input class="form-control" id="name1" name="lname" placeholder="Last Name*" type="text" required/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <input class="form-control" id="tel" name="phone" placeholder="Phone Number*" type="number" required/>
                    </div>
                    <div class="clearfix"></div>
                    <hr />
                    <!--Service Address-->
                    <h2>Service Address</h2>
                    <p>Where would you like us to give you service?</p>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                      <input class="form-control" id="address" name="address" placeholder="Address*" type="text"/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="city" name="city" placeholder="City*" type="text"/>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <input class="form-control" id="postcode" name="pincode" placeholder="Pincode*" type="text"/>
                    </div>
                    <div class="clearfix"></div>
                    <hr />
                    
                    <!--Select Date Time-->
                    <h2>When would you like us to come?</h2>
                    <p></p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <div class='input-group date' id='datetimepicker1'>
                        <input type="date" id="sdate" name="sdate" class="form-control" >
                        <!-- <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>  -->
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <div class='input-group date' id='datetimepicker3'>
                        <input type="time" id="stime" name="stime" class="form-control" >
                        <!-- <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>  -->
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr />


                    <!--Service Description-->
                    <h2>More details about your requirement, if you needed?</h2>
                    <p></p>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <div class='input-group date' id='datetimepicker1'>
                        <textarea rows="8" name="description" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr />
                   
                    <!--BOOK NOW-->
                                        
                    <p>By clicking the Book Now button you are agreeing to our Terms of Service and Privacy Policy.</p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <button class="btn btn-primary btn-skin" name="submit" type="submit"> BOOK NOW</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Contact Information--> 
          
        </div>
        <!--/Left Form Part-->
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact_information_right text-center">
            <div class="booking_summary">
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/time3.png" alt="time3" /></div>
                <div class="box_content">
                  <h4>SAVES YOU TIME</h4>
                  <p>We helps you live smarter, giving you time to focus on whats most important.</p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/Safety3.png" alt="Safety3" /></div>
                <div class="box_content">
                  <h4>For Your Safety</h4>
                  <p>All of our Helpers undergo rigorous identity checks and personal interviews. Your safety is even our concern too.</p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/best3.png" alt="best3" /></div>
                <div class="box_content">
                  <h4>Best-Rated Professionals</h4>
                  <p>Our experienced taskers perform their tasks with dedication and perfection. We appreciate your reviews about the service.</p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/Equipped3.png" alt="Equipped3" /></div>
                <div class="box_content">
                  <h4>We Are Well Equipped</h4>
                  <p>Let us know if you have any specific equirement, otherwise our guys carry their own supplies.</p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/touch3.png" alt="touch3" /></div>
                <div class="box_content">
                  <h4>Always In Touch</h4>
                  <p>Book your service online on one tap, keep a track of your service status and also keep in touch with your Helper.</p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="images/booking/cash3.png" alt="cash3" /></div>
                <div class="box_content">
                  <h4>Cash-Free Facility</h4>
                  <p>Pay through secure online mode only after your job is done.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Information End--> 
  
</div>
<!--/Wrapper End--> 

<?php include "include/footer.php"; ?>