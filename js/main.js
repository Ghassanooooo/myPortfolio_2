$(document).ready(function() {
  $(window).scroll(function() {
    if ($(".navbar-default").offset().top > 100) {
      $(".navbar-fixed-top").addClass('navScroll');
    } else {
      $(".navbar-fixed-top").removeClass('navScroll');
    }
  });

  $(".nav li a").click(function(e) {
    console.log($(this).data('scroll'));
    $("html, body").animate({
      scrollTop: $($(this).data('scroll')).offset().top
    }, 800)
    e.preventDefault();

  });
});