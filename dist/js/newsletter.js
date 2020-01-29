$(document).ready(function() {
  $('#newsletter-form').on('submit', function(e) {
    e.preventDefault();
    if ($("#newletter-form [name='your_email']").val() === '') {
      $("#newsletter-form [name='your_email']").css('border', '1px solid red');
    } else {
      var sendData = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: 'php/newsletter.php',
        data: sendData,
        success: function(data) {
          $('#newsletter .response-msg').text(data);
          $('#newsletter .response-msg').slideDown();
          $('#newsletter-form')
            .find('input[type=email]')
            .val('');
        }
      });
    }
  });
});
