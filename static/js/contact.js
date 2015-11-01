function disableForm() {
  $('#contact-form').find('input, textarea, button').attr('disabled', 'disabled');
}

function showErrorMessage() {
 $('#error-message').show();
}

function hideErrorMessage() {
  $('#error-message').hide();
}

function showSuccessMessage() {
  $('#success-message').show();
}

function formIsValid(data) {
  var isValid = true;
  ['#name', '#email', '#message'].forEach(function(field) {
    if (Boolean($(field).val()) === false) {
      isValid = false;
    }
  });
  return isValid;
}

function submitForm() {
  hideErrorMessage();

  var data = $('#contact-form').serializeArray();

  if (formIsValid(data)) {
    $.ajax({
        url: "//forms.brace.io/adam.d.gibbons+marthagibbons@gmail.com", 
        method: "POST",
        data: data,
        dataType: "json",
        success: [showSuccessMessage, disableForm],
        error: showErrorMessage
    });
  } else {
    showErrorMessage();
  }
}