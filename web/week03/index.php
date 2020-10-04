<?php
    session_start();

    $_SESSION["new"] = 0;
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["product"])) {
            $_SESSION["products"] = array();
            $_SESSION["products"] = $_GET["product"];

            foreach ($_SESSION["products"] as $product) {
                echo "$product";
            }
            header('Location: checkout.php');
            $_SESSION["new"]++;
        }
    } else if ($_SESSION["new"] > 0) {
        echo "<h2>Please select items before checking out</h2>";
    }

    ?>

<!-- END OF THE PHP -->

<!DOCTYPE html>

<html lang="en-US">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="main.css">
<script src="index.js"></script>
<title>Week 3 Project</title>
</head>

<body>
    <section class="form-box">
        <h1>CycloCross Bikes</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="main-form" name="main-form" onreset="displayTotal()">
       
        


            <!--- FIRST IETEM -->
            <div class="products-box">
                <div class="product">
                <label for="Developer">
                <img src="bike-1.jpg" alt="bike">$999.99</label>
                <input type="checkbox" name="product[]" id="Developer" value="bike" onchange="displayTotal()">
            </div>

            <!---- SECOND ITEM --->
            <!--<div class="product">
               <label for="TwoStates">
               <img src="bike-2.jpg" alt="bike-2">$850</label>
               <input type="checkbox" name="product[]" id="TwoStates" value="bike" onchange="displayTotal()">
            </div>-->


            <!--  THIRD ITEM --->

                <div class="product">
                    <label for="EatCode">
                    <img src="bike-3.jpg" alt="bike-3">$2000</label>
                    <input type="checkbox" name="product[]" id="EatCode" value="bike" onchange="displayTotal()">
                </div>

                

            </div>


            <!-- CHECK OUT BOX Buttons -->

            <h3 class="display-total">Total: $<span id="total-output">0.00</span></h3>
            <div class="form-buttons">
                <input type="submit" value="Checkout">
                <input type="reset" value="Clear">
            </div>

        </form>
    </section>

</body>

</html>