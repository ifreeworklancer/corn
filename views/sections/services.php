<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $services['title']; ?>
                </h2>
            </div>
            <?php $count = 0;
            foreach ($services['items'] as $item) : $count++; ?>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="services-item">
                        <div class="services-item__icon">
                            <svg width="150" height="150">
                                <use xlink:href="#services-<?= $count; ?>"></use>
                            </svg>
                        </div>
                        <h4 class="services-item__title">
                            <?= $item['title']; ?>
                        </h4>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <img src="../../images/icons/decor-services.png" alt="decor" class="decor-image">
</section>