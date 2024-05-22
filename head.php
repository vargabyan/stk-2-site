<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
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
                <button class="core-head_select-cities">Новой Уренгой</button>
            </div>
            <form action="" class="core-head_search-form">
                <label class="core-head_search-label" for="">
                    <input type="search" placeholder="Поиск">
                    <button type="submit"></button>
                </label>
            </form>
            <ul class="core-head_contacts-wrapper">
                <li><a href="mailto:pochta@gmail.com">pochta@gmail.com</a></li>
                <li><a href="tel:+7 912 000 00 00">+7 912 000 00 00</a></li>
            </ul>
            <button class="core-head_btn-order-call btn-transparent">Заказать звонок</button>
        </div>
        <div class="appbar-wrapper" data-appbar-wrapper>
            <div class="appbar_container">
                <ul class="appbar_links-wrapper">
                    <li><a href="/catalog" data-btn-open-menu>Каталог</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <li><a href="/about">О компании</a></li>
                </ul>
                <span class="appbar_working-hours">время работы: пн-пят 09:00–18:00</span>
            </div>
            <div class="appbar_menu-wrapper" data-menu-wrapper>
                <div class="appbar_menu_container core-container">
                    <ul class="appbar_menu">
                        <?php foreach ($response_data_menu_link as $item) { ?>
                            <li><a href="<?= $item['link'] ?>" data-appbar-menu-link-id="<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
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
    <div class="core-container mobile-header_container">
        <a class="mobil-core-head_logo" href="/">
            <img src="/images/logo.png" alt="logo">
        </a>
        <button class="mobil-core-head_select-cities"></button>
    </div>
</header>