const registerBtn = document.querySelector('button[name="register"]');

registerBtn.addEventListener('mouseenter', () => {
    registerBtn.style.backgroundColor = '#D9D9D9';
    registerBtn.style.color = '#000000';
});
registerBtn.addEventListener('mouseleave', () => {
    registerBtn.style.backgroundColor = '';
    registerBtn.style.color = '';
});

