 <footer class="site-footer">
      <div class="container">
           <div class="row">
                <div class="col-md-6">
                     <div class="row">
                          <div class="col-md-7">
                               <h2 class="footer-heading mb-4">About Us</h2>
                               <p>At swift express, we are a leading logistics service provider focused on efficient transportation and delivery solutions. With a dedicated team of professionals, we prioritize the secure handling and timely delivery of your goods. Our cost-effective services and proven track record make us the trusted choice for businesses of all sizes. Experience our commitment to excellence in logistics today.</p>
                          </div>
                          <div class="col-md-4 ml-auto">
                               <h2 class="footer-heading mb-4">Features</h2>
                               <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                               </ul>
                          </div>

                     </div>
                </div>
                <div class="col-md-4 ml-auto">

                     <div class="mb-5">
                          <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                          <form action="#" method="post" class="footer-suscribe-form">
                               <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                         <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                                    </div>
                               </div>
                     </div>

                     </form>
                </div>
           </div>
           <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                     <div class="border-top pt-5">
                          <p class="copyright">
                               <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                               &copy; <script>
                                    document.write(new Date().getFullYear());
                               </script> <strong>Swift express logistics</strong> Free Website Template. All Rights Reserved. Design by
                          </p>
                     </div>
                </div>

           </div>
      </div>
 </footer>

 </div>

 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/jquery.sticky.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.animateNumber.min.js"></script>
 <script src="js/jquery.fancybox.min.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/aos.js"></script>

 <script src="js/main.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script>
      <?php
          if (isset($success) && isset($msg)) {
               if ($success && !empty($msg)) {
          ?>
                swal({
                     title: "Oops!",
                     text: "<?php echo $msg; ?>",
                     icon: "success",
                });
           <?php
               } elseif (!$success && !empty($msg)) { ?>
                swal({
                     title: "Oops!",
                     text: "<?php echo $msg; ?>",
                     icon: "error",
                });
      <?php
               }
          }
          ?>
 </script>
 <script type="text/javascript">
      function googleTranslateElementInit() {
           new google.translate.TranslateElement({
                pageLanguage: 'en'
           }, 'google_translate_element');
      }
 </script>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



 </body>

 </html>