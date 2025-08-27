import Swiper from "swiper";

import "swiper/css";

export function initSalonsSwiper() {
  const el = document.querySelector(".p-salons__grid.swiper");
  if (!el) return;

  new Swiper(el, {
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 16,
    watchOverflow: true,
    breakpoints: { 768: { enabled: false } },
  });
}
