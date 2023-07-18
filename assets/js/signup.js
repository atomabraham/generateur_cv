// Create needed constants
const firstNameInput = document.querySelector('#firstName');
const fNameError = document.querySelector('.firstNameError');
const nameInput = document.querySelector('#name');
const nameError = document.querySelector('.nameError');
const emailInput = document.querySelector('#mail');
const emailError = document.querySelector('.emailError');
const pwdInput = document.querySelector('#password');
const passwordError = document.querySelector('.passwordError');
const confPwdInput = document.querySelector('#confPassword');
const confPasswordError = document.querySelector('.confPasswordError');
const atc = document.querySelector('#atc');
const btnSubmit = document.querySelector('#btnSignup');

// Event listener
firstNameInput.addEventListener(
  "input", 
  (event) => {
    if (firstNameInput.value == "") {
      firstNameInput.style.border="1.9px solid red";
      fNameError.innerHTML = "Please provide your first name! This field can't be empty.";
      event.preventDefault();
    }
    else if (firstNameInput.value.length < 4) {
      firstNameInput.style.border="1.9px solid red";
      fNameError.innerHTML = "Your first name must have at least 4 characters!";
      event.preventDefault();
    }
    else if (firstNameInput.value.length > 15) {
      firstNameInput.style.border="1.9px solid red";
      fNameError.innerHTML = "Your first name must be at most 15 characters!";
      event.preventDefault();
    }
    else {
      firstNameInput.style.border="1.9px solid green";
      fNameError.innerHTML = "";
    }
  }
);

nameInput.addEventListener(
  "input", 
  (event) => {
    if (nameInput.value == "") {
      nameInput.style.border="1.9px solid red";
      nameError.innerHTML = "Please provide your name! This field can't be empty.";
      event.preventDefault();
    }
    else if (nameInput.value.length < 4) {
      nameInput.style.border="1.9px solid red";
      nameError.innerHTML = "Your name must have at least 4 characters!";
      event.preventDefault();
    }
    else if (nameInput.value.length > 15) {
      nameInput.style.border="1.9px solid red";
      nameError.innerHTML = "Your name must be at most 15 characters!";
      event.preventDefault();
    }
    else {
      nameInput.style.border="1.9px solid green";
      nameError.innerHTML = "";
    }
  }
);

emailInput.addEventListener(
  "change", 
  (event) => {
    const nameRegex = /^[a-z0-9]/;
    const nameRegex1 = /^[a-z0-9]+@/;
    const emailDomain = ["gmail.com", "yahoo.com", "yahoo.fr", "hotmail.com", "hotmail.fr", "outlook.com", "mac.com"];

    if (emailInput.value.match(nameRegex1)) {
      const nameDomain = emailInput.value.split("@", 2);
      const name = nameDomain[0];
      const domain = nameDomain[1];

      if (name.match(nameRegex)) {
        for (var i = 0; i < emailDomain.length; i++) {
          if (domain === emailDomain[i]) {
            emailInput.style.border="1.9px solid green";
            emailError.innerHTML = "";
            break;
          }
          else {
            // If is invalid, we show a custom error message
            emailInput.style.border="1.9px solid red";
            emailError.innerHTML = "Please enter a public email address!";
            event.preventDefault();
          }
        }
      }
      else {
        // If is invalid, we show a custom error message
        emailInput.style.border="1.9px solid red";
        emailError.innerHTML = "Please enter a valid email address!";
        event.preventDefault();
      }
    }
    else {
      // If is invalid, we show a custom error message
      emailInput.style.border="1.9px solid red";
      emailError.innerHTML = "Please enter a valid email address!";
      event.preventDefault();
    }
  }
);


const lowerCaseLetters = /(?=.*[a-z])/;
const upperCaseLetters = /(?=.*[A-Z])/;
const numbers = /(?=.*[0-9])/;
const specialCharacters = /(?=.*[!@#\$%\^&\*?])/;
const pwdLength = /(?=.{8,25})/;
pwdInput.addEventListener(
  "input", 
  (event) => {
    if (pwdInput.value == "") {
      pwdInput.style.border="1.9px solid red";
      passwordError.innerHTML = "Please provide your password! This field can't be empty.";
      event.preventDefault();
    }
    if (pwdInput.value.match(lowerCaseLetters) && pwdInput.value.match(upperCaseLetters) && pwdInput.value.match(numbers) && pwdInput.value.match(specialCharacters) && pwdInput.value.match(pwdLength)) {
      pwdInput.style.border="1.9px solid green";
      passwordError.innerHTML = "";
    }
    else {
      pwdInput.style.border="1.9px solid red";
      passwordError.innerHTML = "Password must be minimum 8 characters and must contain lowercase letter, uppercase letter, number and special character!";
      event.preventDefault();
    }
  }
);

confPwdInput.addEventListener(
  "input", 
  (event) => {
    if (confPwdInput.value.match(lowerCaseLetters) && confPwdInput.value.match(upperCaseLetters) && confPwdInput.value.match(numbers) && confPwdInput.value.match(specialCharacters) && confPwdInput.value.match(pwdLength) && confPwdInput.value === pwdInput.value) {
      confPwdInput.style.border="1.9px solid green";
      confPasswordError.innerHTML = "";
    }
    else {
      confPwdInput.style.border="1.9px solid red";
      confPasswordError.innerHTML = "Passwords do not match!";
      event.preventDefault();
    }
  }
);

atc.addEventListener(
  "click", 
  (event) => {
    if (!nameInput.checkValidity()) {
      nameInput.style.border="1.9px solid red";
      atc.checked = false;
    }
    if (!firstNameInput.checkValidity()) {
      firstNameInput.style.border="1.9px solid red";
      atc.checked = false;
    }
    if (!emailInput.checkValidity()) {
      emailInput.style.border="1.9px solid red";
      atc.checked = false;
    }
    if (!pwdInput.checkValidity()) {
      pwdInput.style.border="1.9px solid red";
      atc.checked = false;
    }
    if (!confPwdInput.checkValidity()) {
      confPwdInput.style.border="1.9px solid red";
      atc.checked = false;
    }
    else {
      atc.checked = true;
      btnSubmit.disabled = !event.target.checked;
    }
  },
);

/* Hide or Show password */
const togglePassword = document.querySelector('#togglePassword');

togglePassword.addEventListener(
  "click", 
  (event) => {
  // toggle the type attribute
  const type = pwdInput.getAttribute('type');
  if (type === 'password') {
    pwdInput.setAttribute('type', 'text');
    // toggle the eye slash icon
    togglePassword.src = "../../assets/img/eye-slash.svg";
  }
  else if (type === 'text') {
    pwdInput.setAttribute('type', 'password');
    // toggle the eye icon
    togglePassword.src = "../../assets/img/eye.svg";
  } 
});

/* Hide or Show confirmation password */
const toggleConfPassword = document.querySelector('#toggleConfPassword');

toggleConfPassword.addEventListener(
  "click", 
  (event) => {
  // toggle the type attribute
  const type = confPwdInput.getAttribute('type');
  if (type === 'password') {
    confPwdInput.setAttribute('type', 'text');
    // toggle the eye slash icon
    toggleConfPassword.src = "../../assets/img/eye-slash.svg";
  }
  else if (type === 'text') {
    confPwdInput.setAttribute('type', 'password');
    // toggle the eye icon
    toggleConfPassword.src = "../../assets/img/eye.svg";
  } 
});

let signupForm  = document.querySelector('#signupForm');
signupForm.addEventListener(
  "submit", 
  (event) => {
    if (!nameInput.checkValidity()) {
      nameInput.style.border="1.9px solid red";
      nameError.innerHTML = "Your name must have at least 4 characters!";
      event.preventDefault();
    }
    if (!firstNameInput.checkValidity()) {
      firstNameInput.style.border="1.9px solid red";
      fNameError.innerHTML = "Your first name must have at least 4 characters!";
      event.preventDefault();
    }
    if (!emailInput.checkValidity()) {
      emailInput.style.border="1.9px solid red";
      //emailInput.style.backgroundColor="#FDD";
      emailError.innerHTML = "Please enter a valid email address!";
      event.preventDefault();
    }
    if (!pwdInput.checkValidity()) {
      pwdInput.style.border="1.9px solid red";
      passwordError.innerHTML = "Password must be minimum 8 characters and must contain lowercase letter, uppercase letter, number and special character!";
      event.preventDefault();
    }
    if (!confPwdInput.checkValidity()) {
      confPwdInput.style.border="1.9px solid red";
      confPasswordError.innerHTML = "Passwords do not match!";
      event.preventDefault();
    }
  }, false
);