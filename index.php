<?php require 'head.php' ?>


<section class="banner">
    <img class="banner_img" src="/images/heavy-excavator-digging-day-light.png" alt="img">
    <img class="banner_img-mobile"  src="/images/heavy-excavator-digging-day-light-2.png" alt="img">
    <div class="core-container banner_container">
        <h1 class="site-header banner-header">Нерудные материалы <br> Продажа и поставка в Новом Уренгое</h1>
        <span class="banner_subtitle">Комплексные поставки нерудных материалов: щебня, песка, бетона и железобетонных изделий</span>
        <button class="banner_btn btn-grey" data-order-popup="order-wholesale">Оптовый заказ</button>
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

<section class="core-container materials" data-page-type="home">
    <a class="materials_header-wrapper" href="/catalog.php">
        <h2 class="materials_header site-header">Нерудные материалы</h2>
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
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-2.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
]
?>

<section class="core-container slider-section">
    <div class="slider-section_head-wrapper">
        <h2 class="slider-section_head site-header">Часто заказывают оптом</h2>
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
                            <p class="often-ordering-in-bulk_item_title"><?= $item['title'] ?></p>
                        </div>
                        <a class="often-ordering-in-bulk_item_btn btn-grey" href="<?= $item['url'] ?>">Закать</a>
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


<section class="core-container delivery-methods" data-delivery-methods>
    <h2 class="delivery-methods_header site-header">Способы доставки</h2>
    <div class="delivery-methods-swiper" data-delivery-methods-swiper>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="delivery-methods_img active" data-id="1" data-delivery-methods-img src="./images/delivery-methods-1.png" alt="image">
            </div>
            <div class="swiper-slide">
                <img class="delivery-methods_img" data-id="2" data-delivery-methods-img src="./images/delivery-methods-2.png" alt="image">
            </div>
            <div class="swiper-slide">
                <img class="delivery-methods_img" data-id="3" data-delivery-methods-img src="./images/delivery-methods-3.png" alt="image">
            </div>
        </div>
    </div>
    <div class="delivery-methods_items-wrapper">
        <div class="delivery-methods_item">
            <img class="delivery-methods_img" src="./images/delivery-methods-1.png" alt="image">
            <p class="delivery-methods_item-text active" data-id="1" data-delivery-methods-item-text>Доставка железнодорожным транспортом</p>
        </div>
        <div class="delivery-methods_item">
            <img class="delivery-methods_img" src="./images/delivery-methods-2.png" alt="image">
            <p class="delivery-methods_item-text" data-id="2" data-delivery-methods-item-text>Доставка водным транспортом (баржи)</p>
        </div>
        <div class="delivery-methods_item">
            <img class="delivery-methods_img" src="./images/delivery-methods-3.png" alt="image">
            <p class="delivery-methods_item-text" data-id="3" data-delivery-methods-item-text>Доставка автотранспортом</p>
        </div>
    </div>
</section>


<?php
$response_data_our_services = [
    [
        'image' => './images/our-services-1.png',
        'title' => 'Погрузо-разгрузочные работы',
    ],
    [
        'image' => './images/our-services-2.png',
        'title' => 'Услуги жд тупика',
    ],
    [
        'image' => './images/our-services-3.png',
        'title' => 'Комплексная услуга приемки и отправки контейнеров',
    ],
    [
        'image' => './images/our-services-4.png',
        'title' => 'Погрузо-разгрузочные работы',
    ],
    [
        'image' => './images/our-services-5.png',
        'title' => 'Автозимник - зимняя дорога',
    ],
]
?>

<section class="core-container our-services">
    <h2 class="site-header our-services_header">Наши услуги</h2>
    <div class="our-services_items-wrapper">
        <?php foreach ($response_data_our_services as $item) { ?>
            <div class="our-services_item">
                <img class="our-services_item_img" src="<?= $item['image'] ?>" alt="image">
                <span class="our-services_item_title"><?= $item['title'] ?></span>
            </div>
        <?php } ?>
        <div class="our-services_last-item">
            <p class="our-services_last-item_title">
                <span>Заказать звонок, чтобы узнать подробнее</span>
                Наш менеджер поможет с выбором и подберёт оптимальную услугу для вашего бизнеса
            </p>
            <button class="our-services_last-item_btn btn-white" data-order-popup="order-a-call">Заказать звонок</button>
        </div>
    </div>
</section>


<section class="core-container our-geography">
    <div class="our-geography_cities-wrapper">
        <h2 class="our-geography_header site-header">География наших объектов</h2>
        <ul class="our-geography_cities">
            <li>Новый Уренгой</li>
            <li>Новый Уренгой</li>
            <li>Новосибирск</li>
            <li>Алтай</li>
            <li>Сургут</li>
            <li>Воронеж</li>
            <li>Воронеж</li>
        </ul>
    </div>

    <div class="jvm-map" data-jvm-map></div>
</section>




<?php
$response_data_question = [
    [
        'question' => 'Какие способы поставки материалов можно выбрать в вашей компании? Какие способы поставки материалов можно выбрать в вашей компании?',
        'answer' => 'Цена и ассортимент. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке Подробнее',
    ],
    [
        'question' => 'Какие способы поставки материалов можно выбрать в вашей компании?',
        'answer' => 'Цена и ассортимент. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке Подробнее',
    ],
    [
        'question' => 'Какие способы поставки материалов можно выбрать в вашей компании?',
        'answer' => 'Цена и ассортимент. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке Подробнее',
    ],
    [
        'question' => 'Какие способы поставки материалов можно выбрать в вашей компании?',
        'answer' => 'Цена и ассортимент. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке Подробнее',
    ],
    [
        'question' => 'Какие материалы можно выбрать в вашей компании?',
        'answer' => 'Цена и ассортимент. Доставка состоялась Цена и ассортимент — не на всяком рынке или магазине найдёшь. Доставка состоялась Цена и ассортимент — не на всяком рынке Подробнее',
    ],
]
?>

<section class="core-container questions" data-questions>
    <h2 class="questions_header site-header">Часто задаваемые вопросы</h2>
    <div class="questions_content">
        <?php foreach ($response_data_question as $item) { ?>
            <div class="questions_item" data-questions-item>
                <span class="questions_item_question-text"><?= $item['question'] ?></span>
                <button class="questions_item_btn" data-questions-btn-open></button>
                <div class="questions_item_answer" data-questions-answer>
                    <p><?= $item['answer'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


<section class="core-container seo">
    <div class="seo_content" data-seo-content>
        <p class="seo_content_text close" data-seo-content-text>
            SEO-текст или SEO-статья — это текст, максимально отвечающий требованиям, которые поисковые системы предъявляют к результатам выдачи. Главная задача SEO-текста — помочь сайту поднять Главная задача SEO-текста — помочь сайту поднять
        </p>
        <button class="seo_btn" data-seo-btn>Читать подробнее</button>
    </div>
</section>


<?php require 'footer.php' ?>