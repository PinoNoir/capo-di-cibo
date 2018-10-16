<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Capo Di Cibo Home – Nick Pino</title>

  <style>
    /* Google Fonts */
    @import url("https://fonts.googleapis.com/css?family=Rozha+One|Josefin+Sans|Raleway");

    /* Materialize Icons */
    @import url("https://fonts.googleapis.com/icon?family=Material+Icons");

    /* Font Awesome Icons */
    @import url("https://use.fontawesome.com/releases/v5.0.8/css/all.css");
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    /* Materialize CSS */
    @import url("https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css");

    /* Custom CSS */
    @import url("css/styles.css");
  </style>
</head>

<body>
  <!-- Header Start -->
  <header>
     <div class="center-align shipping">
       <span class="center-align important">Free Shipping on U.S. orders over $50</span>
     </div>
  </header>
  <!-- Header End -->

  <!-- Navigation Section Start -->
    <nav class="nav-center" >
      <div class="nav-wrapper">

        <div id="branding" class="brand-logo center">
          <a href="home.php"><img src="img/capo-di-cibo-logo-01.svg" alt="Capo Di Cibo Logo"/></a>
        </div>

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="main-nav">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="nav-style" href="home.php">Home</a></li>
            <li><a class="nav-style" href="products.php">Products</a></li>
            <li><a class="nav-style" href="admin.php">Admin</a></li>
          </ul>
        </div>

        <div class="utility-nav">
          <ul class="utility-nav">
            <li><i class="material-icons nav">search</i></li>
            <li><a class="icons" href="cart.php"><i class="material-icons nav">shopping_cart</i></a></li>
            <li><a class="icons" href="client.php"><i class="material-icons nav">account_circle</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Move the sidenav outside of .navbar-fixed -->
  <ul class="sidenav" id="mobile-demo">
    <li><a class="nav-style" href="home.php">Home</a></li>
    <li><a class="nav-style" href="products.php">Products</a></li>
    <li><a class="nav-style" href="admin.php">Admin</a></li>
  </ul>
  <!-- Navigation Section End -->

  <!-- Hero Image Start -->
  <div class="parallax-container valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s7 push-s4"></div>
        <div class="col s5 pull-s8">
          <h4 class="hero-text left-align valign">Try our spaghetti!</h4>
          <span class="white-text">Our handmade spaghetti is a customer favorite made with the freshest of ingredients. It
            pairs well with any of our delicious sauces & quality cheeses.</span><br>
          <button class="waves-effect waves-light btn specialty-btn"><span class="hero_btn">Add to Cart</span></button>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/hero.jpg" alt="Spaghetti Carbonara"></div>
  </div>
  <!-- Hero Image End -->


  <!-- Main Content Start -->
  <section class="main-content">
    <div class="container-card-panel">
      <h1 class="featured center-align">Our Products</h1>
      <div class="row">

        <!--Product Card 1 Start-->
        <div class="col s12 m6 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator zoom" src="img/spagehtti_home.jpg" alt="Spaghetti">
            </div>

            <div class="card-content">
              <span class="card-title activator product">Artisan Pastas</span>
              <p><a class="product-link" href="products.php">Browse Products</a></p>
            </div>

            <div class="card-reveal black">
              <span class="card-title white-text text-darken-2">Product Description<i class="material-icons right darken-2">close</i></span>
              <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
        <!--Product Card 1 End-->

        <!--Product Card 2 Start-->
        <div class="col s12 m6 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator zoom" src="img/pasta_sauces_home.jpg" alt="Marinara Sauce">
            </div>

            <div class="card-content">
              <span class="card-title activator product">Pasta Sauces</span>
              <p><a class="product-link" href="products.php">Browse Products</a></p>
            </div>

            <div class="card-reveal black">
              <span class="card-title white-text text-darken-2">Product Description<i class="material-icons right darken-2">close</i></span>
              <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
        <!--Product Card 2 End-->

        <!--Product Card 3 Start-->
        <div class="col s12 m6 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator zoom" src="img/cheese_home.jpg" alt="Pecorino Romano Cheese">
            </div>

            <div class="card-content">
              <span class="card-title activator product">Premium Cheeses</span>
              <p><a class="product-link" href="products.php">Browse Products</a></p>
            </div>

            <div class="card-reveal black">
              <span class="card-title white-text text-darken-2">Product Description<i class="material-icons right darken-2">close</i></span>
              <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
        <!--Product Card 3 End-->
      </div>
    </div>

      <!-- Featured Products Start -->
      <?php
      include_once("dbconnect.php");
        function fill_products($conn)
          {
            $output = ' ';
            $count=1;
            $sql = "SELECT * FROM products limit 4";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result))
              {
                if($count==1){
                $output .= '<hr class="style1">';
                $output .= '<div class="row cleartop row-products">';}
                $output .= '<div class="col s12 m6 l3 valign">';
                $output .= '<div class="card-panel featured valign center-align hover-card" style="background-image: url('.$row['productImage'].');"></div>';
                $output .= '<div class="valign center-align">';
                $output .= '<hr class="style1">';
                $output .= '<p class="product-name">'.$row["productName"].'</p>';
                $output .= '<p class="product-description">'.$row["description"].'</p>';
                $output .= '<p class="price">'.$row["price"].'</p>';
                $output .= '<span class="rating-name">Rating';
                for ($x = 1; $x <= $row["rating"]; $x++) {
                  $output .= '<i class="tiny material-icons rating">star</i>';
                }
                $output .= '</span>';
                $output .= '<br>';
                $output .= '<a href="products.php" class="btn center-align view"><span class="view_btn">Add to Cart</span></a>';
                $output .= '</div>';
                $output .= '</div>';
                if($count==4){
                $output .=     '</div>';
                $count=1;
                }
                else{
                    $count++;
                }
              }
            return $output;
          }?>

        <div class="container">
          <h1 class="featured center-align">Featured Artisan Pastas</h1>
          <div class="input-field col s3">
            <div id="fill_inventory">
              <?php echo fill_products($conn); ?>
            </div>
          </div>
        </div>
      <!-- Featured Products End -->

    <div class="container-card-panel">
      <hr class="style1">
      <div class="row">
        <h1 class="featured center-align">20% Off All Premium Sauces</h1>
        <div class="col s12 m6 l3 valign">
          <div class="card-panel one valign center-align hover-card"></div>
          <div class="valign center-align">
            <hr class="style1">
              <p class="product-name">Sugo di Pomodoro - 32oz</p>
              <p class="product-description">A simple yet delectable red sauce.
              </p>
              <span class="price">Sale Price: $13</span><br>
              <span class="rating-name">Sauce Rating</span>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i><br>
              <a href="products.php" class="btn center-align view"><span class="view_btn">Add to Cart</span></a>
          </div>
        </div>

        <div class="col s12 m6 l3 valign">
          <div class="card-panel two valign center-align hover-card"></div>
          <div class="valign center-align">
            <hr class="style1">
              <p class="product-name">Napoletana - 32oz</p>
              <p class="product-description">Try the bold flavor of our classic Napoletana sauce.
              </p>
              <span class="price">Sale Price: $12</span><br>
              <span class="rating-name">Sauce Rating</span>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star_half</i><br>
              <a href="products.php" class="btn center-align view"><span class="view_btn">Add to Cart</span></a>
          </div>
        </div>

        <div class="col s12 m6 l3 valign">
          <div class="card-panel three valign center-align hover-card"></div>
          <div class="valign center-align">
            <hr class="style1">
              <p class="product-name">Pesto alla Genovese - 16oz</p>
              <p class="product-description">Tyr our version of classic pesto.
              </p>
              <span class="price">Sale Price: $16</span><br>
              <span class="rating-name">Sauce Rating</span>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star_half</i><br>
              <a href="products.php" class="btn center-align view"><span class="view_btn">Add to Cart</span></a>
          </div>
        </div>

        <div class="col s12 m6 l3 valign">
          <div class="card-panel four valign center-align hover-card"></div>
          <div class="valign center-align">
            <hr class="style1">
              <p class="product-name">Sugo di Manzo - 32oz</p>
              <p class="product-description">A hearty meat sauce from the region of Campagna.
              </p>
              <span class="price">Sale Price: $12</span><br>
              <span class="rating-name">Sauce Rating</span>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star</i>
              <i class="tiny material-icons rating">star_half</i><br>
              <a href="products.php" class="btn center-align view"><span class="view_btn">Add to Cart</span></a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Main Content End -->



  <!-- Footer Start -->
  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row footer_row">
        <div class="col s12 m6 l3">
          <h5 class="footer">Our Affiliates</h5>

          <img src="img/affiliates-01.svg" alt="Afilliate Logos" style="max-width: 200px; height: auto;">

          <h5 class="footer">Secure Payment Options</h5>

          <i class="fa fa-cc-amex pay-icon" style="font-size:18px"></i>
          <i class="fa fa-cc-discover pay-icon" style="font-size:18px"></i>
          <i class="fa fa-cc-mastercard pay-icon" style="font-size:18px"></i>
          <i class="fa fa-cc-visa pay-icon" style="font-size:18px"></i>
          <i class="fa fa-paypal pay-icon" style="font-size:18px"></i>
        </div>

        <div class="col s12 m6 l3">
          <h5 class="footer">Site Links</h5>
          <ul>
            <li><a class="footer" href="products.php">Pasta</a></li>
            <li><a class="footer" href="products.php">Pasta Sauces</a></li>
            <li><a class="footer" href="products.php">Cheese</a></li>
            <li><a class="footer" href="admin.php">Admin</a></li>
          </ul>
        </div>

        <div class="col s12 m6 l3">
          <h5 class="footer">Contact Us</h5>
          <ul>
            <li><a class="footer" href="#">+39 06 679 3102</a></li>
          </ul>

          <h5 class="footer">Capo Di Cibo Headquarters</h5>
          <ul>
            <li><a class="footer" href="#">Via della Croce 8 | Piazza di Spagna, 00187 Rome, Italy</a></li>
          </ul>

          <h5 class="footer">Find the Information</h5>
          <ul>
            <li><a class="footer" href="#">Store Locations</a></li>
            <li><a class="footer" href="#">Flagship Store Virtual Tour</a></li>
            <li><a class="footer" href="#">FAQ</a></li>
            <li><a class="footer" href="#">Our Policies</a></li>
          </ul>
        </div>

        <div class="col s12 m6 l3 right-align">
          <h5 class="footer">Find us on social media</h5>
          <a class="footer_icons" href="https://www.facebook.com/"><i class="fa fa-facebook-official" style="font-size:18px"></i></a>
          <a class="footer_icons" href="https://www.linkedin.com//"><i class="fa fa-linkedin-square" style="font-size:18px"></i></a>
          <a class="footer_icons" href="https://www.youtube.com/"><i class="fa fa-youtube-square" style="font-size:18px"></i></a>
          <a class="footer_icons" href="https://www.instagram.com/"><i class="fa fa-instagram" style="font-size:18px"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-copyright black">
      <div class="container">
      <p class="center-align">This site is not official and is an assignment for a UCF Digital Media course designed with <i class="tiny material-icons">
      favorite</i> by Nick Pino</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->


<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>

<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Materialize JavaScript -->
<script src="js/custom.js"></script>


</body>
</html>
