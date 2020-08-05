var maxLength = 255;
$('#tweet_body').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
  if (length == 0){
    $('#chars').css('color', '#FF0000');
  } else {
    $('#chars').css('color', '#000000');
  }
});

$('div.alert').not('.alert-important').delay(3000).fadeOut(350);