document.addEventListener('DOMContentLoaded', function() {
    const openPopupBtn = document.querySelector('.open-popup');
    const popup = document.querySelector('.popup');
    const closePopupBtn = document.querySelector('.close-popup');

    openPopupBtn.addEventListener('click', function() {
        popup.style.display = 'flex';
    });

    closePopupBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });
});
