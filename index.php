<?php 
include "include/header.php"; 

    $fact = mysqli_query($conn, "SELECT * FROM `facts`");
    $facts = mysqli_fetch_assoc($fact);
                
?>

<!--Banner Start-->
<section id="banner" class="home-one">
    <div class="container text-center parallax-section">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="panel-heading">Ready to Live Smarter?</h1>
          <p class="caption">Book Expert home cleaners and handymen at a moment's notice. just pick a<br/>
            time and we'll do the rest</p>
          <form class="form-inline book-now-home">
            <div class="form-group">
              <div class="input-group">
                <div class="dropdown category-dropdown text-left"> <a data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i> <span class="change-text">Select Service</span> <i class="fa fa-caret-down pull-right" aria-hidden="true"></i> </a>
                  <ul class="dropdown-menu category-change">
                    <li><a href="#">Fashion&amp;Beauty</a></li>
                    <li><a href="#">Cars &amp; Vehicles</a></li>
                    <li><a href="#">Electronics&amp;Gedgets</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Sports &amp; Games</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group location-code">
                <input type="text" class="form-control zipcode" id="zipcode" placeholder="Pincode" />
              </div>
            </div>
            <button type="submit" class="btn btn-primary booknow btn-skin">Book now</button>
          </form>
        </div>
      </div>
    </div>
  </section>  
<!--/Banner End--> 

  <div id="wrapper" class="home_two"><!--Wrapper Start--> 
  
  
  
    
  
  
  <!--How it works Section Satrt-->
  <section id="howitwork">
    <div class="container text-center">
      <h1 class="panel-heading">How it works</h1>
      <div class="row">
        <div class="col-md-3 col-xs-offset-0 step-one"><img src="images/02home/book2.png" alt="works" />
          <h4>Book</h4>
          <p>Select the date and time like<br />
            your perofessional to show up</p>
        </div>
        <div class="col-md-1 hidden-xs hidden-sm"> </div>
        <div class="col-md-3 step-two"> <img  src="images/02home/Schedule2.png" alt="Book" />
          <h4>Schedule</h4>
          <p>Certified Taskers comes over<br/>
            and done your task</p>
        </div>
        <div class="col-md-1 hidden-xs hidden-sm"> </div>
        <div class="col-md-3"> <img  src="images/02home/Relax2.png" alt="Schedule" />
          <h4>Relax</h4>
          <p>your task is completed to your<br/>
            satisfaction - guranteed</p>
        </div>
      </div>
    </div>
  </section>
  <!--How it works Section End--> 
  
  <!--Our services Section Satrt-->
  <section id="services">
    <div class="container text-center services_back">
      <div class="col-md-12">
        <h1 class="panel-heading">Our services</h1>
        <ul class="services-list">
          <li><a href="service_detail.php"><img src="images/02home/services-icons/cleaning.png" alt="Cleaning" /><br />
            Cleaning</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/electrical.png" alt="Electrical" /><br />
            Electrical</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/plumbing.png" alt="Plumbing" /><br />
            Plumbing</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/appliances.png" alt="Appliances" /><br />
            Appliances</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/carpentry.png" alt="Carpentry" /><br />
            Carpentry</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/geyser.png" alt="Geyser Service" /><br />
            Geyser Service</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/vehicle.png" alt="Vehicle Care" /><br />
            Vehicle Care</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/pest.png" alt="Pest Control" /><br />
            Pest Control</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/painting.png" alt="Painting" /><br />
            Painting</a></li>
          <li><a href="service_detail.php"><img src="images/02home/services-icons/more.png" alt="View More" /><br />
            View More</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Our services Section End--> 
  
  <!--Trust Security Section Satrt-->
  <section id="trust-security">
    <div class="container text-center">
      <h1 class="panel-heading">Your Trust and Security</h1>
      <div class="row text-left">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/time2.png" alt="SAVES" /></div>
            <div class="box_content">
              <h4>SAVES YOU TIME</h4>
              <p>We helps you live smarter, giving you time to focus on whats most important.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/Safety2.png" alt="Safety" /></div>
            <div class="box_content">
              <h4>For Your Safety</h4>
              <p>All of our Helpers undergo rigorous identity checks and personal interviews. Your safety is even our concern too.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/best2.png" alt="Best"  /></div>
            <div class="box_content">
              <h4>Best-Rated Professionals</h4>
              <p>Our experienced taskers perform their tasks with dedication and perfection. We appreciate your reviews about the service.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/Equipped2.png" alt="Equipped" /></div>
            <div class="box_content">
              <h4>We Are Well Equipped</h4>
              <p>Let us know if you have any specific equirement, otherwise our guys carry their own supplies.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/touch2.png" alt="Always" /></div>
            <div class="box_content">
              <h4>Always In Touch</h4>
              <p>Book your service online on one tap, keep a track of your service status and also keep in touch with your Helper.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>  -->
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/02home/cash2.png" alt="Cash" /></div>
            <div class="box_content">
              <h4>Cash-Free Facility</h4>
              <p>Pay through secure online mode only after your job is done.</p>
              <!-- <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Trust Security Section End--> 
  
  <!--Our Numbers Satrt-->
  <section id="numbers">
    <div class="container text-center">
      <h1 class="panel-heading">Why Choose Us</h1>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!--counter box-->
          <div class="counter_box text-center">
            <div class="counter_icon"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['quality']; ?></span>%</div>
              <h4 class="counter_name">Quality</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!--counter box-->
          <div class="counter_box text-center">
            <div class="counter_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['workers']; ?></span>+</div>
              <h4 class="counter_name">People Working</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!--counter box-->
          <div class="counter_box text-center">
            <div class="counter_icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></div>
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['experience']; ?></span>+</div>
              <h4 class="counter_name">Years Experience</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!--counter box-->
          <div class="counter_box text-center">
            <div class="counter_icon"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['customers']; ?></span>+</div>
              <h4 class="counter_name">Happy Smiles</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
      </div>
    </div>
  </section>
  <!--/Our Numbers Satrt End--> 
  
  <!--Testimonails Section Satrt-->
  <section id="testimonails">
    <div class="container text-center">
      <h1 class="panel-heading">Testimonials</h1>
      <div class="row">
        <div class="col-md-12">
          <div class="cmsmasters_quotes cmsmasters_quotes_grid quote_two">
            <div class="cmsmasters_quotes_list">
              <?php
              
                  $testimonial = mysqli_query($conn, "select * from testimonials limit 2");
                  while($test = mysqli_fetch_assoc($testimonial)){
              ?>
              <div class="cmsmasters_quote">
                <article class="cmsmasters_quote_inner">
                  <div class="cmsmasters_quote_img_info_wrap">
                    <div class="cmsmasters_quote_image"><img src="images/02home/clinte2.png" alt="Kevin" /></div>
                    <div class="cmsmasters_quote_info_wrap">
                      <h3 class="cmsmasters_quote_title"><?php echo $test['name']; ?></h3>
                    </div>
                  </div>
                  <div class="cmsmasters_quote_content">
                    <p><?php echo $test['massage']; ?></p>
                  </div>
                </article>
              </div>
                <?php } ?>             
            </div>
            <div class="cmsmasters_quotes_list">
              <?php
              
                  $testimonial = mysqli_query($conn, "select * from testimonials ORDER BY id ASC LIMIT 2, 2");
                  while($test = mysqli_fetch_assoc($testimonial)){
              ?>
              <div class="cmsmasters_quote">
                <article class="cmsmasters_quote_inner">
                  <div class="cmsmasters_quote_img_info_wrap">
                    <div class="cmsmasters_quote_image"><img src="images/02home/clinte2.png" alt="Kevin" /></div>
                    <div class="cmsmasters_quote_info_wrap">
                      <h3 class="cmsmasters_quote_title"><?php echo $test['name']; ?></h3>
                    </div>
                  </div>
                  <div class="cmsmasters_quote_content">
                    <p><?php echo $test['massage']; ?></p>
                  </div>
                </article>
              </div>
                <?php } ?>              
            </div>
            <div class="clearfix"></div>
            <div class="view_all"><a href="testimonial.php">View All Testimonails <i class="fa fa-angle-right" aria-hidden="true"></i> </a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Testimonails Section End--> 
  
  <!--Call To Action Start-->
  <section id="call-to-action">
    <div class="container free_consultation">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h2>Wanted a Free Consultation?</h2>
          <p>we are always ready to welcome you!</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-text-center text-right"> <a href="contact.php" class="btn btn-primary btn-outline">Contact Us</a> </div>
      </div>
    </div>
  </section>
  <!--Call To Action End--> 
  
  <!--Trusted Section Satrt-->
  <section id="trusted">
    <div class="container text-center">
      <div class="row text-left">
        <div class="col-md-2 col-sm-3 col-xs-12">
          <h3 class="panel-heading">TRUSTED BY</h3>
        </div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <ul class="trusted_logo owl-carousel" id="trusted-slider">
            <li><a href="#"><img src="images/Trusted_logo1.png" alt="logo1" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo2.png" alt="logo2" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo3.png" alt="logo3" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo1.png" alt="logo4" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo2.png" alt="logo5" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo2.png" alt="logo6" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo3.png" alt="logo7" /></a></li>
            <li><a href="#"><img src="images/Trusted_logo1.png" alt="logo8" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--Trusted Section End--> 
</div>
  
  <?php include "include/footer.php"; ?>