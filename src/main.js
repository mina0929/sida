import "./style.scss";
import { initHeader } from "./js/header.js";
import { initSalonsSwiper } from "./js/salons.js";
import { initTextMarquee } from "./js/recruit.js";

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initSalonsSwiper();
  initTextMarquee();
});
