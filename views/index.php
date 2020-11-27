<?php
    require 'app/controllers/ProductController.php';
    $products = new ProductController();
    var_dump($products->getAll());
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Application - Title</title>
</head>
<body>
    <?php
        require 'components/navbar.php';
    ?>
    <main>

    </main>
    <?php
        require 'components/footer.php';
    ?>
</body>
</html>
