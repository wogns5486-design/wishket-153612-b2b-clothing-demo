/* Contact Form — Validation + Formspree Submission */
(function () {
  // Replace YOUR_FORM_ID with actual Formspree form ID before deployment
  var FORMSPREE_URL = 'https://formspree.io/f/YOUR_FORM_ID';
  var IS_DEMO = FORMSPREE_URL.indexOf('YOUR_FORM_ID') !== -1;

  var form = document.getElementById('inquiryForm');
  var messageBox = document.getElementById('formMessage');

  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    clearErrors();
    hideMessage();

    if (!validate()) return;

    if (IS_DEMO) {
      showMessage('success', 'Demo mode — Your inquiry has been received! In production, this form will send an email directly to our sales team.');
      form.reset();
      return;
    }

    var submitBtn = form.querySelector('.form__submit');
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending...';

    var formData = new FormData(form);

    fetch(FORMSPREE_URL, {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(function (response) {
      if (response.ok) {
        showMessage('success', 'Thank you! Your inquiry has been sent successfully. We will get back to you within 24 hours.');
        form.reset();
      } else {
        return response.json().then(function (data) {
          throw new Error(data.error || 'Submission failed');
        });
      }
    })
    .catch(function () {
      showMessage('error', 'Sorry, there was an error sending your message. Please try again or email us directly at sales@koreatextile.com');
    })
    .finally(function () {
      submitBtn.disabled = false;
      submitBtn.textContent = 'Send Inquiry';
    });
  });

  function validate() {
    var valid = true;
    var required = form.querySelectorAll('[required]');

    required.forEach(function (field) {
      if (!field.value.trim()) {
        showError(field, 'This field is required');
        valid = false;
      }
    });

    var email = form.querySelector('[name="email"]');
    if (email && email.value.trim()) {
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email.value.trim())) {
        showError(email, 'Please enter a valid email address');
        valid = false;
      }
    }

    return valid;
  }

  function showError(field, message) {
    var group = field.closest('.form__group');
    if (!group) return;
    group.classList.add('form__group--error');
    var errorClass = field.tagName === 'TEXTAREA' ? 'form__textarea--error'
                   : field.tagName === 'SELECT' ? 'form__select--error'
                   : 'form__input--error';
    field.classList.add(errorClass);
    var errorEl = group.querySelector('.form__error');
    if (errorEl) {
      errorEl.textContent = message;
      errorEl.style.display = 'block';
    }
  }

  function clearErrors() {
    form.querySelectorAll('.form__group--error').forEach(function (g) {
      g.classList.remove('form__group--error');
    });
    form.querySelectorAll('.form__input--error, .form__select--error, .form__textarea--error').forEach(function (f) {
      f.classList.remove('form__input--error', 'form__select--error', 'form__textarea--error');
    });
    form.querySelectorAll('.form__error').forEach(function (e) {
      e.style.display = 'none';
    });
  }

  function showMessage(type, text) {
    if (!messageBox) return;
    messageBox.className = 'form__message form__message--' + type;
    messageBox.textContent = text;
    messageBox.style.display = 'block';
    messageBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function hideMessage() {
    if (messageBox) {
      messageBox.style.display = 'none';
      messageBox.className = 'form__message';
    }
  }

  // Live validation — clear error on input
  form.querySelectorAll('input, select, textarea').forEach(function (field) {
    field.addEventListener('input', function () {
      var group = field.closest('.form__group');
      if (group) group.classList.remove('form__group--error');
      field.classList.remove('form__input--error', 'form__select--error', 'form__textarea--error');
    });
  });
})();
