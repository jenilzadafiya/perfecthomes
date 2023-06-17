<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
?>
  <!DOCTYPE html>

<head>
  <meta charset="utf-8" />
  <title>Perfect Build</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  
</html>
  <!-- Topbar Start -->
  <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
          <small class="fa fa-phone-alt me-2"></small>
          <small>+91 9104671383</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center border-end px-3">
          <small class="far fa-envelope-open me-2"></small>
          <small>perfectbuild952@gmail.com</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center border-end px-3">
          <small class="far fa-clock me-2"></small>
          <small>Mon - Fri : 10 AM - 7PM</small>
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center">
          <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <nav class="navbar logo navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <img src="img/logo.svg" width="400" height="80" alt="">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-3 py-lg-0">
        <a href="index.php" class="nav-item nav-link active">Home</a>
        <div class="nav-item dropdown">
                    <a href="profile.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="img/us24px.png" alt=""> <?php echo $_SESSION["name"]; ?></a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
        </div>            
        <a href="service.php" class="nav-item nav-link">Our Services</a>
        <a href="appointment/appointment.php" class="nav-item nav-link">Book Now</a>
        <a href="about.php" class="nav-item nav-link">About Us</a>
        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/img for pr/cphoto-1.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                    Welcome to Perfect Build
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    A Home Modification Company
                  </h1>
                  <ol class="breadcrumb mb-4 pb-2">
                  <li class="breadcrumb-item fs-5 text-light"></li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Commercial
                    </li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Residential
                    </li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Industrial
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/img for pr/cphoto-2.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                    Welcome to Perfect Build
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Professional Interior designing & Electrician Services
                  </h1>
                  <ol class="breadcrumb mb-4 pb-2">
                  <li class="breadcrumb-item fs-5 text-light"></li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Commercial
                    </li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Residential
                    </li>
                    <li class="breadcrumb-item fs-5 text-light">
                      Industrial
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                <h2 class="text-white">Great</h2>
                <h5 class="text-white mb-0">Experience</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">About Us</h6>
              <h1 class="display-6 mb-0">
                Unique Solutions For Residentials & Industries!
              </h1>
            </div>
            <p>
              Are you planning to do renovation of your own home but dont know where to start or who to go to?
              Perfect Build understands that it is a big decision when it comes to renovation and a long tedious
              process.
              Perfect Build offers top grade renovation services with transparency maintained at every level of the
              project.
            </p>
           
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Ontime at services</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">12/7 hours services</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Verified professionals</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <div class="container-fluid my-5 p-0">
    <div class="row g-0">
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-1.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">01</h1>
            <h4 class="text-white mb-3">Construction</h4>
            <p class="text-white">
              Let's construct a better tomorrow for your dreams & future generations 
            </p>
            <a class="text-white small" href="c1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-4.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">02</h1>
            <h4 class="text-white mb-3">electrician</h4>
            <p class="text-white">
              we are the fastest & most qualified electricians for every phase of your home 
              or business project.
            </p>
            <a class="text-white small" href="E1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-3.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">03</h1>
            <h4 class="text-white mb-3">plumbing</h4>
            <p class="text-white">
              Ready to handle any plumbing problems emergency - anytime at anywhere
            </p>
            <a class="text-white small" href="p2.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-2.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">04</h1>
            <h4 class="text-white mb-3">Interior Design</h4>
            <p class="text-white">
              we have the passion for design that fits you like a glove.
            </p>
            <a class="text-white small" href="it1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->

  <!-- Features Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
            <h1 class="display-6 mb-0">
              Our Specialization And Company Features
            </h1>
          </div>
         
          <div class="row gy-5 gx-4">
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Large number of services is done.</h6>
              </div>
              <span>we have many services available for instance plumbing, interior designing, electrician & so on</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">the load for customer will decrease.</h6>
              </div>
              <span>customer don't have any pressure for searching labours</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">we are associated with many companies</h6>
              </div>
              <span>we are connected with many companies so that customer makes the choice from it.</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">surity for performance bond.</h6>
              </div>
              <span>we have the performance bond from the Building companies so the problems of bad performance is solved.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="img/img for pr/cphoto-3.jpg" alt="" style="object-fit: cover" />
            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                <h2 class="text-white">Valuable</h2>
                <h5 class="text-white mb-0">performance</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Our Services</h6>
            <h1 class="display-6 mb-0">
              Construction And Renovation Solutions
            </h1>
          </div>
        </div>
        <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
          <a class="btn btn-primary py-3 px-5" href="">More Services</a>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/img for pr/painting-2.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">painting</h5>
              <p>
                painting of house will create illusion of nature with true colors.
              </p>
              <a class="small" href="paint.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/service-2.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Home Maintainance</h5>
              <p>
                it is required to do changes in house at a time.
              </p>
              <a class="small" href="homemain.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/img for pr/plumbing-2.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Plumbing</h5>
              <p>
                it is related to trade of pipe fitting and steam fitting.
              </p>
              <a class="small" href="p2.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/img for pr/interiornew-1.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Interior Designning</h5>
              <p>
                with attics - to utilise the unused extra space with beautiful designs.
              </p>
              <a class="small" href="it1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/img for pr/electrician-1.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Electrician</h5>
              <p>
                wiring of property should be checked and certified by a NICEIC registered electrician. 
              </p>
              <a class="small" href="E1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="img/img for pr/building_constr-2.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Building Construction</h5>
              <p>
                give you oppurtunity to create your own liked Construction.
              </p>
              <a class="small" href="c1.php">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

 
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Our Team</h6>
            <h1 class="display-6 mb-0">Our Expert Worker</h1>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <p class="mb-0">
           you can accomplish amazing things when you build a trusted team.
           so, don't worry about work we have a great and knowledgable team 
           which complete your creation within a time period. 
          </p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="img/team-1.jpg" alt="" />
            <div class="team-text bg-white p-4">
              <h5>Full Name</h5>
              <span>Engineer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="img/team-2.jpg" alt="" />
            <div class="team-text bg-white p-4">
              <h5>Full Name</h5>
              <span>Engineer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="img/team-3.jpg" alt="" />
            <div class="team-text bg-white p-4">
              <h5>Full Name</h5>
              <span>Engineer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  
  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h1 class="text-white mb-4">
            <i class="fa fa-building text-primary me-3"></i>Perfect Build
          </h1>
          <p>
           
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-outline-primary me-0" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Address</h4>
          <p>
            <i class="fa fa-map-marker-alt me-3"></i>S G highway, Ahmedabad, Gujarat 
          </p>
          <p><i class="fa fa-phone-alt me-3"></i>+91 000 00000</p>
          <p><i class="fa fa-envelope me-3"></i>perfectbuild952@gmail.com</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Quick Links</h4>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Our Services</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
          <a class="btn btn-link" href="">Support</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Newsletter</h4>
          <p>for new updates and news.</p>
          <div class="position-relative mx-auto" style="max-width: 400px">
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
              SignUp
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="#">www.perfectBuild.com</a>, All Right Reserved.
          </div>
          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
           <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
            <br />Distributed By:
            <a href="https://themewagon.com" target="_blank">ThemeWagon</a>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>
?>
</body>

</html>