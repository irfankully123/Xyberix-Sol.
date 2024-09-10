var sw = $(window).width(),
    sh = $(window).height();
function fontResizer() {
    var e = parseInt(sw) / 118.9375;
    $("body").css("font-size", e);
}
function mobSliderheight() {
    var e = $(".servicesBrandsSlider .swiper-slide").outerWidth();
    $(".servicesBrandsSlider .mob-frame").css("width", e);
}
$(window).on("load", function () {
    if (
        (setTimeout(function () {
            $(".loader-first").fadeOut(), $("html").removeClass("loadjs");
        }, 400),
            sw > 1025 && fontResizer(),
            sw > 767)
    ) {
        let e = $(".case-studies__tabs-wrapper .button:first-child");
        e && e.addClass("active");
    }
    setTimeout(function () {
        var e, s;
        (e = document.createElement("script")), (s = document.getElementsByTagName("script")[0]), (e.async = !0), (e.src = ""), (e.charset = "UTF-8"), e.setAttribute("crossorigin", "*"), s.parentNode.insertBefore(e, s);
    }, 1e4),
        $(document).find("img").hasClass("svg-convert") && $(".svg-convert").svgConvert({ onComplete: function () { } }),
        $(document).find("div").hasClass("video-wrapper") &&
        setTimeout(function () {
            $("#video").html('<video loop playsinline autoplay muted><source src="./video/6.6.mp4" type="video/mp4"></video>');
        });
}),
    $(document).ready(function () {
        if (
            ($("#toggle").click(function () {
                $(this).toggleClass("active"), $(".mobNav").toggleClass("open"), $("html").toggleClass("overflow-hidden");
            }),
                sw > 767 && $(document).find("div").hasClass("services-thumb-slider"))
        ) {
            var e = new Swiper(".services-thumb-slider", { slidesPerView: 5, speed: 400, direction: "vertical", centeredSlides: !0, mousewheel: !0, initialSlide: "2" });
            $(".services-thumb-slider .swiper-slide").click(function () {
                e.slideTo($(this).index());
            });
        }
        if (sw > 767 && $(document).find("div").hasClass("services-slider")) {
            var s = new Swiper(".services-slider", { slidesPerView: 1, initialSlide: "2", speed: 400, centeredSlides: !0, effect: "fade", fadeEffect: { crossFade: !1 } });
            (s.controller.control = e), (e.controller.control = s);
        }
        if (
            ($(document).find("div").hasClass("ourWork__Slider") &&
                new Swiper(".ourWork__Slider", { slidesPerView: 1.1, initialSlide: "1", spaceBetween: 10, speed: 2e3, breakpoints: { 576: { slidesPerView: 2, spaceBetween: 25 }, 1024: { slidesPerView: 4.5, spaceBetween: 25 } } }),
                $(document).find("div").hasClass("collabCompanies__Slider") &&
                new Swiper(".collabCompanies__Slider", {
                    slidesPerView: 2,
                    speed: 2e3,
                    grid: { rows: 1 },
                    scrollbar: { el: ".collabCompanies__Slider .swiper-scrollbar", draggable: !0 },
                    breakpoints: { 576: { slidesPerView: 3, grid: { rows: 2 } }, 768: { slidesPerView: 4, grid: { rows: 2 } }, 1024: { slidesPerView: 7, grid: { rows: 2 } } },
                }),
                $(document).find("div").hasClass("faq__Slider") &&
                new Swiper(".faq__Slider", {
                    slidesPerView: 1.1,
                    spaceBetween: 10,
                    speed: 2e3,
                    breakpoints: { 576: { slidesPerView: 2, spaceBetween: 30 }, 992: { slidesPerView: 3, spaceBetween: 30 }, 1025: { slidesPerView: 5, spaceBetween: 30 } },
                }),
                $(document).find("div").hasClass("worth-read__Slider") &&
                new Swiper(".worth-read__Slider", {
                    slidesPerView: 1.25,
                    spaceBetween: 30,
                    centeredSlides: !1,
                    speed: 2e3,
                    loop: !0,
                    loopedSlides: 10,
                    scrollbar: { el: ".worth-read__Slider .swiper-scrollbar", draggable: !0 },
                    breakpoints: { 576: { slidesPerView: 2, spaceBetween: 80, centeredSlides: !0 }, 992: { slidesPerView: 3, spaceBetween: 80, centeredSlides: !1 }, 1025: { slidesPerView: 4.5 } },
                }),
                $(document).find("div").hasClass("our-services__services-slider") &&
                new Swiper(".our-services__services-slider", {
                    freeMode: !0,
                    slidesPerView: "auto",
                    speed: 12e3,
                    autoplay: { delay: 1, enable: !0 },
                    loop: false,
                    grabCursor: !1,
                    shortSwipes: !1,
                    longSwipes: !1,
                    allowTouchMove: !1,
                    watchSlidesProgress: !0,
                }),
                sw < 576 && $(document).find("div").hasClass("serviceHelp__slider") && new Swiper(".serviceHelp__slider", { slidesPerView: 1, spaceBetween: 5, loop: !1, speed: 2e3 }),
                $(document).find("div").hasClass("serviceDevelopment__thumb"))
        )
            var i = new Swiper(".serviceDevelopment__thumb", { slidesPerView: 1, loop: !1, speed: 1200, spaceBetween: 30, breakpoints: { 576: { slidesPerView: 1.5 }, 1024: { slidesPerView: 3 } } });
        $(document).find("div").hasClass("serviceDevelopment__gallery") &&
            new Swiper(".serviceDevelopment__gallery", {
                slidesPerView: 1,
                loop: !1,
                speed: 1200,
                effect: "fade",
                fadeEffect: { crossFade: !0 },
                thumbs: { swiper: i },
                navigation: { nextEl: ".serviceDevelopment__galleryWrapper .swiper-button-next", prevEl: ".serviceDevelopment__galleryWrapper .swiper-button-prev" },
            }),
            $(document).find("div").hasClass("happyEmplyees__slider") &&
            new Swiper(".happyEmplyees__slider", {
                slidesPerView: 1,
                loop: !1,
                speed: 800,
                effect: "fade",
                fadeEffect: { crossFade: !0 },
                navigation: { nextEl: ".happyEmplyees__rightsec .swiper-button-next", prevEl: ".happyEmplyees__rightsec .swiper-button-prev" },
            }),
            $(document).find("div").hasClass("servicesBrandsSlider") &&
            new Swiper(".servicesBrandsSlider", {
                slidesPerView: 1.85,
                spaceBetween: 0,
                loop: !0,
                speed: 1e3,
                centeredSlides: !0,
                slideToClickedSlide: !0,
                autoplay: { delay: 3e3, disableOnInteraction: !0 },
                breakpoints: { 576: { spaceBetween: 0, slidesPerView: 3 }, 768: { slidesPerView: 4 }, 1100: { slidesPerView: 5, spaceBetween: 0 } },
            }),
            $(document).find("div").hasClass("uiPortfolio__slider") &&
            new Swiper(".uiPortfolio__slider", {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: !1,
                speed: 500,
                effect: "fade",
                fadeEffect: { crossFade: !0 },
                navigation: { nextEl: ".uiPortfolio .swiper-button-next", prevEl: ".uiPortfolio .swiper-button-prev" },
            }),
            $(document).find("div").hasClass("research-design__slider") &&
            new Swiper(".research-design__slider", {
                slidesPerView: 2,
                spaceBetween: 0,
                loop: false,
                speed: 500,
                autoplay: window.innerWidth >= 768 ? { delay: 3000, disableOnInteraction: true } : false, // Disable autoplay on devices with width less than 768 pixels
                breakpoints: { 576: { spaceBetween: 0, slidesPerView: 3 }, 768: { slidesPerView: 3 }, 1100: { slidesPerView: 5, spaceBetween: 0 } },
            });
        
        setTimeout(function () {
            mobSliderheight();
        }, 1500);
            $(".experties__tabs-wrapper--small-cards").on("click", function () {
                var e = $(this).attr("data-rel");
                return (
                    $(".experties__tabs-wrapper--small-cards").removeClass("active"),
                    $(this).addClass("active"),
                    $("#" + e)
                        .fadeIn("slow")
                        .siblings(".experties__tabs-wrapper--detail-tab")
                        .hide(),
                    !1
                );
            }),
            $(".experties__tabs-wrapper--small-cards:first").addClass("active");
    }),
    $(".toggle-btn > p").on("click", function () {
        if (sw < 992) {
            var e = $(this).parent().find("ul");
            $(this).hasClass("opened")
                ? ($(this).removeClass("opened"), $(".toggle-btn > .qlinks-menu").slideUp())
                : ($(".toggle-btn > p").removeClass("opened"), $(".toggle-btn > .qlinks-menu").slideUp(), $(this).addClass("opened"), e.slideDown());
        }
    }),
    $(".menu-toggleBtn").on("click", function () {
        var e = $(this).siblings(".inner-menu"),
            s = $(this).siblings(".menu-link");
        $(this).hasClass("active")
            ? ($(this).removeClass("active"), $(".menu-link").removeClass("active"), $(".inner-menu").slideUp())
            : ($(".menu-toggleBtn").removeClass("active"), $(".menu-link").removeClass("active"), $(".inner-menu").slideUp(), $(this).addClass("active"), e.slideDown(), s.addClass("active"));
    }),
    $(".inner-menu-toggleBtn, .inner-menu__item--link").on("click", function () {
        var e = $(this).siblings(".sub-inner-menu"),
            s = $(this).siblings(".inner-menu__item--link");
        $(this).hasClass("active")
            ? ($(this).removeClass("active"), $(".inner-menu__item--link").removeClass("active"), $(".sub-inner-menu").slideUp())
            : ($(".inner-menu-toggleBtn, .inner-menu__item--link").removeClass("active"), $(".sub-inner-menu").slideUp(), $(this).addClass("active"), e.slideDown(), s.addClass("active"));
    }),
    $(window).on("resize orientation", function () {
        (sw = $(window).width()),
            (sh = $(window).height()) < 450 && sw > 480 && sw < 820 ? $("#portrait-warnning").css("display", "flex") : $("#portrait-warnning").css("display", "none"),
            setTimeout(function () {
                sw > 1025 && ((sw < 1400 && sw > 1300 && sh > 900) || fontResizer());
                var e = $(".servicesBrandsSlider .swiper-slide").outerWidth();
                $(".servicesBrandsSlider .mob-frame").css("width", e);
            }, 1e3);
    }),
    $(window).scroll(function () {
        var e = $(".header");
        window.pageYOffset > 0 ? e.addClass("sticky") : e.removeClass("sticky");
    }),
    sw > 991 &&
    $(".menu__menuitem").hover(function () {
        $(this).is(":hover")
            ? ($(this).children(".dropdown-js").stop().slideToggle(), $(this).closest(".menu__menuitem").addClass("dropdown-open"))
            : ($(this).children(".dropdown-js").stop().slideToggle(), $(this).closest(".menu__menuitem").removeClass("dropdown-open"));
    }),
    sw < 992 &&
    $(".menu__menuitem--menulink").click(function () {
        var e = $(this).siblings(".dropdown-js");
        $(this).parent(".menu__menuitem").hasClass("dropdown-open")
            ? ($(this).parent(".menu__menuitem").removeClass("dropdown-open"), $(this).siblings(".dropdown-js").slideUp(600))
            : ($(".menu > .menu__menuitem ").removeClass("dropdown-open"), $(".menu__menuitem > .dropdown-js").slideUp(600), $(this).parent().addClass("dropdown-open"), e.slideDown());
    }),
    $(".menu-slider-thumb li:first-child").addClass("active"),
    $(".menu-slider-gallery-slide").hide(),
    $(".menu-slider-gallery-slide:first-child").show(),
    $(".menu-slider-thumb li").mouseenter(function () {
        var e = $(this).attr("data-menu");
        $(this).addClass("active").siblings().removeClass("active"),
            "all" == e ||
            ($(".menu-slider-gallery-slide").css("display", "none"),
                $(".menu-slider-gallery-slide[data-menu=" + e + "]")
                    .css("display", "block")
                    .fadeIn(10));
    }),
    $(".serviceBrands__menu li:first-child a").addClass("active"),
    $(".serviceBrands__tabBoxWrapper .serviceBrands__tabBox").hide(),
    $(".serviceBrands__tabBoxWrapper .serviceBrands__tabBox:first-child").show(),
    $(".serviceBrands__menu li a").on("click", function () {
        var e = $(this).attr("data-rel");
        $(".serviceBrands__menu li a").removeClass("active"),
            $(this).addClass("active"),
            $("#" + e)
                .fadeIn(1e3)
                .siblings(".serviceBrands__tabBox")
                .hide();
    }),
    $(".moreless-button").click(function () {
        $(".moretext").toggleClass("active"), "Read more" == $(this).children("span").text() ? $(this).children("span").text("Read less") : $(this).children("span").text("Read more");
    }),
    $(document).ready(function () {
        (function e() {
            function s() {
                event.preventDefault(), $("body").removeClass("show-video-modal noscroll"), $("#youtube").attr("src", "");
            }
            $(".js-trigger-video-modal").on("click", function (e) {
                e.preventDefault();
                var s = $(this).attr("data-youtube-id");
                $("#youtube").attr("src", "//www.youtube.com/embed/" + s + "?autoplay=1&rel=0"), $("body").addClass("show-video-modal noscroll");
            }),
                $("body").on("click", ".close-video-modal, .video-modal .overlay", function (e) {
                    s();
                }),
                $("body").keyup(function (e) {
                    27 == e.keyCode && s();
                });
        })(),
            $(".case-studies__tabs-wrapper").on("click", ".button", function (e) {
                filterjson($(this).attr("data-menu")),
                    e.stopPropagation(),
                    e.preventDefault(),
                    sw > 767
                        ? $(this).addClass("active").siblings().removeClass("active")
                        : ($(this).addClass("active"),
                            $(this).siblings().removeClass("active"),
                            $(".case-studies__tabs-wrapper li").first().addClass("mob-first-active"),
                            $(this).hasClass("active") && $(this).siblings(".button").slideToggle());
            }),
            $(".apply-btn").click(function () {
                $(".career-detail-form").fadeIn(200), $("html").css("overflow", "hidden");
            }),
            $(".cross-times").click(function () {
                $(".career-detail-form").fadeOut(200), $("html").css("overflow-y", "scroll");
            });
        var e = window.location.pathname;
        $('.mobNav__menu--item  a[href="' + e + '"]')
            .addClass("active-menu")
            .parents(".mobNav__menu--item")
            .addClass("active-menu"),
            $('.menu__menuitem  a[href="' + e + '"]')
                .addClass("active")
                .parents(".menu__menuitem")
                .addClass("active"),
            $(".counting").each(function () {
                $(this)
                    .prop("Counter", 0)
                    .animate(
                        { Counter: $(this).text() },
                        {
                            duration: 4e3,
                            easing: "swing",
                            step: function (e) {
                                $(this).text(Math.ceil(e));
                            },
                        }
                    );
            });
        let s = document.querySelectorAll(".block");
        window.addEventListener("load", function () {
            s.forEach((e) => {
                let s = e.querySelector(".num"),
                    i = parseInt(s.innerText),
                    t = 0,
                    n = e.querySelectorAll(".circle");
                setInterval(() => {
                    t == i ? clearInterval() : ((t += 1), (s.innerText = t));
                }, 2e3 / i),
                    n.forEach(function (e) {
                        console.log("======", e), (e.style.strokeDashoffset = 503 - 503 * (i / 100));
                    });
            });
        });
    });
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 38,
    loop: false,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: { el: ".swiper-pagination", clickable: !0, dynamicBullets: !0 },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    breakpoints: { 0: { slidesPerView: 1 }, 520: { slidesPerView: 2 }, 950: { slidesPerView: 3 } },
});
function toggleAccordion(e) {
    let s = e.nextElementSibling,
        i = e.querySelector(".accordion-icon");
    if (s.style.height && "0px" !== s.style.height) (s.style.height = "0"), (i.innerHTML = '<i class="fa-solid fa-angle-down"></i>');
    else {
        let t = s.querySelector(".content-inner");
        (s.style.height = t.offsetHeight + "px"), (i.innerHTML = '<i class="fa-solid fa-angle-up"></i>');
    }
}
$(document).ready(function () {
    $(window).scroll(function () {
        $(window).scrollTop() > 100 ? $("#animatedButton").addClass("get-in-touch-wrap-r") : $("#animatedButton").removeClass("get-in-touch-wrap-r");
    });
}),
    $(document).ready(function () {
        var e = $(".addressSwitch"),
            s = 0,
            i = !1;
        e.eq(s).fadeIn(1e3),
            setInterval(function t() {
                i ||
                    ((i = !0),
                        e.eq(s).fadeOut(1e3, function () {
                            (s = (s + 1) % e.length),
                                e.eq(s).fadeIn(1e3, function () {
                                    i = !1;
                                });
                        }));
            }, 4e3);
    });
const mobservice = new Swiper(".sample-slider", {
    loop: false,
    effect: "cube",
    grabCursor: true,
    speed: 1500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
document.addEventListener("DOMContentLoaded", function () {
    var ptag = document.getElementById("mobserviceptag");
    if (ptag) {
        ptag.innerText = "Ecommerce Web Development";
    }
    mobservice.on("slideChange", function () {
        let e = mobservice.activeIndex;
        switch (e) {
            case 0:
                ptag.innerText = "It Resource Outsourcing";
                break;
            case 1:
                ptag.innerText = "Ecommerce Web Development";
                break;
            case 9:
                ptag.innerText = "Ecommerce Web Development";
                break;
            case 2:
                ptag.innerText = "Mobile Application Development";
                break;
            case 3:
                ptag.innerText = "Digital Marketing";
                break;
            case 4:
                ptag.innerText = "Digital Branding & Communication";
                break;
            case 5:
                ptag.innerText = "Web Development";
                break;
            case 6:
                ptag.innerText = "UI/UX Design";
                break;
            case 7:
                ptag.innerText = "Video Animation";
                break;
            default:
                ptag.innerText = "It Resource Outsourcing";
        }
    });
});


function subscribe() {
    var emailInput = document.getElementById('newsletter');
    var email = emailInput.value.trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailRegex.test(email)) {
        Swal.fire({
            title: "Error",
            text: "Please enter a valid email address",
            icon: "error",
            customClass: {
                popup: 'swal2-custom',
            },
        });
    } else {
        Swal.fire({
            title: "Subscribed",
            text: "Successfully Subscribed To Newsletter",
            icon: "success",
            customClass: {
                popup: 'swal2-custom',
            },
        });
        emailInput.value = '';
    }
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

document.addEventListener("DOMContentLoaded", function () {
    var serviceParam = getParameterByName('service');
    if (serviceParam) {
        var select = document.getElementById('services');
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value === serviceParam) {
                select.options[i].selected = true;
                break;
            }
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {

    const serviceform = document.getElementById("servicesHeroForm");
    const urlapi = "https://dashboard.xyberixsolutions.com/api/v1/send/mail";
    if (serviceform) {
        serviceform.addEventListener("submit", async function (e) {
            e.preventDefault();
            const formDataform = new FormData(this);
            let timerInterval
            Swal.fire({
                title: 'Thank You',
                html: 'Please Wait <b></b> for a while.',
                timer: 20000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
            try {
                const response = await axios.post(urlapi, formDataform);
                console.log(response.data);
                serviceform.reset();
                Swal.fire({
                    icon: 'success',
                    title: "Message Send",
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            } catch (error) {
                Swal.fire(
                    'The Internet?',
                    'That thing is still around?',
                    'question'
                )
            }
        });
    }


});

let activeDropdown = null;

function closeDropdown() {
    if (activeDropdown) {
        activeDropdown.classList.remove("active");
        activeDropdown = null;
    }
}

function updateName(selectedLi) {
    const dropdown = selectedLi.closest('.card-dropdown-wrapper');
    const inputField = dropdown.querySelector('input');
    const selectBtn = dropdown.querySelector('.card-dropdown-select-btn');

    inputField.value = "";
    selectBtn.innerText = selectedLi.innerText;
    dropdown.classList.remove("active");
}

document.querySelectorAll('.card-dropdown-options li').forEach(option => {
    option.addEventListener("click", () => {
        updateName(option);
        closeDropdown();
    });
});

document.querySelectorAll('.card-dropdown-select-btn').forEach(btn => {
    btn.addEventListener("click", function () {
        const dropdown = this.parentElement;
        if (dropdown !== activeDropdown) {
            closeDropdown(); 
            dropdown.classList.add("active");
            activeDropdown = dropdown;
        } else {
            dropdown.classList.toggle("active");
            activeDropdown = dropdown.classList.contains("active") ? dropdown : null;
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var containers = document.querySelectorAll(".pricingTable-firstTable_table__options");

    containers.forEach(function(container) {
        container.addEventListener("wheel", function(event) {
            container.scrollBy(0, event.deltaY);
            event.preventDefault();
        });
        var touchStartY = 0;
        container.addEventListener("touchstart", function(event) {
            touchStartY = event.touches[0].clientY;
        });
        container.addEventListener("touchmove", function(event) {
            var touchMoveY = event.touches[0].clientY;
            var deltaY = touchStartY - touchMoveY;
            container.scrollBy(0, deltaY);
            touchStartY = touchMoveY;
            event.preventDefault();
        });
    });
});



function openModal(package) {
    document.getElementById('myModal').style.display = 'block';
    console.log(package);
  }
  
  function closeModal() {
    document.getElementById('myModal').style.display = 'none';
  }
  
  function submitForm() {
    Swal.fire({
      icon: 'success',
      title: 'Request Send',
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
    });
    document.getElementById('getaquoteform').reset();

    closeModal();
  }
  window.onclick = function (event) {
    var modal = document.getElementById('myModal');
    if (event.target === modal) {
      closeModal();
    }
  };
(function () {
    "use strict";
  
    var carousels = function () {
      $(".owl-carousel1").owlCarousel({
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          680: {
            items: 2,
            nav: false,
            loop: false
          },
          1000: {
            items: 3,
            nav: true
          }
        }
      });
    };
  
    (function ($) {
      carousels();
    })(jQuery);
})();

$(document).ready(function(){ 
    $('.tab-a').click(function(){  
      $(".tab").removeClass('tab-active');
      $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
      $(".tab-a").removeClass('active-a');
      $(this).parent().find(".tab-a").addClass('active-a');
     });
});

if($('.tab-container').is(':visible')) {
    document.addEventListener("DOMContentLoaded", function() {
        var containers = document.querySelectorAll(".pricingTable-firstTable_table__options");
    
        containers.forEach(function(container) {
            container.addEventListener("wheel", function(event) {
                container.scrollBy(0, event.deltaY);
                event.preventDefault();
            });
            var touchStartY = 0;
            container.addEventListener("touchstart", function(event) {
                touchStartY = event.touches[0].clientY;
            });
            container.addEventListener("touchmove", function(event) {
                var touchMoveY = event.touches[0].clientY;
                var deltaY = touchStartY - touchMoveY;
                container.scrollBy(0, deltaY);
                touchStartY = touchMoveY;
                event.preventDefault();
            });
        });
    });
    
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementsByClassName("tablinks")[0].click();
    });
    
    function adjustTabs() {
        const tabContainer = document.querySelector('.tab');
        const tabLinks = tabContainer.querySelectorAll('.tablinks');
        const moreDropdown = document.querySelector('.dropdown-content');
        const dropdownButton = document.querySelector('.dropdown-button');
    
        const breakpoints = [767, 650, 620, 550, 450, 400];
        const maxVisibleTabs = [6, 5, 4, 3, 2, 1];
    
        let maxTabs = 6;
    
        for (let i = 0; i < breakpoints.length; i++) {
            if (window.innerWidth <= breakpoints[i]) {
                maxTabs = maxVisibleTabs[i];
            }
        }
    
        if (tabLinks.length > maxTabs) {
            document.querySelector('.dropdown').style.display = 'inline-block';
        } else {
            document.querySelector('.dropdown').style.display = 'none';
            moreDropdown.style.display = 'none';
        }
    
        const tabsToMove = Array.from(tabLinks).slice(maxTabs);
    
        tabsToMove.forEach((tab) => {
            if (!tab.classList.contains('moved-to-dropdown')) {
                const button = document.createElement('button');
                button.className = 'tablinks';
                button.innerText = tab.innerText;
                button.onclick = function() {
                    handleDropdownClick(tab.innerText);
                };
                moreDropdown.appendChild(button);
                tab.classList.add('moved-to-dropdown');
                tab.style.display = 'none';
            }
        });
    
        if (window.innerWidth > 767) {
            tabLinks.forEach((tab) => {
                tab.style.display = 'inline-block';
            });
            moreDropdown.innerHTML = '';
            tabLinks.forEach((tab) => {
                tab.classList.remove('moved-to-dropdown');
            });
        }
  
        dropdownButton.onclick = function() {
            moreDropdown.style.display = (moreDropdown.style.display === 'none' || moreDropdown.style.display ===
                '') ? 'block' : 'none';
        };
    }
    
    function openCity(evt, cityName) {
        const tabContents = document.getElementsByClassName("tabcontent");
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].style.display = "none";
        }
        const tabLinks = document.getElementsByClassName("tablinks");
        for (let i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove("active");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("active");
   
        document.querySelector('.dropdown-content').style.display = 'none';
    }
    
    function handleDropdownClick(cityName) {
        openCity(event, cityName);
    }
    
    adjustTabs();
    
    window.addEventListener('resize', adjustTabs);
    
    
}
const form = document.getElementById("contact-form");
const url = "https://dashboard.xyberixsolutions.com/api/v1/send/mail";
form.addEventListener("submit", async function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    Swal.fire({
            title: "Submitted",
            text: "Form Submitted Successfully",
            icon: "success",
            customClass: {
                popup: 'swal2-custom',
            },
        });
    try {
        const response = await axios.post(url, formData);
        if (response.status === 200) {
            form.reset();
        }
    } catch (error) {
        Swal.fire(
            'Error',
            'There was an error submitting the form. Please try again later.',
            'error'
        );
    } finally {

    }
});
  
  
  
const referralCheckbox = document.getElementById('referral');
const referralCodeDiv = document.getElementById('referral-code');

// Add an event listener to the checkbox
referralCheckbox.addEventListener('change', function() {
    // Check if the checkbox is checked
    if (referralCheckbox.checked) {
        // If checked, display the div
        referralCodeDiv.style.display = 'block';
    } else {
        // If unchecked, hide the div
        referralCodeDiv.style.display = 'none';
    }
});