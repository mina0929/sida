// src/js/header.js
export function initHeader() {
  const header = document.querySelector(".l-header");
  const hamburgerBtn = document.querySelector(".c-hamburger");
  const globalMenu = document.querySelector(".l-global-menu");
  const closeBtn = document.querySelector(".c-close-btn");
  const menuOverlay = document.querySelector(".l-global-menu__overlay");
  const globalNavLinks = document.querySelectorAll(".c-global-nav__link");
  const body = document.body;

  if (!header || !hamburgerBtn || !globalMenu) return; // ← 必須ガード

  function handleScroll() {
    header.classList.toggle("is-scrolled", window.scrollY > 0);
  }
  function openMenu() {
    globalMenu.classList.add("is-open");
    body.classList.add("is-menu-open");
    hamburgerBtn.setAttribute("aria-label", "メニューを閉じる");
  }
  function closeMenu() {
    globalMenu.classList.remove("is-open");
    body.classList.remove("is-menu-open");
    hamburgerBtn.setAttribute("aria-label", "メニューを開く");
  }
  function toggleMenu() {
    globalMenu.classList.contains("is-open") ? closeMenu() : openMenu();
  }

  window.addEventListener("scroll", handleScroll);
  hamburgerBtn.addEventListener("click", toggleMenu);
  closeBtn && closeBtn.addEventListener("click", closeMenu);
  menuOverlay && menuOverlay.addEventListener("click", closeMenu);
  globalNavLinks.forEach((link) => link.addEventListener("click", closeMenu));
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && globalMenu.classList.contains("is-open")) closeMenu();
  });
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768 && globalMenu.classList.contains("is-open")) closeMenu();
  });

  handleScroll();
}
