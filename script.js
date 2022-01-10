$(document).ready(function () {
  $(window).scroll(function () {
    // sticky navbars on scroll script
    if (this.scrollY > 30) {
      $(".navbars").addClass("sticky");
    } else {
      $(".navbars").removeClass("sticky");
    }

    // scroll-up button show/hide script
    if (this.scrollY > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });

  // slide-up script
  $(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
    // removing smooth scroll on slide-up button click
    $("html").css("scrollBehavior", "auto");
  });

  $(".navbars .menu li a").click(function () {
    // applying again smooth scroll on menu items click
    $("html").css("scrollBehavior", "smooth");
  });

  // toggle menu/navbars script
  $(".menu-btn").click(function () {
    $(".navbars .menu").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
  });

  // typing text animation script
  var typed = new Typed(".typing", {
    strings: ["Pakaian Akhwat", "Pakaian Ikhwan", "Alat sholat", "Pakaian Muslim Anak", "Seragam", "Kurma", "Kaos kaki dan Aksesoris"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true,
  });
  var typed = new Typed(".typing-4", {
    strings: ["Created By Al-birru | © 2021 All rights reserved."],
    typeSpeed: 150,
    backSpeed: 80,
    loop: true,
  });
});

jQuery(document).ready(function ($) {
  "use strict";
  //  TESTIMONIALS CAROUSEL HOOK
  $("#customers-testimonials").owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots: true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1170: {
        items: 3,
      },
    },
  });
});
