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
  }); // $(".toggle").click(function() { 
  //     if ( $('.value_quote').css('visibility') == 'hidden' )
  //         $(".value_quote").css('visibility', 'visible');
  //     else 
  //         $(".value_quote").css('visibility', 'hidden');
  // });
  //   function isOnScreen(elem) {
  //     // if the element doesn't exist, abort
  //     if( elem.length == 0 ) {
  //       return;
  //     }
  //     var $window = jQuery(window)
  //     var viewport_top = $window.scrollTop()
  //     var viewport_height = $window.height()
  //     var viewport_bottom = viewport_top + viewport_height
  //     var $elem = jQuery(elem)
  //     var top = $elem.offset().top
  //     var height = $elem.height()
  //     var bottom = top + height
  //     return (top >= viewport_top && top < viewport_bottom) ||
  //     (bottom > viewport_top && bottom <= viewport_bottom) ||
  //     (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
  //   }
  // function positionTheDot() {
  //   // What percentage down the page are we? 
  //   var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
  //   // Get path length
  //   var path = document.getElementById("path");
  //   var pathLen = path.getTotalLength();
  //   // Get the position of a point at <scrollPercentage> along the path.
  //   var pt = path.getPointAtLength(scrollPercentage * pathLen);
  //   var  scrollY = window.scrollY || window.pageYOffset;
  //   var  maxScrollY = document.documentElement.scrollHeight - window.innerHeight;
  //   var  path = document.getElementById("path");
  //   // Calculate distance along the path the car should be for the current scroll amount
  //   var  pathLen = path.getTotalLength();
  //   var  dist = pathLen * scrollY / maxScrollY;
  //   var  pos = path.getPointAtLength(dist);
  //   // Calculate position a little ahead of the car (or behind if we are at the end), so we can calculate car angle
  //   if (dist + 1 <= pathLen) {
  //     var  posAhead = path.getPointAtLength(dist + 1);
  //     var  angle = Math.atan2(posAhead.y - pos.y, posAhead.x - pos.x);
  //   } else {
  //     var  posBehind = path.getPointAtLength(dist - 1);
  //     var  angle = Math.atan2(pos.y - posBehind.y, pos.x - posBehind.x);
  //   }
  //   // Position the red dot at this point
  //   var dot = document.getElementById("dot");		  
  //   dot.setAttribute("transform", "translate("+ pt.x + "," + (pt.y) + ")");
  // };
  // //draw the line
  // function drawLine(container, line) {
  //   var pathLength = line.getTotalLength(),
  //   maxScrollTop = $(document).height() - $(window).height(),
  //   percentDone = $(window).scrollTop() / maxScrollTop,
  //   length = percentDone * pathLength;
  //   line.style.strokeDasharray = [ length,pathLength].join(' ');
  // }
  // function positionCar() {
  //   var  scrollY = window.scrollY || window.pageYOffset;
  //   var  maxScrollY = document.documentElement.scrollHeight - window.innerHeight;
  //   var  path = document.getElementById("path");
  //   // Calculate distance along the path the car should be for the current scroll amount
  //   var  pathLen = path.getTotalLength();
  //   var  dist = pathLen * scrollY / maxScrollY;
  //   var  pos = path.getPointAtLength(dist);
  //   // Calculate position a little ahead of the car (or behind if we are at the end), so we can calculate car angle
  //   if (dist + 1 <= pathLen) {
  //   var  posAhead = path.getPointAtLength(dist + 1);
  //   var  angle = Math.atan2(posAhead.y - pos.y, posAhead.x - pos.x);
  //   } else {
  //   var  posBehind = path.getPointAtLength(dist - 1);
  //   var  angle = Math.atan2(pos.y - posBehind.y, pos.x - posBehind.x);
  //   }
  //   // Position the car at "pos" totated by "angle"
  //   var  car = document.getElementById("c");
  //   car.setAttribute("transform", "translate(" + (pos.x) + "," + (pos.y) + ") rotate(" + (rad2deg(angle)) + ")");
  // }
  // function rad2deg(rad) {
  //   return 180 * rad / Math.PI;
  // }
  // $(window).scroll(function() {
  //   drawLine( $('#bx_a'),document.getElementById('path') );
  //   positionTheDot();
  //   positionCar();			
  // });
  //     if ($('#partner_process').isOnScreen()) {
  //           // init the line length
  //           drawLine( $('#bx_a'),document.getElementById('path') );
  //           positionTheDot();		
  //           positionCar();    
  //     }

  window.onscroll = function () {
    myFunction();
  };

  function myFunction() {
    // var myDiv = document.getElementById("partner_process").style.height;
    // var winScroll = document.documentElement.scrollTop;
    // var myDivScroll = document.getElementById("partner_process").scrollHeight;
    // var height = myDivScroll - myDiv;
    // var scrolled = (winScroll / height) * 50 - 43;
    // document.getElementById("myBar").style.height = scrolled*2 + "%";
    $(window).scroll(function () {
      var windowBottom = $(this).scrollTop() + $(this).height();
      var elementTop = $("#partner_process").offset().top;
      var percentage = (windowBottom - elementTop) / $("#partner_process").height() * 100;
      document.getElementById("myBar").style.height = Math.round(percentage) - 25 + "%"; //   if( $('footer').inView() ) {
      //     // Do cool stuff
      // }
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
    }); // First we select the element we want to target
    // const target = document.querySelector('.PP_icon');
    // // Next we want to create a function that will be called when that element is intersected
    // function handleIntersection(entries) {
    //   // The callback will return an array of entries, even if you are only observing a single item
    //   entries.map((entry) => {
    //     if (entry.isIntersecting) {
    //       entry.target.classList.add('active_icon');
    //       entry.target.classList.remove('PP_icon');
    //     } else {
    //       entry.target.classList.remove('active_icon');
    //       entry.target.classList.add('PP_icon');
    //     }
    //   });
    // }
  } // $(window).on('scroll', function() {
  //     $(".text_proc").each(function() {
  //       if (isScrolledIntoView($(this))) {
  //         $(this).find(".PP_icon").addClass("active_icon");
  //       }
  //     });
  //   });
  //   function isScrolledIntoView(elem) {
  //     var docViewTop = $(window).scrollTop();
  //     var docViewBottom = docViewTop + $(window).height();
  //     var elemTop = $(elem).offset().top;
  //     var elemBottom = elemTop + $(elem).height();
  //     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  //   }

});