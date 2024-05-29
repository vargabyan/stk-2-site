<?php require 'head.php' ?>


<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog', 'name' => 'Каталог'], ['url' => '/category', 'name' => 'Бетон']]);
?>

<?php
$response_data_materials = [
    [
        'image' => './images/product-3.png',
        'title' => 'Товарный бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 (М150)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 М200',
                'url' => '/category.php',
            ],
            [
                'title' => 'В20 (М250)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В22.5 М300',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Тощий бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => ' В3.5 (М50)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В7.5 (М100)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 (М150)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 (М200)',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Тяжелый бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'В22.5 М300',
                'url' => '/category.php',
            ],
            [
                'title' => 'В7.5 М100',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 М150',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 М200',
                'url' => '/category.php',
            ],
            [
                'title' => 'В20 М250',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Бетон для фундамента',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'В80 М1000',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Керамзитобетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 (М150)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 М200',
                'url' => '/category.php',
            ],
            [
                'title' => 'В20 (М250)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В22.5 М300',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Пескобетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => ' В3.5 (М50)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В7.5 (М100)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 (М150)',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 (М200)',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Фибробетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Полипропиленовый фибробетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Стеклофибробетон',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Цемент',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Торф для сада и огорода',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Морозостойкий бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Морозостойкий бетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Гидротехнический бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Гидротехнический бетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Тяжелый бетон',
        'url' => '/product-category.php',
        'tags' => [
            [
                'title' => 'Тяжелый бетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'В22.5 М300',
                'url' => '/category.php',
            ],
            [
                'title' => 'В7.5 М100',
                'url' => '/category.php',
            ],
            [
                'title' => 'В12.5 М150',
                'url' => '/category.php',
            ],
            [
                'title' => 'В15 М200',
                'url' => '/category.php',
            ],
        ],
    ],
]
?>

<section class="core-container materials">
    <h2 class="materials_header site-header">Бетон</h2>
    <div class="materials_content">
        <?php foreach ($response_data_materials as $item) { ?>
            <div class="materials_item">
                <a class="materials_item_core-link" href="<?= $item['url'] ?>"></a>
                <div class="materials_item_head">
                    <span class="materials_item_title"><?= $item['title'] ?></span>
                    <img class="materials_item_img" src="<?= $item['image'] ?>" alt="image">
                </div>
                <div class="materials_item_links-wrapper">
                    <?php foreach ($item['tags'] as $key => $tags_item) { ?>
                        <?php if ($key < 4) { ?>
                            <a class="materials_item_link btn-transparent-border-grey" href="<?= $tags_item['url'] ?>"><?= $tags_item['title'] ?></a>
                        <?php } ?>
                    <?php } ?>
                    <?php if (count($item['tags']) > 4) { ?>
                        <a class="materials_item_link btn-transparent-border-grey" href="/category.php">+<?= count($item['tags']) ?></a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
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