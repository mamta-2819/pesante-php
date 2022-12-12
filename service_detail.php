<?php 
include "include/header.php"; 
$id = $_GET['id'];
$service = mysqli_query($conn, "SELECT * FROM `services` where id ='$id'");
$services = mysqli_fetch_assoc($service);
?>

<div id="wrapper" class="service_detail"><!--Wrapper Start--> 
 
  
  <!--Banner Start-->
  <section id="service_banner">
    <div class="container text-center service_banner_layer">
      <div class="banner_content">
        <div class="row text-left">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <h1 class="service-heading">Book <?php echo $services['name'];?> Service Today</h1>
            <p><?php echo $services['description']; ?></p>
            <!-- <h2>Why choose Helpr?</h2>
            <ul class="featurs_list">
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
            </ul> -->
            <a class="btn btn-warning btn-booknow" href="booking.php?id=<?php echo $services['id'];?>"> Book now </a> </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
          <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($services['image']) . '"' ?> alt="service" class="service-img">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/Banner End--> 
   
 </div>
<!--/Wrapper End--> 

<?php include "include/footer.php"; ?>