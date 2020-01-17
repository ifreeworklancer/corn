<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto d-flex align-items-center">
                <a href="/" class="logo">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
                <ul class="contacts-list d-none d-lg-flex">
                    <li class="mr-4">
                        <a href="tel:<?= phone_link($phone1); ?>">
                            <svg width="25" height="25">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?= $phone1; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?= phone_link($phone2); ?>">
                            <?= $phone2; ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="#" class="btn btn-primary open-order d-none d-lg-inline-flex mr-4">
                    <svg width="17" height="17">
                        <use xlink:href="#plus-icon"></use>
                    </svg>
                    ЗАКАЗАТЬ УСЛУГУ
                </a>
                <div class="burger-menu">
                    <div class="icon">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                    меню
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href="#" class="btn btn-primary open-order">
            <svg width="17" height="17">
                <use xlink:href="#plus-icon"></use>
            </svg>
            ЗАКАЗАТЬ УСЛУГУ
        </a>
        <ul class="menu-list">
            <li>
                <a href="#">
                    Усуги
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="../../single/single-services.php">
                            Таргетированная реклама
                        </a>
                    </li>
                    <li>
                        <a href="../../single/single-services.php">
                            SMM
                        </a>
                    </li>
                    <li>
                        <a href="../../single/single-services.php">
                            Разработка стратегии
                        </a>
                    </li>
                    <li>
                        <a href="../../single/single-services.php">
                            Контекстная реклама
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Кейсы
                </a>
            </li>
            <li>
                <a href="../../page/page-article.php">
                    Блог
                </a>
            </li>
            <li>
                <a href="../../page/page-contacts.php">
                    Контакты
                </a>
            </li>
            <li>
                <a href="#">
                    О нас
                </a>
            </li>
        </ul>
        <ul class="social-list">
            <li>
                <a href="<?= $instagram; ?>">
                    <svg width="30" height="30">
                        <use xlink:href="#instagram-icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $facebook; ?>">
                    <svg width="30" height="30">
                        <use xlink:href="#facebook-icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $youtube; ?>">
                    <svg width="30" height="30">
                        <use xlink:href="#youtube-icon"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>