<?php require 'head.php' ?>


<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog', 'name' => 'Каталог'], ['url' => '/about', 'name' => 'О компании']]);
?>


<section class="core-container about-company">
    <h1 class="about-company_header site-header">О компании</h1>
    <div class="about-company_content">
        <div class="about-company_item">
            <span class="about-company_title">Надежность</span>
            <p class="about-company_text">
                Наша компания гарантирует надежность всех материалов, проверяем каждую поставку отслеживаем качество
            </p>
        </div>
        <div class="about-company_item">
            <span class="about-company_title">Ответственность</span>
            <p class="about-company_text">
                Наша компания гарантирует надежность всех материалов, проверяем каждую поставку отслеживаем качество. Наша компания гарантирует надежность всех материалов
            </p>
        </div>
        <div class="about-company_item">
            <span class="about-company_title">Качество</span>
            <p class="about-company_text">
               Используем только лучшие материалы и всегда контролируем поставки
            </p>
        </div>
    </div>
</section>





<section class="core-container only-the-best-materials">
    <h2 class="only-the-best-materials_header site-header">Только лучшие материалы</h2>
    <div class="only-the-best-materials_content">
        <img class="only-the-best-materials_item" src="images/only-the-best-materials-1.png" alt="image">
        <img class="only-the-best-materials_item" src="images/only-the-best-materials-2.png" alt="image">
        <img class="only-the-best-materials_item" src="images/only-the-best-materials-3.png" alt="image">
        <img class="only-the-best-materials_item" src="images/only-the-best-materials-4.png" alt="image">
    </div>
</section>


<?php

$response_data_often_ordering_in_bulk = [
    [
        'image' => './images/specialist-1.png',
        'name' => 'Попова Анастасия',
        'text' => 'Стаж 10 лет',
    ],
    [
        'image' => './images/specialist-2.png',
        'name' => 'Симонян Антон',
        'text' => 'Стаж 10 лет',
    ],
    [
        'image' => './images/specialist-3.png',
        'name' => 'Антонов Александр',
        'text' => 'Стаж 10 лет',
    ],
    [
        'image' => './images/specialist-1.png',
        'name' => 'Попова Анастасия',
        'text' => 'Стаж 10 лет',
    ],

]

?>


<section class="core-container slider-section" data-page-type="about">
    <div class="slider-section_head-wrapper">
        <h2 class="slider-section_head site-header">Специалисты по работе с клиентом </h2>
        <div class="slider-section_btn-wrapper">
            <div class="slider-section_btn-prev" data-often-ordering-in-bulk-swiper-button-prev></div>
            <div class="slider-section_btn-next" data-often-ordering-in-bulk-swiper-button-next></div>
        </div>
    </div>
    <div class="slider-section_swiper" data-often-ordering-in-bulk-swiper>
        <span class="animation_dot"></span>
        <div class="swiper-wrapper">
            <?php foreach ($response_data_often_ordering_in_bulk as $item) { ?>
                <div class="swiper-slide">
                    <div class="swiper-slide-item often-ordering-in-bulk_item">
                        <div class="often-ordering-in-bulk_item-head-wrapper">
                            <img class="often-ordering-in-bulk_item_img" src="<?= $item['image'] ?>" alt="">
                            <p class="often-ordering-in-bulk_item_title"><?= $item['name'] ?></p>
                            <span class="often-ordering-in-bulk_item_text">
                                <?= $item['text'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php

$response_data_review = [
    [
        'image' => '',
        'name' => 'Александр Юрьевич',
        'job-title' => '«ООО Старт Плюс» Общество с огра',
        'comment' => 'Спасибо! Очень удобно! Заказал большой объём грунта не выходя с работы, что важно, когда нет времени бегать по рынкам. Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась',
    ],
    [
        'image' => '',
        'name' => 'Валерия',
        'job-title' => '«ООО Старт Плюс»',
        'comment' => 'Спасибо! Очень удобно! Заказал большой объём грунта не выходя с работы, что важно, когда нет времени бегать по рынкам.',
    ],
    [
        'image' => '',
        'name' => 'Антон',
        'job-title' => '«ООО Старт Плюс»',
        'comment' => 'Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент не на всяком рынке Доставка состоялась Цена и ассортимент не на всяком рынке',
    ],
    [
        'image' => '',
        'name' => 'Антон',
        'job-title' => '«ООО Старт Плюс»',
        'comment' => 'Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент не на всяком рынке Доставка состоялась Цена и ассортимент не на всяком рынке',
    ]
]

?>


<section class="core-container slider-section">
    <div class="slider-section_head-wrapper">
        <h2 class="slider-section_head site-header">Отзывы</h2>
        <div class="slider-section_btn-wrapper">
            <div class="slider-section_btn-prev" data-review-swiper-button-prev></div>
            <div class="slider-section_btn-next" data-review-swiper-button-next></div>
        </div>
    </div>
    <div class="slider-section_swiper" data-review-swiper>
        <span class="animation_dot"></span>
        <div class="swiper-wrapper">
            <?php foreach ($response_data_review as $item) { ?>
                <div class="swiper-slide">
                    <div class="swiper-slide-item review_item">
                        <div class="review_item_head">
                            <img class="review_item_img" src="images/review-icon.png" alt="image">
                            <div class="review_item_name-wrapper">
                                <span><?= $item['name'] ?></span>
                                <p><?= $item['job-title'] ?></p>
                            </div>
                        </div>
                        <div class="review_item_comment-wrapper hidden" data-review-comment-wrapper>
                            <?= $item['comment'] ?>
                            <div class="review_item_btn active" data-review-btn>
                                <span>Подробнее</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>
