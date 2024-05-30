<header class="py-2">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="product-list.php">
                <img class="logo" src="/images/logo.png" alt="">
            </a>
            <?php
            $cartCount = isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0;
            ?>
            <a class="cart-icon position-relative" href="cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart-count position-absolute" id="cartCount"><?=$cartCount?></span>
            </a>
        </div>
    </div>
</header>
<ul class="nav nav-underline mb-3">
    <li class="nav-item">
        <a class="nav-link <?php if (!isset($_GET["category"])) echo "active" ?>" aria-current="page" href="product-list.php">全部</a>
    </li>
    <?php foreach ($cateRows as $category) : ?>
        <li class="nav-item">
            <a class="nav-link <?php if (isset($_GET["category"]) && $cate_id == $category["id"]) echo "active"; ?>" href="product-list.php?category=<?= $category["id"] ?>"><?= $category["name"] ?></a>
        </li>
    <?php endforeach ?>
</ul>