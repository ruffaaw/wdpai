const selectElement = document.querySelector('.sort');

selectElement.addEventListener('change', (event) => {
    const selectedOption = event.target.value;
    console.log('Wybrana opcja to:', selectedOption);
    // możesz tu wywołać funkcję sortującą na podstawie wybranej opcji
});