!function(){"use strict";var e=window.matchMedia("(max-width: "+getComputedStyle(document.body).getPropertyValue("--custom--media-max-width--lg")+")"),t=document.querySelector(".site-header .wp-block-navigation__responsive-container");e.onchange=function(e){e.matches||document.body.contains(t)&&t.classList.contains("is-menu-open")&&document.querySelector(".site-header .wp-block-navigation__responsive-container-close").click()},document.addEventListener("DOMContentLoaded",(function(){var e,t,o=document.getElementById("back-to-top");if(o){var n=(e=function(){(window.scrollY||document.body.scrollTop)>300?o.classList.add("is-visible"):o.classList.remove("is-visible")},250,function(){var o=this,n=arguments;clearTimeout(t),t=setTimeout((function(){return e.apply(o,n)}),250)});window.addEventListener("scroll",n),o.addEventListener("click",(function(e){e.preventDefault(),window.scrollTo({top:0,behavior:"smooth"})}))}}));var o=document.querySelector('.post-password-form [type="submit"]');if(document.body.contains(o)){var n=document.createElement("div");n.classList.add("wp-block-button"),o.parentNode.insertBefore(n,o),n.appendChild(o),o.classList.add("wp-block-button__link")}document.querySelectorAll(".trevor-marquee-showcase").forEach((function(e){var t=e.querySelector(".trevor-marquee");if(t){var o=t.cloneNode(!0);e.appendChild(o)}}))}();