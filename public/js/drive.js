document.addEventListener('DOMContentLoaded', function() {
    const truckIcon = document.getElementById("truck-icon");
    let position = 0;
    let direction = 1;

    function animateTruck() {
        position += direction;
        truckIcon.style.transform = `translateX(${position}px)`;

        if (position === 50) {
            direction = -1;
            truckIcon.style.transform = "scaleX(-1)";
        } else if (position === -50) {
            direction = 1;
            truckIcon.style.transform = "scaleX(1)";
        }

        window.requestAnimationFrame(animateTruck);
    }

    animateTruck();
});
