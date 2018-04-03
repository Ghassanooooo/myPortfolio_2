$(document).ready(function() {

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
  $(".nav li a, .carousel-caption button a ,h1 a").click(function(e) {
    console.log($(this).data('scroll'));
    $("html, body").animate({
      scrollTop: $($(this).data('scroll')).offset().top
    }, 800)
    e.preventDefault();

  });
});