<?php
require_once __DIR__ . "/e-commerce.php"

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
    </div>

</body>

</html>