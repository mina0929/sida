import "./style.scss";
import { initHeader } from "./js/header.js";
import { initSalonsSwiper } from "./js/salons.js";
import { initCompanySlider } from "./js/company.js";
import { initTextMarquee } from "./js/recruit.js";

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initSalonsSwiper();
  initCompanySlider();
  initTextMarquee();
});
