"use strict";$(document).ready(function(){$(".owl-carousel").each(function(){var t=$(this).data();$(this).owlCarousel(t)}),$(".js-mask").each(function(){$(this).mask($(this).data().mask.mask)}),$("form.ajax-form").on("submit",function(t){t.preventDefault();var e=$(this);$.ajax({url:e.attr("data-handlerUrl"),type:"POST",data:e.serialize(),dataType:"json",success:function(t){console.log(t),e.text(e.attr("data-successText")),"cart__place-order"===e.prop("id")&&(document.querySelector(".cart-icon").classList.add("d-none"),document.querySelector(".cart-items").innerHTML="",localStorage.removeItem("cartItems"))},error:function(t,e){console.log(t,e)}})}),document.querySelector(".header-mob__nav-toggle").addEventListener("click",function(){document.querySelector(".header").classList.toggle("active")});var t=document.querySelectorAll(".blog-main__right-item");t&&t.forEach(function(e){e.addEventListener("click",function(){document.querySelectorAll(".blog-main__left-item").forEach(function(t){return t.classList.remove("active")}),document.querySelector("#".concat(e.getAttribute("data-blog-item"))).classList.add("active"),t.forEach(function(t){return t.classList.remove("active")}),e.classList.add("active")})});var e=JSON.parse(localStorage.getItem("cartItems")),a=document.querySelectorAll(".catalog-item__add-to-cart-btn"),c=document.querySelectorAll(".catalog-item__quantity"),r=function(t){var e=document.querySelector(".cart-icon");t?(e.classList.remove("d-none"),e.querySelector(".cart-icon__amount-of-items").innerHTML=t):e.classList.add("d-none")},o=function(){e=JSON.parse(localStorage.getItem("cartItems")),a.forEach(function(t){var a=t.getAttribute("data-itemId");if(e&&0!==e.length){var c=!1;e.forEach(function(t){t.id===a&&(c=!0)}),c?(t.classList.add("added"),t.setAttribute("title","Нажмите, чтобы убрать товар из корзины"),t.innerHTML='<i class="fa-solid fa-check me-2"></i>В корзине'):(t.classList.remove("added"),t.setAttribute("title","Нажмите, чтобы добавить товар в корзину"),t.innerHTML='<i class="fas fa-cart-arrow-down me-2"></i>В корзину')}else t.classList.remove("added"),t.setAttribute("title","Нажмите, чтобы добавить товар в корзину"),t.innerHTML='<i class="fas fa-cart-arrow-down me-2"></i>В корзину'}),c.forEach(function(t){if(e&&0!==e.length){var a=!1;e.forEach(function(e){t.getAttribute("data-itemId")===e.id&&(t.value=e.quantity,a=!0)}),a||(t.value=1)}else t.value=1})};e&&r(e.length),a&&c&&(o(),a.forEach(function(t){var a=t.getAttribute("data-itemId");t.addEventListener("click",function(){if((e=JSON.parse(localStorage.getItem("cartItems")))||(e=[]),t.classList.contains("added"))e.forEach(function(t,c){t.id===a&&(e.splice(c,1),document.querySelector("#item-".concat(a,"-quantity")).value=1)});else{var c=!1;e.forEach(function(t){t.id===a&&(c=!0)}),c||e.push({id:a,quantity:document.querySelector("#item-".concat(a,"-quantity")).value})}localStorage.setItem("cartItems",JSON.stringify(e)),r(e.length),o()})}),c.forEach(function(t){t.addEventListener("change",function(){(e=JSON.parse(localStorage.getItem("cartItems")))||(e=[]);var a=t.getAttribute("data-itemId");document.querySelector('.catalog-item__add-to-cart-btn[data-itemId="'.concat(a,'"]')).classList.contains("added")&&(e.forEach(function(c,r){c.id===a&&(e[r]={id:a,quantity:t.value})}),localStorage.setItem("cartItems",JSON.stringify(e)),r(e.length),o())})}))});