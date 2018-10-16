<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Capo Di Cibo Client – Nick Pino</title>

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
  <header class="admin z-depth-1">
    <div id="branding" class="brand-logo-admin">
      <a href="home.php"><img src="img/capo-di-cibo-logo-01.svg" alt="Capo Di Cibo Logo" width="175"/></a>
      <div class="utility-nav-admin">
        <ul class="utility-nav-admin">
          <li><i class="material-icons nav-admin">search</i></li>
          <li><i class="material-icons nav-admin">message</i></li>
          <li><a class="icons" href="cart.php" style="color: black;"><i class="material-icons nav">shopping_cart</i></a></li>
        </ul>
      </div>
    </div>
  </header>
<!-- Header End -->

<!-- Nav Bar Start -->
  <aside class="sidebar">
    <ul class="user-view">
      <li>
        <div class="user-view">
          <div class="background"></div>
          <img class="circle z-depth-1" src="img/user_pic.jpg" alt="User Photo">
          <a href="#name"><span class="white-text name">Delilah123</span></a>
          <a href="#admin-role"><span class="white-text admin-role">User Profile</span></a>
          <a href="#email"><span class="white-text email">delilah73@gmail.com</span></a>
        </div>
      </li>
    </ul>

  <ul class="main-nav-ul">
    <li class="main-nav-li"><p class="main-nav-p">Your Account</p></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">Edit Account</a></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">My Orders</a></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">Payment Options</a></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">Gift Cards</a></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">Refunds</a></li>
    <li class="main-nav-li"><a class="main-nav-a" href="#">Shipping</a></li>
  </ul>
    <a href="home.php" class="waves-effect waves-light btn btn-small grey lighten-3 btn-logout">LOG OUT</a>
</aside>
<!-- Nav Bar End -->

<!-- Main Content -->
<div class="main-container">
  <div class="row admin-user">
    <div class="col s3 m6 l12">
      <div class="card white card-admin">
         <div class="card-content black-text">
           <span class="card-title" style="color: #9b0606;">MY ACCOUNT</span>
           <table class="striped responsive-table">
             <thead>
               <tr>
                 <th class="column1">Customer Number</th>
                 <th class="column2">Billing Address</th>
                 <th class="column3">Shipping Address</th>
                 <th class="column4">Phone Number</th>
                 <th class="column5">Credit Cards</th>
               </tr>
             </thead>
             <tbody>
                 <tr>
                   <td class="column1">00342</td>
                   <td class="column2">655 Jillotus St. <br> Merritt Island, FL. <br> 32954</td>
                   <td class="column3">4378 Hillside St. <br> Merritt Island, FL. <br> 31956</td>
                   <td class="column4">727-354-2288</td>
                   <td class="column4">2457 xxxx xxxx xxxx <br> 5632 xxxx xxxx xxxx</td>
                 </tr>
             </tbody>
           </table>
         </div>
         <div class="card-action">
           <a class="card-action" href="#">EDIT</a>
           <a class="card-action" href="#">ADD ITEM</a>
           <a class="card-action" href="#">UPDATE</a>
         </div>
       </div>
    </div>
  </div>
   <div class="row admin-user">
     <div class="col s3 m6 l12">
       <div class="card white card-admin">
          <div class="card-content black-text">
            <span class="card-title" style="color: #9b0606;">ORDER HISTORY</span>
    					<table class="striped responsive-table">
    						<thead>
    							<tr>
    								<th class="column1">Date</th>
    								<th class="column2">Order ID</th>
    								<th class="column3">Name</th>
    								<th class="column4">Price</th>
    								<th class="column5">Quantity</th>
    								<th class="column6">Total</th>
    							</tr>
    						</thead>
    						<tbody>
    								<tr>
    									<td class="column1">2018-09-29 01:22</td>
    									<td class="column2">200397</td>
    									<td class="column3">Tagliatelle</td>
    									<td class="column4">$21.00</td>
    									<td class="column5">3</td>
    									<td class="column6">$27.75</td>
    								</tr>
    								<tr>
    									<td class="column1">2018-09-28 05:57</td>
    									<td class="column2">200396</td>
    									<td class="column3">Shrimp & Basil Cappelletti</td>
    									<td class="column4">$54.00</td>
    									<td class="column5">2</td>
    									<td class="column6">$54.00</td>
    								</tr>
    								<tr>
    									<td class="column1">2018-09-26 05:57</td>
    									<td class="column2">200395</td>
    									<td class="column3">Penne</td>
    									<td class="column4">$8.00</td>
    									<td class="column5">2</td>
    									<td class="column6">$22.75</td>
    								</tr>
    								<tr>
    									<td class="column1">2018-09-25 23:06</td>
    									<td class="column2">200394</td>
    									<td class="column3">Fettuccine</td>
    									<td class="column4">$7.00</td>
    									<td class="column5">8</td>
    									<td class="column6">$56.00</td>
    								</tr>
    						</tbody>
    					</table>
          </div>
        </div>
     </div>
   </div>

   <div class="row admin-user">
     <div class="col s3 m6 l12">
       <div class="card white card-admin">
          <div class="card-content black-text">
            <span class="card-title" style="color: #9b0606;">REFUNDS</span>
             <table class="striped responsive-table">
               <thead>
                 <tr>
                   <th class="column1">Date</th>
                   <th class="column2">Order ID</th>
                   <th class="column3">Name</th>
                   <th class="column4">Price</th>
                   <th class="column5">Quantity</th>
                   <th class="column6">Total</th>
                 </tr>
               </thead>
               <tbody>
                   <tr>
                     <td class="column1">2018-09-29 01:22</td>
                     <td class="column2">200397</td>
                     <td class="column3">Tagliatelle</td>
                     <td class="column4">$21.00</td>
                     <td class="column5">3</td>
                     <td class="column6">$27.75</td>
                   </tr>
               </tbody>
             </table>
          </div>
        </div>
     </div>
   </div>
   <!-- Footer Start -->
   <footer class="page-footer black">
     <div class="footer-copyright black admin">
       <div class="container">
       <p class="center-align">This site is not official and is an assignment for a UCF Digital Media course designed with <i class="tiny material-icons">
       favorite</i> by Nick Pino</p>
       </div>
     </div>
   </footer>
   <!-- Footer End -->
 </div>
 <!-- Main Content End -->







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
