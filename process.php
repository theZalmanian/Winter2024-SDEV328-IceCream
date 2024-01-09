<?php
    // display errors (when needed)
    //    ini_set('display_errors', 1);
    //    error_reporting(E_ALL);

    // setup constants to calculate costs
    define("PRICE_PER_SCOOP", 2.50);
    define('SALES_TAX_RATE', 0.11);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>
            Thank you for you order!
        </h1>

        <?php
            // display given order
            echo "<pre>" . var_dump($_POST) . "</pre>";

            // get values of order
            $scoops = $_POST["scoops"];
            $flavors = $_POST["flavor"];
            $cone = $_POST["cone"];

            // format all flavors in string
            $formattedFlavors = implode(", ", $flavors);

            // display summary
            echo "<p>Scoops: {$scoops}</p>";
            echo "<p>Flavors: {$formattedFlavors}</p>";
            echo "<p>Cone: {$cone}</p>";

            // calculate costs
            $subtotal = PRICE_PER_SCOOP * $scoops;
            $tax = SALES_TAX_RATE * $subtotal;
            $total = $subtotal + $tax;

            // display costs
            echo "<p>Subtotal: \${$subtotal}</p>";
            echo "<p>Tax: \${$tax}</p>";
            echo "<p>Total: \${$total}</p>";
        ?>
    </div>
</body>
</html>