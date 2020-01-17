<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Contacts -->
    <section id="contacts" class="page-intro">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-sm-10 col-lg-6 col-xl-5 mb-5 mb-lg-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active"><?= $page_contacts['title']; ?></li>
                    </ol>
                    <h1 class="page-title">
                        <?= $page_contacts['title']; ?>
                    </h1>
                    <ul class="contacts-list">
                        <li>
                            <a href="<?= $place_link; ?>" target="_blank" class="text-primary">
                                <?= $place; ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?= $phone1; ?>">
                                <?= $phone1; ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?= $phone2; ?>">
                                <?= $phone2; ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= $email; ?>" class="text-primary">
                                <?= $email; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8 col-lg-6 col-xl-7">
                    <a href="<?= $place_link; ?>" target="_blank">
                        <img src="<?= $page_contacts['image']; ?>" alt="map" class="contacts-image">
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');
