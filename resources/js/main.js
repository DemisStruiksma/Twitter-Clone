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

$('#preview').hide();

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  $('#preview').show();
  readURL(this);
});

