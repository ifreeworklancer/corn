<!-- Blog -->
<section id="blog">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-7">
                <article class="blog-card" style="background-image: url('<?= $blog['main_item']['image']; ?>');">
                    <h2 class="blog-card__title">
                        <?= $blog['main_item']['title']; ?>
                    </h2>
                    <div class="blog-card__description">
                        <p><?= $blog['main_item']['description']; ?></p>
                        <a href="#" class="link-more">
                            посмотреть еще
                            <svg width="15" height="10">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                <div class="blog-wrapper">
                    <h2 class="section-title">
                        <?= $blog['title']; ?>
                    </h2>
                    <?php foreach ($blog['items'] as $item) : ?>
                        <a href="#" class="blog-item">
                            <h4 class="blog-item__title">
                                <?= $item['title']; ?>
                            </h4>
                            <p class="blog-item__description">
                                <?= $item['description']; ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="link-more-blog">
        <svg width="20" height="30">
            <use xlink:href="#arrow-up"></use>
        </svg>
    </a>
</section>