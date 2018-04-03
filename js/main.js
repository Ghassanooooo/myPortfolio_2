$(document).ready(function() {
  $(".nav li a").click(function(e) {
    console.log($(this).data('scroll'));
    $("html, body").animate({
      scrollTop: $($(this).data('scroll')).offset().top
    }, 1000)
    e.preventDefault();

  });
});