<?php require 'head.php' ?>


<?php
$response_data_materials = [
    [
        'image' => './images/product-1.png',
        'title' => 'Строительные растворы (смеси)',
        'url' => '/category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Перлит',
                'url' => '/category.php',
            ],
            [
                'title' => 'Отсев',
                'url' => '/category.php',
            ],
            [
                'title' => 'Шлаковый щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Шлаковый щебень',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-2.png',
        'title' => 'Песок',
        'url' => '/category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Песок под бетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Доставка песка',
                'url' => '/category.php',
            ],
            [
                'title' => 'Мытый песок',
                'url' => '/category.php',
            ],
            [
                'title' => 'Мытый песок',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-3.png',
        'title' => 'Бетон',
        'url' => '/category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Бетон для фундамента',
                'url' => '/category.php',
            ],
            [
                'title' => 'Фибробетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Цемент',
                'url' => '/category.php',
            ],
            [
                'title' => 'Цемент',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-4.png',
        'title' => 'Строительные растворы (смеси)',
        'url' => '/category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Цементные строительные растворы',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-5.png',
        'title' => 'Железобетонные изделия (ЖБИ)',
        'url' => '/category.php',
        'tags' => [
            [
                'title' => 'Вторичный щебень',
                'url' => '/category.php',
            ],
            [
                'title' => 'Бетон для фундамента',
                'url' => '/category.php',
            ],
            [
                'title' => 'Фибробетон',
                'url' => '/category.php',
            ],
            [
                'title' => 'Цемент',
                'url' => '/category.php',
            ],
            [
                'title' => 'Цемент',
                'url' => '/category.php',
            ],
        ],
    ],
    [
        'image' => './images/product-6.png',
        'title' => 'Торф',
        'url' => '/category.php',
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
]
?>


<section class="core-container materials">
    <h2 class="materials_header site-header">Каталог</h2>
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
        <button class="order-a-call_btn btn-white">Заказать звонок</button>
    </div>
</section>


<?php require 'footer.php' ?>