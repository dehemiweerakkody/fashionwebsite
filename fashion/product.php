<?php $db = mysqli_connect('localhost', 'root', '', 'fashion'); ?>
<?php
$product_id = $_GET['p_id'];
$sql = "SELECT * FROM products WHERE p_id=$product_id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

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

<body class="category col-2 left-col">
  <div class="preloader loader" style="display: block;"> <img src="image/loader.gif" alt="#" /></div>
 
  <!-- Start Header Navigation -->
  <?php include('header.php'); ?>
  <!-- Header End -->

  <div class="breadcrumb parallax-container">
    <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
    <h1>Product</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="category.html">Desktops</a></li>
      <li><a href="#">Casual Shirt With Ruffle Hem</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="row">
          <div class="col-sm-5">
            <div class="thumbnails">
              <div><a class="thumbnail fancybox" href="admin/<?php echo $row['image']; ?>" title="Casual Shirt With Ruffle Hem"><img src="admin/<?php echo $row['image']; ?>" title="Casual Shirt With Ruffle Hem" alt="iPod Classic" /></a></div>
            </div>
          </div>
          <div class="col-sm-7 prodetail">
            <h1 class="productpage-title"> <?php echo $row['p_name']; ?> </h1>
            <ul class="list-unstyled productinfo-details-top">
              <li>
                <p>Price :</p>
                <h2 class="productpage-price">Rs: <?php echo $row['price']; ?> </h2>
              </li>
            </ul>
            <hr>
            <ul class="list-unstyled product_info">
              <li>
                <label>Brand:</label>
                <span> <a href="#"><?php echo $row['brand']; ?></a></span></li>
              <li>
                <label>Product Code:</label>
                <span style="color:#000;"> <?php echo $row['itemcode']; ?> </span></li>
              <li>
                <label>Availability:</label>
                <span style="color:#000;"> In Stock</span></li>
            </ul>
            <hr>
          </div>
        </div>
        <div class="productinfo-tab">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description">
              <div class="cpt_product_description ">
                <div>
                  <p> <?php echo $row['description']; ?> </p>
                </div>
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
        <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
      </div>
    </div>

    <script src="javascript/jquery.parallax.js"></script>
    <script>
      jQuery(document).ready(function($) {
        $('.parallax').parallax();
      });
    </script>

    <script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/global.js"></script>
    <script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js"></script>

</body>

</html>