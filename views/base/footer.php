</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-between align-items-center py-4">
            <div class="col-auto d-flex flex-column flex-sm-row align-items-center mb-4 mb-lg-0">
                <a href="/" class="logo mb-3 mb-sm-0 mr-sm-4">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
                <a href="#" class="btn btn-primary open-order">
                    <svg width="17" height="17">
                        <use xlink:href="#plus-icon"></use>
                    </svg>
                    ЗАКАЗАТЬ УСЛУГУ
                </a>
            </div>
            <div class="col-auto d-flex flex-column flex-sm-row align-items-center">
                <ul class="contacts-list d-sm-flex mb-3 mb-sm-0 mr-sm-5">
                    <li class="mr-sm-4">
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
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer-copyright">
                    Copyright &copy; <?= date('Y'); ?> All Right Reserve
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>