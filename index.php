<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mapping Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Caveat|Montserrat:400,600&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.3.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="https://www.sheffield.ac.uk/economics"><img src="assets/img/logo.jpeg" /></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Visualisation</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Time Series</a></li>
          <li><a class="nav-link scrollto" href="#team">Local Autorities</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1> Mapping Project</h1><br>
          <p class="description">This is a project about COVID using data and presenting in this geospatial tool </p>
          <p class="description">The project uses kepler.gl to visualise socioeconomic metrics and Covid data.</p>
          <p class="description">This is a project about COVID using data and presenting in this geospatial tool</p>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 ">
          <img src="assets/img/placehodlermapimage.png" class="img-fluid " alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <br>

    <!-- ======= Static VIZ ======= -->
    <section id="about" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Static Data</h4>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p>
              This map presents the static variables used in the study, and the most recent covid metrics. The left hand arrow allows you to view various explanatory vairables. MSOA areas are coloured based on these explanatory variables, which can be compared to covid cases shown by height in 3D view. You can toggle between metrics by hiding/ showing different layers. COVID statistics are as od April 2021.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click Go to Map</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="Static_Covid_Map.html"><img class="img-rounded" src="assets/img/buttontoclick.png" style="height:400;width: 400px;"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Viz alt Section -->

    <!-- ======= Timeseries VIZ ======= -->
    <section id="about" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Time Series Data</h4>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p>
              This map presents the Time Series variables used in the study, and the most recent covid metrics. You can visualisse the change over time using the time slider.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click Go to Map</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="Dynamic_Covid_Map.html"><img class="img-rounded" src="assets/img/buttontoclick.png" style="height:400;width: 400px;"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Viz alt Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="services section-bg">
      <div class="container">
        <div class="row">
          <h4><a href="">Variable Descriptions</a></h4>

          <style type="text/css">
            .tg {
              border-collapse: collapse;
              border-spacing: 0;
            }

            .tg td {
              border-color: black;
              border-style: solid;
              border-width: 1px;
              font-family: Arial, sans-serif;
              font-size: 14px;
              overflow: hidden;
              padding: 10px 5px;
              word-break: normal;
            }

            .tg th {
              border-color: black;
              border-style: solid;
              border-width: 1px;
              font-family: Arial, sans-serif;
              font-size: 14px;
              font-weight: normal;
              overflow: hidden;
              padding: 10px 5px;
              word-break: normal;
            }

            .tg .tg-cly1 {
              text-align: left;
              vertical-align: middle
            }

            .tg .tg-7zrl {
              text-align: left;
              vertical-align: bottom
            }
          </style>
          <table class="tg">
            <thead>
              <tr>
                <th class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Variable Label</span></th>
                <th class="tg-7zrl"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Description</span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Deprivation Score</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">English index of multiple deprivation (IMD) for 2019 at the Middle-layer Super Output Areas, providing a measure of deprivation for small geographical areas across England based on seven different domains of deprivation: Income Deprivation, Employment Deprivation, Education, Skills and Training Deprivation, Health Deprivation and Disability, Crime, Barriers to Housing and Services, Living Environment Deprivation. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Health Deprivation Score</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">English index of health and disability deprivation for 2019 at the Middle-layer Super Output Area, measuring the risk of premature death and the impairment of quality of life through poor physical or mental health. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Share Old Population</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Share of old population (above 60 years old) over total population in the MSOA in 2019. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Share White Ethnicity</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Share of white ethnicity residents over total population in the MSOA in 2019. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">House Crowding Rate</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">House crowding calculates as the total population divided by the number of residential properties in the MSOA. Source: ONS and Valuation Office Agency</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Daytime Population Density</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Daytime population density at the MSOA level calculated using the ENACT-POP spatial raster dataset capturing the seasonal daytime changes in the number of people per squared kilometer in 2011. Source: European Commission JRC</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Nighttime Population Density</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Nighttime population density at the MSOA level calculated using the ENACT-POP spatial raster dataset capturing the seasonal nighttime changes in the number of people per squared kilometer in 2011. Source: European Commission JRC</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Satellite Population Density</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Population density at the MSOA level calculated using LandScan satellite data on the global population distribution at approximately 1 squared kilometer spatial resolution for 2019. This variable represents an ambient population distribution averaged over 24 hours and it is estimated using census demographic and geographic data together with remote sensing imagery analysis techniques. Source: LandScan</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Population Density</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Population density in the MSOA calculated as the total population in the MSOA in 2019 divided by the total MSOA area in squared meters. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Employment Density</span></td>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Share of resident keyworkers in the MSOA calculated as the number of employed residents in jobs that have to be done onsite divided by the total number of employed residents in the MSOA. Source: QLFS ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">COVID-19 Cases April 2021</span></td>
                <td class="tg-7zrl"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Cumulative number of residents positive to COVID-19 by MSOA in each week between March 2020 and April 2021. Source: ONS</span></td>
              </tr>
              <tr>
                <td class="tg-cly1"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">COVID-19 Deaths April 2021</span></td>
                <td class="tg-7zrl"><span style="font-weight:400;font-style:normal;text-decoration:none;color:black">Cumulative number of deaths of residents registered from COVID-19 by MSOA in each month between March 2020 and April 2021. Source: ONS</span></td>
              </tr>
            </tbody>
          </table>



        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>About Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>This is a bit about the team</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>9 Mappin St, Sheffield City Centre, Sheffield S1 4DT</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>econ@sheffield.ac.uk</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+ 0114 222 5151</p>
              </div>

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13613.293980442373!2d74.32354245!3d31.460286199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1624361784898!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        Sheffield University Economics Department
      </div>
      <!-- <div class="credits">
        Designed by <a href="">Hammad Yasir</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>