<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="jvectormap.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jvectormap.js"></script>
    <script src="jquery-jvectormap-ru-merc.js"></script>
    <title>stk site 2</title>
</head>
<body>


<?php

$response_data_menu_link = [
    [
        'link' => '/',
        'name' => 'Строительные растворы (смеси)',
        'id' => '5gh3g34',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Керамзитобетон',
            ],
            [
                'link' => '/',
                'name' => 'Пескобетон',
            ],
            [
                'link' => '/',
                'name' => 'Фибробетон',
            ],
            [
                'link' => '/',
                'name' => 'Цемент',
            ],
            [
                'link' => '/',
                'name' => 'Морозостойкий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Гидротехнический бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
        ]
    ],
    [
        'link' => '/',
        'name' => 'Песок',
        'id' => '564gj64fg',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
            [
                'link' => '/',
                'name' => 'Бетон для фундамента',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
            [
                'link' => '/',
                'name' => 'Бетон для фундамента',
            ],
        ]
    ],
    [
        'link' => '/',
        'name' => 'Бетон',
        'id' => '98j5gh568',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
            [
                'link' => '/',
                'name' => 'Бетон для фундамента',
            ],
        ]
    ],
    [
        'link' => '/',
        'name' => 'Строительные растворы (смеси)',
        'id' => '12gh564g54',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
        ]
    ],
    [
        'link' => '/',
        'name' => 'Железобетонные изделия (ЖБИ)',
        'id' => '35fg35d56',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тяжелый бетон',
            ],
            [
                'link' => '/',
                'name' => 'Бетон для фундамента',
            ],
        ]
    ],
    [
        'link' => '/',
        'name' => 'Торф',
        'id' => '7df5s2ff',
        'sections' => [
            [
                'link' => '/',
                'name' => 'Товарный бетон',
            ],
            [
                'link' => '/',
                'name' => 'Тощий бетон',
            ],
        ]
    ],
]

?>


<header class="header" data-header>
    <div class="core-container header_container">
        <div class="header_core-head">
            <div class="core-head_logo-wrapper">
                <a class="core-head_logo" href="/">
                    <img src="/images/logo.png" alt="logo">
                </a>
                <span class="core-head_logo-subtitle">добыча и поставка <br> нерудных материалов</span>
                <div class="core-head_select-cities-wrapper" data-core-head-select-cities-wrapper>
                    <div class="menu-mobile_popup-head" data-menu-mobile_btn-wrapper>
                        <button class="menu-mobile_btn-back" data-menu-popup-mobile-btn-back>Назад</button>
                        <button class="btn-close" data-menu-popup-mobile-btn-close></button>
                    </div>
                    <span class="core-head_select-cities" data-core-head-select-cities-value>Новой Уренгой</span>
                    <div class="core-head_select-cities-form-wrapper" data-core-head-select-cities-form-wrapper>
                        <form class="core-head_select-cities-form" action="" data-core-head_select-cities-form>
                            <label><input type="radio" name="city" value="Уфа">Уфа</label>
                            <label><input type="radio" name="city" value="Москва">Москва</label>
                            <label><input type="radio" name="city" value="Новой Уренгой">Новой Уренгой</label>
                            <label><input type="radio" name="city" value="Екатеринбург">Екатеринбург</label>
                            <label><input type="radio" name="city" value="Серов">Серов</label>
                            <label><input type="radio" name="city" value="Казань">Казань</label>
                            <label><input type="radio" name="city" value="Казань">Казань</label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="core-head_search-form" data-core-head-search-form>
                <div class="menu-mobile_popup-head" data-menu-mobile_btn-wrapper>
                    <a class="mobil-core-head_logo" href="/">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                    <button class="btn-close" data-menu-popup-mobile-btn-close></button>
                </div>
                <label class="core-head_search-label">
                    <input type="search" placeholder="Поиск" data-core-head-search-input>
                    <a type="submit" href="search.php"></a>
                </label>
                <div class="core-head_search_items-wrapper" data-core-head-search-items-wrapper>
                    <ul>
                        <li class="active" data-core-head-search-item><a href="search.php">Щебень</a></li>
                        <li class="active" data-core-head-search-item><a href="search.php">Песок</a></li>
                        <li class="active" data-core-head-search-item><a href="search.php">Бетон</a></li>
                        <li class="active" data-core-head-search-item><a href="search.php">Строительные растворы (смеси)</a></li>
                        <li class="active" data-core-head-search-item><a href="search.php">Железобетонные изделия (ЖБИ)</a></li>
                        <li class="active" data-core-head-search-item><a href="search.php">Торф</a></li>
                    </ul>
                </div>
            </div>
            <ul class="core-head_contacts-wrapper">
                <li><a href="mailto:pochta@gmail.com">pochta@gmail.com</a></li>
                <li><a href="tel:+7 912 000 00 00">+7 912 000 00 00</a></li>
            </ul>
            <button class="core-head_btn-order-call btn-transparent" data-order-popup="order-a-call">Заказать звонок</button>
        </div>
        <div class="appbar-wrapper" data-appbar-wrapper>
            <div class="appbar_container">
                <ul class="appbar_links-wrapper">
                    <li><a href="/catalog.php" data-btn-open-menu>Каталог</a></li>
                    <li><a href="/contacts.php">Контакты</a></li>
                    <li><a href="/about.php">О компании</a></li>
                </ul>
                <span class="appbar_working-hours">время работы: пн-пят 09:00–18:00</span>
            </div>
            <div class="appbar_menu-wrapper-bg" data-menu-wrapper-bg>
                <div class="appbar_menu-wrapper" data-menu-wrapper>
                    <div class="appbar_menu_container core-container" data-appbar-menu-container>
                        <ul class="appbar_menu">
                            <?php foreach ($response_data_menu_link as $item) { ?>
                                <li><p data-appbar-menu-link-id="<?= $item['id'] ?>"><?= $item['name'] ?></p></li>
                            <?php } ?>
                        </ul>
                        <div class="appbar_submenu">
                            <?php foreach ($response_data_menu_link as $key => $item) { ?>
                                    <?php if ($key > 0) { ?>
                                        <ul class="appbar_submenu_links" data-appbar-submenu-likks-id="<?= $item['id'] ?>">
                                            <?php foreach ($item['sections'] as $sections_item) { ?>
                                                <li><a href="<?= $item['link'] ?>"><?= $sections_item['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } else { ?>
                                        <ul class="appbar_submenu_links active" data-appbar-submenu-likks-id="<?= $item['id'] ?>">
                                            <?php foreach ($item['sections'] as $sections_item) { ?>
                                                <li><a href="<?= $item['link'] ?>"><?= $sections_item['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="mobil-core-head_select-cities" data-mobil-core-head-select-cities></button>
    </div>
    <div class="menu-mobile-wrapper" data-menu-mobile-wrapper>
        <div class="menu-mobile_btn-wrapper" data-menu-mobile_btn-wrapper>
            <a class="mobil-core-head_logo active" href="/" data-menu-mobile-logo>
                <img src="/images/logo.png" alt="logo">
            </a>
            <button class="menu-mobile_btn-back" data-menu-mobile-btn-back>Назад</button>
            <button class="btn-close" data-menu-mobile-btn-close></button>
        </div>
        <div class="core-menu-mobile-wrapper active" data-core-menu-mobile-wrapper>
            <span class="core-mobile_search-label" data-mobile-search-label>Поиск</span>
            <span class="core-mobile_select-cities" data-mobile-select-cities-value>Новой Уренгой</span>
            <nav class="navbar-mobile_links-wrapper">
                <ul>
                    <li><button data-mobile-btn-open-menu>Каталог</button></li>
                    <li><a href="/contacts.php">Контакты</a></li>
                    <li><a href="/about.php">О компании</a></li>
                </ul>
            </nav>
            <button class="core-head_btn-order-call_ btn-transparent" data-order-popup="order-a-call">Заказать звонок</button>
        </div>
        <div class="menu-mobile_menu-wrapper" data-menu-mobile-menu-wrapper>
            <ul class="menu-mobile_menu">
                <?php foreach ($response_data_menu_link as $item) { ?>
                    <li><p data-mobile-menu-btn-link-id="<?= $item['id'] ?>"><?= $item['name'] ?></p></li>
                <?php } ?>
            </ul>
        </div>
        <div class="menu-mobile_submenu-wrapper" data-menu-mobile-submenu-wrapper>
            <?php foreach ($response_data_menu_link as $key => $item) { ?>
                <?php if ($key > 0) { ?>
                    <ul class="menu-mobile_submenu_links" data-menu-mobile-submenu-links-id="<?= $item['id'] ?>">
                        <?php foreach ($item['sections'] as $sections_item) { ?>
                            <li><a href="<?= $item['link'] ?>"><?= $sections_item['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                <?php } else { ?>
                    <ul class="menu-mobile_submenu_links active" data-menu-mobile-submenu-links-id="<?= $item['id'] ?>">
                        <?php foreach ($item['sections'] as $sections_item) { ?>
                            <li><a href="<?= $item['link'] ?>"><?= $sections_item['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</header>


<section class="core-container popup-request-correct-city-wrapper active_" data-popup-wrapper>
    <div class="popup-request-correct-city">
        <p class="popup-request-correct-city_title">Ваш город <span> Новый Уренгой?</span></p>
        <div class="popup-request-correct-city_btn-wrapper">
            <button class="btn-transparent" data-select-another-city>Другой</button>
            <button class="btn-grey" data-popup-btn-close>Верно</button>
        </div>
    </div>
</section>