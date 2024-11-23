<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Active Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Active
    * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <style>
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Adds a dark background to make them visible */
        width: 3rem; /* Size adjustment */
        height: 3rem;
        background-size: 100%, 100%;
        border-radius: 50%; /* Circular shape */
        /* Custom CSS for CTA and AI Features Sections */
      }
  .cta-section {
    background-color: #1abc9c; /* Custom primary color */
  }

  .cta-section .btn-warning {
    color: #000;
    font-weight: bold;
  }

  .ai-features-section .card {
    transition: transform 0.3s ease-in-out;
  }

  .ai-features-section .card:hover {
    transform: translateY(-5px);
  }

  .ai-features-section i {
    color: #FFC107; /* Custom icon color for emphasis */
  }
  /* Styling for Transformation Carousel */
  .transformation-stories h2 {
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .transformation-stories .transformation-card {
    background-color: #f8f9fa;
    border: none;
    border-radius: 8px;
    text-align: center;
  }

  .transformation-stories .transformation-image {
    border-radius: 8px;
    max-height: 300px;
    object-fit: cover;
    width: 100%;
  }

  .transformation-stories h5 {
    font-weight: bold;
    color: #555;
    margin-bottom: 0.5rem;
  }

  .transformation-stories .weight-change {
    font-weight: bold;
    color: #28a745; /* Green for positive change */
    font-size: 1.2rem;
    margin-top: 0.5rem;
  }

  .carousel-item
  {
    margin-left: 10px;

  }

  /* Carousel Controls */
  .carousel-control-prev, .carousel-control-next {
    width: 5%;
  }

  .carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: #333;
    border-radius: 50%;
    padding: 10px;
  }

  /* Responsive Styling */
  @media (max-width: 768px) {

      }

      .card span{
        color: #28a745;
      }


      .feature-section {
      margin-bottom: 3rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Image styling */
    .feature-img {
      width: 80%;
      border-radius: 8px;
      /* box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); */
    }

    /* Styling for feature numbers */
    .feature-text h2::before {
      content: attr(data-step);
      display: block;
      font-size: 2rem;
      font-weight: bold;
      color: #1ABC9C;
      text-align: center;
      margin-bottom: 0.5rem;
    }

    /* Heading styling */
    .feature-text h2 {
      font-size: 1.75rem;
      font-weight: 600;
      margin-top: 1rem;
      color: #1A1F71;
      text-align: center;
    }

    /* Paragraph styling */
    .feature-text p {
      font-size: 1.2rem;
      color: #4B4B4B;
      text-align: center;
      max-width: 90%;
      margin: 0 auto;
    }

          .bg-heading
          {
            background-color: var(--heading-color);
          }
          .hero
          {
            width: 90%;
            border-radius: 30px!important;
          }
    </style>
  </head>
