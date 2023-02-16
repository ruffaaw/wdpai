const loginBtn = document.querySelector('button[name="login"]');
const registerBtn = document.querySelector('button[name="register"]');

loginBtn.addEventListener('mouseenter', () => {
    loginBtn.style.backgroundColor = '#D9D9D9';
    loginBtn.style.color = '#000000';
});
loginBtn.addEventListener('mouseleave', () => {
    loginBtn.style.backgroundColor = '';
    loginBtn.style.color = '';
});

registerBtn.addEventListener('mouseenter', () => {
    registerBtn.style.backgroundColor = '#D9D9D9';
    registerBtn.style.color = '#000000';
});
registerBtn.addEventListener('mouseleave', () => {
    registerBtn.style.backgroundColor = '';
    registerBtn.style.color = '';
});

