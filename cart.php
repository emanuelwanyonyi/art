<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
</div>
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
      <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
          <span class="navbar-text">
              <h3>Fancy Art<br></h3>
          </span>
          <ul class="navbar-nav" style="margin-left: 300px;">
              <li class="nav-item">
                  <a class="nav-link" href="index.php"><button class="btn btn-outline-primary ">Home</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="photography.php"><button class="btn btn-outline-primary active">Photography</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="paintings.php"><button class="btn btn-outline-primary active">Paintings</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="graffitti.php"><button class="btn btn-outline-primary active">Graffitti</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="drawings.php"><button class="btn btn-outline-primary active">Drawings</button></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="logout.php"><button class="btn btn-danger">Logout</button></a>
              </li>
          </ul>
      </nav>
      <div class="container-fluid padding " style="background-color:#cdc1de;">
          <div class="row welcome text-center ">
              <div class="col-12">
                  <br>
                  <br>
                  <h2 class="display-4">Thank you for choosing us</h2>
                  <br>
                  <br>
              </div>
              <hr>
          </div>
      </div>
      <HTML>
<HEAD>
<TITLE>Fancy Arts</TITLE>
<link href="css/shopstyle.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Fancy Arts Shopping Cart</div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "Kshs. ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "Kshs. ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="img/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Kshs. ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
      <!-- Footer-->
      <div class="col-xl-12 mt-5">
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
      </div>
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