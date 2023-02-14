<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/search.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <title>SEARCH</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <div>
                <a href="homepage">
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
                    <a href="searchLaptops" class="button">Laptops</a>
                </li>
                <li>
                    <i class="fa-solid fa-mobile"></i>
                    <a href="searchSmartphones" class="button">Smartphones</a>
                </li>
                <li>
                    <i class="fa-solid fa-tv"></i>
                    <a href="searchTvs" class="button">TVs</a>
                </li>
            </ul>
            <ul>
                <i class="fa-solid fa-sort"></i>
                <a class="text">Sort</a>
                <li>
                    <select class="sort">
                        <option value="A-Z">A-Z</option>
                        <option value="Z-A">Z-A</option>
                        <option value="From most cheap">From the cheapest</option>
                        <option value="From most expensive">From the most expensive</option>
                    </select>
                </li>
            </ul>
            <ul>
                <i class="fa-solid fa-dollar-sign"></i>
                <a class="text">Price</a>
                <li>
                    <form>
                        <input type="text" placeholder="from">
                        -
                        <input type="text" placeholder="to">

                    </form>
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