(function ($) {
  "user strict";

  // preloader
  $(window).on("load", function () {
    $(".preloader")
      .delay(1000)
      .animate(
        {
          opacity: "0",
        },
        1000,
        function () {
          $(".preloader").css("display", "none");
        }
      );
  });

  $("select").niceSelect(),
    // aos
    AOS.init({
      once: true,
    });

  $(".video-icon").lightcase();

  $(".img-popup").lightcase();

  $(".my-paroller").paroller();

  // pie-chart
  $(function () {
    $(".chart").easyPieChart({
      size: 160,
      barColor: "#E80000",
      scaleColor: false,
      lineWidth: 8,
      trackColor: "#ffffff",
      lineCap: "circle",
      animate: 8000,
    });
  });

  //Create Background Image
  (function background() {
    let img = $(".bg_img");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  })();

  // scroll-to-top
  var ScrollTop = $(".scrollToTop");
  $(window).on("scroll", function () {
    if ($(this).scrollTop() < 100) {
      ScrollTop.removeClass("active");
    } else {
      ScrollTop.addClass("active");
    }
  });

  // header-fixed
  var fixed_top = $(".header-section");
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 500) {
      fixed_top.addClass("animated fadeInDown header-fixed");
    } else {
      fixed_top.removeClass("animated fadeInDown header-fixed");
    }
  });

  $(".navbar li a").on("click", function () {
    var element = $(this).parent("li");
    if (element.hasClass("show")) {
      element.removeClass("show");
      element.children("ul").slideUp(500);
    } else {
      element.siblings("li").removeClass("show");
      element.addClass("show");
      element.siblings("li").find("ul").slideUp(500);
      element.children("ul").slideDown(500);
    }
  });

  window.addEventListener(
    "resize",
    function () {
      if (screen.width > 991) {
        $(".sub-menu").show();
      } else {
        $(".sub-menu").hide();
      }
    },
    true
  );

  //Odometer
  if ($(".statistics-item").length) {
    $(".statistics-item").each(function () {
      $(this).isInViewport(function (status) {
        if (status === "entered") {
          for (
            var i = 0;
            i < document.querySelectorAll(".odometer").length;
            i++
          ) {
            var el = document.querySelectorAll(".odometer")[i];
            el.innerHTML = el.getAttribute("data-odometer-final");
          }
        }
      });
    });
  }

  //plan-tab-switcher
  $(".plan-tab-switcher").on("click", function () {
    $(this).toggleClass("active");
    $(".plan-area").toggleClass("change-subs-duration");
    $(".plan-tab").toggleClass("change-color");
  });

  // countdown plungin init
  $(".draw-timer").countdown("2021/1/18", function (event) {
    $(this).php(
      event.strftime(
        "" +
          "<div><span>%D</span><p>days</p></div>" +
          "<div><span>%H</span><p>hrs</p></div>" +
          "<div><span>%M</span><p>mins</p></div>" +
          "<div><span>%S</span><p>sec</p></div>"
      )
    );
  });

  $("#remainTime1").countdown("2021/08/10", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  $("#remainTime2").countdown("2021/07/25", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  $("#remainTime3").countdown("2021/09/10", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  $("#remainTime4").countdown("2021/08/10", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  $("#remainTime5").countdown("2021/09/01", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  $("#remainTime6").countdown("2021/08/29", function (event) {
    $(this).php(event.strftime("%D days %H:%M:%S"));
  });

  // faq
  $(".faq-wrapper .faq-title").on("click", function (e) {
    var element = $(this).parent(".faq-item");
    if (element.hasClass("open")) {
      element.removeClass("open");
      element.find(".faq-content").removeClass("open");
      element.find(".faq-content").slideUp(300, "swing");
    } else {
      element.addClass("open");
      element.children(".faq-content").slideDown(300, "swing");
      element
        .siblings(".faq-item")
        .children(".faq-content")
        .slideUp(300, "swing");
      element.siblings(".faq-item").removeClass("open");
      element.siblings(".faq-item").find(".faq-title").removeClass("open");
      element.siblings(".taq-item").find(".faq-content").slideUp(300, "swing");
    }
  });

  // slider
  var swiper = new Swiper(".banner-slider", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    effect: "fade",
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    autoplay: {
      speeds: 2000,
      delay: 2000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".feature-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".training-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".trainer-slider", {
    slidesPerView: 4,
    spaceBetween: 0,
    loop: true,
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    pagination: {
      el: ".custom-pagination",
      type: "progressbar",
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      1199: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".trainer-slider-two", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 3,
      },
      767: {
        slidesPerView: 2,
      },
      400: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".service-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".client-slider", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".client-slider-two", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".tutorial-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    pagination: {
      el: ".custom-pagination",
      type: "progressbar",
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      1199: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".blog-slider", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".slider-next",
      prevEl: ".slider-prev",
    },
    autoplay: {
      speeds: 2000,
      delay: 4000,
    },
    speed: 1000,
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    },
  });

  //sidebar Menu
  $(document).on("click", ".header-toggle-area", function () {
    $(".page-wrapper").toggleClass("show");
  });

  //Cross Menu
  $(".nav-menu-close").on("click", function () {
    $(".page-wrapper").removeClass("show");
  });

  // book + - start here
  $(function () {
    $(".qtybutton").on("click", function () {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() === "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
        // Don't allow decrementing below zero
        if (oldValue > 1) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 1;
        }
      }
      $button.parent().find("input").val(newVal);
    });
  });

  // skill circle progress bar
  var skillLevel1 = $(".skill-item .first").data("skill-level");
  var skillLevel2 = $(".skill-item .second").data("skill-level");
  var skillLevel3 = $(".skill-item .third").data("skill-level");
  var skillLevel4 = $(".skill-item .fourth").data("skill-level");
  //first.circle
  $(".first.circle")
    .circleProgress({
      value: "0." + skillLevel1,
      size: 110,
      strokeWidth: 10,
      duration: 1400,
      delay: 2500,
      trailWidth: 10,
      emptyFill: "transparent",
      fill: {
        color: "#dcbb87",
      },
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("strong")
        .php(Math.round(96 * progress) + "<span>%</span>");
    });

  //second.circle
  $(".second.circle")
    .circleProgress({
      value: "0." + skillLevel2,
      size: 110,
      emptyFill: "transparent",
      fill: {
        color: "#dcbb87",
      },
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("strong")
        .php(Math.round(skillLevel2 * progress) + "<i>%</i>");
    });

  //third.circle
  $(".third.circle")
    .circleProgress({
      value: "0." + skillLevel3,
      size: 110,
      emptyFill: "transparent",
      fill: {
        color: "#dcbb87",
      },
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("strong")
        .php(Math.round(70 * progress) + "<span>%</span>");
    });

  //fourth.circle
  $(".fourth.circle")
    .circleProgress({
      value: "0." + skillLevel4,
      size: 110,
      emptyFill: "transparent",
      fill: {
        color: "#dcbb87",
      },
    })
    .on("circle-animation-progress", function (event, progress) {
      $(this)
        .find("strong")
        .php(Math.round(90 * progress) + "<span>%</span>");
    });

  // progress bar
  $(".progressbar").each(function () {
    $(this)
      .find(".bar")
      .animate(
        {
          width: $(this).attr("data-perc"),
        },
        8000
      );
    $(this)
      .find(".label")
      .animate(
        {
          left: $(this).attr("data-perc"),
        },
        8000
      );
  });

  // init Isotope
  var $grid = $(".grid").isotope({
    // options
    itemSelector: ".grid-item",
    // percentPosition: true,
    masonry: {
      columnWidth: ".grid-item",
    },
  });
  var $gallery = $(".grid").isotope({});
  // filter items on button click
  $(".filter-btn-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });
  $(".filter-btn-group").on("click", "button", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(window).on("load", function () {
    galleryMasonaryTwo();
  });

  function galleryMasonaryTwo() {
    // filter functions
    var $grid = $(".grid");
    var filterFns = {};
    $grid.isotope({
      itemSelector: ".grid-item",
      masonry: {
        columnWidth: 0,
      },
    });
    // bind filter button click
    $("ul.filter").on("click", "li", function () {
      var filterValue = $(this).attr("data-filter");
      // use filterFn if matches value
      filterValue = filterFns[filterValue] || filterValue;
      $grid.isotope({
        filter: filterValue,
      });
    });
    // change is-checked class on buttons
    $("ul.filter").each(function (i, buttonGroup) {
      var $buttonGroup = $(buttonGroup);
      $buttonGroup.on("click", "li", function () {
        $buttonGroup.find(".active").removeClass("active");
        $(this).addClass("active");
      });
    });
  }
})(jQuery);
