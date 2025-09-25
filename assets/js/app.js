import Swiper, { Autoplay, EffectFade } from 'swiper';
import ScrollReveal from 'scrollreveal'
Swiper.use([Autoplay, EffectFade]);

const swiper = new Swiper('.swiper', {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    speed:500,
});

ScrollReveal().reveal('.reveal', { duration: 800});