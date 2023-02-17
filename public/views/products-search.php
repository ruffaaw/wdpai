<!DOCTYPE html>

<?php require('public/views/common/sessionValidation.php') ?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/search.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/truck.js" defer></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/zooming.js" defer></script>
    <title>SEARCH</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <?php require('public/views/common/logo.php'); ?>
            <?php require('public/views/common/categories.php'); ?>
            <ul>
                <form class="sort" action="sort" method="post">
                    <i class="fa-solid fa-sort"></i>
                    <a class="text">Sort</a>
                    <li>
                        <select class="sort-options" name="sort-option">
                            <option value="A-Z">A-Z</option>
                            <option value="Z-A">Z-A</option>
                            <option value="From most cheap">From the cheapest</option>
                            <option value="From most expensive">From the most expensive</option>
                        </select>
                    </li>
                    <button class="sort-button">SORT</button>
                </form>
            </ul>
        </nav>
        <main>
            <?php require('public/views/common/header-bar.php'); ?>
            <section class="products">
                <?php foreach ($products as $product): ?>
                    <div id="product-1">
                        <img src="public/uploads/<?= $product-> getImage(); ?>" onmouseover="zoomIn(event)">
                        <div>
                            <h1><?= $product-> getName(); ?></h1>
                            <p><?= $product-> getPrice(); ?> PLN</p>
                            <form class="cartButton" action="addToCart" method="POST">
                                <input type="hidden" name="id" value="<?php echo $product->getId() ?>">
                                <button type="submit" class="button">Add to cart</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach;?>
            </section>
        </main>
    </div>
</body>