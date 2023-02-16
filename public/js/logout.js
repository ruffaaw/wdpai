window.onload = function() {
    document.getElementById("profile-button").addEventListener("click", function() {
        document.querySelector(".profile-panel").classList.toggle("active");
    });
};