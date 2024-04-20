<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>contact</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="d:\Impact\assets\img\Rfavicon.jpg" rel="icon">
    <link href="ext/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="ext/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="ext/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="ext/vendor/aos/aos.css" rel="stylesheet">
    <link href="ext/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="ext/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">



    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1>RoomsWear<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="shop2.php">Shop</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- ======= Contact Section ======= -->
    <div class="container" data-aos="fade-up">

        <div class="section-header">

            <br><br><br>
            <br><br><br>
           
            <h2>Contact</h2>
            <p>A Contact Us page is a dedicated page on a website where visitors can find out how to get in touch with
                the
                company</p>
        </div>
        <section id="contact" class="contact">
            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p> Floor#2 <br>
                                    karachi, Saima Trade Tower 7400 <br>
                                    iic chundiagar road <br><br></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>RoomsWear@website.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p> 0321-123456</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>


                <div class="col-lg-8">
                    <form method="POST" id="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                required></textarea>
                        </div>
                        <button type="submit" name="go">Send Message</button>
                        <?php

if(isset($_POST['go'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $q = "INSERT INTO `conta`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
$db = mysqli_connect('localhost','root','','contacts');
$j = mysqli_query($db,$q);
if($email AND $subject AND $message){
  echo '<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div> ';
}else{
  echo '<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>';
}
}

?>
                    </form>
                </div><!-- End Contact Form -->

            </div>

    </div>
    </section>
    <br><br><br>
    <br><br><br>
    <footer id="footer" class="footer" style="background-color: #402424;">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <span style="color: white;">RoomsWear</span>
                    </a>
                    <p style="color: white;">Choose a wide range of well-crafted premium
                        quality wooden furniture online.</p>
                    <div class="social-links d-flex mt-4">
                        <a style="color: white;" href="#" class="twitter"><i style="color: white;"
                                class="bi bi-twitter"></i></a>
                        <a style="color: white;" href="#" class="facebook"><i style="color: white;"
                                class="bi bi-facebook"></i></a>
                        <a style="color: white;" href="#" class="instagram"><i style="color: white;"
                                class="bi bi-instagram"></i></a>
                        <a style="color: white;" href="#" class="linkedin"><i style="color: white;"
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 style="color: white;">Useful Links</h4>
                    <ul style="color: white;">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 style="color: white;">Our Services</h4>
                    <ul>
                        <li><a href="#">Make your custom Design</a></li>
                        <li><a href="#">you can shop easily by RoomsWear </a></li>
                        <li><a href="#">Product Management</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4 style="color: white;">Contact Us</h4>
                    <p style="color: white;">
                        Floor#2 <br>
                        karachi, Saima Trade Tower 7400 <br>
                        iic chundiagar road <br><br>
                        <strong>Phone:</strong> 0321-123456<br>
                        <strong>Email:</strong> RoomsWear@website.com<br>
                    </p>

                </div>

            </div>
        </div>



    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="rt-d4289aafe3e7b7eb15d90231827ddf88" data-floating="true" data-side="right" data-width="700"
        data-height="500" data-user-counter="14,23" data-message-counter="0,60"></div>


    <div id="preloader"></div>


    <script src="ext/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="ext/vendor/aos/aos.js"></script>
    <script src="ext/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="ext/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="ext/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="ext/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="ext/vendor/php-email-form/validate.js"></script>


    <script src=" main.js"></script>
</body>

</html>