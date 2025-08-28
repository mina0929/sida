import Swiper from "swiper/bundle";
import "swiper/css";

export function initTextMarquee() {
  const el = document.querySelector(".c-marquee-swiper");
  if (!el) return;

  new Swiper(el, {
    slidesPerView: "auto",
    loop: true,
    speed: 10000,
    spaceBetween: 20,
    allowTouchMove: false,
    autoplay: {
      delay: 0,
    },
  });
}
