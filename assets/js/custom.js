"use strict";

jQuery(document).ready(function ($) {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
    $("#mobile_menu, #mobile").toggleClass("open");
  });
  $("#mobile_menu a").click(function () {
    $("#mobile_menu, #mobile").removeClass("open");
    $(".hamburger").removeClass("is-active");
  });
  $('textarea').on('input', function () {
    $(this).outerHeight(50).outerHeight(this.scrollHeight);
  });
  $("body").children().each(function () {
    $(this).html($(this).html().replace(/&#8232 ;/g, " ")); // remove the space in front of the first semicolon!
  });

  window.onscroll = function () {
    myFunction();
  };

  $('a[href*=#]').click(function (event) {
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    event.preventDefault();
  });

  function myFunction() {
    $(window).scroll(function () {
      var windowBottom = $(this).scrollTop() + $(this).height();
      var elementTop = $("#partner_process").offset().top;
      var percentage = (windowBottom - elementTop) / $("#partner_process").height() * 100;
      document.getElementById("myBar").style.height = Math.round(percentage) - 25 + "%";
    });
    var winHeight = $(window).height(),
        topLimit = winHeight * .2,
        bottomLimit = winHeight * .8;
    $(window).on('scroll', function () {
      $('.PP_icon').each(function () {
        var thisTop = $(this).offset().top - $(window).scrollTop();

        if (thisTop >= topLimit && thisTop + $(this).height() <= bottomLimit) {
          $(this).addClass('active_icon');
        } else {
          $(this).removeClass('active_icon');
        }
      });
    });
  }
});