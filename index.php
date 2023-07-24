<?php
require_once __DIR__ . "/e-commerce.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/food.php";



var_dump($e_commerce)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' />
    <title>Boolshop</title>
</head>

<body>
    <div class="container">
        <header>
            <h1><?= $e_commerce->getTitle() ?></h1>
        </header>
        <div class="container">
            <div class=" row row-cols-3">
                <?php foreach ($e_commerce->getProducts() as $product) : ?>
                    <div class="col">
                        <div class="card mb-5 bg-light">
                            <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>">
                            <h3><?= $product->getTitle() ?></h3>
                            <p><?= $product->getPrice() ?></p>
                            <p><?= $product->getWeight() ?></p>
                            <p><?= $product->getIngredients() ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>

</html>