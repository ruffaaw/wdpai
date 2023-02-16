document.addEventListener('DOMContentLoaded', function() {
    const deliveryInfo = document.querySelector('.delivery-information');
    const truckIcon = deliveryInfo.querySelector('#truck-icon i');
    const text = deliveryInfo.querySelector('.text');
    let position = 0;
    let direction = 1;

    function animateDelivery() {
        position += direction;
        deliveryInfo.style.transform = `translateX(${position}px)`;

        if (position === 50) {
            direction = -1;
            truckIcon.style.transform = 'scaleX(-1)';
            text.style.marginLeft = '-5px';
        } else if (position === -50) {
            direction = 1;
            truckIcon.style.transform = 'scaleX(1)';
            text.style.marginLeft = '0px';
        }

        window.requestAnimationFrame(animateDelivery);
    }

    animateDelivery();
});
