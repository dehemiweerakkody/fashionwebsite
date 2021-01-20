<!DOCTYPE html>
<html lang="en">
<head>
<title>Feather Patterns</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/favicon.png" rel="icon" type="image/png" >
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="javascript/jquery-2.1.1.min.js" ></script>
<script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="javascript/template_js/template.js" ></script>
<script type="text/javascript" src="javascript/common.js" ></script>
<script type="text/javascript" src="javascript/global.js" ></script>
<script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js" ></script>
</head>
<body class="contact">
<div class="preloader loader" style="display: block;"> <img src="image/loader.gif"  alt="#"/></div>

  <!-- Start Header Navigation -->
  <?php include('header.php'); ?>
  <!-- Header End -->

<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="image/about_banner.jpg" alt="#"></div>
  <h1>Contact Us</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="contact.html">Contact Us</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="complaint">
        <h2 class="tf">Tel</h2>
        <div class="call-info">011 234 7658 | 011 635 4873</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="email">
        <h2 class="tf">Mail</h2>
        <div class="email-info">featherpatterns@gmail.com</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="time">
        <h2 class="tf">Time</h2>
        <div class="time-info">Mon – Sat: 9:00A.M – 6:00PM</div>
      </div>
    </div>
  </div>
  <div class="main-form">
    <h3 class="contactus-title">Leave Message</h3>
    <div class="row">
      <form name="contactform" method="POST" action="contact-form-handler.php">
        <div class="col-sm-6">
          <input type="text" required name="name" placeholder="Name">
        </div>
        <div class="col-sm-6 ">
          <input type="email" required name="email" placeholder="Email">
        </div>
        <div class="col-sm-6 ">
          <input type="text" required name="phone" placeholder="Phone Number">
        </div>
        <div class="col-sm-6 ">
          <input type="text" required name="subject" placeholder="Subject">
        </div>
        <div class="col-xs-12 ">
          <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
        </div>
        <div class="col-xs-12  text-center">
          <div class="commun-btn">
            <button type="submit" name="submit" class="btn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="map"> 
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="overflow:hidden;height:520px;width:100%;">
          <div id="gmap_canvas" style="height:520px;width:1170px;"></div>
          <a class="google-map-code" href="http://www.pureblack.de/google-maps/" id="get-map-data">pureblack.de</a> </div>
        <script type="text/javascript"> function init_map(){var myOptions = {zoom:14, scrollwheel:false,center:new google.maps.LatLng(6.917035, 79.865214),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.778261, -119.41793239999998)});}google.maps.event.addDomListener(window, 'load', init_map);</script> 
      </div>
    </div>
  </div>
</div>

  <!-- Footer Section -->
  <?php include('footer.php');?>
  <!-- Footer End -->

<script src="javascript/jquery.parallax.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
</body>
</html>