<?php 
$db = mysqli_connect('localhost','root', '', 'fashion'); 
?>
<?php
$sql = "SELECT * FROM products WHERE gender='F'";
$result = mysqli_query($db, $sql);
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
    <div class="parallax"><img src="image/about_banner.jpg" alt="#"></div>
    <h1 class="category-title">Women's Products</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="category-women.php">Women's Items</a></li>
    </ul>
  </div>

  <div class="container">
    <div class="row">
      <div id="column-left" class="col-sm-3 hidden-xs column-left">
        <div class="Categories left-sidebar-widget">
          <div class="columnblock-title">Sale.. Sale..</div>
          <div class="category_block">
            <img src="image/banners/small_banner1.jpg" />
          </div>
        </div>
        <div class="filter left-sidebar-widget">
          <div class="columnblock-title">Special Offers</div>
          <div class="filter-block">
            <img src="image/banners/small_banner1.jpg" />
          </div>
        </div>
        <div class="banner left-sidebar-widget"> <a href="#"><img src="image/banners/small_banner1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
        <div class="special left-sidebar-widget">

        </div>
      </div>
      <div class=" content col-sm-9">
        <div class="category-page-wrapper">
          <div class="col-md-6 list-grid-wrapper">
            <div class="btn-group btn-list-grid">
              <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"></button>
              <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
            </div>
          </div>
        </div>
        <br />
        <div class="grid-list-wrapper">
          <?php foreach ($result as $row) { ?>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image product-imageblock">
                  <a href="product.html">
                    <img src="admin/<?php echo $row['image']; ?>" alt="iPod Classic" class="img-responsive" />
                    <img src="admin/<?php echo $row['image']; ?>" alt="iPod Classic" class="img-responsive" />
                  </a>
                  <ul class="button-group">
                        <li>
                          <a href="product.php?p_id=<?php echo $row['p_id'];?>" class="addtocart-btn" title=""> View Details </a>
                        </li>
                      </ul>
                </div>
                <div class="caption product-detail">
                  <br>
                  <h1 ><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row['p_name'];?></a></h1>
                  <p ><a href="#"> Brand: <?php echo $row['brand'];?></a></p>
                  <h3 class="price product-price">Rs: <?php echo $row['price'];?></h3>
                  <p class="product-desc"> 
                  <?php echo $row['description'];?>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
    <?php include('footer.php');?>
  <!-- Footer End -->

  <script src="javascript/jquery.parallax.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $('.parallax').parallax();
    });
  </script>

  <script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
  <script type="text/javascript" src="javascript/template_js/template.js"></script>
  <script type="text/javascript" src="javascript/common.js"></script>
  <script type="text/javascript" src="javascript/global.js"></script>
  <script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js"></script>
</body>

</html>