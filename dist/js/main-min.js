$(document).ready(function(){$(".owl-carousel").each(function(){const e=$(this).data();$(this).owlCarousel(e)}),$(".js-mask").each(function(){$(this).mask($(this).data().mask.mask)}),document.querySelector(".header-mob__nav-toggle").addEventListener("click",()=>{document.querySelector(".header").classList.toggle("active")});const e=document.querySelectorAll(".blog-main__right-item");e&&e.forEach(t=>{t.addEventListener("click",()=>{document.querySelectorAll(".blog-main__left-item").forEach(e=>e.classList.remove("active")),document.querySelector("#"+t.getAttribute("data-blog-item")).classList.add("active"),e.forEach(e=>e.classList.remove("active")),t.classList.add("active")})})});