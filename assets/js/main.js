const handleLoad = () => {
    const loadContainer = document.querySelector('.loader__container');

    loadContainer.classList.add('loader__hidden');
}
window.addEventListener("load", handleLoad)



const menu = document.getElementById("menu");
const navbar = document.getElementById("navbar");
const navLinks = document.querySelectorAll(".navbar a");
const header = document.getElementById("header-main");

const loginBtn = document.getElementById("login-btn");
const headerLoginForm = document.getElementById("header-login-form");

const searchBtn = document.getElementById("search-btn");
const headerSearchForm = document.getElementById("header-search-form");



const handleSearchForm = () => {
    navbar.classList.remove('active');
    headerLoginForm.classList.remove('active');
    headerSearchForm.classList.toggle('active');
    menu.classList.remove('fa-close');
    menu.classList.add('fa-bars')
}
searchBtn.addEventListener('click', handleSearchForm)



const handleLoginForm = () => {
    headerSearchForm.classList.remove('active');
    headerLoginForm.classList.toggle('active');
    navbar.classList.remove('active');
    menu.classList.remove('fa-close');
    menu.classList.add('fa-bars')
}
loginBtn.addEventListener('click', handleLoginForm)





const menuHandle = () => {
    headerSearchForm.classList.remove('active');
    headerLoginForm.classList.remove('active');
    navbar.classList.toggle('active');

    if(menu.classList.contains('fa-bars'))
    {
        menu.classList.remove('fa-bars')
        menu.classList.add('fa-close')
    }
    else{
        menu.classList.remove('fa-close');
        menu.classList.add('fa-bars')
    }
}
menu.addEventListener('click', menuHandle);


const scrollHandle = () => {
    if(window.scrollY >= 20)
    {   
        header.classList.add('active');

        navbar.classList.remove("active");
        menu.classList.remove('fa-close');
        menu.classList.add('fa-bars');
        headerLoginForm.classList.remove('active');
        headerSearchForm.classList.remove('active');

    }
    else
    {
        header.classList.remove('active');
    }
}
window.addEventListener("scroll", scrollHandle);

navLinks.forEach(item => {
    item.addEventListener('click', () => {
        navbar.classList.remove("active");
        menu.classList.remove('fa-close');
        menu.classList.add('fa-bars');
        headerLoginForm.classList.remove('active');
        headerSearchForm.classList.remove('active');
    })
})






// Banner Codes

let slides = document.querySelectorAll('.banner .banner-slides-container .banner-slide');
let index = 0

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}






/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 120) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)








var swiper = new Swiper(".saleSwiper",{
    spaceBetween: 20,
    // centeredSlides: true,
    grabCursor: true,
    autoplay:{
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        375: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});



var swiper = new Swiper(".trendSwiper",{
    spaceBetween: 20,
    // centeredSlides: true,
    grabCursor: true,
    autoplay:{
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        375: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});



var swiper = new Swiper(".review-slider",{
    spaceBetween: 20,
    centeredSlides: true,
    grabCursor: true,
    autoplay:{
        delay: 7500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        }
    },
});










const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 1500,
    reset: true
});

sr.reveal(` .cate__box , .cate__banner-box, .sale__products-container, .trending__products-container, .product-showcase, .about .container, .review-slider, .footer`, {
    interval: 200
});

// sr.reveal(`.banner, .home__img,
//     .about__data, .about__img,
//     .services__content, .menu__content,
//     .app__data, .app__img,
//     .contact__data, .contact__button,
//     .footer__content`, {
// interval: 200
// })