// 初始化 Hero 轮播
const heroSwiper = new Swiper('.hero-carousel', {
    slidesPerView: 1,  // 始终显示1个slide
    spaceBetween: 0,   // slide之间的间距
    
    // 自动播放
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    
    // 循环模式
    loop: true,
    
    // 切换效果
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    
    // 分页器
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    
    // 导航按钮
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
}); 