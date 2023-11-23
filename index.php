<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: form.html"); 
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Cylinder Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- /* ----------------------------------- */ -->
    <!-- navbar start here -->
    <!-- /* ----------------------------------- */ -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      
         <img src="assets/img/p.jpg" alt="Logo" 
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#feedback">Feedback</a></li>
          
      
          
      </nav>
 <!-- Booking button stat here  -->
      <a class="btn-book-a-table" href="#book-a-cylinder">Booking</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <!-- Booking button end here   -->

      <!-- login Botton start here   -->
      <a class="btn-book-a-table" href="logout.php"><i class="fa-solid fa-user"></i>Logout</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
<!-- login Botton End here   -->
    </div>
  </header>
  <!-- navbar end here  -->

      <!-- /* ----------------------------------- */ -->
  <!-- template Section start here -->
      <!-- /* ----------------------------------- */ -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">India Oil<br>Gas Agency</h2>
          <p data-aos="fade-up" data-aos-delay="100">Welcome, <?php echo $username; ?>! In this site we provide online cylinder booking for customers to book online cylinder
            der and do not waste their time</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Booking</a>
            <a href="https://www.youtube.com/watch?v=hsaqauzJKvA" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video for safety</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.jpeg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- templete section end here -->
  
      <!-- /* ----------------------------------- */ -->
    <!-- about section  with play button start here  -->
        <!-- /* ----------------------------------- */ -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Online cylinder booking</h4>
             
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
               To want to book online cylinder at home. Plz contact below number and follow the instructions on call. Hold on call and pressing the numbers.
              </p>
              <ul>
                <li><i class="fa-solid fa-phone-volume"></i> Firstly call below the number.</li>
                <li><i class="fa-solid fa-person-chalkboard"></i> Follow the instructions's , on the call.</li>
                <li><i class="fa-regular fa-address-card"></i> Confirm your identitiy , and end the call</li>
              </ul>
              <p>
                Below the video we provide for customers , to how to book online cylinder at home,Hover on red icon to show play button.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="image">
                <a href="https://www.youtube.com/watch?v=3TvyD9Wdpsc" class=" play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

        <!-- /* ----------------------------------- */ -->
    <!-- Why Us Section with play button  start here -->
        <!-- /* ----------------------------------- */ -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <!-- why us color primary color start here  -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Indian Oil Gas Agency?</h3>
              <p>
                In Indian Oil Website We provide best Service for lpg gas to book online cylinder.
              </p> 
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!-- why us color primary color End here  -->
          <!-- Ranking section to contact us start here  -->
          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="fa-solid fa-ranking-star"></i>
                  <h4>Ranking</h4>
                  <p>Indian Oil Gas Service is the most famous gas agency in India. The rank of this Gas agency is in India's 2nd position</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="fa-brands fa-servicestack"></i>
                  <h4>Our Services</h4>
                  <p>In website we provide all types of LPG gas services like BharatGas agency,Indian oil,HpGas agency etc.</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="fa-regular fa-address-card"></i>
                  <h4>Contact Us</h4>
                  <p>for further details to contact us</p>
                </div>
              </div>
            </div>
          </div>
                    <!-- Ranking section to contact us End here  -->


        </div>
      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- /* ----------------------------------- */ -->
    <!-- Trasform bar start here  -->
        <!-- /* ----------------------------------- */ -->
    <section id="stats-counter" class="stats-counter">
     
    </section>
        <!-- Trasform bar end here  -->

    <!-- /* ----------------------------------- */ -->
    <!-- =======Our Services Option List start here  ======= -->
        <!-- /* ----------------------------------- */ -->
    <section id="service" class="service">
      <div class="container">

        <div class="section-header">
          <h2>LPG GAS</h2>
          <p>Check Our <span>LPG Gas</span></p>
        </div>

        <ul class="nav nav-tabs justify-content-center"  data-aos-delay="500">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#service-starters">
              <h4>Indane Gas</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#service-breakfast">
              <h4>HP Gas</h4>
            </a>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#service-lunch">
              <h4>Bharat Gas</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#service-dinner">
              <h4>Reliance Gas</h4>
            </a>
          </li>

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="service-starters">

            <div class="tab-header text-center">
              <p>LPG</p>
              <h3>Gas</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/Untitled.png" class="glightbox"><img src="assets/img/menu/Untitled.png" class="service-img img-fluid" alt=""></a>
                <h4>Indane Oil Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹1000.10
                </p>
              </div>

            </div>
          </div><!-- End Feedback  section  -->

          <div class="tab-pane fade" id="service-breakfast">

            <div class="tab-header text-center">
              <p>LPG </p>
              <h3>Gas</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>HP Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>HP Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>HP Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>HP Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>HP Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="service-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹ 930 
                </p>
              </div>

            </div>
          </div>

          <div class="tab-pane fade" id="service-lunch">

            <div class="tab-header text-center">
              <p>LPG</p>
              <h3>Gas</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="service-img img-fluid" alt=""></a>
                <h4>Bharat Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹954.50 
                </p>
              </div>

            </div>
          </div>

          <div class="tab-pane fade" id="service-dinner">

            <div class="tab-header text-center">
              <p>LPG</p>
              <h3>Gas</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas </h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹912.50
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  ₹912.50
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                    ₹912.50
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                    ₹912.50
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                   ₹912.50
                </p>
              </div>

              <div class="col-lg-4 service-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="service-img img-fluid" alt=""></a>
                <h4>Reliance Gas</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                   ₹912.50
                </p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
        <!-- =======Our Services Option List End here  ======= -->

    <!-- /* ----------------------------------- */ -->
   <!-- Feedback section start here  -->
       <!-- /* ----------------------------------- */ -->
    <section id="feedback" class="feedback section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Feedback</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="feedback-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="feedback-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                          This website is very usefull for me coz this site is saving my time to booking online cylinder here.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="feedback-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="feedback-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        This site is awesome , i am giving 5 star rating for saving my time.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="feedback-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="feedback-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       WOW that's greate website it's very helpful for all customers to book their online cylinder here. I am giving 5 star rating.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="feedback-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Nice, Website can save all customers time and very attractive website. that's awesome website.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
   <!-- Feedback section start here  -->

    
       <!-- /* ----------------------------------- */ -->
         <!-- worker section start here -->
          <!-- /* ----------------------------------- */ -->
    <section id="worker" class="worker section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Workers</h2>
          <p>Our <span>Proffesional</span> Workers</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="worker-member">
              <div class="member-img">
                <img src="assets/img/worker/chefs-1.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Walter </h4>
                <p>This website is very awesome it is very helpful to customers can buy cylinder online ,that's great </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="worker-member">
              <div class="member-img">
                <img src="assets/img/worker/chefs-2.jpg" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4> Jhonson</h4>
                <p>This website is very awesome it is very helpful to customers can buy cylinder online ,that's great </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="worker-member">
              <div class="member-img">
                <img src="assets/img/worker/chefs-3.jpg" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <h4>William </h4>
                <p>This website is very awesome it is very helpful to customers can buy cylinder online ,that's great </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
<!-- worker section end here  -->


        <!-- /* ----------------------------------- */ -->
        <!-- Book A cylinder Section start here  -->
          <!-- /* ----------------------------------- */ -->
    <section id="book-a-cylinder" class="book-a-cylinder">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Cylinder</h2>
          <p>Book <span>Your Cylinder</span> Here</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 cylinder-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center cylinder-form-bg">
            <form action="backend.php" method="post" role="form" class="form" data-aos="fade-up" data-aos-delay="100">              
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
             
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
         
              <div class="text-center"><button type="submit">Book Cylinder</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
            <!-- Book A cylinder Section End here  -->

 
          <!-- /* ----------------------------------- */ -->
          <!-- Contact Us Section Start here  -->
           <!-- /* ----------------------------------- */ -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon fa-regular fa-address-card flex-shrink-0"></i>
              <div>
                <h3> Address</h3>
                <p>Ludhiana</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon fa-solid fa-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><strong>Indianoil@gmail.com</strong></p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon fa-solid fa-phone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91 78890 00521 </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon fa-solid fa-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 09AM - 05PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form p-3 p-md-4">
          <div class="row">
            <form action="feedback.php" method="post">
            <div class="col-xl-6 form-group">
              <input type="text"  class="form-control" name = "name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name = "email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name = "phone" placeholder="Phone number" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name = "feedback" rows="5" placeholder="Feedback" required></textarea>
          </div>
         
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
       </div>
      </div>
    </section>
           <!-- Contact Us Section End here  -->

  <!-- /* ----------------------------------- */ -->
  <!-- Footer section start here  -->
   <!-- /* ----------------------------------- */ -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Ludhiana Dugri Road<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +91 78890 00521 <br>
              <strong>Email:</strong> Indian12oil@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 09AM</strong> - 05PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Indian Oil</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="">Shubham</a>
      </div>
    </div>
  </footer>
    <!-- Footer section End here  -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi fa-solid fa-arrow-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>
</html>