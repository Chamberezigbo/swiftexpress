<?php
session_start();

$msg = $success = $packages = '';
if (isset($_SESSION['success']) && isset($_SESSION['msg'])) {
     // || checks for boolean values only
     $success = $_SESSION['success'] || false;
     $msg = $_SESSION['msg'];
     //remove the session
     unset($_SESSION['success']);
     unset($_SESSION['msg']);
}
?>
<!doctype html>
<html lang="en">

<head>
     <title>Swift express logistics &mdash;</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="" />
     <meta name="keywords" content="" />
     <meta name="author" content="Free-Template.co" />
     <link rel="shortcut icon" href="ftco-32x32.png">
     <link rel="stylesheet" href="js/toastr-master/build/toastr.min.css" />

     <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

     <link rel="stylesheet" href="fonts/icomoon/style.css">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/jquery.fancybox.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

     <div id="overlayer"></div>
     <div class="loader">
          <div class="spinner-border text-primary" role="status">
               <span class="sr-only">Loading...</span>
          </div>
     </div>

     <div class="site-wrap" id="home-section">

          <div class="site-mobile-menu site-navbar-target">
               <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                         <span class="icon-close2 js-menu-toggle"></span>
                    </div>
               </div>
               <div class="site-mobile-menu-body"></div>
          </div>


          <div class="top-bar">
               <div class="container">
                    <div class="row">
                         <div class="col-12">
                              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
                              <span class="mx-md-2 d-inline-block"></span>
                              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+44 7831 005306</span></a>


                              <div class="float-right">

                                   <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                                   <span class="mx-md-2 d-inline-block"></span>
                                   <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

                              </div>

                         </div>

                    </div>

               </div>
          </div>

          <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

               <div class="container">
                    <div class="row align-items-center position-relative">


                         <div class="site-logo">
                              <a href="index.html" class="text-black"><span class="text-primary">
                                        <img class="rounded" src="images/images.jpeg" width="130px">
                              </a>
                         </div>

                         <div class="col-12">
                              <nav class="site-navigation text-right ml-auto " role="navigation">

                                   <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                        <li><a href="#home-section" class="nav-link">Home</a></li>
                                        <li><a href="#services-section" class="nav-link">Services</a></li>


                                        <li class="has-children">
                                             <a href="#about-section" class="nav-link">About Us</a>
                                        </li>

                                        <li><a href="#why-us-section" class="nav-link">Why Us</a></li>

                                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                   </ul>
                              </nav>

                         </div>

                         <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    </div>
               </div>

          </header>

          <div class="ftco-blocks-cover-1">
               <div class="ftco-cover-1 overlay" style="background-image: url('https://source.unsplash.com/pSyfecRCBQA/1920x780')">
                    <div class="container">
                         <div class="row align-items-center">
                              <div class="col-lg-6">
                                   <h1>Choose Your Quality Delivery of Your Cargo</h1>
                                   <p class="mb-5">Handcrated with love by the fine folks at </p>
                                   <form action="tracking.inc.php" method="POST">
                                        <div class="form-group d-flex">
                                             <input type="text" class="form-control" name="trackingId" placeholder="Enter your tracking number">
                                             <input type="submit" name="track" class="btn btn-primary text-white px-4" value="Track Now">
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- END .ftco-cover-1 -->
               <div class="ftco-service-image-1 pb-5">
                    <div class="container">
                         <div class="owl-carousel owl-all">
                              <div class="service text-center">
                                   <a href="#"><img src="images/cargo_sea_small.jpg" alt="Image" class="img-fluid"></a>
                                   <div class="px-md-3">
                                        <h3><a href="#">SEA FLIGHT</a></h3>
                                        <p>Experience reliable and cost-effective transportation for your cargo across oceans and seas. We handle both Full Container Load (FCL) and Less than Container Load (LCL) shipments, ensuring secure and seamless transport.</p>
                                   </div>
                              </div>
                              <div class="service text-center">
                                   <a href="#"><img src="images/cargo_air_small.jpg" alt="Image" class="img-fluid"></a>
                                   <div class="px-md-3">
                                        <h3><a href="#">AIR FLIGHT</a></h3>
                                        <p>When time is crucial, our air flight services provide swift and efficient transportation for your goods. Benefit from our extensive network of airlines and enjoy fast and hassle-free delivery.</p>
                                   </div>
                              </div>
                              <div class="service text-center">
                                   <a href="#"><img src="images/cargo_delivery_small.jpg" alt="Image" class="img-fluid"></a>
                                   <div class="px-md-3">
                                        <h3><a href="#">Package Forwarding</a></h3>
                                        <p>Simplify the process of forwarding your packages to international destinations. We handle consolidation, documentation, and shipping arrangements, ensuring your packages reach the desired address worldwide.</p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

          </div>

          <div class="site-section bg-light" id="services-section">
               <div class="container">
                    <div class="row mb-5 justify-content-center">
                         <div class="col-md-7 text-center">
                              <div class="block-heading-1">
                                   <h2>What We Offer</h2>
                                   <p>Welcome to our logistics services! At Swift express, we offer a wide range of transportation and delivery solutions to meet your needs. Our dedicated team ensures secure and efficient handling of your goods, getting them to their destination promptly. Explore our services below:</p>
                              </div>
                         </div>
                    </div>
                    <div class="owl-carousel owl-all">
                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-ferry"></span>
                              </div>
                              <h3 class="mb-3">SEA FLIGHT</h3>
                              <p>Experience reliable and cost-effective transportation for your cargo across oceans and seas. We handle both Full Container Load (FCL) and Less than Container Load (LCL) shipments, ensuring secure and seamless transport.</p>
                         </div>

                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-airplane"></span>
                              </div>
                              <h3 class="mb-3">AIR FLIGHT</h3>
                              <p>When time is crucial, our air flight services provide swift and efficient transportation for your goods. Benefit from our extensive network of airlines and enjoy fast and hassle-free delivery. </p>
                         </div>

                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-box"></span>
                              </div>
                              <h3 class="mb-3">Package Forwarding</h3>
                              <p>Simplify the process of forwarding your packages to international destinations. We handle consolidation, documentation, and shipping arrangements, ensuring your packages reach the desired address worldwide.</p>
                         </div>

                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-lorry"></span>
                              </div>
                              <h3 class="mb-3">Trucking</h3>
                              <p>For domestic or regional transportation needs, our trucking services offer a dependable solution. Our well-maintained trucks and skilled drivers ensure safe and timely transport of your goods.</p>
                         </div>

                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-warehouse"></span>
                              </div>
                              <h3 class="mb-3">Warehouse</h3>
                              <p>Store your inventory securely in our warehouse facilities. Equipped with advanced security systems and climate-controlled environments, our warehouses accommodate various types of goods.</p>
                         </div>

                         <div class="block__35630">
                              <div class="icon mb-0">
                                   <span class="flaticon-add"></span>
                              </div>
                              <h3 class="mb-3">Delivery</h3>
                              <p>Ensure efficient last-mile delivery with our dedicated fleet of vehicles and trained personnel. We handle the intricacies of distribution, ensuring your products reach their final destination on time. </p>
                         </div>

                    </div>
               </div>
          </div>





          <div class="block__73694 site-section border-top" id="why-us-section">
               <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">

                         <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/cargo_sea_small.jpg');" data-aos="fade-left" data-aos-delay="">
                         </div>



                         <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
                              <h2 class="mb-4 text-black">Why Us</h2>
                              <h4 class="text-primary">We work quickly and efficiently!</h4>
                              <p>When it comes to logistics, we stand out from the competition. Here's why you should choose swift express for all your transportation and delivery needs:</p>

                              <ul class="ul-check primary list-unstyled mt-5">
                                   <li>Cargo express</li>
                                   <li>Secure Services</li>
                                   <li>Secure Warehouseing</li>
                                   <li>Cost savings</li>
                                   <li>Proven by great companies</li>
                              </ul>

                         </div>

                    </div>
               </div>
          </div>



          <?php
          include 'footer.php';
          ?>