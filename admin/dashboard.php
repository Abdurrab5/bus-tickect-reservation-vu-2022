<!-- Show these admin pages only when the admin is logged in -->
<?php require 'header.php';    ?>
   

    <?php
        
        $page="dashboard";
    ?>
</head>
<body>
    <!-- Requiring the admin header files -->
    <?php 
        
    //  Will have access to variables 
    //     1. routeJson
    //     2. customerJson
    //     3. seatJson
    //     4. busJson
    //     5. adminJson
    //     6. bookingJSON
    $routeData = getroute($link);
	//json_decode($routeJson);
    $customerData = passengerget($link);
    $seatData = seats($link);
    $busData = bus($link);
    $adminData = admin($link);
    $bookingData = booking($link);
    // $earningData = json_decode($earningJson);

    // echo "<pre>";
    // var_export(get_object_vars($adminData[0])["user_fullname"]);
    // var_export($adminData);
    // var_export($_SESSION);
    // echo "</pre>";

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
                                999
                            </p>
                        </div>
                        <a href="./booking.php">View More <i class="fas fa-arrow-right"></i></a>
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
                                    echo count($busData)?>
                            </p>
                        </div>
                        <a href="./bus.php">View More <i class="fas fa-arrow-right"></i></a>
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
                        <a href="./seat.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- <h3>User</h3> -->
                <div id="user">
                    <div id="Customer" class="info-box user-item">
                        <div class="heading">
                            <h5>Customers</h5>
                            <div class="info">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Passenger</p>
                            <p class="num" data-target="<?php 
                                    echo count($customerData);
                                ?>">
                                <?php 
                                    echo count($customerData);
                                ?>
                            </p>
                        </div>
                        <a href="./customer.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                   
                       

                    <div id="Earning" class="info-box user-item">
                        <div class="heading">
                            <h5>Earnings</h5>
                            <div class="info">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Earnings</p>
                            <p class="num" data-target="<?php 
                                    $result = mysqli_query($conn, 'SELECT SUM(booked_amount) AS value_sum FROM bookings'); 
                                    $row = mysqli_fetch_assoc($result); 
                                    $sum = $row['value_sum'];
                                    echo $sum;
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
 >
                    <?php 
                     
                    ?>
                </div>
            </section>
                
        </div>
    </main>
 </body>
</html>