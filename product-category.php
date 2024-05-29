<?php require 'head.php' ?>


<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog', 'name' => 'Каталог'], ['url' => '/category.php', 'name' => 'Бетон'], ['url' => '/product-catalog', 'name' => 'Тяжелый бетон']]);
?>


<section class="core-container filter">
    <h1 class="product-category_header site-header">Тяжелый бетон</h1>
    <form class="filter_form" action="">
        <div>
            <label class="filter_label"><input type="checkbox" checked> Крупнозернистый песок </label>
            <label class="filter_label"><input type="checkbox"> Средний песок </label>
            <label class="filter_label"><input type="checkbox"> Мелкозернистый песок </label>
        </div>
        <label>
            <select name="" id="">
                <option value="">Сортировать</option>
                <option value="">по популярности</option>
                <option value="">по актуальности</option>
            </select>
        </label>
    </form>
</section>


<?php
$response_data_often_ordering_in_bulk = [
    [
        'image' => './images/often-ordering-in-bulk-product-2.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Тяжелый бетон В7.5 М100',
        'url' => '/card-product.php',
    ],
]
?>

<section class="core-container product-category">
    <?php foreach ($response_data_often_ordering_in_bulk as $item) { ?>
        <div class="often-ordering-in-bulk_item">
            <div class="often-ordering-in-bulk_item-head-wrapper">
                <img class="often-ordering-in-bulk_item_img" src="<?= $item['image'] ?>" alt="">
                <p class="often-ordering-in-bulk_item_title"><?= $item['title'] ?></p>
            </div>
            <a class="often-ordering-in-bulk_item_btn btn-grey" href="<?= $item['url'] ?>">Закать</a>
        </div>
    <?php } ?>
</section>


<?php
$url_page = 0;
if(isset($_GET["page"])) {
    $url_page = $_GET["page"];
}
?>

<section class="core-container pagination">
    <ul>
        <li><a href="?page=<?= $url_page < 0 ? $url_page - 1 : 1; ?>"></a></li>
        <li><a class="<?= $url_page === '1' ? 'active' : '' ?>" href="?page=1">1</a></li>
        <li><a class="<?= $url_page === '2' ? 'active' : '' ?>" href="?page=2">2</a></li>
        <li><a href="">...</a></li>
        <li><a class="<?= $url_page === '5' ? 'active'  : '' ?>" href="?page=5">5</a></li>
        <li><a href="?page=<?php if($url_page > 0 )echo $url_page + 1 ?>"></a></li>
    </ul>
</section>


<section class="order-a-call">
    <div class="core-container order-a-call_container">
        <p class="order-a-call_title-wrapper">
            <span>Не нашли что искали?</span>
            Наш менеджер поможет с выбором и подберёт оптимальную услугу для вашего бизнеса
        </p>
        <img class="order-a-call_img" src="./images/order-a-call.png" alt="image">
        <button class="order-a-call_btn btn-white" data-order-popup="order-a-call">Заказать звонок</button>
    </div>
</section>


<?php require 'footer.php' ?>