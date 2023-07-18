const email = document.getElementById('mail');
const emailError = document.querySelector('.emailError');
const pwd = document.getElementById('password');
const passwordError = document.querySelector('.passwordError');


email.addEventListener(
  "change", 
  (event) => {
    const nameRegex = /^[a-z0-9]/;
    const nameRegex1 = /^[a-z0-9]+@/;
    const emailDomain = ["gmail.com", "yahoo.com", "yahoo.fr", "hotmail.com", "hotmail.fr", "outlook.com", "mac.com"];

    if (email.value.match(nameRegex1)) {
      const nameDomain = email.value.split("@", 2);
      const name = nameDomain[0];
      const domain = nameDomain[1];

      if (name.match(nameRegex)) {
        for (var i = 0; i < emailDomain.length; i++) {
          if (domain === emailDomain[i]) {
            email.style.border="1.9px solid green";
            emailError.innerHTML = "";
            break;
          }
          else {
            // If is invalid, we show a custom error message
            email.style.border="1.9px solid red";
            emailError.innerHTML = "Please enter a public email address!";
            event.preventDefault();
          }
        }
      }
      else {
        // If is invalid, we show a custom error message
        email.style.border="1.9px solid red";
        emailError.innerHTML = "Please enter a valid email address!";
        event.preventDefault();
      }
    }
    else {
      // If is invalid, we show a custom error message
      email.style.border="1.9px solid red";
      emailError.innerHTML = "Please enter a valid email address!";
      event.preventDefault();
    }
  }
);

pwd.addEventListener(
  "input", 
  (event) => {
    const lowerCaseLetters = /(?=.*[a-z])/;
    const upperCaseLetters = /(?=.*[A-Z])/;
    const numbers = /(?=.*[0-9])/;
    const specialCharacters = /(?=.*[!@#\$%\^&\*])/;
    const pwdLength = /(?=.{8,25})/;
    
    if (pwd.value == "") {
      pwd.style.border="1.9px solid red";
      passwordError.innerHTML = "Please provide your password! This field can't be empty.";
      event.preventDefault();
    }
    if (pwd.value.match(lowerCaseLetters) && pwd.value.match(upperCaseLetters) && pwd.value.match(numbers) && pwd.value.match(specialCharacters) && pwd.value.match(pwdLength)) {
      pwd.style.border="1.9px solid green";
      passwordError.innerHTML = "";
    }
    else {
      pwd.style.border="1.9px solid red";
      passwordError.innerHTML = "Password must be minimum 8 characters and must contain lowercase letter, uppercase letter, number and special character!";
      event.preventDefault();
    }
  }
);

/* Hide or Show password */
const togglePassword = document.querySelector('#togglePassword');

togglePassword.addEventListener(
  "click", 
  (event) => {
  // toggle the type attribute
  const type = pwd.getAttribute('type');
  if (type === 'password') {
    pwd.setAttribute('type', 'text');
    // toggle the eye slash icon
    togglePassword.src = "../../assets/img/eye-slash.svg";
  }
  else if (type === 'text') {
    pwd.setAttribute('type', 'password');
    // toggle the eye icon
    togglePassword.src = "../../assets/img/eye.svg";
  } 
});

var loginForm  = document.getElementById('loginForm');
loginForm.addEventListener(
  "submit", 
  (event) => {
    if (!email.checkValidity()) {
      email.style.border="1.9px solid red";
      emailError.innerHTML = "Please enter a valid email address!";
      event.preventDefault();
    }
    if (!pwd.checkValidity()) {
      pwd.style.border="1.9px solid red";
      passwordError.innerHTML = "Password must be minimum 8 characters and must contain lowercase letter, uppercase letter, number and special character!";
      event.preventDefault();
    }
  }, false
);