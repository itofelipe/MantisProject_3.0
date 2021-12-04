$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dot:true,
    autoplay:false,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})