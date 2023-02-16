window.onload = function() {
    const profileBtn = document.querySelector('#profile-btn');
    const logoutBtn = document.querySelector('#logout-btn');
    const profilePanel = document.querySelector('.profile-panel');

    profileBtn.addEventListener('click', () => {
        profilePanel.classList.toggle('active');
    });

    logoutBtn.addEventListener('click', () => {
    });

    document.addEventListener('click', (event) => {
        const isClickInsideProfilePanel = profilePanel.contains(event.target) || profileBtn.contains(event.target);
        if (!isClickInsideProfilePanel) {
            profilePanel.classList.remove('active');
        }
    });
}