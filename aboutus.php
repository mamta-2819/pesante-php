<?php include "include/header.php"; 

$about = mysqli_query($conn, "SELECT * FROM `abouts` where status ='1'");
$about_info = mysqli_fetch_assoc($about);

$fact = mysqli_query($conn, "SELECT * FROM `facts`");
$facts = mysqli_fetch_assoc($fact);

?>

<!--Wrapper Start-->
<div id="wrapper"> 
  
<!--page_title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">About Us</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
      </ol>
    </div>
  </div>
  <!--page_title Section End--> 
  
  <!--page content Section Satrt-->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 about_l"> <img src="images/about/desk.png" alt="desk" /> </div>
        <div class="col-md-6 col-sm-6">
          <p class="text-justify"><?php echo $about_info['massage']; ?></p>          
        </div>
      </div>
    </div>
  </div>
  <!--page content Section End--> 
  
  <!--Service Provider Satrt-->
  <section id="service_provider">
    <div class="container text-center">
      <h1 class="panel-heading">Largest home service provider in your City</h1>
      <div class="row">
        <div class="col-md-12"> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['customers']; ?></span>+</div>
              <h4 class="counter_name">HAPPY CUSTOMERS</h4>
            </div>
          </div>
          <!--counter box end--> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count"><?php echo $facts['workers']; ?></span>+</div>
              <h4 class="counter_name">SERVICE PROVIDERS</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
      </div>
    </div>
  </section>
  <!--/Service Provider Satrt End--> 
  
  <!--Testimonails Section Satrt-->
  <section id="testimonails">
    <div class="container text-center">
      <h1 class="panel-heading">Testimonails</h1>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel "> <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <?php 
                $testimonial = mysqli_query($conn, "SELECT * FROM `testimonials`");
                $no = mysqli_num_rows($testimonial);
                for($i=1; $i<$no; $i++){                
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
                <?php } ?>
              <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
              <?php 
                $testimonial = mysqli_query($conn, "SELECT * FROM `testimonials` limit 1");
                 $test = mysqli_fetch_assoc($testimonial);
                ?>
                <div class="item active">
                <div class="avatar"><img class="img-circle" src="images/clinte1.png" alt="clinte1" /></div>
                <h3><?php echo $test['name']; ?></h3>
                <!-- <strong>Lorem Ipsum</strong> -->
                <p><?php echo $test['massage']; ?></p>
                </div>
              <?php 
                $testimonial = mysqli_query($conn, "select * from testimonials WHERE id NOT IN (SELECT Min(id) from testimonials);");
                 while($test = mysqli_fetch_assoc($testimonial)){
                ?>
                <div class="item">
                <div class="avatar"><img class="img-circle" src="images/clinte1.png" alt="clinte1" /></div>
                <h3><?php echo $test['name']; ?></h3>
                <!-- <strong>Lorem Ipsum</strong> -->
                <p><?php echo $test['massage']; ?></p>
                </div>
                <?php } ?>
            </div>
            <!-- Controls --> <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="fa fa-angle-right"></span> </a> </div>
        </div>
      </div>
    </div>
  </section>
  <!--Testimonails Section End--> 
  
 <?php include "include/footer.php"; ?>