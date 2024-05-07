

document.addEventListener('DOMContentLoaded', ()=>{ 

    // menu Toggler
    const bodyWrap = document.querySelector("body");
    const mbMenuToggler = document.querySelector('#mb-menu-toggler');
    
    function togglemenu() {
        mbMenuToggler.classList.toggle('open');
        bodyWrap.classList.toggle('mobile-menu--open');
    }
    mbMenuToggler.addEventListener('click', togglemenu);
    
    console.log('Theme js loaded');
    })