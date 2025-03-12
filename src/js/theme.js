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
  document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', () => {
        const panel = button.parentElement.nextElementSibling;
        const isOpen = button.getAttribute('aria-expanded') === 'true';

        // Zamykamy wszystkie inne panele
        document.querySelectorAll('.panel').forEach(p => {
            p.style.maxHeight = null;
            p.setAttribute('hidden', true);
            p.previousElementSibling.querySelector('.accordion-button').setAttribute('aria-expanded', 'false');
        });

        // Otwieramy lub zamykamy kliknięty panel
        if (!isOpen) {
            button.setAttribute('aria-expanded', 'true');
            panel.removeAttribute('hidden');
            panel.style.maxHeight = panel.scrollHeight + "px";
        } else {
            button.setAttribute('aria-expanded', 'false');
            panel.setAttribute('hidden', true);
            panel.style.maxHeight = null;
        }
    });
});

 
  

    // Inicjalizacja slidera dla ofert
    const offerSlider = document.querySelector('#offer-slider');
    if (offerSlider) {
      new Splide(offerSlider, {
        type: "loop",
        perPage: 1,
        mediaQuery: "min",
        gap: "10px",
        arrows:false,
        breakpoints: {
          680: {
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
    const opinionSlider = document.querySelector('#opinion-slider');
    if (opinionSlider) {
      new Splide(opinionSlider, {
        type: "loop",
        perPage: 1,
        mediaQuery: "min",
        gap: "10px",
        arrows: false,
        breakpoints: {
          680: {
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


//Menu toggle on scroll

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  const navbar = document.getElementById("navbar");

  // Dodaje klasę 'sticky', jeśli jesteśmy na górze strony
  if (currentScrollPos === 0) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }

  if (prevScrollpos > currentScrollPos) {
    navbar.classList.add("visible");
    navbar.classList.remove("hidden");
  } else {
    navbar.classList.add("hidden");
    navbar.classList.remove("visible");
  }
  prevScrollpos = currentScrollPos; // Aktualizuje poprzednią pozycję scrolla
}

window.onload = function() {
  const navbar = document.getElementById("navbar");
  // Upewniamy się, że klasa 'sticky' jest ustawiona po załadowaniu strony
  if (window.pageYOffset === 0) {
    navbar.classList.add("sticky");
  }
}



}); //DOM loaded
