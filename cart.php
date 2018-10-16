<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Capo Di Cibo Cart – Nick Pino</title>

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


  <!-- Main Content Start -->
  <section>
    <div class="container">
      <div class="row row-cart">
        <div class="col s12">
          <div class="card white card-cart">
             <div class="card-content black-text">
               <i class="small material-icons prefix" style="color: #9b0606;">shopping_cart</i>
               <h4 style="color: #9b0606; display: inline-block;">CART</h4>
                <table class="striped responsive-table">
                  <thead>
                    <tr>
                      <th class="column1">Product Image</th>
                      <th class="column2">Product Name</th>
                      <th class="column3">Price</th>
                      <th class="column4">Quantity</th>
                      <th class="column5">Size</th>
                      <th class="column6"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="column1"><img class="circle z-depth-1" src="img/products/cappelletti.jpg" alt="Product Image" height="100" width="100"></td>
                      <td class="column2">Tagliatelle</td>
                      <td class="column3">$24.00</td>
                      <td class="column4">3<i class="tiny material-icons" style="padding:0 5px 0 10px;">add</i><i class="tiny material-icons">remove</i></td>
                      <td class="column5">32oz.</td>
                      <td class="column6"><i class="tiny material-icons">clear</i></td>
                    </tr>
                    <tr>
                      <td class="column1"><img class="circle z-depth-1" src="img/products/ravioli.jpg" alt="Product Image" height="100" width="100"></td>
                      <td class="column2">Truffle & Cheese Ravioli</td>
                      <td class="column3">$24.00</td>
                      <td class="column4">1<i class="tiny material-icons" style="padding:0 5px 0 10px;">add</i><i class="tiny material-icons">remove</i></td>
                      <td class="column5">4lbs.</td>
                      <td class="column6"><i class="tiny material-icons">clear</i></td>
                    </tr>
                    <tr>
                      <td class="column1"><img class="circle z-depth-1" src="img/products/mezzelune.jpg" alt="Product Image" height="100" width="100"></td>
                      <td class="column2">Lobster & Cheese Mezzelune</td>
                      <td class="column3">$30.00</td>
                      <td class="column4">1<i class="tiny material-icons" style="padding:0 5px 0 10px;">add</i><i class="tiny material-icons">remove</i></td>
                      <td class="column5">4lbs.</td>
                      <td class="column6"><i class="tiny material-icons">clear</i></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="column1"></th>
                      <th class="column2"></th>
                      <th class="column3">Total</th>
                      <th class="column4">Quantity</th>
                      <th class="column5"></th>
                      <th class="column6">Shipping</th>
                    </tr>
                    <tr>
                      <th class="column1"></th>
                      <th class="column2"></th>
                      <td class="column3">$78.00</td>
                      <td class="column4">5</td>
                      <td class="column5"></td>
                      <td class="column6">FREE</td>
                    </tr>
                  </tfoot>
                </table>
                <i class="small material-icons prefix" style="color: #9b0606;">credit_card</i>
                <h4 style="color: #9b0606; display: inline-block;">CHECKOUT</h4>
                <form action="#" method="post" id="payment-form">
                    <div class="row">
                        <div class="col s12 m6">
                        <input type="text" class="form-style" id="customer_name" name="customer_name">
                        <label for="customer_name">Name</label>
                        </div>
                        <div class="col s12 m6">
                        <input type="email" class="form-style" id="stripeEmail" name="stripeEmail">
                        <label for="stripeEmail">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m12">
                        <input type="text" class="form-style" id="address_line1" name="address_line1">
                        <label for="address_line1">Billing & Shipping Address</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m12">
                        <input type="text" class="form-style" id="address_city" name="address_city">
                        <label for="address_city">City</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6 m4">
                        <input type="text" class="form-style" id="address_state" name="address_state" maxlength="2">
                        <label for="address_state">State</label>
                        </div>
                        <div class="col s6 m4">
                        <input type="text" class="form-style" id="address_zip" name="address_zip" maxlength="5">
                        <label for="address_zip">ZIP Code</label>
                        </div>
                        <div class="col s12 m4">
                        <input type="text" class="form-style" id="address_country" name="address_country">
                        <label for="address_country">Country</label>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col s12 m8">
                          <input id="card-number" type="text" placeholder="xxxx xxxx xxxx xxxx"><!-- A Stripe Element will be inserted here. -->
                          <label for="card-number">Credit or Debit Card</label>
                      </div>

                      <div class="col s6 m2">
                          <input id="card-expiry" type="text">
                          <label for="card-expiry">Exp. Date</label>
                      </div>

                      <div class="col s6 m2">
                          <input id="card-cvc" type="text">
                          <label for="card-cvc">CVC</label>
                      </div>
                    </div>

                    <!-- Used to display form errors. -->
                    <div class="row">
                      <div class="col s12">
                        <div id="card-errors" role="alert"></div>
                      </div>
                    </div>

                   <div class="row">
                    <div class="col s12 m12 l12">
                      <div class="right">
                          <button id="checkout_button" class="waves-effect waves-light btn black z-depth-1">PLACE ORDER</button>
                      </div>
                    </div>
                   </div>
                </form>
             </div>
             <div class="card-action-cart">
               <i class="tiny material-icons prefix" style="color: #9b0606;">edit</i>
               <a class="card-action" href="#" style="display: inline;">EDIT</a>
               <i class="tiny material-icons prefix" style="color: #9b0606;">add_circle</i>
               <a class="card-action" href="#" style="display: inline;">ADD ITEM</a>
             </div>
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

<!--Stripe API-->
<script src="https://js.stripe.com/v3/"></script>

</body>
</html>
