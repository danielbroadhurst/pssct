document.getElementById('form').addEventListener('submit', function (e) {
  document.getElementById('form-success').classList.remove('show');
  document.getElementById('form-failed').classList.remove('show');

  e.preventDefault();
  const { name, email, phone, subject, message, data } = validateForm();
  // if any of the fields are empty, return
  if (
    name === '' ||
    email === '' ||
    phone === '' ||
    subject === '' ||
    message === ''
  ) {
    return;
  }
  fetch('/submit-form/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response;
    })
    .then((response) => response.json())
    .then((data) => {
      console.log('Success:', data);
      if (data.success) {
        document.getElementById('form').reset();
        document.getElementById('form-success').classList.add('show');
      } else {
        document.getElementById('form-failed').classList.add('show');
      }
    })
    .catch((error) => {
      console.error('Error:', error);
      document.getElementById('form-failed').classList.add('show');
    });
});

// add event listener to remove error class when input is focused
document.querySelectorAll('input, textarea').forEach(function (input) {
  input.addEventListener('focusout', function () {
    validateForm();
  });
});

function validateForm() {
  const name = document.querySelector("[name='name']").value;
  const email = document.querySelector("[name='email']").value;
  const phone = document.querySelector("[name='phone']").value;
  const subject = document.querySelector("[name='subject']").value;
  const message = document.querySelector("[name='message']").value;
  const data = {
    name: name,
    email: email,
    phone: phone,
    subject: subject,
    message: message,
  };
  // validate each item and add error class to the form group
  if (!name || name === '') {
    document.getElementById('name').classList.add('error');
  } else {
    document.getElementById('name').classList.remove('error');
  }
  // validate email with regex
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email || email === '' || !email.match(emailRegex)) {
    document.getElementById('email').classList.add('error');
  } else {
    document.getElementById('email').classList.remove('error');
  }
  if (!phone || phone === '') {
    document.getElementById('phone').classList.add('error');
  } else {
    document.getElementById('phone').classList.remove('error');
  }
  if (!subject || subject === '') {
    document.getElementById('subject').classList.add('error');
  } else {
    document.getElementById('subject').classList.remove('error');
  }
  if (!message || message === '') {
    document.getElementById('message').classList.add('error');
  } else {
    document.getElementById('message').classList.remove('error');
  }
  return { name, email, phone, subject, message, data };
}
