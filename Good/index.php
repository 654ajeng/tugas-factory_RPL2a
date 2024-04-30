<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Factory Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Food Factory Example</h1>

    <?php
        require_once 'FoodFactory.php';

        // Create a Pizza
        $pizza = FoodFactory::createFood('pizza');
        echo "<pre>" . $pizza->getName() . ": " . $pizza->prepare() . "</pre>";

        // Create a Burger
        $burger = FoodFactory::createFood('burger');
        echo "<pre>" . $burger->getName() . ": " . $burger->prepare() . "</pre>";
    ?>
</body>
</html>
