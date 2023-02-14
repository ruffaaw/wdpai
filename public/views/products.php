<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <title> HOMEPAGE</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <div>
                <a href="products">
                    <img src="public/img/name.svg">
                </a>
            </div>
            <ul>
                <i class="fa-solid fa-bars"></i>
                <a class="text">Categories</a>
                <li>
                    <i class="fa-solid fa-computer"></i>
                    <a href="productsDesktops" class="button">Desktops</a>
                </li>
                <li>
                    <i class="fa-solid fa-laptop"></i>
                    <a href="productsLaptops" class="button">Laptops</a>
                </li>
                <li>
                    <i class="fa-solid fa-mobile"></i>
                    <a href="productsSmartphones" class="button">Smartphones</a>
                </li>
                <li>
                    <i class="fa-solid fa-tv"></i>
                    <a href="productsTvs" class="button">TVs</a>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <div class="delivery-information">
                    <form>
                        <i class="fa-solid fa-truck"></i>
                        <span class="text">Free Delivery from 199zl!</span>
                    </form>
                </div>
                <div class="search-bar">
                    <form>
                        <input type="text" placeholder="search...">
                    </form>
                </div>
                <div class="shopping-cart">
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
                    <img src="public/uploads/<?= $product-> getImage(); ?>">
                    <div>
                        <h1><?= $product-> getName(); ?></h1>
                        <p><?= $product-> getPrice(); ?></p>
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