<!-- Cases -->
<section id="cases">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4 col-xl-3 p-2">
                <a href="#" class="cases-item cases-item--main cases-item-animate">
                    <div></div>
                    <figure class="cases-item__image" style="background-image: url('<?= $cases['main_item']['image']; ?>');"></figure>
                    <h2 class="cases-item__title">
                        <?= $cases['main_item']['title']; ?>
                    </h2>
                    <p class="cases-item__description">
                        <?= $cases['main_item']['description']; ?>
                    </p>
                </a>
            </div>
            <div class="col-sm-10 col-xl-7 px-2">
                <div class="row justify-content-center">
                    <?php
                    $count = 0;
                    foreach ($cases['items'] as $item) :
                        $count++;
                        ?>
                        <div class="col-sm-10 col-md-6 <?php if ($count !== 1) echo 'col-lg-3'; ?> p-2">
                            <a href="#" class="cases-item cases-item-animate">
                                <figure class="cases-item__image" style="background-image: url('<?= $item['image']; ?>');"></figure>
                                <h5 class="cases-item__title">
                                    <?= $item['title']; ?>
                                </h5>
                                <p class="cases-item__description">
                                    <?= $item['description']; ?>
                                </p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-sm-10 col-md-6 p-2">
                        <a href="#" class="cases-link-more cases-item-animate">
                            ПОСМОТРЕТЬ ЕЩЕ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>