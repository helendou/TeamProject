<?php
  require "registration_log-in_php/connect.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <img style="max-width:200px; padding:30px;"src="img/weblogo.jpg" widthalt="logo">
        </div>
          <ul class="nav navbar-nav navbar-right；pagination">
            <li class="page-item"><a class="page-link" href="welcome.html">Welcome</a></li>
            <li class="page-item"><a class="page-link"href="order.html">Order</a></li>
            <li class="page-item"><a class="page-link"href="information.html">Information</a></li>
            <li class="page-item"><a class="page-link"href="contact.html">Contact</a></li>
         </ul>
    </nav>

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

        <div class="col-md-4">
          <a href="contact.html"> Contact US
          <img src="img/contact.jpg" alt="contact" class="img-responsive"width="304" height="236">
          <button class="btn btn-success">Click me</button>
          </a>
        </div>
      </div>
    </div>
        <hr>

        <form action="index.php" method="POST">
                <div class="container"  style="background-color: lightgreen" >
                    <h3> Order your meal online</h3>
                    <h5>Fields marked with * are required</h5><br>
                    <div>
                        <label for="firstname_parent">Firstname of Parent*</label>&nbsp;&nbsp;
                        <input type="text" name="firstnameParent"  id="firstname_parent" size="30"/>&nbsp;&nbsp;&nbsp;&nbsp;

                        <label for="name_parent">Lastname of Parent*</label>&nbsp;&nbsp;
                        <input type="text" name="nameParent" id="name_parent" size="30"/><br><br>
                    </div>
                    <div>
                        <label for="name_kids">Firstname of Child*</label>&nbsp;&nbsp;
                        <input type="text" name="firstname_child" id="firstname_child" size="30"/>&nbsp;&nbsp;&nbsp;&nbsp;

                        <label for="lastname_child">Lastname of Child*</label>&nbsp;&nbsp;
                        <input type="text" name="lastname_child" id="lastname_child" size="30"/><br><br>
                    </div>
                    <div>
                        <label for="Schoold"> School of Child*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="school" id="school" size="30"/>&nbsp;&nbsp;&nbsp;&nbsp;

                        <label for="age">Age of Child*</label>&nbsp;&nbsp;
                        <input type="text" name="age" id="age" size="30"/><br><br>
                    </div>
                    <div>
                        <h4>Please select your meal from Monday to Friday</h4>
                        <label for="monday">Monday*</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="monday" id="monday">
                            <option value=" ">&nbsp;</option>
                            <option value= "1" >1. Poulet Général Tao</option>
                            <option value= "2" >2. Paté Chinois</option>
                        </select><br><br>
                        <label for="Tuesday">Tuesday*</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="Tuesday" id="Tuesday">
                            <option value=" ">&nbsp;</option>
                            <option value="1">1. Macaroni Fromage</option>
                            <option value="2">2. Hamburger</option>
                        </select><br><br>
                        <label for="wednesday">Wednesday*</label>
                        <select name="wednesday" id="wednesday">
                            <option value=" ">&nbsp;</option>
                            <option value="1">1. Spaghetti</option>
                            <option value="2">2. Lasagne</option>
                        </select><br><br>
                        <label for="thursday">Thursday*</label>&nbsp;&nbsp;&nbsp;
                        <select name="thursday" id="thursday">
                            <option value=" ">&nbsp;</option>
                            <option value="1">1. Pennine Sauce Viande</option>
                            <option value="2">2. Pizza Tomate Fromage</option>
                        </select><br><br>
                        <label for="Friday">Friday*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="friday" id="friday">
                            <option value=" ">&nbsp;</option>
                            <option value="1">1. Pilaf au Saumon</option>
                            <option value="2">2. Pad Thai au Poulet</option>
                        </select><br><br>
                    </div>

                    <div>
                        <input type="submit" id="submit" value="Submit"><br><br>
                    </div>

                    <div class="container">

                    <?php
                        $STH = $DBH->query('SELECT image FROM foods');
                        $STH->setFetchMode(PDO::FETCH_ASSOC);
                        while($row=$STH->fetch()){
                    ?>
                          <img src=<?php echo $row['image'];?> alt="food image">
                    <?php
                        }
                    ?>
                    </div>
                </div>
                </form>
                <hr>

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


  </body>
</html>
