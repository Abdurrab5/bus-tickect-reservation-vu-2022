<?php
   require_once "connection.php";
require_once "functions.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
 <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body  >
      
 
    <?php 

        $routeData =  getroute($link);
        $busData = bus($link);
        $customerData = passengerget($link);
    ?>
    <div class="container">

     
	 
            
            <center>
			<h1>Online Bus Reservation and Ticketing System</h1>

            <p class="text-center">Welcome to Online Bus Reservation and Ticketing System. Login now to manage bus tickets and much more. OR, simply scroll down to check the Ticket status using Passenger Name Record (PNR number)</p>

                <a href="admin/index.php" class="btn btn-danger btn-lg "  >Administrator Login</a>
				<a href="passenger/index.php" class="btn btn-danger btn-lg "  >Passenger Login</a>
                
            </center>

            <br>
            <center>
            <a href="#pnr-enquiry"><button class="btn btn-primary">Scroll Down <i class="fa fa-arrow-down"></i></button></a>
            </center>
            
        </div>  </div>
    </section>
    <div  >
        <section id="info-num">
            <figure>
                <img src="assets/img/route.svg" alt="Bus Route Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($routeData); ?>"><?php echo count($routeData); ?></span>
                    <span class="icon-name">routes</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/bus.svg" alt="Bus Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($busData); ?>"><?php echo count($busData); ?></span>
                    <span class="icon-name">bus</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/customer.svg" alt="Happy Customer Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="<?php echo count($customerData); ?>"><?php echo count($customerData); ?></span>
                    <span class="icon-name">happy customers</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/ticket.svg" alt="Instant Ticket Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num"><span class="counter" data-target="20">999</span> SEC</span> 
                    <span class="icon-name">Instant Tickets</span>
                </figcaption>
            </figure>
        </section>
       
        <section id="about">
            <div>
                <h1>About Us</h1>
                <h4>Wanna know were it all started?</h4>
                <p>
                    Lorem ipsum dolor sit amet consecteturadipisicing elit. Perferendis soluta voluptas eaque, numquam veritatis aperiam expedita deleniti, nesciunt cum alias velit. Cupiditate commodi
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus cum nisi ea optio unde aliquam quia reprehenderit atque eum tenetur! 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat debitis corporis voluptates modi quibusdam quidem voluptatibus illum, maiores sequi.
                </p>
            </div>
        </section>
       
 
    </div>
    
  </div> 
</body>
</html>