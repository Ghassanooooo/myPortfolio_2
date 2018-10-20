$(document).ready(function() {
  // $(window).load(function() {
  $('.loadingScreen  span').fadeOut(500, function() {
    $('.loadingScreen .lds-spinner').fadeOut(400, function() {
      $(this).parent().fadeOut(200, function() {
        $('.loadingScreen').removeClass('loadingScreen')
      });
    });
  });
  // });


  $('.carousel').carousel({
    interval: 6000
  });

  // wow.js
  wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 200,
    mobile: false,
    live: true
  })
  wow.init();

  // nicescroll
  $("body").niceScroll({
    cursorcolor: "#fed136",
    cursorminheight: 200,
    horizrailenabled: false,
    cursorwidth: "10px"

  });

  $(".nav li").click(function() {
    $(this).addClass('wow bounceIn');

  });

  $(".nav li").on("mouseleave", function() {
    $(this).removeClass('wow bounceIn');
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