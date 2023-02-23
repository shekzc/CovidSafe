<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid-19 Testing Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"> COVIDSafe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Coronavirus </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Covid-19 Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Prevention</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="new-user-testing.php">Testing</a>
          </li>
          <!-- <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="live-test-updates.php">Live Updates</a>
          </li> -->

          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="login.php">Admin</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <header class="text-white ">
    <!-- <div class="container text-center">
      <h1 style="font-family: Lobster; font-size: 50px; ">COVIDSafe <i class="fa-solid fa-shield-plus"></i> </h1>
      <p class="lead">COVIDSafe - Testing Management System</p>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide  " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="height: 500px;">
          <img class="d-block w-100" src="https://www.gard.no/Content/30377995/cache=20201509114435/transformation=scale10000x810/Covid_19_test.jpg" alt="First slide" style=" min-height: 500px">
          <div class="carousel-caption d-none d-md-block">
            <h5>COVID-19 Testing: What You Need to Know</h5>
            <p>COVID-19 tests can detect either SARS-CoV-2, the virus that causes COVID-19, or antibodies that your body makes after getting COVID-19 or after getting vaccinated.</p>
          </div>
        </div>
        <div class="carousel-item" style="height: 500px;">
          <img class="d-block w-100" src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/07/Female_Doctor_Covid_Test_1296x728-header-1296x729.jpg?w=1155&h=2268" alt="Second slide" style=" min-height: 500px">
          <div class="carousel-caption d-none d-md-block">
            <h5>COVID-19 Testing: What You Need to Know</h5>
            <p>Tests for SARS-CoV-2 tell you if you have an infection at the time of the test. This type of test is called a “viral” test because it looks for viral infection. Antigen or Nucleic Acid Amplification Tests (NAATs) are viral tests.</p>
          </div>
        </div>
        <div class="carousel-item" style="height: 500px;">
          <img class="d-block w-100" src="https://www.illumina.com/content/dam/illumina-marketing/images/company/featured-articles/illuminacovidtestingservice.jpg" alt="Third slide" style=" min-height: 500px">
          <div class="carousel-caption d-none d-md-block">
            <h5>COVID-19 Testing: What You Need to Know</h5>
            <p>Tests for antibodies may tell you if you have had a past infection with the virus that causes COVID-19. Your body creates antibodies after getting infected with SARS-CoV-2 or after getting vaccinated against COVID-19. These tests are called “antibody” or “serology” tests.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


  <section id="about">
    <div class="container " style="margin-top:150px">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About Covid-19 Disease <i class="fas fa-virus"></i></i> </h2>
          <p class="lead">COVID-19 is the disease caused by SARS-CoV-2, the coronavirus that emerged in December 2019COVID-19 can be severe, and has caused millions of deaths around the world as well as lasting health problems in some who have survived the illness. The coronavirus can be spread from person to person. It is diagnosed with a test.The best way to protect yourself is to get vaccinated and boosted when you are eligible, follow testing guidelines, wear a mask, wash your hands and practice physical distancing.</p>
          <p class="lead">As of now, researchers know that the coronavirus is spread through droplets and virus particles released into the air when an infected person breathes, talks, laughs, sings, coughs or sneezes. Larger droplets may fall to the ground in a few seconds, but tiny infectious particles can linger in the air and accumulate in indoor places, especially where many people are gathered and there is poor ventilation. This is why mask-wearing, hand hygiene and physical distancing are essential to preventing COVID-19.</p>

        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container" style="margin-top:150px">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Covid-19 Symptoms</h2>
          <hr />
          <p><strong>Hight Fever 2-14 days!</strong><br />
            Reported illnesses have ranged from mild symptoms to severe illness and death</p>
          <hr />
          <p><strong>Dry Cough 2-14 days!</strong><br />
            Reported illnesses have ranged from mild symptoms to severe illness and death</p>
          <hr />
          <p><strong>Shortness of breath!</strong><br />
            Reported illnesses have ranged from mild symptoms to severe illness and death</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container" style="margin-top:150px">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Prevention</h2>
          <ul>
            <li>Wash your Hands often</li>
            <li>Wear A Face mask</li>
            <li>Avoid contact with sick people</li>
            <li>Always cover your cough or sneeze</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>