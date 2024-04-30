<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Factory Example</title>
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
    <h1>Bad Factory Example</h1>

    <?php
        require_once 'Food.php';

        // Create a Pizza
        $pizza = BadFactory::createFood('pizza');
        echo "<pre>" . $pizza->getName() . ": " . $pizza->prepare() . "</pre>";

        // Create a Burger
        $burger = BadFactory::createFood('burger');
        echo "<pre>" . $burger->getName() . ": " . $burger->prepare() . "</pre>";

        // Create a Cake
        $cake = BadFactory::createFood('cake'); // Problem: adding new food type requires modifying factory class
        echo "<pre>" . $cake->getName() . ": " . $cake->prepare() . "</pre>";
    ?>
</body>
</html>
