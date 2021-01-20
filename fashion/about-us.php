<!DOCTYPE html>
<html lang="en">

<head>
<title>Feather Patterns</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="e-commerce site well design with responsive view." />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="image/favicon.png" rel="icon" type="image/png">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link href="javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
  <link href="css/stylesheet.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<body class="about">
  <div class="preloader loader" style="display: block;"> <img src="image/loader.gif" alt="#" /></div>

   <!-- Start Header Navigation -->
   <?php include('header.php'); ?>
  <!-- Header End -->

  <div class="breadcrumb parallax-container">
    <div class="parallax"><img src="image/about_banner.jpg" alt="#"></div>
    <h1>About us</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about-us.html">About Us</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="wwd">
        <div class="col-sm-5"><img class="img-responsive" src="image/about_banner.jpg" alt="#"></div>
        <div class="col-sm-7">
          <div class="column-inner ">
            <div class="wrapper">
              <h4 class="aboutus-title">Who We Are ? </h4>
              <div class="desc">
                <p>Feather pattern is a new generation basics clothing company based in Sri Lanka. We offer high quality everyday wear that bring you the comfort and convenience you need to get through your day.</p>
                <br>
                <p>Feather Pttern was born out of the need for a convenient solution for customers to purchase high quality products with lowest price. The founders, Pavithra and Thamara have been looking for a “set-it-and-forget-it” service to shop clothing, and when they couldn’t find one, they resolved to build the service they wanted.</p>
                <br>
                <p>All our products are made in Sri Lanka and oversease with high-quality material. Production is carried out by experienced suppliers in the industry who are specialized in each type of garment. Our promise of quality doesn’t just stop at the product, we work hard to exceed your expectations with our level or service.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row team">
      <div class="col-md-offset-2 col-md-8">
        <h3 class="team-title">Convenience</h3>
        <p class="text-center team-desc">We understand that your time is valuable and we don’t want you to waste any of it looking for the perfect basics to wear. By using this website  you will be able to make out products in stocks in our shop . we do certify we will provide you best products for with lower price. We make no compromises on convenience.</p>
      </div>
    </div>
    </div>
   
      <!-- Footer Section -->
  <?php include('footer.php');?>
  <!-- Footer End -->
  
    <script src="javascript/DioProgress.js"></script>
    <script src="javascript/jquery.parallax.js"></script>
    <script>
      jQuery(document).ready(function($) {
        $('.parallax').parallax();
      });
    </script>


    <!-- Footer block End  -->

    <script type="text/javascript">
      $("#progress1").appendSimpleProgressBar();
      $("#progress1").slow({
        width: "78"
      });

      $("#progress2").appendSimpleProgressBar();
      $("#progress2").slow({
        width: "92"
      });

      $("#progress3").appendSimpleProgressBar();
      $("#progress3").slow({
        width: "76"
      });

      $("#progress4").appendSimpleProgressBar();
      $("#progress4").slow({
        width: "98"
      });

      $("#progress5").appendSimpleProgressBar();
      $("#progress5").slow({
        width: "62"
      });
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jQuery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
    <script type="text/javascript" src="javascript/template_js/template.js"></script>
    <script type="text/javascript" src="javascript/common.js"></script>
    <script type="text/javascript" src="javascript/global.js"></script>
    <script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js"></script>
</body>

</html>