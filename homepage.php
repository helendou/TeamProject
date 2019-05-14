<?php
  require "registration_log-in_php/connect.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <img style="max-width:200px; padding:30px;"src="img/weblogo.jpg" widthalt="logo">
        </div>
          <ul class="nav navbar-nav navbar-right；pagination">
            <li class="page-item"><a class="page-link" href="welcome.php">Welcome</a></li>
            <li class="page-item"><a class="page-link"href="order.html">Order</a></li>
            <li class="page-item"><a class="page-link"href="information.html">Information</a></li>
            <li class="page-item"><a class="page-link"href="contact.html">Contact</a></li>
         </ul>
         <a href="registration_log-in_php/login.php"><button type="button" class="btn btn-success">LOG IN</button></a>
         <a href="registration_log-in_php/register.php"><button type="button" class="btn btn-success">SIGN UP</button></a>
    </nav>
  </div>

    <hr>
       <div class="container">
         <div class="row">
        <div class="col-sm-4">
          <a href="information.html"> Welcome information
          <img src="img/service.jpg" alt="info" class="img-responsive" width="304" height="236">
          <button class="btn btn-success">Click me</button>
          </a>
        </div>

        <div class="col-sm-4">
          <a href="order.html"> Order Menu
          <img src="img/order.jpg" alt="order" class="img-responsive" width="304" height="236">
          <button class="btn btn-success">Click me</button>
          </a>
        </div>

        <div class="col-sm-4">
          <a href="contact.html"> Contact US
          <img src="img/contact.jpg" alt="contact" class="img-responsive"width="304" height="236">
          <button class="btn btn-success">Click me</button>
          </a>
        </div>
       </div>
    </div>

    <div class="container" style= "padding-top: 60px;"">
    <footer>
            <ul>
                <li><a href="welcome.html">Welcome</a></li>
                <li><a href="information.html">Information</a></li>
                <li><a href="order.html">Order</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
    </footer>
  </div>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>
 </body>
  </html>
