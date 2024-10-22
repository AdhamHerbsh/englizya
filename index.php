<!DOCTYPE html>
<html lang="en">

<head dir="rtl">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Englizya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>



<?php include 'assets/php/header.php'; ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>ENGLIZYA</span></h1>
      <h2>Englizya Bus strives to become the largest land transportation network in Egypt, aiming to expand its reach
        and enhance its services to meet the needs of travelers across the country.</h2>
      <div class="d-flex">
        <button class="btn-get-started">
          <a href="#book" class="get-started scrollto"><span>Get Started</span></a>
        </button>
        <a href="https://scontent.cdninstagram.com/v/t50.2886-16/406004892_1433586370871790_5543723125167105026_n.mp4?_nc_ht=scontent.cdninstagram.com&_nc_cat=106&_nc_ohc=5kYzIv8mWvsAX8j0_fI&edm=APs17CUBAAAA&ccb=7-5&oh=00_AfBrcdtKdZAdO84Z3HdpEnWUi6wUPwoHY_ScjjQULdW9Ng&oe=65D74B73&_nc_sid=10d13b" class="glightbox btn-watch-video"><i
            class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Book Section ======= -->
    <section id="book" class="book">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Book</h2>
          <h3>Choose Way To <span>Travel</span></h3>
          <p>The largest transportation network in Egypt...Achievements on the ground</p>
        </div>
        <div class="row">

          <form action="">
            <div class="bg-input row mx-2 ">
              <div class="col-md-auto col-sm-6">
                <label for="FromDataList">From</label>

                <input class="form-control" list="datalistOptions" id="FromDataList" placeholder="From...">
                <datalist id="datalistOptions">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
                </datalist>
              </div>
              <div class="col-md-auto col-sm-6">
                <label for="ToDataList">To</label>
                <input class="form-control" list="datalistOptions" id="ToDataList" placeholder="To...">
                <datalist id="datalistOptions">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
                </datalist>
              </div>
              <div class="col-md-auto col-sm-6">
                <div class="form-group">
                  <label for="GoDate">Go Date</label>
                  <input type="date" class="form-control" id="GoDate" />
                </div>
              </div>
              <div class="col-md-auto col-sm-6">
                <div class="form-group">
                  <label for="ReturnDate">Return Date</label>
                  <input type="date" class="form-control" id="ReturnDate" />
                </div>
              </div>
              <div class="col-md-auto col-sm-6 text-center">
                <button type="submit"><i class="bx bx-search"></i></button>
              </div>

            </div>
          </form>


        </div>

      </div>
    </section><!-- End Book Section -->



    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-search"></i></div>
              <h4 class="title"><a href="">Search</a></h4>
              <p class="description">Determine where you will travel from and choose the appropriate date for your trip
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-calendar-check"></i></div>
              <h4 class="title"><a href="">Choose</a></h4>
              <p class="description">Choose the trip that suits you from the best offers available</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-bus"></i></div>
              <h4 class="title"><a href="">Travel</a></h4>
              <p class="description">You will find the tickets registered in your name at the station. Just call your
                phone number to get the bus tickets</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Destinations Section ======= -->
    <section id="destinations" class="destinations section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Destinations</h2>
          <h3>Explore Our Most Popular <span>Destinations</span></h3>
          <p>We provide the largest network of land transportation lines in Egypt, covering all governorates, in
            addition to being available throughout the year</p>
        </div>

        <!-- <div class="row"> -->
        <div class="card-deck d-md-flex ">
          <div class="card">
            <img class="card-img-top" src="assets/img/destinations/alfayeom-line(Tamiea-61-Alfayeom).png"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fayoum 61</h5>
              <p class="card-text">Aboshoea (Church) </p><i class="bi bi-arrow-down-up"></i>
              <p class="card-text mt-2">Fayoum (College of Engineering) </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="assets/img/destinations/alfayeom-line(Abshoea-62-Alfayeom).png"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fayoum 62</h5>
              <p class="card-text">Aboshoea (Church) </p><i class="bi bi-arrow-down-up"></i>
              <p class="card-text mt-2">Fayoum (College of Engineering) </p>

            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="assets/img/destinations/alfayeom-line(Youssef_Elsedik-63-Alfayeom).png"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fayoum 63</h5>
              <p class="card-text">Youssef_Elsedik </p><i class="bi bi-arrow-down-up"></i>
              <p class="card-text mt-2">Fayoum (College of Engineering) </p>
            </div>
          </div>
        </div>
        <!-- </div> -->

      </div>
    </section><!-- End Destinations Section -->




    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Englizya provides you with all land transportation buses in one place. You can see and compare prices and
            services and choose the company and price that is appropriate for you.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-credit-card"></i></div>
              <h4><a href="">Payment Methods</a></h4>
              <p>Englizya offers more than one payment method for booking tickets, including cash or credit cards</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4><a href="">Gifts</a></h4>
              <p>Englizya offers you gifts on a regular basis with monitoring operations during us</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-support"></i></div>
              <h4><a href="">Support</a></h4>
              <p>We are honored to provide support to users throughout the day through customer service numbers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Advertisement Section ======= -->

    <section id="advertisement" class="advertisement" data-aos="fade-up">

      <div class="bg-video">
        <video width="100%" autoplay muted loop>
          <source src="assets/video/Egypt-Cairo.mp4" type="video/mp4">
        </video>
      </div>
      <div class="container">
        <div class="content d-flex">
          <div class="f col-md-6 col-sm-12">
            <h2>The application will be available soon</h2>
            <p>The mobile application will be available as soon as possible. We are working on developing the
              application to facilitate the reservation process and save time and effort for users, and it will be
              available to you as soon as possible.</p>
            <div class="btn-container">
              <button>iPhone application</button>
              <button>Android application</button>
            </div>
            <div class="ads-video">
              <video width="100%" autoplay muted loop controls>
                <source src="assets/video/Ads-Mobile-App.mp4">
              </video>
            </div>
          </div>
          <div class="s col-md-6 col-sm-12 text-center">
            <img src="assets/img/ads/mockup-englizya.png" alt="image not found" />
            <div class="collage">Englizya</div>
            <div class="collage image"></div>
            <div class="collage"><span><p>englizya.com  <i class="bx bx-search"></i></p></span></div>
          </div>
        </div>
      </div>

    </section><!-- End Advertisement Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
            autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Cairo, Egypt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@englizya.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+201143799977</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
              id="gmap_canvas"
              src="https://maps.google.com/maps?width=620&amp;height=400&amp;hl=en&amp;q=%D8%A7%D9%84%D8%A7%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A%D8%A9%20%D9%84%D9%84%D9%86%D9%82%D9%84%20%D8%A7%D9%84%D8%AC%D9%85%D8%A7%D8%B9%D9%8A%20Cairo+(Shubra%20El%20Kheima)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group my-2">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group my-2">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group my-2">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group my-2">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'assets/php/footer.php'; ?>


  <div id="preloader">
    <div class="loader-wrapper">
      <div class="truck-wrapper">
        <div class="truck">
          <div class="truck-container"></div>
          <div class="glases"></div>
          <div class="bonet"></div>

          <div class="base"></div>

          <div class="base-aux"></div>
          <div class="wheel-back"></div>
          <div class="wheel-front"></div>

          <div class="smoke"></div>
        </div>
      </div>
    </div>
  </div>





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>