<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <title>Fancy Arts</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicons -->
      <link href="img/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Bootstrap CSS File -->
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Libraries CSS Files -->
      <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="lib/animate/animate.min.css" rel="stylesheet">

      <!-- Main Stylesheet File -->
      <!-- <link href="css/style.css" rel="stylesheet"> -->
      <link href="css/shopstyle.css" type="text/css" rel="stylesheet" />

  </head>

  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
          <span class="navbar-text">
              <h3>Fancy Art<br></h3>
          </span>
          <ul class="navbar-nav" style="margin-left: 800px;">
              <li class="nav-item">
                  <a class="nav-link" href="index.php"><button class="btn btn-outline-primary ">Home</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="photography.php"><button class="btn btn-outline-primary active">Photography</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="graffitti.php"><button class="btn btn-outline-primary active">Graffitii</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="drawings.php"><button class="btn btn-outline-primary active">Drawings</button></a>
              </li>
          </ul>
      </nav>

      <!-- ***********************DISPLAY*************************************** -->
      <div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>  
        <?php
        if ($product_array[$key]["category"] == 'painting.php') { 
	    ?>
		  <div class="product-item">
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "Ksh.".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		  </div>
        <?php
        }
        ?>
	<?php
		}
	}
	?>
</div>

       <!-- Footer-->
       <!-- <div class="col-xl-12 mt-5">
          <footer id="footer">

              <div class="footer-top">
                  <div class="container">

                  </div>
              </div>

              <div class="container">
                  <div class="copyright">
                      &copy; Copyright <strong>Fancy Arts</strong>. All Rights Reserved
                  </div>
                  <div class="credits">

                      Designed by <a href="#">Victoria Ngao</a>
                  </div>
              </div>

          </footer>
      </div> -->
      <!-- #footer -->

      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

      <!-- JavaScript Libraries -->
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/jquery/jquery-migrate.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="lib/superfish/hoverIntent.js"></script>
      <script src="lib/superfish/superfish.min.js"></script>

      <!-- Contact Form JavaScript File -->
      <script src="contactform/contactform.js"></script>

      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>

  </body>

  </html>