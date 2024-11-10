<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S TRADING KING</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <header>
        <h1>S TRADING KING</h1>
        </header>

    <main>
        <?php
            // PHP code to generate dynamic content
            echo "<h2>Welcome to S TRADING KING!</h2>";

            // Example: Fetch and display products from a database
            $products = array(
                array("name" => "Product A", "price" => 19.99),
                array("name" => "Product B", "price" => 29.99),
                // ... more products
            );

            echo "<ul>";
            foreach ($products as $product) {
                echo "<li>" . $product["name"] . " - $" . $product["price"] . "</li>";
            }
            echo "</ul>";
        ?>
    </main>

    <footer>
        </footer>

    <script src="script.js"></script> </body>
</html>
