$(function() {
  "use strict";
  var val1 = true;
  var val2 = true;
  var val3 = true;

  function checkVal() {
    if (val1 === true || val2 === true || val3 === true) {
      // $('form').find('button').removeAttr('disabled');
      // $("form .button").attr('disabled', 'true');
      $("form .button").attr('disabled', true);
      $("form .button").css('background', '#efe1af');
      // $("form .button").css('', '#efe1af');
      console.log('error');
    } else {
      $("form .button").attr('disabled', false);
      $("form .button").css('background', '#fed136');
      $("form .button").removeAttr('title');
      console.log('no error');
    }
  }
  checkVal();


  $('form .user').keydown(function() {
    if ($(this).val().length <= 3 || $(this).val().length > 30) {

      $(this).css('border', '2px solid red');
      $(this).parent().find('.alert').fadeIn(100);
      val1 = true;

    } else {

      $(this).css('border', '2px solid green');
      $(this).parent().find('.alert').hide(100);
      val1 = false;

    }
    checkVal();
  });

  $('form .mail').keydown(function() {
    if ($(this).val().length < 3 || $(this).val().length > 60) {
      $(this).css('border', '2px solid red');
      $(this).parent().find('.alert').fadeIn(100);
      val2 = true;
    } else {
      $(this).css('border', '2px solid green');
      $(this).parent().find('.alert').hide(100);
      val2 = false;
    }
    checkVal();
  });

  $('form .subject').keydown(function() {
    if ($(this).val().length <= 3 || $(this).val().length > 30) {
      $(this).css('border', '2px solid red');
      $(this).parent().find('.alert').fadeIn(100);
    } else {
      $(this).css('border', '2px solid green');
      $(this).parent().find('.alert').hide(100);
    }
  });

  $('form .message').keydown(function() {
    if ($(this).val().length <= 10 || $(this).val().length > 300) {
      $(this).css('border', '2px solid red');
      $(this).parent().find('.alert').fadeIn(100);
      val3 = true;
    } else {
      $(this).css('border', '2px solid green');
      $(this).parent().find('.alert').hide(100);
      val3 = false;
    }
    checkVal();
  });

  $('.contact-form').submit(function(e) {
    if (val1 === true || val2 === true || val3 === true) {
      e.preventDefault();

    }

  });



});