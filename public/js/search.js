// Pobieramy element input z wyszukiwarką
const searchInput = document.getElementById("search-input");

// Dodajemy event listener na zdarzenie "keydown" (wciskanie klawisza)
searchInput.addEventListener("keydown", function(event) {
    // Sprawdzamy, czy użytkownik nacisnął klawisz "Enter" (kod klawisza 13)
    if (event.keyCode === 13) {
        event.preventDefault(); // Zapobiegamy przeładowaniu strony (domyślna akcja)
        searchProducts(); // Wywołujemy funkcję wyszukiwania
    }
});