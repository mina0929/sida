import Swiper from "swiper";
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

export function initSalonsSwiper() {
  const el = document.querySelector(".p-salons__grid.swiper");
  if (!el) return;

  const swiper = new Swiper(el, {
    modules: [Pagination],
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 16,
    watchOverflow: true,
    breakpoints: { 768: { enabled: false } },
  });
}
