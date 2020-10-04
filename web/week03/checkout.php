<?php
// Initiate the session
session_start();
// Initialize an array

// Initialize a total variable
$totalAmt = 0;

foreach ($_SESSION["products"] as $product) {
  $_SESSION["array_product"];
  switch ($product) {
    case 'soil':
      $_SESSION["array_product"]['DR.Earth'] = 9.99;
      unset($_SESSION["soil"][0]);
      $totalAmt += 9.99;
      break;
    case 'soil-2':
      $_SESSION["array_product"]['DR.Earth'] = 8.99;
      unset($_SESSION["soil-2"][1]);
      $totalAmt += 8.99;
      break;
    case 'soil-3':
      $_SESSION["array_product"]['DR.Earth'] = 9.99;
      unset($_SESSION["soil-3"][2]);
      $totalAmt += 9.99;
      break;

    default:
      break;
  }
}

// Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (
    isset($_POST["first-name"]) &&
    isset($_POST["last-name"]) &&
    isset($_POST["address"]) &&
    isset($_POST["phone"])
  ) {
    $_SESSION["first-name"] = $_POST["first-name"];
    $_SESSION["last-name"] = $_POST["last-name"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["phone"] = $_POST["phone"];
    header('Location: confirmation.php');
  }
}
?>
<!DOCTYPE html>

<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <script src="index.js"></script>
  <title>bike-Project</title>
</head>

<body>
  <div class="form-box">

    <h1>Checkout</h1>

    <form onsubmit="return validate()" action="<?php echo htmlspecialchars($_POST['confirmation.php']); ?>" method="post">

      <div class="payment-details-box">

        <div class="box">
          <div class="box">
            <h3>Items in cart:</h3>
          </div>
          <?php
          foreach ($_SESSION["array_product"] as $key => $value) {
            echo "<h4>" . $key . " is " . "$" . $value;
          }
          echo "<h3 style =\"margin-top: 5%\">Your Total is: $$totalAmt </h3>";
          ?>
          <div class="form-buttons">
            <input type="button" onclick="location.href = 'shopping_cart.php'" value="View Cart">
            <input type="button" onclick="location.href = 'index.php'" value="Home">
          </div>
        </div>

        <div class="box">

          <label for="first-name">First Name:</label>

          <input type="text" name="first-name" id="first-name">

          <label for="last-name">Last Name:</label>

          <input type="text" name="last-name" id="last-name">

          <br>

        </div>

        <div class="box">

          <label for="address">Address:</label>

          <input type="text" name="address" id="address">

          <label for="phone">Phone:</label>

          <input type="text" name="phone" id="phone" placeholder="xxx-xxx-xxxx">

          <br>

          <p><span id="phone-invalid-text"></span></p>

        </div>

        <!-- FORM BUTTONS -->

        <div class="form-buttons">
          <input type="submit" value="Checkout">
          <input type="reset" value="Clear">

        </div>

      </div>
    </form>

</body>

</html>