<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vicky art shop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
.
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body style="background-color:#352c3d;">
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#hero">Vicky</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <!-- <li><a href="#photo">Photography</a></li> -->
          <li><a href="photography.php">Photography</a></li>
          <li><a href="#paintings">Paintings</a></li>
          <li><a href="#graffitti">Graffitti</a></li>
          <li><a href="#drawings">Drawings</a></li>
          <li class="menu-has-children"><a href="">Account</a>
            <ul>
              <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
              <li class="menu-has-children"><a href="logout.php">Logout</a>
                <!-- <ul>
                  <li><a href="#">Artist</a></li>
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">Specialist</a></li>
                </ul> -->
              </li>
            </ul>
          </li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  <br>
  <br>
  <br>
  <br>
  <!-- jumbotron-->
 
  <div class="jumbotron" style="height:405px; background-color:#40354a ">
 <div class="container" style=" background-image:img/tero.jpg; size:cover; color:#d99a64;">
    <p class="lead">
   <i> <strong>Light The Summer</strong><br>
The sun is with the paintbrush<br>
ambling down the river blue.
See, your eyes are the mirror<br>
in between the earth and sky duo.

Bask in the open air theatre<br>
eye on spread out with colour.
Indulge in, with a slice of summer<br>
you got the brightest star, the light<br>
on your canvas, you got the clue.
Now draw your way through<br>
art yours in between the two!<br></i>
</p>
 </div>
  </div>
  <br>
  <hr>
  <br>
  <!-- photograhy section-->
  <section id="photo">
     <div class="section-header">
        <h3 class="section-title">Photography</h3>
        <p class="section-description"><i>Write something beautiful here</i></p>
     </div>
     <div class="container">
        <div class="row photo-container">
           <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/photo/2.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- another photo-->
           <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/photo/3.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <br>
           <!-- another photo-->
           <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/photo/4.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <br>
           <br>
           <!-- another photo-->
           <div class="row photo-container">
              <div class="col-md-4 mt-5">
                 <div class="card">
                    <img class="card-img-top" src="img/photo/5.jpg" alt="Card image cap">
                    <div class="card-body">
                       <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                       <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                       <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                       <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                    </div>
                 </div>
              </div>
              <!-- another photo-->
              <div class="col-md-4 mt-5">
                 <div class="card">
                    <img class="card-img-top" src="img/photo/6.jpg" alt="Card image cap">
                    <div class="card-body">
                       <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                       <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                       <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                       <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                    </div>
                 </div>
              </div>
              <!-- another photo-->
              <div class="col-md-4 mt-5">
 .                <div class="card">
                    <img class="card-img-top" src="img/photo/2.jpg" alt="Card image cap">
                    <div class="card-body">
                       <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info .d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                       <p class="card-text">Explanation of the type ofphoto artist and date of posting.</p>
                       <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                       <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <br>
  <br>
  <hr>
  <br>
  
  <!-- painting section-->
  
  <section id="paintings" style="background-color:#4d4454;">
     <div class="section-header">
        <h3 class="section-title">Paintings</h3>
        <p class="section-description"><i>Write something beautiful here about paintings</i></p>
     </div>
     <div class="container">
        <div class="row paintings-container">
          <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/1.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- another painting-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/2.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- painting 2-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/3.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
        </div>
        <!-- another row-->
        <div class="row paintings-container">
            <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/4.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- painting 3-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/5.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- painting 4-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/painting/6.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div> 
        </div>
     </div>
  <br><br><hr>
   </section>
  <br><br><hr><br>
  
  
<!-- Graffitti section-->
  
  <section id="graffitti">
     <div class="section-header">
        <h3 class="section-title">Graffitti</h3>
        <p class="section-description"><i>Write something beautiful here about graffiti</i></p>
     </div>
     <div class="container">
        <div class="row paintings-container">
          <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/graffiti/1.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- graffitti 2-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/graffiti/2.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a h.ref="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- grafitti 3-->
             <div class=".col-md-4 mt-5">
              <div class=".card">
                 <img class.="card-img-top" src="img/graffiti/3.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 clas.s="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-.flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class=".card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#". class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button clas.s="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>.
           </div>.
        </div>.
        <!-- an.other row-->
        <div cla.ss="row paintings-container">
            <div class="col-md-4 mt-5">
              <di.v class="card">
                 <.img class="card-img-top" src="img/graffiti/4.jpg" alt="Card image cap">
                 <d.iv class="card-body">
                    .<h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <.p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a. href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <bu.tton class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>.
              </div>.
           </div>
           <!-- grafi.ti 5-->
             <div clas.s="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/graffiti/5.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- graffitti 6-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/graffiti/6.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p .class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div> 
        </div>.
     </div>.
  </section>.
  .
  
  <.!-- Drw=awings section-->
  .
  <.section id="drawings" style="background-color:#4d4454;">
    . <div class="section-header">
     .   <h3 class="section-title">Drawings</h3>
        <p class="section-description"><i>Write something beautiful here about drawings</i></p>
     <./div>
     <d.iv class="container">
        <div class="row paintings-container">
          <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/1.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- drawing 1-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/2.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- drawing 2-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/3.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
        </div>
        <!-- another row-->
        <div class="row paintings-container">
            <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/4.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- drawing 3-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/5.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div>
           <!-- drawing 4-->
             <div class="col-md-4 mt-5">
              <div class="card">
                 <img class="card-img-top" src="img/drawing/6.jpg" alt="Card image cap">
                 <div class="card-body">
                    <h5 class="card-title border-bottom pb-3">Name of the art <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
                    <p class="card-text">Explanation of the type of painting artist and date of posting.</p>
                    <a href="#" class="btn btn-sm btn-info float-right">Explore<i class="fas fa-angle-double-right"></i></a>
                    <button class="btn btn-outline-info float-left btn-sm">Add to cart</button>
                 </div>
              </div>
           </div> 
        </div>
     </div>
  <br><br><hr>
   </section>
  <br><br><hr><br>

<!-- Footer-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Vicky</strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="#">Hooligans</a>
      </div>
    </div>
  </footer>
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