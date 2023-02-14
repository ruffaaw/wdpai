<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/shoppingCart.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
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
                <div class="content">
                    <h2 class="empty-cart"> Your cart is empty</h2>
                    <div class="cart-button">
                        <a class="button" href="homepage">Go to homepage</a>
                    </div>
                </div>
            </span>
        </main>
    </div>
</body>