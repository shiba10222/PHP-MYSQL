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