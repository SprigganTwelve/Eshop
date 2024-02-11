<?php
include "../partials/header.php"
    ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>product</title>
</head>

<body>


    <?php if (isset($_GET['id'])) {
    } else {
        header('location:index.php');
    } ?>


    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="products.php">Produits</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">SignUp</a></li>
            </ul>
        </nav>
        <h1>Page du produit</h1>
        <?php
        foreach ($products as $product):
            if ($product['id'] == $_GET['id']):
                ?>

                <ul class="product">

                    <li>

                        <a href="index.php"> <img src="<?= $product['image'] ?>" alt="">
                        </a>
                        <h2>
                            <?= $product['title'] ?>
                        </h2>
                        <h3>
                            <?= substr($product['description'], 50) ?>
                        </h3>
                        <h2>
                            <?= $product['price'] ?>
                        </h2>

                        <button>
                            <a href="Panier.view.php?product=<?= $product['id'] ?>"> Ajouter au panier</a>

                        </button>

                    </li>

                </ul>

            <?php endif ?>
        <?php endforeach ?>
    </div>




</body>

</html>