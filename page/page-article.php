<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Article -->
    <section id="article" class="page-intro">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active"><?= $page_article['title']; ?></li>
                    </ol>
                    <h1 class="page-title">
                        <?= $page_article['title']; ?>
                    </h1>
                </div>
                <?php
                foreach ($page_article['items'] as $item) :
                    ?>
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <a href="#" class="article-item">
                            <figure class="article-item__image"
                                    style="background-image: url('<?= $item['image']; ?>');"></figure>
                            <h4 class="article-item__title">
                                <?= $item['title']; ?>
                            </h4>
                            <p class="article-item__description">
                                <?= $item['description']; ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center">
                    <a href="#" class="link-more-article">
                        <svg width="20" height="30">
                            <use xlink:href="#arrow-up"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');
