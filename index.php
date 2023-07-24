<?php
require_once __DIR__ . "/e-commerce.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/accessory.php";
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
            <div class=" row row-cols-3 g-4">
                <?php foreach ($e_commerce->getProducts() as $product) : ?>
                    <div class="col">
                        <div class="card mb-5 bg-light h-100">
                            <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>">
                            <h3><?= $product->getTitle() ?></h3>
                            <p><?= $product->getPrice() ?></p>
                            <!-- Se è cibo -->
                            <?php if ($product instanceof Food) : ?>
                                <p><?= $product->getWeight() ?></p>
                                <p><?= $product->getIngredients() ?></p>
                            <?php endif ?>
                            <!-- Se è un accessorio -->
                            <?php if ($product instanceof Accessory) : ?>
                                <p><?= $product->getMaterial() ?></p>
                                <p><?= $product->getSize() ?></p>
                            <?php endif ?>
                            <!-- Se è un Gioco -->
                            <?php if ($product instanceof Toy) : ?>
                                <p><?= $product->getCharacteristics() ?></p>
                                <p><?= $product->getSize() ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>

</html>