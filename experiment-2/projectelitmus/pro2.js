// Get the login form and add an event listener to submit button
const form = document.querySelector('form');
form.addEventListener('submit', e => {
  e.preventDefault();
  const username = form.elements.username.value;
  const password = form.elements.password.value;
  // Validate the form fields
  if (username === '' || password === '') {
    alert('Please enter both username and password');
  } else {
    // If the form fields are valid, redirect the user to the treasure page
    window.location.href = 'treasure.html';
  }
});
