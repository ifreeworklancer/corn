<!-- Intro -->
<section id="intro">
    <div class="container-fluid h-100">
        <div class="row justify-content-center justify-content-lg-between align-items-center h-100">
            <div class="col-sm-9 col-lg-7 col-xl-5">
                <div class="intro-item">
                    <h1 class="intro-item__title">
                        <?= $intro['title']; ?>
                    </h1>
                    <div class="intro-item__description">
                        <?= $intro['description']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-5">
                <img src="<?= $intro['image'] ?>" alt="intro" class="intro-image">
            </div>
        </div>
    </div>
    <a href="#cases" class="scroll-down anchor-link d-none d-lg-block">
        <svg width="20" height="30">
            <use xlink:href="#arrow-down"></use>
        </svg>
    </a>
</section>