(()=>{new Swiper(".swiper",{slidesPerView:1,loop:!0,zoom:{maxRatio:5},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:2e3}});var e=document.querySelectorAll(".button"),t=document.querySelector(".modal"),o=document.querySelector(".modal-window_control__closed");e.forEach((function(e){e.addEventListener("click",(function(e){e.currentTarget.getAttribute("data-path"),t.classList.add("modal-visible"),body.style.overflow="hidden"}))})),o.addEventListener("click",(function(e){t.classList.remove("modal-visible"),body.style.overflow="auto"})),t.addEventListener("click",(function(e){t.classList.remove("modal-visible"),body.style.overflow="auto"}))})();
//# sourceMappingURL=main.js.map
