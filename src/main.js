import "./style.scss";
import { initHeader } from "./js/header.js";
<<<<<<< HEAD
//import { initSalonsSwiper } from "./js/salon.js";
//import { initCompanySlider } from "./js/company.js";
//import { initTextMarquee } from "./js/recruit.js";

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  //initSalonsSwiper();
  //initCompanySlider();
  //initTextMarquee();
=======
import { initSalonsSwiper } from "./js/salons.js";
import { initCompanySlider } from "./js/company.js";

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initSalonsSwiper();
  initCompanySlider();
>>>>>>> parent of 5b20fdd (更新)
});
