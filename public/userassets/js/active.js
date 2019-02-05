//owlCarousel
$('.slider').owlCarousel({
    items:1,
    loop:true,
    nav:true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:3000,
    dots:true
});
//owlCarousel

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    items: 1,
    dots:false,
    thumbs: true,
    thumbImage: true,
    thumbContainerClass: 'owl-thumbs',
    thumbItemClass: 'owl-thumb-item'
});

//Counter Up
$('.counter').counterUp({
    delay: 10,
    time: 2000
});
//Counter Up

