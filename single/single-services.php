<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single services -->
    <section id="services-intro" class="page-intro">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-sm-9 col-lg-7">
                    <div class="services-intro-item">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active"><?= $single_services['intro']['title']; ?></li>
                        </ol>
                        <h1 class="page-title">
                            <?= $single_services['intro']['title']; ?>
                        </h1>
                        <div class="services-intro-item__description">
                            <?= $single_services['intro']['description']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4 col-xl-4">
                    <div class="services-intro-prev">
                        <div class="services-intro-prev__icon">
                            <svg width="150" height="150">
                                <use xlink:href="#services-4"></use>
                            </svg>
                        </div>
                        <h4 class="services-intro-prev__title">
                            <?= $single_services['intro']['subtitle']; ?>
                        </h4>
                        <a href="#" class="btn btn-primary open-order w-100">
                            ЗАКАЗАТЬ УСЛУГУ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-step">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-sm-10 col-md-6 mb-5 mb-md-0">
                    <img src="<?= $single_services['step']['image'] ?>" alt="services" class="services-step-image">
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 d-flex justify-content-center">
                    <ul class="services-step-list">
                        <?php
                        foreach ($single_services['step']['list'] as $item) :
                            ?>
                            <li>
                                <?= $item['title']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services-skills">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($single_services['skills'] as $item) :
                    ?>
                    <div class="col-sm-8 col-lg-6">
                        <div class="services-skills-item">
                            <h2 class="services-skills-item__title">
                                <?= $item['title']; ?>
                            </h2>
                            <div class="services-skills-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><?= $single_services['intro']['title']; ?></li>
                        <li class="breadcrumb-item"><a href="/">SMM</a></li>
                        <li class="breadcrumb-item"><a href="/">РАЗРАБОТКА СТРАТЕГИЙ</a></li>
                        <li class="breadcrumb-item"><a href="/">КОНТЕКСТНАЯ РЕКЛАМА</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');
