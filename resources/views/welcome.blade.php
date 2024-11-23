<!DOCTYPE html>
<html lang="en">

@include('layout.index_header')

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Fit<span>S</span>ync</h1>
      </a>

     {{-- nav --}}
     @include('layout.index_navbar')

    </div>
  </header>
  <!--test new header-->
<!-- Merged Hero Section -->
<!-- <div class="container hero rounded-3"> -->

<section class="hero-section bg-heading py-lg-14 py-12 rounded" style="background-image: url('background.jpg');">
  <div class="container hero rounded-3">
      <!-- Row for content and image slider -->
      <div class="row align-items-center justify-content-between">
          <!-- Text Content -->
          <div class="col-lg-4 col-12 order-lg-1 text-light">
              <div class="text-center text-md-start">
                  <!-- Heading and Description -->
                  <!-- <span class="section-subtitle">Welcome</span> -->
                  <h1 class="fw-bold mb-3 text-light">Transform Your Fitness Journey with Expert Trainers</h1>
                  <p class="lead">Browse top personal trainers, track your workouts, and get AI-powered fitness plans.</p>
                  <!-- Call-to-Action Button -->
                  <p class="mt-4">
                      <!-- <a href="#" class="btn btn-primary btn-get-started">Find a Trainer</a> -->
        <a href="" class="btn btn-see-more">Get Started</a>

                  </p>
              </div>
          </div>

          <!-- Image Slider -->
          <div class="col-lg-7 col-12 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="400">
              <div class="swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                      {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                              "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                              "el": ".swiper-pagination",
                              "type": "bullets",
                              "clickable": true
                          },
                          "breakpoints": {
                              "320": {
                                  "slidesPerView": 1,
                                  "spaceBetween": 40
                              },
                              "1200": {
                                  "slidesPerView": 1,
                                  "spaceBetween": 1
                              }
                          }
                      }
                  </script>
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <img src="assets/img/indexSlider1.png" alt="Slide 1" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                          <img src="assets/img/indexSlider1.png" alt="Slide 2" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                          <img src="assets/img/indexSlider1.png" alt="Slide 3" class="img-fluid">
                      </div>
                  </div>
                  <div class="swiper-pagination"></div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Include Swiper CSS and JavaScript -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  // Initialize Swiper
  const swiperConfig = JSON.parse(document.querySelector('.swiper-config').textContent);
  const swiper = new Swiper('.init-swiper', swiperConfig);
</script>


    <!-- About 2 Section -->
    <!-- <section id="about-2" class="about-2 section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="assets/img/img_v_3.jpg" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">Our Mission</span>
                <h2 class="content-title text-start">
                  The Big Oxmox advised her not to do so, because there were
                  thousands.
                </h2>
                <p class="lead">
                  A small river named Duden flows by their place and supplies it
                  with the necessary regelialia. It is a paradisematic country.
                </p>
                <p class="mb-5">
                  The Big Oxmox advised her not to do so, because there were
                  thousands of bad Commas, wild Question Marks and devious Semikoli.
                </p>
                <p>
                  <a href="" class="btn-get-started">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- /About 2 Section -->

    <!-- Services Section -->
    <!-- <section id="services" class="services section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>1. Find the Right Trainer for You</h3>
                <p>Browse through a wide selection of personal trainers based on your goals and preferences.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>2. Get a Customized Fitness Plan</h3>
                <p>Receive personalized fitness plans tailored to your fitness level, goals, and preferences.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>3. Track Your Progress</h3>
                <p>Monitor your workout logs, track improvements, and stay motivated as you hit your fitness goals.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>/Services Section -->

    <!-- new-->
    <section id="platform-stats" class="platform-stats py-5">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-3">
                  <div class="stat-icon mb-3">
                      <i class="bi bi-people" style="font-size: 2em; color: #1ABC9C;"></i>
                  </div>
                  <h4>+30 Trainers</h4>
                  <p>Experienced and certified trainers to guide you on your fitness journey.</p>
              </div>
              <div class="col-md-3">
                  <div class="stat-icon mb-3">
                      <i class="bi bi-person" style="font-size: 2em; color: #FFC107;"></i>
                  </div>
                  <h4>+500 Users</h4>
                  <p>Join a growing community of users committed to their fitness goals.</p>
              </div>
              <div class="col-md-3">
                  <div class="stat-icon mb-3">
                      <i class="bi bi-journal" style="font-size: 2em; color: #3DDC97;"></i>
                  </div>
                  <h4>+1000 Meal Plans</h4>
                  <p>AI-generated meal plans tailored to individual preferences and goals.</p>
              </div>
              <div class="col-md-3">
                  <div class="stat-icon mb-3">
                      <i class="bi bi-bar-chart-line" style="font-size: 2em; color: #212529;"></i>
                  </div>
                  <h4>+10,000 Workouts</h4>
                  <p>Track and analyze your progress with each workout session logged.</p>
              </div>
          </div>
      </div>
  </section>


    <!-- new-->

    <!--work-->
    <div class="container mt-5">
      <h2 class="text-center mb-4">How It Works</h2>


      <div class="row feature-section">
          <div class="col-lg-6 text-center">
              <img src="assets/img/commuinity.png" alt="Sign up and connect" class="feature-img">
          </div>
          <div class="col-lg-6 feature-text" data-step="1">
              <h2>1 Join the Community</h2>
              <p>Sign up to become part of a vibrant community, whether you're a fitness enthusiast or a professional trainer.</p>
          </div>
      </div>

      <div class="row feature-section">

          <div class="col-lg-6 order-lg-2 text-center mb-4">
              <img src="assets/img/commuinity.png" alt="Browse trainers" class="feature-img">
          </div>
          <div class="col-lg-6 order-lg-1 feature-text" data-step="2">
              <h2>2 Connect and Collaborate</h2>
              <p>Discover trainers and users nearby, connect with them, and start your journey towards a healthier lifestyle together.</p>
          </div>
      </div>

      <div class="row feature-section">
          <div class="col-lg-6 text-center mb-4">
              <img src="assets/img/commuinity.png" alt="Track your progress" class="feature-img">
          </div>
          <div class="col-lg-6 feature-text" data-step="3">
              <h2>3 Track and Transform</h2>
              <p>Keep track of your progress and milestones with personalized tools that help you achieve lasting changes.</p>
          </div>
      </div>
  </div>


    <!--work-->

<!-- AI Meal Plans Section -->
<!-- <section id="ai-meal-plans" class="ai-meal-plans py-5 bg-light">
  <div class="container text-center">
    <h2>AI Meal Plans</h2>
    <p>Get AI-generated meal plans tailored to your fitness goals, dietary preferences, and lifestyle.</p>
    <a href="meal-plans.html" class="btn btn-primary">Get Your Meal Plan</a>
  </div>
</section> -->


<!--story-->
<!-- Success Stories Carousel -->
<!-- Success Stories Carousel with Two Images Per Slide and Spacing Adjustments -->
<!-- Transformation Stories Carousel -->
<section id="transformation-stories" class="transformation-stories section py-5 bg-light">
  <div class="container text-center">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-5">
        <h2>Transformation Stories
        </h2>
        <p class="lead mb-5">See how our platform has helped users achieve their fitness goals.</p>
        <a href="" class="btn btn-see-more">See More</a>
  </div>



  <!-- </p> -->

      </div>

    <!-- Carousel -->
    <div id="transformationCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- First Slide with Before and After Images, Name, and Weight Change -->
        <div class="carousel-item active">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5 mb-4 ">
              <div class="card p-3 shadow-sm transformation-card">
                <h5 class="text-center">Before</h5>
                <img src="https://i.insider.com/66ec718ccfb7f307e573303c?width=700" alt="User 1 Before" class="img-fluid rounded transformation-image">
                <h4 class="text-center mt-3">Alex B: <span>Lost 20 lbs</span></h4>
              </div>
            </div>
            <div class="col-md-5 mb-4">
              <div class="card p-3 shadow-sm transformation-card">
                <h5 class="text-center">After</h5>
                <img src="https://i.insider.com/66ec718ccfb7f307e573303c?width=700" alt="User 1 After" class="img-fluid rounded transformation-image">
                <h4 class="text-center mt-3">Alex B: <span>Lost 20 lbs</span></h4>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Slide with Before and After Images, Name, and Weight Change -->
        <div class="carousel-item">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5 mb-4">
              <div class="card p-3 shadow-sm transformation-card">
                <h5 class="text-center">Before</h5>
                <img src="https://i.insider.com/66ec718ccfb7f307e573303c?width=700" alt="User 2 Before" class="img-fluid rounded transformation-image">
                <h4 class="text-center mt-3">Alex B: <span>Lost 20 lbs</span></h4>

              </div>
            </div>
            <div class="col-md-5 mb-4">
              <div class="card p-3 shadow-sm transformation-card">
                <h5 class="text-center">After</h5>
                <img src="https://i.insider.com/66ec718ccfb7f307e573303c?width=700" alt="User 2 After" class="img-fluid rounded transformation-image">
                <h4 class="text-center mt-3">Alex B: <span>Lost 20 lbs</span></h4>
              </div>
            </div>
          </div>

        </div>

        <!-- Additional slides can be added here with similar structure -->

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#transformationCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#transformationCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Carousel -->

  </div>
</section>



<!--story-->
<!-- Call to Action (CTA) Section -->
<section id="cta" class="cta-section py-5 bg-heading text-light text-center">
  <div class="container">
    <h2 class="text-light">"Train Smarter, Live Healthier"</h2>
    <p class="lead mt-2 mb-4">Sync your progress, connect with experts, and unlock your full potential.</p>
    <a href="" class="btn btn-see-more">Start Now!</a>




    <!-- <p class="small mt-3">Or <a href="#contact" class="text-light text-decoration-underline">contact us</a> to learn more</p> -->
  </div>
</section>
<!-- Call to Action (CTA) Section -->
<!-- AI-Powered Features Section -->
<!-- <section id="ai-features" class="ai-features-section py-5 bg-light text-center">
  <div class="container">
    <h2 class="display-5 mb-4">AI-Powered Fitness & Nutrition Plans</h2>
    <p class="lead text-muted mb-5">Experience the power of AI for personalized fitness and nutrition plans tailored to your unique goals.</p>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-bar-chart-fill text-primary" style="font-size: 2.5rem;"></i>
            </div>
            <h4 class="card-title">AI-Generated Fitness Plans</h4>
            <p class="card-text text-muted">Receive custom workout plans that adapt to your fitness level and help you reach your fitness milestones efficiently.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-nutrition text-primary" style="font-size: 2.5rem;"></i>
            </div>
            <h4 class="card-title">Personalized Meal Plans</h4>
            <p class="card-text text-muted">Get AI-powered meal recommendations tailored to your dietary needs, whether you're aiming for weight loss, muscle gain, or maintenance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- AI-Powered Features Section -->



<!-- Support Section -->
<!-- <section id="support" class="support py-5 bg-light">
  <div class="container text-center">
    <h2>Support</h2>
    <p>Need assistance? Our help center is here for you with answers to common questions and support options.</p>
    <a href="support.html" class="btn btn-primary">Visit Help Center</a>
  </div>
</section> -->



    <!-- Stats Section -->
    <!-- <section id="stats" class="stats section light-background"> -->

      <!-- <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle">Why Us</span>
            <h2 class="content-title">Far far away Behind the Word Mountains</h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia.
            </p>
            <p class="mb-5">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <div class="row mb-5 count-numbers"> -->

              <!-- Start Stats Item -->
              <!-- <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3919" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Coffee</span>
              </div> -->
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <!-- <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2831" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Codes</span>
              </div> -->
              <!-- End Stats Item -->

              <!-- Start Stats Item -->
              <!-- <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1914" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Projects</span>
              </div> -->
              <!-- End Stats Item -->

            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- /Stats Section -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Recent Posts</p>
        <h2>Blog Posts</h2>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="https://img.freepik.com/free-photo/close-up-doctor-with-stethoscope_23-2149191355.jpg?t=st=1731224632~exp=1731228232~hmac=03321ce55a642f6bd218e19fbcc4530bea449c1faa8404181f75af8dcaf156f2&w=1060" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="https://img.freepik.com/free-photo/sporty-young-woman-does-exercises-with-dumbbells-bodybuilding-workout-being-good-physical-shape-dressed-cropped-top-leggings-listens-music-via-headphones-isolated-pink-background_273609-60320.jpg?t=st=1731224692~exp=1731228292~hmac=afac6d79306f28fb0cfa992de3fb6297913579974ce77323f99bd36d97fdee10&w=1060" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="https://img.freepik.com/free-photo/portrait-young-fitness-man-hiding-weight-scales_171337-15876.jpg?t=st=1731224808~exp=1731228408~hmac=a2cf0277c309f6865bc7d54a0e0c5663d162a1f95386f587e1478317dac1587a&w=1060" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Blog Posts Section -->

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section light-background">

      <div class="container">
        <div class="row gap-x-lg-4 justify-content-between">
          <div class="col-lg-4 js-custom-dots">
            <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
              <div class="service-icon color-1 mb-4">
                <i class="bi bi-alarm"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Modern and clean design</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
              <div class="service-icon color-2 mb-4">
                <i class="bi bi-bag-check"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Sell Products</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
              <div class="service-icon color-3 mb-4">
                <i class="bi bi-briefcase"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Success Every Day</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->

            <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="300">
              <div class="service-icon color-4 mb-4">
                <i class="bi bi-easel"></i>
              </div>
              <!-- /.icon -->
              <div class="service-contents">
                <h3>Bring Ideas to Life</h3>
                <p>
                  Far far away, behind the word mountains, far from the countries .
                </p>
              </div>
              <!-- /.service-contents-->
            </a>
            <!-- /.service -->
          </div>

          <div class="col-lg-8">
            <div class="swiper init-swiper-tabs">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoHeight": true,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_1.jpg" alt="Image" class="img-fluid">
                  <div class="p-4">
                    <h3 class="text-black h5 mb-3">Modern and clean design</h3>
                    <div class="row">
                      <div class="col-lg-8">
                        <p>
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the blind
                          texts. Separated they live in Bookmarksgrove right at the
                          coast of the Semantics, a large language ocean.
                        </p>
                        <p>
                          A small river named Duden flows by their place and
                          supplies it with the necessary regelialia. It is a
                          paradisematic country, in which roasted parts of sentences
                          fly into your mouth.
                        </p>
                      </div>
                      <div class="col-lg-4">
                        <ul class="list-unstyled list-check">
                          <li>Far far away, behind the word</li>
                          <li>Far from the countries Vokalia</li>
                          <li>Separated they live in Bookmarksgrove</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Tabs Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-md-6 col-lg-4">
            <span class="content-subtitle">Our Services</span>
            <h2 class="content-title">
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
            <p class="mb-5">
              Separated they live in Bookmarksgrove right at the coast of the
              Semantics, a large language ocean.
            </p>
            <p>
              <a href="#" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
          <div class="col-md-6 col-lg-6 ps-lg-5">
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="">
                  <div class="services-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div>
                    <h3>Square</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="services-icon">
                    <i class="bi bi-command"></i>
                  </div>
                  <div>
                    <h3>Technology</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="services-icon">
                    <i class="bi bi-grid"></i>
                  </div>
                  <div>
                    <h3>Brilliant Ideas</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="services-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div>
                    <h3>Blueprint</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services 2 Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Pricing Table</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Plans</p>
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    How to download and register?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      A small river named Duden flows by their place and supplies it
                      with the necessary regelialia. It is a paradisematic country, in
                      which roasted parts of sentences fly into your mouth.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How to link your paypal and bank account?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the subline
                  of her own road, the Line Lane. Pityful a rethoric question ran
                  over her cheek, then she continued her way.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Happy Customers</p>
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

  </main>

 @include('layout.index_footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>