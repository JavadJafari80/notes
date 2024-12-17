var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    loop: true,
    autoplay: {
        delay: 3000,
    },
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 0,
        stretch: -180,
        depth: 200,
        modifier: 1,
        slideShadows: false
    },
    pagination: false,
    on: {
        slideChangeTransitionEnd: function () {
            document.querySelectorAll('.swiper-slide').forEach(slide => {
                slide.style.opacity = '0.4';
            });
            document.querySelector('.swiper-slide-active').style.opacity = '1';
        }
    }
});
