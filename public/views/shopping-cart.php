<!DOCTYPE html>

<?php require('public/views/common/sessionValidation.php') ?>


<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/shoppingCart.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/drive.js" defer></script>

    <title> SHOPPING CART</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <?php require('public/views/common/logo.php'); ?>
            <?php require('public/views/common/categories.php'); ?>
        </nav>
        <main>
            <?php require('public/views/common/header-bar.php'); ?>
            <span>
                <div class="shopping-cart-inscription">
                    <h1>SHOPPING CART</h1>
                </div>
                <?php if (empty($cart)) { ?>
                    <div class="content">
                        <h2 class="empty-cart"> Your cart is empty</h2>
                        <div class="cart-button">
                            <a class="button" href="products">Go to homepage</a>
                        </div>
                    </div>
                    <?php } else { ?>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart as $item): ?>
                                        <tr>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['price'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </span>
        </main>
    </div>
</body>