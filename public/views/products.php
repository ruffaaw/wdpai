<!DOCTYPE html>

<?php require('public/views/common/sessionValidation.php') ?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css">

    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./public/js/search.js"></script>
    <script type="text/javascript" src="./public/js/drive.js" defer></script>
    <script type="text/javascript" src="./public/js/zooming.js" defer></script>
    <script type="text/javascript" src="./public/js/logout.js"></script>
    <title> HOMEPAGE</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <?php require('public/views/common/logo.php'); ?>
            <?php require('public/views/common/categories.php'); ?>
        </nav>
        <main>
            <?php require('public/views/common/header-bar.php'); ?>
            <section class="products">
                <?php foreach ($products as $product): ?>
                <div id="product-1">
                    <img src="public/uploads/<?= $product-> getImage(); ?>"onmouseover="zoomIn(event)">
                    <div>
                        <h1><?= $product-> getName(); ?></h1>
                        <p><?= $product-> getPrice(); ?> PLN</p>
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
