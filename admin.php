<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Capo Di Cibo Admin – Nick Pino</title>

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
          <li><i class="material-icons nav-admin">supervisor_account</i></li>
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
          <img class="circle z-depth-1" src="img/admin_pic.jpg" alt="Administrator Pic">
          <a href="#name"><span class="white-text name">Nick Pino</span></a>
          <a href="#admin-role"><span class="white-text admin-role">Administrator</span></a>
          <a href="#email"><span class="white-text email">nickpinographics@gmail.com</span></a>
        </div>
      </li>
    </ul>


    <ul class="main-nav-ul">
      <li class="main-nav-li"><p class="main-nav-p">Customers</p></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Accounts</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Messages</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Emails</a></li>
    </ul>

    <ul class="main-nav-ul">
      <li class="main-nav-li"><p class="main-nav-p">Orders</p></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Invoices</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Completed Orders</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Open Orders</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Shipping</a></li>
      <li class="main-nav-li"><a class="main-nav-a" href="#">Reports</a></li>
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
            <span class="card-title" style="color: #9b0606;">RECENT ORDERS</span>
  					<table class="striped responsive-table">
  						<thead>
  							<tr>
  								<th class="column1">Date</th>
  								<th class="column2">Order ID</th>
  								<th class="column3">Product Name</th>
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
  								<tr>
  									<td class="column1">2018-09-24 05:57</td>
  									<td class="column2">200393</td>
  									<td class="column3">Porcini & Cheese Agnolotti</td>
  									<td class="column4">$22.00</td>
  									<td class="column5">1</td>
  									<td class="column6">$28.75</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-23 05:57</td>
  									<td class="column2">200392</td>
  									<td class="column3">Spaghetti</td>
  									<td class="column4">$8</td>
  									<td class="column5">7</td>
  									<td class="column6">$56.00</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-22 05:57</td>
  									<td class="column2">200391</td>
  									<td class="column3">Pecorino Romano Tortellini</td>
  									<td class="column4">$22.00</td>
  									<td class="column5">1</td>
  									<td class="column6">$28.75</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-21 05:57</td>
  									<td class="column2">200390</td>
  									<td class="column3">Beef & Cheese Tortelli</td>
  									<td class="column4">$20.00</td>
  									<td class="column5">1</td>
  									<td class="column6">$26.75</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-19 05:57</td>
  									<td class="column2">200389</td>
  									<td class="column3">Lobster & Cheese Mezzelune</td>
  									<td class="column4">$30.00</td>
  									<td class="column5">3</td>
  									<td class="column6">$90.00</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-18 05:57</td>
  									<td class="column2">200388</td>
  									<td class="column3">Vermicelli</td>
  									<td class="column4">$6.00</td>
  									<td class="column5">2</td>
  									<td class="column6">$18.75</td>
  								</tr>

  								<tr>
  									<td class="column1">2018-09-19 05:57</td>
  									<td class="column2">200387</td>
  									<td class="column3">Spaghetti</td>
  									<td class="column4">$8.00</td>
  									<td class="column5">4</td>
  									<td class="column6">$38.75</td>
  								</tr>
  								<tr>
  									<td class="column1">2018-09-18 05:57</td>
  									<td class="column2">200386</td>
  									<td class="column3">Truffle & Cheese Ravioli</td>
  									<td class="column4">$24.00</td>
  									<td class="column5">1</td>
  									<td class="column6">$36.75</td>
  								</tr>
  						</tbody>
  					</table>
          </div>
          <div class="card-action">
            <a class="card-action" href="#">EDIT</a>
            <a class="card-action" href="#">DELETE</a>
            <a class="card-action" href="#">UPDATE</a>
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
