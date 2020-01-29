$(document).ready(function() {
  $('#request-form').on('submit', function(e) {
    e.preventDefault();
    if (
      $("#request-form [name='email']").val() === '' ||
      $("#request-form [name='full-name']").val() === ''
    ) {
      $("#request-form [name='email']").css('border', '1px solid red');
      $("#request-form [name='full-name']").css('border', '1px solid red');
    } else {
      var sendData = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: 'php/request.php',
        data: sendData,
        success: function(data) {
          $('#request .response-msg').text(data);
          $('#request .response-msg').slideDown();
          $('#request-form')
            .find(
              'input[type=text], input[type=email], textarea, input[type=tel], input[type=date]'
            )
            .val('');
        }
      });
    }
  });
});
