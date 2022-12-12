<?php include "include/header.php"; ?>

<div id="wrapper" class="inner_page blog_post"> 
  <!--Wrapper Start--> 

  <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">Testimonials</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Testimonials</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Blog Page Start-->
  <section id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="blog-post"> 
            <!--Start single blog post-->
            <div class="single-blog-post">
             
              <!-- <div class="blog_post_barr">
                
                <ul class="pager pull-right">
                  <li class="previous"> <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Prev</a> </li>
                  <li class="next"> <a href="#">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                </ul>
              </div> -->
              <h1 class="panel-heading">Clients Testimonials</h1>
              <?php
              
                  $testimonial = mysqli_query($conn, "select * from testimonials");
                  while($test = mysqli_fetch_assoc($testimonial)){
              ?>
              <div class="media">
                
                <a class="pull-left" href="#"> <img class="media-object" src="images/blank.png" alt="blank" /> </a>
                <div class="media-body">
                  <h4 class="media-heading"><?php echo $test['name']; ?></h4>
                  <?php echo $test['massage']; ?>
                </div>
              </div>
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Page End--> 
  
  <?php include "include/footer.php"; ?>