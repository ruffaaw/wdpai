<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/structure.css">
    <link rel="stylesheet" type="text/css" href="public/css/search.css">
    <script src="https://kit.fontawesome.com/7b27ec48b4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/drive.js" defer></script>
    <script type="text/javascript" src="./public/js/zooming.js" defer></script>

    <script src="./public/js/sort.js"></script>

    <title>SEARCH</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <?php require('public/views/common/logo.php'); ?>
            <?php require('public/views/common/categories.php'); ?>
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
            <?php require('public/views/common/header-bar.php'); ?>
            <section class="products">
                <?php foreach ($products as $product): ?>
                    <div id="product-1">
                        <img src="public/uploads/<?= $product-> getImage(); ?>" onmouseover="zoomIn(event)">
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