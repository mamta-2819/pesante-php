<?php


if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {

    $facts = mysqli_query($connection, "SELECT * FROM `facts` WHERE 1");    
    $fact = mysqli_fetch_assoc($facts);

    $service = mysqli_query($connection, "SELECT * FROM `services` WHERE 1");    
    $services = mysqli_num_rows($service);

?>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $services; ?></h3>

                            <p>Services Booked</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $fact['quality']; ?><sup style="font-size: 20px">%</sup></h3>

                            <p>Quality</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $fact['workers']; ?></h3>
                            <p>Workers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php  echo $fact['customers']; ?></h3>
                            <p>Customer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>                        
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
           
        </div><!-- /.container-fluid -->
    </section>
<?php } else {
    header('location:./AdminLogin/super_Admin.php');
} ?>