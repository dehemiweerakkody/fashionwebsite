<?php 
$db=mysqli_connect('localhost','root','','fashion');
$sql = "SELECT * FROM products";
$result = mysqli_query($db,$sql);
// $result2 = $mysqli->query("SELECT * FROM `products` ORDER BY DESC LIMIT 4");
?>
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

<body class="index">
  <div class="preloader loader" style="display: block;"> <img src="image/loader.gif" alt="#" /></div>
  
  <!-- Start Header Navigation -->
  <?php include('header.php'); ?>
  <!-- Header End -->

  <div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
            <div class="item"> <a href="#"><img src="image/banners/Main-Banner1.jpg" alt="ban3.PNG"
            class="img-responsive" /></a> </div>
      <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.jpg" alt="main-banner3"
            class="img-responsive" /></a> </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="cms_banner">
        <div class="col-xs-12 col-md-6">
          <div id="subbanner1" class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner1.jpg" alt="Sub Banner1" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Women's Items</h2>
              <button class="btn">Shop Now</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div id="subbanner2" class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner2.jpg" alt="Sub Banner2" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Men's Items</h2>
              <button class="btn">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Products -->
  <div id="center">
    <div class="container">
      <div class="row">
        <div class="content col-sm-12">
          <div class="customtab">
            <h3 class="productblock-title">Our Best Products</h3>
            <div id="tabs" class="customtab-wrapper">
            </div>
          </div>
          <!-- tab-furniture-->
          <div id="tab-furnitur" class="tab-content">
            <div class="row">
           <?php foreach ($result as $row) { ?>
              <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                  <div class="product-thumb">
                    <div class="image product-imageblock">
                       <a href="product.html"> 
                         <img src="admin/<?php echo $row['image'];?>"
                          alt="iPod Classic" title="iPod Classic" class="img-responsive" width="100%" height="150px" /> 
                          <img
                          src="admin/<?php echo $row['image'];?>" alt="iPod Classic" title="iPod Classic"
                          class="img-responsive" /> 
                        </a>
                      <ul class="button-group">
                        <li>
                          <a href="product.php?p_id=<?php echo $row['p_id'];?>" class="addtocart-btn" title=""> View Details </a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption product-detail">
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                            class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                          class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                            class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                          class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                      <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row['p_name'];?></a></h4>
                      <p class="price product-price">Rs:<?php echo $row['price'];?></p>
                    </div>
                  </div>
                </div>
              </div>
        <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3 class="client-title">Favourite Brands</h3>
    <h4 class="title-subline">The High Quality Products</h4>
    <div id="brand_carouse" class="owl-carousel brand-logo">
      <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon"
            class="img-responsive" /></a> </div>
      <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon"
            class="img-responsive" /></a> </div>
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

<script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/global.js"></script>
<script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js"></script>
</body>

</html>