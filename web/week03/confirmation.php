<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <title>Bike</title>
</head>

<body>
  <div class="box">
    <h1>Enjoy your Bike!</h1>
  </div>
  <h4>Name: <?php echo $_SESSION["first-name"] . " " . $_SESSION["last-name"]; ?></h4>
  <h4>Address: <?php echo $_SESSION["address"]; ?></h4>
  <h4>Phone Number: <?php echo $_SESSION["phone"]; ?></h4>
  <div class="box">

    <h3>Cyclocross Bike: </h3>
    <div class="products-box">
      <?php
      foreach ($_SESSION[$array_product] as $key => $value) {
        switch ($key) {
          case 'bike-1':
            echo "<div class=\"product\"><label><img src=\"bike-1.jpg\" alt =\"bike-1\">$key <br> $$value</label></div>";
            break;
          case 'bike-2':
            echo "<div class=\"product\"><label><img src=\"bike-2.jpg\" alt =\"bike-2\">$key <br> $$value</label></div>";
            break;
          case 'bike-3':
            echo "<div class=\"product\"><label><img src=\"bike-3.jpg\" alt =\"bike-3\">$key <br> $$value</label></div>";
            break;
          
            
          default:
            # code...
            break;
        }
      }
      ?>
    </div>
    <div class="box">
      <?php
      $totalAmt = 0;
      foreach ($_SESSION[$array_product] as $key => $value) {
        $totalAmt += $value;
      }
      echo "<h3>Total: $$totalAmt </h3>";
      ?>
    </div>
  </div>
</body>

</html>