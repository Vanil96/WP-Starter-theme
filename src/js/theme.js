import "@splidejs/splide/dist/css/splide.min.css";
import Splide from "@splidejs/splide";

document.addEventListener("DOMContentLoaded", () => {
  // menu Toggler
  const bodyWrap = document.querySelector("body");
  const mbMenuToggler = document.querySelector("#mb-menu-toggler");

  function togglemenu() {
    mbMenuToggler.classList.toggle("open");
    bodyWrap.classList.toggle("mobile-menu--open");
  }
  mbMenuToggler.addEventListener("click", togglemenu);

  console.log("Theme js loaded");

  //acordions
  document.querySelectorAll(".accordion-button").forEach((button) => {
    button.addEventListener("click", () => {
      const panel = button.parentElement.nextElementSibling;
      const isOpen = button.getAttribute("aria-expanded") === "true";

      // Zamykamy wszystkie inne panele
      document.querySelectorAll(".panel").forEach((p) => {
        p.style.maxHeight = null;
        p.setAttribute("hidden", true);
        p.previousElementSibling
          .querySelector(".accordion-button")
          .setAttribute("aria-expanded", "false");
      });

      // Otwieramy lub zamykamy kliknięty panel
      if (!isOpen) {
        button.setAttribute("aria-expanded", "true");
        panel.removeAttribute("hidden");
        panel.style.maxHeight = panel.scrollHeight + "px";
      } else {
        button.setAttribute("aria-expanded", "false");
        panel.setAttribute("hidden", true);
        panel.style.maxHeight = null;
      }
    });
  });

  // Inicjalizacja slidera dla ofert
  const offerSlider = document.querySelector("#offer-slider");
  if (offerSlider) {
    new Splide(offerSlider, {
      type: "loop",
      perPage: 1,
      mediaQuery: "min",
      gap: "10px",
      arrows: false,
      breakpoints: {
        768: {
          perPage: 2,
          arrows: true,
        },
        1240: {
          perPage: 3,
        },
        1440: {
          perPage: 4,
        },
      },
    }).mount();
  }

  // Inicjalizacja slidera dla opinii
  const opinionSlider = document.querySelector("#opinion-slider");
  if (opinionSlider) {
    new Splide(opinionSlider, {
      type: "loop",
      perPage: 1,
      mediaQuery: "min",
      gap: "10px",
      arrows: false,
      breakpoints: {
        768: {
          perPage: 2,
          arrows: true,
        },
        1240: {
          perPage: 3,
        },
        1440: {
          perPage: 4,
        },
      },
    }).mount();
  }

  let prevScrollpos = window.pageYOffset;

  window.addEventListener("scroll", () => {
    const currentScrollPos = window.pageYOffset;
    const navbar = document.getElementById("navbar");
    const floatingMenu = document.querySelector(".floating-menu"); //dodatkowe menu po boku

    if (navbar) {
      if (currentScrollPos <= 7) {
        navbar.classList.add("sticky", "visible");
        navbar.classList.remove("hidden");
      } else {
        navbar.classList.remove("sticky");

        if (prevScrollpos > currentScrollPos) {
          navbar.classList.add("visible");
          navbar.classList.remove("hidden");
        } else {
          navbar.classList.add("hidden");
          navbar.classList.remove("visible");
        }
      }

      prevScrollpos = currentScrollPos;
    }

    if (floatingMenu) {
      const reachedBottom =
        window.innerHeight + window.scrollY >= document.body.offsetHeight - 2;

      if (currentScrollPos > 7 && !reachedBottom) {
        floatingMenu.classList.add("visible");
      } else {
        floatingMenu.classList.remove("visible");
      }
    }
  });

  window.addEventListener("load", () => {
    const navbar = document.getElementById("navbar");
    const floatingMenu = document.querySelector(".floating-menu");

    if (window.pageYOffset <= 7 && navbar) {
      navbar.classList.add("sticky", "visible");
    }

    if (floatingMenu) {
      if (window.pageYOffset > 7) {
        floatingMenu.classList.add("visible");
      } else {
        floatingMenu.classList.remove("visible");
      }
    }
  });

  //fade in section on scroll
  const elements = document.querySelectorAll(".fadeInOnScroll");

  function isVisible(elem) {
    let bounding = elem.getBoundingClientRect();
    return (
      bounding.top + 100 <
        (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.top + 100 > 0
    );
  }

  function checkVisibility() {
    for (let i = 0; i < elements.length; i++) {
      if (isVisible(elements[i])) {
        elements[i].style.opacity = 1;
        elements[i].style.transform = "translateY(0)";
      }
    }
  }

  window.addEventListener("scroll", checkVisibility);
  checkVisibility();
}); //DOM loaded
