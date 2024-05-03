document.getElementById('form').addEventListener('submit', function (e) {
  console.log('Form Submitted');
  document.getElementById('form-success').classList.remove('show');
  document.getElementById('form-failed').classList.remove('show');
  e.preventDefault();
  var name = document.querySelector("[name='name']").value;
  var email = document.querySelector("[name='email']").value;
  var phone = document.querySelector("[name='phone']").value;
  var subject = document.querySelector("[name='subject']").value;
  var message = document.querySelector("[name='message']").value;
  var data = {
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
  if (!email || email === '') {
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
  fetch('/pssct/submit-form/', {
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
