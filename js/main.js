$(document).ready(function() {

  // nicescroll
  $("body").niceScroll({
    cursorcolor: "#fed136",
    cursorminheight: 200,
    horizrailenabled: false,
    cursorwidth: "10px"

  });

  $(".nav li a").click(function() {
    $(".nav li").addClass('wow bounceIn');

  });

  $(".nav li a").on("mouseleave", function() {
    $(".nav li").removeClass('wow bounceIn');
  });

  $(window).scroll(function() {

    if ($(window).scrollTop()) {

      $(".navbar-fixed-top").addClass('navScroll');
      $("ul.nav li").addClass('listScroll');
    } else {
      $(".navbar-fixed-top").removeClass('navScroll');
      $("ul.nav li").removeClass('listScroll');
    }

  });
  // scroll top fix
  $(".nav li a, .carousel-caption .buttonHeder a ,h1 a").click(function(e) {
    console.log($(this).data('scroll'));
    $("html, body").animate({
      scrollTop: $($(this).data('scroll')).offset().top
    }, 800)
    e.preventDefault();

  });
});