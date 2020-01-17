import jquery from 'jquery';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    let header = $('#app-header'),
        menu = $('.menu'),
        burgerMenu = $('.burger-menu');

    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        menu.toggleClass('active');
    });

    /**
     * Menu
     */
    let subMenu = $('.menu-list .sub-menu');
    subMenu.parents('li').addClass('has-submenu');

    $('.has-submenu a').on('click', function (e) {
        if ($(this).siblings('.sub-menu').length > 0) {
            e.preventDefault();
        }
        $(this).parents('li').toggleClass('active');
        $(this).siblings('.sub-menu').slideToggle();
    });

    let menuItemsHasSubmenu = $('.menu-list li.has-submenu');

    $(document).on('click', function (e) {
        if (!menuItemsHasSubmenu.is(e.target) && menuItemsHasSubmenu.has(e.target).length === 0) {
            menuItemsHasSubmenu.removeClass('active');
            $('.menu-list li.has-submenu ul').slideUp();
        }

        if ((!burgerMenu.is(e.target) && burgerMenu.has(e.target).length === 0) && (!menu.is(e.target) && menu.has(e.target).length === 0)) {
            burgerMenu.removeClass('active');
            menu.removeClass('active');
        }
    });

    /**
     * Anchor link
     */
    $(".anchor-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let orderModal = $('.custom-modal--order'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-order').on('click', function (e) {
        e.preventDefault();
        $(orderModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(orderModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Scroll func
     */
    let lastScroll = 0;
    $(window).on("scroll", function (e) {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
        $('.outer').remove();
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
        $(this).scrollTop() > lastScroll ? $(header).addClass('scroll-top') : $(header).removeClass('scroll-top');
        $(this).scrollTop() > 0 ? $(header).addClass('is-scroll') : $(header).removeClass('is-scroll');
        lastScroll = $(this).scrollTop();
    });

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.intro-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.cases-item-animate', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
    ScrollReveal().reveal('.services-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
})(jQuery);
