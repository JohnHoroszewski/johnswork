jQuery(document).ready(function(){function e(){jQuery(".fa-long-arrow-right").animate({left:"30px"},1e3).animate({left:"-30"},1e3,e)}var o=jQuery(".site-header"),n=jQuery("a.backtotop");e(),jQuery(".mobile-nav a").on("click",function(e){e.preventDefault(),jQuery(this).hasClass("opened")?jQuery(this).removeClass("opened"):jQuery(this).addClass("opened"),jQuery(".menu-main-menu-container").slideToggle()}),jQuery(window).on("scroll",function(){var e=document.documentElement&&document.documentElement.scrollTop||document.body.scrollTop;e>100?o.addClass("scrolled"):o.removeClass("scrolled")}),jQuery(window).on("scroll",function(){var e=document.documentElement&&document.documentElement.scrollTop||document.body.scrollTop;e>150?n.addClass("scrolled"):n.removeClass("scrolled")}),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},1e3),!1}})})});