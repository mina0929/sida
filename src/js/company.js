import Swiper from "swiper";
import "swiper/css";

export function initCompanySlider() {
  const el = document.querySelector(".p-company_mvv__image.swiper");
  if (!el) return;

  new Swiper1(el, {
    loop: true,
    slidesPerView: 3, // 複数表示させる場合
    allowTouchMove: false,
    speed: 10000, // ← アニメーションをゆっくりにする（大きめが滑らか）
    autoplay: {
      delay: 1, // ← 0 ではなく 1 にするのがポイント
      disableOnInteraction: false,
    },
  });
}
