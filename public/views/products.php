<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css">

    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/drive.js" defer></script>
    <script type="text/javascript" src="./public/js/zooming.js" defer></script>
    <title> HOMEPAGE</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <?php require('public/views/common/logo.php'); ?>
            <?php require('public/views/common/categories.php'); ?>
        </nav>
        <main>
            <header>
                <div class="delivery-information"  id="truck-icon">
                    <form>
                        <i class="fa-solid fa-truck"></i>
                        <span class="text">Free Delivery from 199zl!</span>
                    </form>
                </div>

                <div class="shopping-cart" >
                    <a href="shoppingCart">
                        <form>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </form>
                    </a>
                </div>
                <div class="profile">
                    <a href="profile">
                        <form>
                            <i class="fa-solid fa-user"></i>
                        </form>
                    </a>
                </div>
            </header>
            <section class="products">
                <?php foreach ($products as $product): ?>
                <div id="product-1">
                    <img src="public/uploads/<?= $product-> getImage(); ?>"onmouseover="zoomIn(event)">
                    <div>
                        <h1><?= $product-> getName(); ?></h1>
                        <p><?= $product-> getPrice(); ?> zl</p>
                        <div class="add-to-cart">
                            <a href="#"  class="button">Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </section>
        </main>
    </div>
</body>

<template id="product-template">
    <div id="">
        <img src="">
        <div>
            <h1>name</h1>
            <p>price</p>
            <div class="add-to-cart">
                <a href="#"  class="button">Add to cart</a>
            </div>
        </div>
    </div>
</template>
