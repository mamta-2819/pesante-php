<?php include "include/header.php"; 

$service = mysqli_query($conn, "SELECT * FROM `services` where status ='1'");

?>
<div id="wrapper" class="inner_page"><!--Wrapper Start--> 
  
  <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">services</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Services</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Service Page Start-->
  <section id="service_page">
    <div class="container text-center">
      <div class="row">
      <?php 
      while($services = mysqli_fetch_assoc($service)){
      ?>  
      <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> 
        <a href="service_detail.php">
          <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($services['image']) . '"' ?> class="img-circle htw" alt="cleaning" /></a>
          <h4><?php echo $services['name']; ?></h4>
          <p><a href="service_detail.php?id=<?php echo $services['id']; ?>"><b>View Details</b></a></p>
          <!-- <p><?php echo strtok($services['description'] , '.'); ?>.</p> -->
        </div>
        <?php } ?>       
        
      </div>
    </div>
  </section>
  <!--Service Page End--> 
  
    
<?php include "include/footer.php"; ?>