jQuery(document).ready(function($) {
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
        $("#mobile_menu, #mobile").toggleClass("open");
    });
     $("#mobile_menu a").click(function () {
            $("#mobile_menu, #mobile").removeClass("open");
            $(".hamburger").removeClass("is-active");
    });	
    
    $('textarea').on('input', function() {
        $(this).outerHeight(50).outerHeight(this.scrollHeight);
    });
    // // // Work in progress, working on scrolling through PP section
    // window.onscroll = function() {myFunction()};
    // function myFunction() {
    //     var myDiv = document.getElementById("partner_process").scrollTop;
    //     var winScroll = document.documentElement.scrollTop;
    //     var myDivScroll = document.getElementById("partner_process").scrollHeight;
    //     var height = myDivScroll - myDiv;
    //     var scrolled = (winScroll / height) * 40;
    //     document.getElementById("myBar").style.height = scrolled + "%";
    // }
    // demo, works
    window.onscroll = function() {myFunction()};
    function myFunction() {
    var winScroll = document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.height = scrolled + "%";
    }
});



