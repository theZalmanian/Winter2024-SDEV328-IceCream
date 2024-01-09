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
            echo "<p>Cone: {$cone}</p>"
        ?>
    </div>
</body>
</html>