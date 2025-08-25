import Swiper from "swiper";
import "swiper/css";

export function initTextMarquee() {
  const el = document.querySelector(".c-marquee-swiper");
  if (!el) return;

  new Swiper3(el, {
    slidesPerView: "auto",
    spaceBetween: 16,
    loop: true,
    allowTouchMove: false, // 触っても止めない
    speed: 12000, // 大きいほどゆっくり連続
    autoplay: {
      delay: 1, // 0だと始動しないことがある→1msに
      disableOnInteraction: false,
    },
  });
}
