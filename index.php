<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COVID19 – Urban Density Mapping Project</title>
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
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#timeseries">Time Series</a></li>
          <li><a class="nav-link scrollto" href="#static1">Static</a></li>
          <li><a class="nav-link scrollto " href="#paper">Research Paper</a></li>
          <li><a class="nav-link scrollto" href="#vardesc">Variable Descriptions</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Project Introduction Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1> COVID19 – Urban Density Mapping Project</h1><br>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 ">
          <img src="assets/img/placehodlermapimage.png" class="img-fluid " alt="">
        </div>
      </div>
      <div class="row">
        <p class="description">One of the most striking features of the COVID-19 pandemic is the marked spatial heterogeneity in both COVID-19 cases and deaths. Previous research has shown how such variation broadly reflects differences in the socio-economic structure across locations, and particular attention has been devoted to the analysis of population density. Yet, its relationship with the spread of COVID-19 remains unclear. </p>
        <p class="description">Combining highly granular data at the neighbourhood level for England on COVID-19 cases and deaths, satellite imaging density and other socio-economic variables, we take a closer look at the relationship between urban density and the health consequences of COVID-19, disentangling between the role of population and employment density.</p>
        <p class="description">This website provides an interactive mapping tool using kepler.gl to visualise the dynamic evolution of COVID-19 cases and deaths across neighbourhoods in England between March 2020 and April 2021, and to analyse its static spatial correlation with urban density and other socio-economic metrics. An advanced econometric analysis of the relationship between density and the health consequences of the COVID-19 pandemic is presented in the project research paper, offering novel evidence on the different effects exerted by population and employment density.</p>
        <p class="description">This research project is part of a new line of empirical investigation that uses information from unstructured forms of data to fill the gaps in more conventional datasets. It provides important insights not just to better understand the determinants of diffusion of the virus, but equally to understand which areas could remain more at risk. A better understanding of the role of density is critical for public health policies directed at mitigating the diffusion of COVID. In particular, a more nuanced comprehension of where and how contagion takes place, whether at home or at the place of work, and in the latter case through which type of jobs, will be increasingly important. At the same time, this is also critical for designing policies addressing economic effects of the crisis.</p>
        <p class="description">This research project has been developed in collaboration between the University of Sheffield and the University of Birmingham, funded by the Regional Studies Association grant scheme on “Pandemics, Cities, Regions & Industry”."</p>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <br>
    <!-- ======= Timeseries VIZ ======= -->
    <section id="timeseries" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Time Series Data</h4>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p>
              Using this interactive dashboard you can visualise the dynamic evolution of COVID-19 cases and deaths across Middle Super output Area (MSOA) neighbourhoods in England between March 2020 and April 2021 using the time slider.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click Go to Map</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="Dynamic_Covid_Map.html"><img class="img-rounded" src="assets/img/dynamicbuttontoclick.png" style="height:400;width: 400px;"></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Viz alt Section -->


    <!-- ======= Static VIZ SEPERATE MAPS ======= -->
    <section id="static1" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Static Data</h4>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p>
              Using this interactive dashboard you can map the spatial correlation between COVID cumulative cases deaths at the end of April 2021, population and employment density, and several relevant socio-economic factors (deprivation, health, house crowding, ethnicity, age…). Selecting a variable in the left-hand panel you will visualise the spatial correlation at the Middle Super output Area (MSOA) between the variable distribution represented by the choropleth map and COVID cases or deaths represented by the polygon height in the 3D view. You can toggle between metrics by hiding/showing different layers.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click to Compare Cases</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="Static_Covid_Map_Cases.html"><img class="img-rounded" src="assets/img/placehodlermapimage.png" style="height:400;width: 400px;"></a>
            </div>

            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click to Compare Deaths</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="Static_Covid_Map_Deaths.html"><img class="img-rounded" src="assets/img/static_deaths_screenshot.png" style="height:400;width: 400px;"></a>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End STATIC VIZ DUAL Section -->

    <!-- ======= RESEARCH PAPER ======= -->
    <section id="paper" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Research Paper</h4>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p>
              Using newly available big data in the area of satellite imaging in combination with traditional labour market and public health data for neighbourhoods in England between March 2020 and April 2021, we analyse the dynamic relationship between density and the health consequences of the COVID-19 pandemic, offering novel evidence on the different effects exerted by population and employment density. Our results show that the concentration of resident key workers, providing an essential service which cannot be done remotely and thus carrying on working onsite throughout the pandemic, increases the incidence of COVID-19 in the neighborhood both in terms of cases and of deaths. This effect is exacerbated in the most deprived neighborhoods characterised by lower income, health deprivation and crowded housing conditions, which facilitate even further the spread of the virus. However, our results show how lockdowns and other public health restrictions can mitigate this relationship, particularly in the most deprived areas, by partially shielding key workers. These findings provide important insights for designing future economic policies and public health strategies, targeting more precisely the neighborhoods more vulnerable from an economic as well as a contagion perspective.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="text-center">
              <h3 class="h5">
                <small class="text-muted">Click to See the Paper</small>
              </h3>
              <!-- <p class="text-center text-secondary mt-0">Click Go to Map</p> -->
              <a target=”_blank” href="assets/COVID_Density_Project.pdf"><img class="img-rounded" src="assets/img/paper_screenshot.png" style="height: 600px;width: 400px;"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End RESEARCH PAPER SECTION -->


    <!-- ======= Portfolio Section ======= -->
    <section id="vardesc" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h4>Variable Descriptions</h4>
        </div>
          <div>
            <p>
              In the following table you can find a brief discussion of the data used in this project and of the data sources.
            </p>
          </div>

          <style type="text/css">
            .tg {
              border-collapse: collapse;
              border-color: #aabcfe;
              border-spacing: 0;
              border-style: solid;
              border-width: 1px;
            }

            .tg td {
              background-color: #e8edff;
              border-color: #aabcfe;
              border-style: solid;
              border-width: 0px;
              color: #669;
              font-family: Arial, sans-serif;
              font-size: 14px;
              overflow: hidden;
              padding: 10px 5px;
              word-break: normal;
            }

            .tg th {
              background-color: #b9c9fe;
              border-color: #aabcfe;
              border-style: solid;
              border-width: 0px;
              color: #039;
              font-family: Arial, sans-serif;
              font-size: 14px;
              font-weight: normal;
              overflow: hidden;
              padding: 10px 5px;
              word-break: normal;
            }

            .tg .tg-34ux {
              background-color: #D2E4FC;
              font-family: "Trebuchet MS", Helvetica, sans-serif !important;
              ;
              text-align: left;
              vertical-align: bottom
            }

            .tg .tg-2nc7 {
              font-family: "Trebuchet MS", Helvetica, sans-serif !important;
              ;
              text-align: left;
              vertical-align: bottom
            }

            .tg .tg-wz43 {
              background-color: #D2E4FC;
              font-family: "Trebuchet MS", Helvetica, sans-serif !important;
              ;
              text-align: left;
              vertical-align: top
            }

            .tg .tg-zef7 {
              font-family: "Trebuchet MS", Helvetica, sans-serif !important;
              ;
              text-align: left;
              vertical-align: top
            }
          </style>
          <table class="tg">
            <thead>
              <tr>
                <th class="tg-2nc7"><span style="font-weight:normal;color:#000">Variable Label</span></th>
                <th class="tg-2nc7"><span style="font-weight:normal;color:#000">Description</span></th>
                <th class="tg-2nc7">Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Deprivation Score</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">English index of multiple deprivation (IMD) for 2019 at the Middle-layer Super Output Areas, providing a measure of deprivation for small geographical areas across England based on seven different domains of deprivation: Income Deprivation, Employment Deprivation, Education, Skills and Training Deprivation, Health Deprivation and Disability, Crime, Barriers to Housing and Services, Living Environment Deprivation.</span></td>
                <td class="tg-34ux">ONS</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Health Deprivation Score</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">English index of health and disability deprivation for 2019 at the Middle-layer Super Output Area, measuring the risk of premature death and the impairment of quality of life through poor physical or mental health.</span></td>
                <td class="tg-2nc7">ONS</td>
              </tr>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Share Old Population</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Share of old population (above 60 years old) over total population in the MSOA in 2019.</span></td>
                <td class="tg-34ux">ONS</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Share White Ethnicity</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Share of white ethnicity residents over total population in the MSOA in 2019. Source: ONS</span></td>
                <td class="tg-2nc7">ONS</td>
              </tr>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">House Crowding Rate</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">House crowding calculates as the total population divided by the number of residential properties in the MSOA.</span></td>
                <td class="tg-wz43">ONS and Valuation Office Agency</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Daytime Population Density</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Daytime population density at the MSOA level calculated using the ENACT-POP spatial raster dataset capturing the seasonal daytime changes in the number of people per squared kilometer in 2011.</span></td>
                <td class="tg-zef7">European Commission JRC</td>
              </tr>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Nighttime Population Density</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Nighttime population density at the MSOA level calculated using the ENACT-POP spatial raster dataset capturing the seasonal nighttime changes in the number of people per squared kilometer in 2011.</span></td>
                <td class="tg-wz43">European Commission JRC</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Satellite Population Density</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Population density at the MSOA level calculated using LandScan satellite data on the global population distribution at approximately 1 squared kilometer spatial resolution for 2019. This variable represents an ambient population distribution averaged over 24 hours and it is estimated using census demographic and geographic data together with remote sensing imagery analysis techniques.</span></td>
                <td class="tg-2nc7">LandScan</td>
              </tr>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Population Density</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Population density in the MSOA calculated as the total population in the MSOA in 2019 divided by the total MSOA area in squared meters.</span></td>
                <td class="tg-34ux">ONS</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Employment Density</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Share of resident keyworkers in the MSOA calculated as the number of employed residents in jobs that have to be done onsite divided by the total number of employed residents in the MSOA.</span></td>
                <td class="tg-2nc7">QLFS ONS</td>
              </tr>
              <tr>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">COVID-19 Cases April 2021</span></td>
                <td class="tg-34ux"><span style="font-weight:normal;color:#000">Cumulative number of residents positive to COVID-19 by MSOA in each week between March 2020 and April 2021.</span></td>
                <td class="tg-34ux">ONS</td>
              </tr>
              <tr>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">COVID-19 Deaths April 2021</span></td>
                <td class="tg-2nc7"><span style="font-weight:normal;color:#000">Cumulative number of deaths of residents registered from COVID-19 by MSOA in each month between March 2020 and April 2021.</span></td>
                <td class="tg-2nc7">ONS</td>
              </tr>
            </tbody>
          </table>

        </div>
        <br>
    </section><!-- End TABLE Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h3>About Us</h3>
        </div>
        <div class="row">
          <p>
            <b>Dr. Enrico Vanino</b> - Enrico is a Lecturer (Assistant Professor) in the Department of Economics at the University of Sheffield. He works on issues related to international economics, urban and regional economics, firms' productivity and the economics of innovation. Prior to joining the University of Sheffield, he worked as a Fellow in Economic Geography at the London School of Economics.
          </p>
          <p>
            <b>Dr. Carlo Corradini</b> – Carlo Corradini is a Senior Lecturer (Associate Professor) in regional economics at the University of Birmingham and associate editor for the journal Regional Studies. His research interests and expertise encompass areas such as regional innovation systems and economic development, industry and technological change, as well as evolutionary economic geography. He is also working on spatial big data analytics and intangible dimensions of regional dynamics.
          </p>
          <p>
            <b> Dr. Jesse Matheson</b> - Jesse is a Senior Lecturer (Associate Professor) in the Department of Economics at the University of Sheffield. He has previously taught at the University of Leicester and the University of Calgary. His research covers topics in public, labour and health economics. Previous work considers the effectiveness of policy interventions that target vulnerable populations. His current research is focused on the economic determinants, and consequences, of the spatial distribution of labour within urban settings. Of particular interest is the implications this has for economic recovery following the Covid-19 public health crisis.
          </p>
          <p>
            This research project has been developed thanks to the useful assistance of Rhiannon Thomas in preparing the satellite imaging data, and Yusuf Sohoye for the development of the mapping tool and of this website. "
          </p>

          <p>If you would like to know more about the project, please contact Enrico Vanino: <a href="mailto:e.vanino@sheffield.ac.uk">e.vanino@sheffield.ac.uk</a>.<br> </p>
        </div>
      </div>
    </section><!-- End About Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="row">
        <div class="col-8">
          <p>
            This research project and website have been developed thanks to the RSA small grant scheme on Pandemics, Cities, Regions & Industry.
          </p>
        </div>
        <div class="col-4">
          <div class="text-center">
            <a target=”_blank”><img class="img-rounded" src="assets/img/rsalogo.png" style="width:228px;height:128px;"></a>
          </div>
        </div>
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