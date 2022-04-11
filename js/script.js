$(document).ready(function () {
    //home page
    const owlHeader = $('.header__bottom-carousel .owl-carousel');
    owlHeader.owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
    })
    $('.header__bottom .customNextBtn').click(function () {
        owlHeader.trigger('next.owl.carousel');
    })
    $('.header__bottom .customPrevBtn').click(function () {

        owlHeader.trigger('prev.owl.carousel', [300]);
    })

    //.session8 .owl-carousel
    const owlSession8 = $('.session8 .owl-carousel');
    owlSession8.owlCarousel({
        loop: true,
        margin: 10,
        items: 3,

    })
    $('.session8 .customNextBtn').click(function () {
        owlSession8.trigger('next.owl.carousel');
    })
    $('.session8 .customPrevBtn').click(function () {
        owlSession8.trigger('prev.owl.carousel', [300]);
    })

    //about page
    const owlAbout = $('.about__section2 .owl-carousel');
    owlAbout.owlCarousel({
        loop: true,
        margin: 10,
        items: 2,
        dots: false,

    })
    $('.about__section2 .customNextBtn').click(function () {
        owlAbout.trigger('next.owl.carousel');
    })
    $('.about__section2 .customPrevBtn').click(function () {
        owlAbout.trigger('prev.owl.carousel', [300]);
    })

    //product-detail page
    const owlProductDetail = $('.product__detail__section2 .owl-carousel');
    owlProductDetail.owlCarousel({
        loop: true,
        margin: 10,
        items: 4,
    })
    $('.product__detail__section2 .customNextBtn').click(function () {
        owlProductDetail.trigger('next.owl.carousel');
    })
    $('.product__detail__section2 .customPrevBtn').click(function () {
        owlProductDetail.trigger('prev.owl.carousel', [300]);
    })

    //list-product page
    $(".product__list__section1 .sidebar ul li>div>span").click(function () {
        $(this).closest('li').toggleClass('active');
    });
});