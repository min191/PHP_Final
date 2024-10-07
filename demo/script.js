// JavaScript to handle form validation and toggling
document.addEventListener('DOMContentLoaded', function () {
    const loginButton = document.querySelector('#login-btn');
    const signUpButton = document.querySelector('#sign-up-btn');
    const loginForm = document.querySelector('.login-form');
    const signUpForm = document.querySelector('.sign-up-form');

    // Form validation function
    function validateForm(form) {
        const inputs = form.querySelectorAll('input');
        let isValid = true;
        
        inputs.forEach(input => {
            if (input.type !== 'checkbox' && input.value.trim() === '') {
                isValid = false;
                input.style.border = '2px solid #ff4f4f';
            } else {
                input.style.border = '';
            }
        });

        return isValid;
    }

    // Event listener for the Login form submission
    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();
        if (validateForm(loginForm)) {
            alert('Login successful!');
        } else {
            alert('Please fill in all fields correctly.');
        }
    });

    // Event listener for the Sign-Up form submission
    signUpForm.addEventListener('submit', function (event) {
        event.preventDefault();
        if (validateForm(signUpForm)) {
            const password = signUpForm.querySelector('#new-password').value;
            const repeatPassword = signUpForm.querySelector('#repeat-password').value;

            if (password !== repeatPassword) {
                alert('Passwords do not match.');
            } else {
                alert('Sign-Up successful!');
            }
        } else {
            alert('Please fill in all fields correctly.');
        }
    });

    // Toggle between Login and Sign-Up forms
    loginButton.addEventListener('click', () => {
        loginForm.style.display = 'block';
        signUpForm.style.display = 'none';
    });

    signUpButton.addEventListener('click', () => {
        loginForm.style.display = 'none';
        signUpForm.style.display = 'block';
    });
});
