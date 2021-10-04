<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TravaBunny</title>
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="css/travel/style.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="style.css"> --}}
    {{-- <link rel="stylesheet" href="css/all.css"> --}}

    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/css/fontawesome-all.css" rel="stylesheet">
    <link href="css/css/swiper.css" rel="stylesheet">
	<link href="css/css/magnific-popup.css" rel="stylesheet">
	<link href="css/css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        .banner-image {
            background-image: url("img/background.jpg");
            background-size: cover;
            border-radius: 5px;         
        }
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            border-radius: 10px;
            font-family: 'Ubuntu', sans-serif;
        }

        section {
            width: 90%;
            margin: 0px auto;
        }

        h2 {
          color: #2e4857;
            text-align: center;
            margin: 80px auto;
            font-weight: bold;
            font-size: 50px;
        }

        ul li img {
            width: 100%;
            height: 300px;
        }

        footer {
  background: #2e4857;
  overflow-x: hidden;
  padding: 14vmin 18vmin;
}

footer p > span {
  color: #ff512f;
}

footer input {
  border: none !important;
}

footer input::placeholder {
  color: white !important;
}

footer .input-group .input-group-text {
  background: var(--bggradient);
  border: none;
}

footer .column i {
  color: #dd2476;
}

/* It is Adjacent sibling combinator */

footer .column i + i {
  padding: 0 0.5em;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.815);
  z-index: 9999;
  transition: all 1.5s ease;
}
        
        
    </style>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" style="width:300px"></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#f2ac77"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#f2ac77"><b>Packages</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#f2ac77"><b>Blog</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#f2ac77"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:#f2ac77"><b>Login</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- Banner Image  -->
      
      <div class="banner-image w-100 vh-100 p-2 justify-content-center align-items-center">
        <div class="content text-center" style="">
          <h1 class="text-white" style="margin-top: 300px;">You have the freedom to choose your adventure</h1>
          <br>
          <h3 class="text-white">Search Compare & Securely book multi-day tours</h3><br>
          <div class="container">     
            <form id="booking-form" class="booking-form" method="POST">
                <div class="form-group">
                    <div class="form-destination">
                        <label for="destination" style="margin-right: 150px;">Where To...</label>
                        <input type="text" id="destination" name="destination" placeholder="EG. BORACAY" />
                    </div>
                    <div class="form-date-from form-icon">
                        <label for="date_from" style="margin-right: 150px;">When</label>
                        <input type="text" id="date_from" class="date_from" placeholder="Pick a date" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-date-to form-icon">
                        <label for="date_to" style="margin-right: 150px;">To</label>
                        <input type="text" id="date_to" class="date_to" placeholder="Pick a date" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-quantity">
                        <label for="quantity" style="margin-right: 150px;">Quantity</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="quantity" id="quantity" value="0" min="0" class="nput-text qty text">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" value="Search" />
                    </div>
                </div>
            </form>
        </div>
        </div>
      
          
      </div>
      
  
      <!-- Main Content Area -->
      <section>
        <div>
            <h2>Our Destinations</h2>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="img/boracay.jpg" alt="boracay"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/siargao.jpg" alt="siargao"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/cebu.jpg" alt="cebu"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/elnido.jpg" alt="el-nido"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/coron.jpg" alt="coron"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/bohol.jpg" alt="bohol"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/boracay.jpg" alt="boracay"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/siargao.jpg" alt="siargao"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/cebu.jpg" alt="cebu"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/elnido.jpg" alt="el-nido"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/coron.jpg" alt="coron"/>
                        </li>
                        <li class="splide__slide">
                            <img src="img/bohol.jpg" alt="bohol"/>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <div id="intro" class="basic-1">
      <div class="container">
          <div class="row" style="background-color: white">
              <div class="col-lg-5">
                  <div class="text-container" style="background-color: white">
                      <h4 style="color: #2e4857">Who are We</h4><br><br>
                      <h3 style="color: #2e4857"><b> Closing the gap and bringing the world closer to you</b></h3><br>
                      <p>TravaBunny is a travel platform that aims to make traveling more convenient and efficient by providing a wide range of travel packages from various travel agencies all over the Philippines in just one platform.</p>
                      {{-- <p class="testimonial-text">"Our mission here at Aira is to get you through those tough moments relying on our team's expertise in starting and growing companies."</p>
                      <div class="testimonial-author">Louise Donovan - CEO</div> --}}
                  </div> <!-- end of text-container -->
              </div> <!-- end of col -->
              <div class="col-lg-7">
                  <div class="image-container">
                      <img class="img-fluid" style="" src="img/travel.jpg" alt="alternative">
                  </div> <!-- end of image-container -->
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of basic-1 -->
  <!-- end of intro -->


  <!-- Description -->
  <div class="cards-1" style="background-color: #2e4857">
      <div class="container">
          <div class="row" style="background-color: #2e4857">
              <div class="col-lg-12">
                  
                  <!-- Card -->
                  <div class="card" style="background-color: #2e4857">
                      <span class="fa-stack">
                          <span class="hexagon"></span>
                          <i class="fas fa-calendar fa-stack-1x"></i>
                      </span>
                      <div class="card-body">
                          <h4 class="card-title" style="color: white">Environment Analysis</h4>
                          <p style="color: white">The starting point of any success story is knowing your current position in the business environment</p>
                      </div>
                  </div>
                  <!-- end of card -->

                  <!-- Card -->
                  <div class="card" style="background-color: #2e4857">
                      <span class="fa-stack">
                          <span class="hexagon"></span>
                          <i class="fas fa-list-alt fa-stack-1x"></i>
                      </span>
                      <div class="card-body">
                          <h4 class="card-title" style="color: white">Development Planning</h4>
                          <p style="color: white">After completing the environmental analysis the next stage is to design and  plan your development strategy</p>
                      </div>
                  </div>
                  <!-- end of card -->

                  <!-- Card -->
                  <div class="card" style="background-color: #2e4857">
                      <span class="fa-stack">
                          <span class="hexagon"></span>
                          <i class="fas fa-chart-pie fa-stack-1x"></i>
                      </span>
                      <div class="card-body">
                          <h4 class="card-title" style="color: white">Execution & Evaluation</h4>
                          <p style="color: white">In this phase you will focus on executing the actions plan and evaluating the results after each marketing campaign</p>
                      </div>
                  </div>
                  <!-- end of card -->

              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div>
  {{-- </div> --}}

  

  <div class="skills">
    <h2>Why Travel With Us</h2>
    <div class="skill-row">
      <img src="img/travel-1.jpg" class="codeimg" alt="travel-jpg">
      <h3 style="color: #2e4857"><b>Wide range of options</b></h3><br>
      <p>We have partnered with several travel agencies to give you the hottest deals! With our filtering features, you can instantly choose the perfect package that fits your needs—no waiting time!</p>
    </div>
    
    <div class="skill-row">
      <img src="img/travel-2.jpg" class="cait" alt="raffy-jpg">
      <h3 style="color: #2e4857"><b>Safe and secure</b></h3>
      <p>You can count on us to keep your information safe</p>
    </div>
    <br>
    <div class="skill-row">
      <img src="img/travel-3.jpg" class="codeimg" alt="kenneth-jpg">
      <h3 style="color: #2e4857"><b>Completely digital</b></h3>
      <p class="marg">You can do all the planning and booking wherever you are, instantly. You’re in control!</p>
    </div>
    <BR>
    <div class="skill-row">
      <img src="img/travel-4.jpg" class="cait" alt="kenneth-jpg">
      <h3 style="color: #2e4857"><b>Customer Service</b></h3>
      <p>Can’t find the right deals? Have questions?
        Our support team is ready to serve you.</p><br><br><br><br><br><hr>
    </div>
  </div>


  <section class="section-4">
    <div class="container text-center" style="background-color: white">
      <h2 class="" style="color: #2e4857"><b>Reviews</b></h2>
      <p class="text-secondary">What are Clients say about us</p>
    </div>
    <div class="team row ">
      <div class="col-md-4 col-12 text-center">
          <div class="card mr-2 d-inline-block shadow-lg">
              <div class="card-img-top">
                <img src="assets/UI-face-3.jpg" class="img-fluid border-radius p-4" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-title" style="color: #2e4857">Blalock Jolene</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                  minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                </p>
                <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                <p class="text-black-50">CEO at Google</p>
              </div>
            </div>
      </div>
      <div class="col-md-4 col-12">
          <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
              <div class="carousel-inner text-center">
                <div class="carousel-item active">
                  <div class="card mr-2 d-inline-block shadow">
                    <div class="card-img-top">
                      <img src="assets/UI-face-1.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title" style="color: #2e4857">Allen Agnes</h3>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                        minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                      </p>
                      <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                      <p class="text-black-50">CEO at Google</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card  d-inline-block mr-2 shadow">
                    <div class="card-img-top">
                      <img src="assets/UI-face-2.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title" style="color: #2e4857">Amiel Barbara</h3>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                        minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                      </p>
                      <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                      <p class="text-black-50">CEO at Google</p>
                    </div>
                  </div>
                </div>
            </div>
      </div>
      </div>
      <div class="col-md-4 col-12 text-center">
          <div class="card mr-2 d-inline-block shadow-lg">
              <div class="card-img-top">
                <img src="assets/UI-face-4.jpg" class="img-fluid border-radius p-4" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-title" style="color: #2e4857">Olivia Louis</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                  minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                </p>
                <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                <p class="text-black-50">CEO at Google</p>
              </div>
            </div>
      </div>
    </div>
  </section><br><br>
<!-- Remove the container if you want to extend the Footer to full width. -->


<footer>
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <h4 class="text-light">About us</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
        <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This template is made with by
          <span> Trava Bunny</span>
        </p>
      </div>
      <div class="col-md-5 col-sm-12">
        <h4 class="text-light">Newsletter</h4>
        <p class="text-muted">Stay Updated</p>
        <form class="form-inline">
          <div class="col pl-0">
            <div class="input-group pr-5">
              <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-2 col-sm-12">
        <h4 class="text-light">Follow Us</h4>
        <p class="text-muted">Let us be social</p>
        <div class="column text-light">
          <i class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>
    </div>
  </div>
</footer>

    <script>
      new Splide('.splide', {
          perPage: 3,
          perMove: 1,
          loop: true,
      }).mount();
  </script>

  

  <!-- Splide js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script>
      new Splide('.splide', {
          perPage: 3,
          rewind: true,
          perMove: 1,
          gap: "1rem",
      }).mount();
  </script>


      <script src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 100) {
            nav.classList.add('bg-light', 'shadow');
          } else {
            nav.classList.remove('bg-light', 'shadow');
          }
        });
      </script>


    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

    <!-- Scripts -->
    <script src="js/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js//jsvalidator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
