<!-- Show these admin pages only when the admin is logged in -->
<?php require 'header.php';    ?>
   

    <?php
        
        $page="dashboard";
		$user=$_SESSION['passenger'];
    ?>
</head>
<body>
     
    <?php 
 
    $routeData = getroute($link);
	 
    $customerData = passengerget($link);
    $seatData = seats($link);
    $busData = bus($link);
    $adminData = admin($link);
    $bookingData = passengerbooking($link,$user);
     
 

    ?>

 
                
                <div id="status">
                    <div id="Booking" class="info-box status-item">
                        <div class="heading">
                            <h5>Bookings</h5>
                            <div class="info">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Bookings</p>
                            <p class="num" data-target="<?php 
                                    echo count($bookingData);
                                ?>">
                                <?php 
                                    echo count($bookingData);
                                ?>
                            </p>
                        </div>
                        <a href="">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Bus" class="info-box status-item">
                        <div class="heading">
                            <h5>Buses</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Buses</p>
                            <p class="num" data-target="<?php 
                                    echo count($busData);
                                ?>">
                                <?php 
                                    echo count($busData);
                                ?>
                            </p>
                        </div>
                        <a href="">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Route" class="info-box status-item">
                        <div class="heading">
                            <h5>Routes</h5>
                            <div class="info">
                                <i class="fas fa-road"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Routes</p>
                            <p class="num" data-target="<?php 
                                    echo count($routeData);
                                ?>">
                                <?php 
                                    echo count($routeData);
                                ?>
                            </p>
                        </div>
                        <a href="./route.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Seat" class="info-box status-item">
                        <div class="heading">
                            <h5>Seats</h5>
                            <div class="info">
                                <i class="fas fa-th"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Seats</p>
                            <p class="num" data-target="<?php 
                                    echo 38 * count($busData);
                                ?>">
                                <?php 
                                    echo 38 * count($busData);
                                ?>
                            </p>
                        </div>
                        <a href="./route.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- <h3>User</h3> -->
                 
                   
                    


                
            </section>
                
        </div>
    </main>
    <script src="../assets/scripts/admin_dashboard.js"></script>
</body>
</html>