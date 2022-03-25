function submitFormContacto(form) {

  var sending = document.getElementById('sending_form')
  let formValidated = validateForm(form)

  if (formValidated) {
    sending.classList.add('active')
    verifyRecaptcha(form, recaptchaKeySite, 'validarFormulario' )
  }

}

// jquery.easing
jQuery(function() {
  jQuery('.btn_to').bind('click', function(event) {
    var $anchor = jQuery(this);
    jQuery('html, body').stop().animate({
        scrollTop: jQuery($anchor.attr('href')).offset().top - 100
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
});

// Validacion del Formulario
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// Verificar recaptcha de los formularios
function verifyRecaptcha(formName = null, key = null, action = null) {

  var errorsInFieldsFront = false

  // Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var form = document.getElementById(formName);

  // Loop over them and prevent submission
  if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    errorsInFieldsFront = true
  }

  form.classList.add('was-validated');

  if (!errorsInFieldsFront) {
    grecaptcha.ready(function() {
      grecaptcha.execute(key , {
        action: action
        }).then(function(token) {
        jQuery('#' + formName).prepend('<input type="hidden" name="token" value="' + token + '" >');
        jQuery('#' + formName).prepend('<input type="hidden" name="action" value="' + action + '" >');
        jQuery('#' + formName).submit();
      });
    });
  }
  
}

function validateForm(formName) {

  const form = document.getElementById(formName)
  const inputs = form.getElementsByTagName('input')
  const textarea = form.getElementsByTagName('textarea')[0]

  validForm = true

  textarea.classList.remove("invalid")

  if (textarea.value == "" ) {

    textarea.className += " invalid"
    validForm = false
    
  }

  for (i = 0; i < inputs.length; i++) {

    inputs[i].classList.remove("invalid")

    if (inputs[i].type === 'email') { // Si el input es de tipo email
      if (!this.validateEmail(inputs[i].value)) {
        inputs[i].className += " invalid"
        validForm = false
      }
    }

    if (inputs[i].value == "" ) {

      inputs[i].className += " invalid"
      validForm = false
      
    }

  }

  return validForm

}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email)
}