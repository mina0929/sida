import Swiper from "swiper/bundle";
import "swiper/css";

export function initSalonsSwiper() {
  const el = document.querySelector(".js-salons.swiper");
  if (!el) return;

  new Swiper(el, {
    loop: true,
    slidesPerView: 1.5,
    loopedSlides: 8,
    centeredSlides: true,
    spaceBetween: 16,
    watchOverflow: true,
    breakpoints: { 768: { enabled: false } },
    autoplay: {
      disableOnInteraction: false,
    },
  });
}
