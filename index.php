<?php require 'head.php' ?>


<section class="banner">
    <img class="banner_img" src="/images/heavy-excavator-digging-day-light.png" alt="img">
    <img class="banner_img-mobile"  src="/images/heavy-excavator-digging-day-light-2.png" alt="img">
    <div class="core-container banner_container">
        <h1 class="site-header banner-header">Нерудные материалы <br> Продажа и поставка в Новом Уренгое</h1>
        <span class="banner_subtitle">Комплексные поставки нерудных материалов: щебня, песка, бетона и железобетонных изделий</span>
        <button class="banner_btn btn-grey">Оптовый заказ</button>
    </div>
</section>


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
    <a class="materials_header-wrapper" href="/category.php">
        <h1 class="materials_header site-header">Нерудные материалы</h1>
    </a>
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


<?php

$response_data_often_ordering_in_bulk = [
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-2.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog',
    ],
]

?>


<section class="core-container often-ordering-in-bulk">
    <div class="often-ordering-in-bulk_head-wrapper">
        <h1 class="often-ordering-in-bulk_header site-header">Часто заказывают оптом</h1>
        <div class="often-ordering-in-bulk_btn-wrapper">
            <div class="btn-slider-prev" data-often-ordering-in-bulk-swiper-button-prev></div>
            <div class="btn-slider-next" data-often-ordering-in-bulk-swiper-button-next></div>
        </div>
    </div>
    <div class="often-ordering-in-bulk_swiper" data-often-ordering-in-bulk-swiper>
        <span class="animation_dot"></span>
        <div class="swiper-wrapper">
            <?php foreach ($response_data_often_ordering_in_bulk as $item) { ?>
                <div class="swiper-slide">
                    <div class="often-ordering-in-bulk_item">
                        <div class="often-ordering-in-bulk_item-head-wrapper">
                            <img class="often-ordering-in-bulk_item_img" src="<?= $item['image'] ?>" alt="">
                            <p class="often-ordering-in-bulk_item_title"><?= $item['title'] ?></p>
                        </div>
                        <a class="often-ordering-in-bulk_item_btn btn-grey" href="<?= $item['url'] ?>">Закать</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<!--<section class="core-container review">-->
<!--    <div class="review_head-wrapper">-->
<!--        <h1 class="review_header site-header">Отзывы</h1>-->
<!--        <div class="review_btn-wrapper">-->
<!--            <div class="btn-slider-prev" data-review-swiper-button-prev></div>-->
<!--            <div class="btn-slider-next" data-review-swiper-button-next></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="review_swiper" data-review-swiper>-->
<!--        <span class="animation_dot"></span>-->
<!--        <div class="swiper-wrapper">-->
<!--            --><?php //foreach ($response_data_often_ordering_in_bulk as $item) { ?>
<!--                <div class="swiper-slide">-->
<!--                    <div class="review_item">-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


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