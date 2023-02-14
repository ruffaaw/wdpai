<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/product.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <title>PRODUCT</title>
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
                    <a href="searchDesktops" class="button">Desktops</a>
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
        </nav>
        <main>
            <header>
                <div class="delivery-information">
                    <form>
                        <i class="fa-solid fa-truck" id="truck-icon"></i>
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
            <span>
                <div class="photo-product">
                    <img src="public/img/uploads/Zrzut ekranu 2023-02-08 092243.png">
                </div>
                <div class="information-product">
                    <h2>Title</h2>
                    <p>Price: 300zl</p>
                    <div class="add-to-cart">
                        <a href="#" class="button">Add to cart</a>
                    </div>
                </div>
            </span>
        </main>
    </div>
</body>