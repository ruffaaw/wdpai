window.onload = function() {
    var emailInput = document.querySelector('input[name="email"]');
    var passwordInput = document.querySelector('input[name="password"]');

    passwordInput.addEventListener('focus', function() {
        passwordInput.removeAttribute('placeholder');
        emailInput.setAttribute('placeholder', 'Email');
    });

    passwordInput.addEventListener('blur', function() {
        passwordInput.setAttribute('placeholder', 'Password');
    });
};