import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/autoplay";

export function initTextMarquee() {
  const el = document.querySelector(".c-marquee-swiper");
  if (!el) return;

  new Swiper(el, {
    modules: [Autoplay],
    slidesPerView: "auto",
    spaceBetween: 16,
    loop: true,
    allowTouchMove: false,
    speed: 20000,
    autoplay: {
      delay: 1, // 0だと始動しないケースがある
      disableOnInteraction: false,
      pauseOnMouseEnter: false,
    },
    loopAdditionalSlides: 10,
  });
}
