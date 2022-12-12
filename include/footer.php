<?php include "config.php"; 

$site = mysqli_query($conn, "SELECT * FROM `site_infos` WHERE 1");
$s_info = mysqli_fetch_assoc($site);

$about = mysqli_query($conn, "SELECT * FROM `abouts` where status ='1'");
$about_info = mysqli_fetch_assoc($about);
?>

<!--Footer-->
  <footer>
    <div class="container-fluid footerbg">
      <div class="container">
        <div class="row">
          <div class="col-md-3"> <a href="#" class="footer-logo"> 
          <img class="logo-dark" src="images/Pesante.png" alt="">
          <!-- <img class="logo-dark" src="images/logo2.png" alt="Hire A Helper" />  -->
        </a>
            <p>PESANTE is the one stop solution for your everyday house chores whether it is related to electricity, earthing, plumbing, cleaning, repairing, or managing the stuff.</p>
            <div class="about_info">
              <!-- <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem Ipsum is simply dummy</p> -->
              <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $s_info['email']; ?></p>
              <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $s_info['phone'].', '.$s_info['phone2']; ?></p>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Services</h4>
            <ul>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Cleaning</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Electrical</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Plumbing</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Appliances</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Carpentry</a></li>
            </ul>
            <ul>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Geyser Service</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Vehicle Care</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Pest Control</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Panting</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>About Us</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="service.php">Services</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
              <li><a href="term-condition.php">Terms and condition</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Tags</h4>
            <div class="single-sidebar popular-tag">
              <div class="sec-title">
                <span class="border"></span> </div>
              <ul class="popular-tag">
                <li><a href="service.php">Cleaning</a></li>
                <li><a href="service.php">Electrical</a></li>
                <li><a href="service.php">Appliances</a></li>
                <li><a href="service.php">Plumbing</a></li>
                <li><a href="service.php">Carpentry</a></li>
                <li><a href="service.php">Vehicle Care</a></li>
                <li><a href="service.php">Pest Control</a></li>
                <li><a href="service.php">Painting</a></li>
              </ul>
            </div>
            </div>
        </div>
        <div class="top_awro pull-right" id="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> </div>
      </div>
    </div>
    
    <!--Boottom Footer-->
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright pull-left">&copy; Pesante 2022 All Right Reserved</p>
            <ul class="footer-scoails pull-right">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/Footer--> 
  
</div>
<!--/Wrapper End--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owlcarousel/owl.carousel.min.js"></script> 
<script src="js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106074231-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>